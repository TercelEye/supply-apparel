<div class="row color_list">
                                    <div class="col-xs-12">
                                        <h3>Colors</h3>
                                         @foreach ($colours->chunk($colours->count()/2) as $colour)
                                        <ul class="list-unstyled">
                                         @foreach($colour as $row)
                                            <li>
                                                <div class="checkbox">
                                                    <input {{ (in_array($row->id,Request::input('colour',array()))?"checked":"") }} name="colour[]" value="{{$row->id}}" id="color_item_{{$row->id}}" type="checkbox">
                                                    <label for="color_item_{{$row->id}}" class="color_item_{{$row->id}} {{ (in_array($row->id,Request::input('colour',array()))?"active":"") }}">{{$row->name}}</label>
                                                </div>
                                            </li>
                                            <style type="text/css">.color_item_{{$row->id}}:before {
                                                background: {{$row->hexa_code}} !important;
                                                }</style>
                                        @endforeach

                                        </ul>
                                        @endforeach
                                           
                                    </div>
                                </div>