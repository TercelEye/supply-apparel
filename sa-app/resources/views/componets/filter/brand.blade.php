<div class="row brand_list">
    <div class="col-xs-12">
        <h3>
            Brands
        </h3>
        <ul class="list-unstyled">
            @foreach($brands as $row)
            <li>
                <div class="checkbox">
                    <input {{ (in_array($row->id,Request::input('brand',array()))?"checked":"") }}  name="brand[]" value="{{$row->id}}" id="brand_item_{{$row->id}}" type="checkbox">
                        <label for="brand_item_{{$row->id}}">
                            {{$row->name}}
                        </label>
                    </input>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>