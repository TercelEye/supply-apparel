<!-- if user has messages add attribute data-count on user_photo with number of messages -->

  @if (Session::has('error_message'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error_message') }}
        </div>
    @endif
    @if($threads->count() > 0)
        @foreach($threads as $thread)

{{-- item online,away,disturb --}}
        <div class="item notifications {{($thread_id == $thread->id?"active":"")}}">
        <a href="{{url('messages/' . $thread->id)}}">
    <div class="user_photo" data-count="99">
    </div>
    {{-- <h4 class="media-heading">{!! link_to('messages/' . $thread->id, $thread->subject) !!}</h4> --}}
    <div class="user_name" style="margin-top: 3px;">
       {{ $thread->participantsString(Auth::id()) }} <br><small style="color:gray;font-size:10px;">{{$thread->subject}}</small>
    </div>
        @if($thread->isUnread(Auth::user()->id))
            <div class="notifications_block"><div><i class="glyphicon glyphicon-bell"></i></div></div>
        @endif   
    </a>
</div>


        @endforeach
    @else
        {{-- <p>Sorry, no messages.</p> --}}
    @endif


