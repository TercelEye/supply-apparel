@foreach($lookbooks as $row)
<div class="col-md-4 col-sm-6">
    <div class="look_item">
      <a href="{{url('lookbook/'.$row->id)}}">
        <div class="picture_block" style="background-image:url('{{url($row->image)}}');">
        </div>
      
        <div class="name_block" style="padding:20px; color:white;">
            
                <i class="item_icon">
                </i>
                <span>
                    {{$row->title}}
                </span>
           
        </div>
         </a>
    </div>
</div>
@endforeach