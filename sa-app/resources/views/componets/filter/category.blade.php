<div class="row product_list">
    <div class="col-xs-12">
        <h3>
            Products
        </h3>
        <ul class="list-unstyled">
            @foreach($categories as $row)
            <li>
                <div class="checkbox">
                    <input {{ (in_array($row->id,Request::input('category',array()))?"checked":"") }} name="category[]" value="{{$row->id}}" id="product_item_{{$row->id}}" type="checkbox">
                        <label for="product_item_{{$row->id}}">
                            {{ $row->title }}
                        </label>
                    </input>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
