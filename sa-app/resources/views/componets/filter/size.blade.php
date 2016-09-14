<div class="row size_list">
    <div class="col-xs-12">
        <h3>
            Sizes
        </h3>
        @foreach ($sizes->chunk($sizes->count()/2) as $size)
        <ul class="list-unstyled">
            @foreach($size as $row)
            <li>
                <div class="checkbox">
                    <input {{ (in_array($row->id,Request::input('size',array()))?"checked":"") }}  name="size[]" value="{{$row->id}}" id="size_item_{{$row->id}}" type="checkbox">
                        <label for="size_item_{{$row->id}}">
                            {{$row->title}}
                        </label>
                    </input>
                </div>
            </li>
            @endforeach
        </ul>
        @endforeach
    </div>
</div>
