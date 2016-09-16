
@foreach($shop as $row)
<div class="col-xs-12">
    <div class="boutique_item">
        <div class="picture_block" style="    background-image: url({{url($row->cover_image)}});">
        </div>
        <div class="name_block">
            <a href="{{url('store/'.$row->shop_slug)}}">
                <i class="item_icon">
                </i>
                <span>
                   {{$row->shop_name}}
                </span>
            </a>
        </div>
    </div>
</div>
@endforeach