@extends('layouts.app')
@section('content')
<main class="add_blog_post">
<section class="section_1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                    <div class="row">
                        <div class="container">
                            <div class="row">

                            @include('shared.errors')
                                <form action="" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <a href="{{url('seller')}}" class="back">
                                        <i class="fa fa-angle-left"></i>
                                        <span>Back to my account</span>
                                    </a>
                                    <div class="form-group name_block">
                                        <h3>LOOKBOOK GENDER</h3>
                                        <select name="product_type_id" class="form-control" style="max-width:380px;">
                                            @foreach($product_type as $row )
                                                <option {{($row->id == $lookbook->product_type_id?"selected":"")}} value="{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group name_block">
                                        <h3>GIVE YOUR LOOK BOOK A NAME</h3>
                                        <input type="text" value="{{$lookbook->title or ''}}" name="title" id="name"/>
                                    </div>
                                    <div class="form-group description_block">
                                        <h3>ENTER A DESCRIPTION FOR YOUR LOOK BOOK (300
                                            characters)</h3>
                                        <textarea id="editor1" name="text" rows="10" cols="80">{{$lookbook->text or ''}}</textarea>
                                    </div>


                                   <div class="form-group file_block">
                                        <h3>Upload Look Book</h3>
                                        <div class="file_input">
                                            <label title="Upload photo" for="photo"><i></i></label>
                                            <input type="file" name="pdf" value="ss"  id="photo">
                                        </div>
                                    </div>
                                    <div class="form-group file_block">
                                        <h3>Upload Look Thumbnail</h3>
                                        <div class="file_input">
                                            <label title="Upload photo" for="image"><i></i></label>
                                            <input type="file" name="image" value="ss"  id="image">
                                        </div>

                                        @if($lookbook->image!="")
                                            <img src="{{url($lookbook->image)}}" style="max-height:150px;">
                                        @endif
                                    </div>

                                    <div class="buttons_block">
                                <button type="submit" class="btn_pusblish" name="publish" value="Publish">Publish</button>
                                <button type="submit" class="btn_add_publish" name="publish_add" value="Publish">Publish & Add Another Blog Post</button>
                                     
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
</main>
<script src="<?=asset('components/editor')?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        //$(".textarea").wysihtml5();
      });
    </script>
@endsection