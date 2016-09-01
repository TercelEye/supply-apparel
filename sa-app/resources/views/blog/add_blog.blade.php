@extends('layouts.app')
@section('content')
<main class="add_blog_post">
<section class="section_1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form action="" method="post">
                    <div class="row">
                        <div class="container">
                            <div class="row">

                            @include('shared.errors')
                                <form action="" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <a href="owner_boutique_page_empty.html" class="back">
                                        <i class="fa fa-angle-left"></i>
                                        <span>Back to my account</span>
                                    </a>
                                    <div class="form-group name_block">
                                        <h3>GIVE YOUR BLOG POST A TITLE</h3>
                                        <input type="text" name="title" id="name"/>
                                    </div>
                                    <div class="form-group description_block">
                                        <h3>WRITE YOUR BLOG POST</h3>
                                        <textarea id="editor1" name="text" rows="10" cols="80"></textarea>
                                    </div>
                                    <div class="form-group file_blockpp">
                                        <h3>UPLOAD A PHOTO FOR YOUR BLOG POST (minimum size 504 x 504 px)</h3>
                                        <div class="file_input">
                                            <label title="Upload photo" for="photo"><i></i></label>
                                            <input type="file" name="photo" value="ss"  id="photo">
                                        </div>
                                    </div>
                                    <div class="buttons_block">
                                        <button type="submit" class="btn_pusblish" value="Publish">Publish</button>
                                        <a href="add_blog_post.html" class="btn_add_publish">Publish & Add Another Blog Post</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
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