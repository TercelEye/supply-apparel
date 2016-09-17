        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
                    <ul class="list-inline account_menu">
                        <li>
                            <div class="icon"></div>
                        </li>
                        <li class="{{ (Request::is('seller')?"active":"")}}"><a href="{{url('seller')}}"><i class="boutique"></i><span>Boutique</span></a></li>
                        <li class="{{ (Request::is('my-order')?"active":"")}}"><a href="{{url('my-order')}}"><i class="orders"></i><span>Orders</span></a></li>
                        <li class="{{ (Request::is('my-messages')?"active":"")}}"><a href="{{url('my-messages')}}"><i class="messages"></i><span>Messages</span></a></li>
                        <li class="{{ (Request::is('my-account')?"active":"")}}"><a href="{{url('my-account')}}">><i class="settings"></i><span>Settings</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
