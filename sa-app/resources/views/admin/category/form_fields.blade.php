	<div class="form-group">
      {!! Form::label('title', 'Title') !!}
      {!! Form::text('title', $category->title, ['class' => 'form-control']) !!}
    </div>

	<div class="form-group">
      {!! Form::label('parent_id', 'Parent ID') !!}
      {!! Form::select('parent_id', $parent_categories,$category->parent_id ,['class' => 'form-control']) !!}
    </div>