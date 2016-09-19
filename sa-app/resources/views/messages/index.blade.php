@extends('layouts.app')

@section('content')

<main class="boutique_messages">
    <section class="section_1 owner_menu">
       @include('layouts.seller_navigation')
    </section>
    <section class="section_2">
        <div class="container">
            <div class="row">
                <div class="chat_block">
                    <div class="contact_list">
                        <div class="search_block">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="search_icon"></i></div>
                                <input type="text" class="form-control" placeholder="Search" name="q">
                            </div>
                        </div>
                        <div class="contacts">
                            @include('messages.threads')
                        </div>
                    </div>
                    <div class="expand_menu"><i class="fa fa-chevron-left"></i></div>
                    <div class="chat_container empty">
                        <!-- if not opened any chat, add class empty  and delete chat_text block -->
                        <div class="supply"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@stop