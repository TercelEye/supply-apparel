<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;
use App\Product;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Validator;
class MessagesController extends Controller
{

    private function get_threads($currentUserId){
        return Thread::forUser($currentUserId)->latest('updated_at')->get();
    }
    /**
     * Show all of the message threads to the user.
     *
     * @return mixed
     */
    public function index()
    {
        $currentUserId = Auth::user()->id;
        // All threads, ignore deleted/archived participants
        //$threads = Thread::getAllLatest()->get();
        // All threads that user is participating in
        $threads = $this->get_threads($currentUserId);
        // All threads that user is participating in, with new messages
        // $threads = Thread::forUserWithNewMessages($currentUserId)->latest('updated_at')->get();
         $thread_id = 0;
        return view('messages.index', compact('threads', 'thread_id'));
    }
    /**
     * Shows a message thread.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        try {
            $thread = Thread::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');
            return redirect('messages');
        }
        // show current user in list if not a current participant
        // $users = User::whereNotIn('id', $thread->participantsUserIds())->get();
        // don't show the current user in list
        $userId = Auth::user()->id;
        //validate user 
        try {
            $thread->getParticipantFromUser($userId);
        } catch (ModelNotFoundException $e) {
              return redirect('messages');
        }
       //$users = User::whereNotIn('id', $thread->participantsUserIds($userId))->get();
        $users = User::whereNotIn('id', $thread->participantsUserIds($userId))->get();
       // dd($users);
        $thread->markAsRead($userId);
        $threads = $this->get_threads($userId);
        $thread_id = $id;
        return view('messages.chat', compact('threads','thread','thread_id', 'users'));
    }
    /**
     * Creates a new message thread.
     *
     * @return mixed
     */
    public function create()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        return view('messenger.create', compact('users'));
    }
    /**
     * Stores a new message thread.
     *
     * @return mixed
     */
    public function store(Request $request,\App\Product $product)
    {
        $data['status']  = false;
        $seller_id=$product->shop->owner->id;

        if(Auth::guest()){
            $data['error'][] = "You must login to contact seller";
            return \Response::json($data, 422); // Status code here
        }
        if($seller_id == Auth::user()->id){
            $data['error'][] = "You can't send messages to your self ";
            return \Response::json($data, 422); // Status code here
        }
      
         $validator = Validator::make($request->all(), [
            'subject'   => 'required:min:4',
            'message' => 'required|min:10',
        ]);
        if ($validator->fails()) {
            //validation error
            $data['error'] = $validator->errors()->all();
            return \Response::json($data, 422); // Status code here
        }
      

       // $input = Input::all();
        $thread = Thread::create(
            [
                'subject' => $request->subject,
            ]
        );
        // Message
        Message::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::user()->id,
                'body'      => $request->message,
            ]
        );
        // Sender
        Participant::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::user()->id,
                'last_read' => new Carbon,
            ]
        );
        // Recipients
        $thread->addParticipant([$seller_id]);

        $data['message'] = "Your message send successfully";
        $data['status']  = true;
        return \Response::json($data, 200); // Status code here

        // return redirect('messages');
    }
    /**
     * Adds a new message to a current thread.
     *
     * @param $id
     * @return mixed
     */
    public function update($id)
    {
        try {
            $thread = Thread::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');
            return redirect('messages');
        }
        $thread->activateAllParticipants();
        // Message
        Message::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::id(),
                'body'      => Input::get('message'),
            ]
        );
        // Add replier as a participant
        $participant = Participant::firstOrCreate(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::user()->id,
            ]
        );
        $participant->last_read = new Carbon;
        $participant->save();
        // Recipients
        if (Input::has('recipients')) {
            $thread->addParticipant(Input::get('recipients'));
        }
        return redirect('messages/' . $id);
    }
}