	<div class="form-group">
      {!! Form::label('parent_id', 'Parent ID') !!}
      {!! Form::select('parent_id', $parent_categories,$category->parent_id ,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('title', 'Title') !!}
      {!! Form::text('title', $category->title, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('row_order', 'Order') !!}
      {!! Form::text('row_order', $category->row_order, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      <input type="hidden" name="status" value="0">
      {!! Form::label('status', 'Status') !!}
      {!! Form::checkbox('status','1',$category->status,['class' => 'checkbox']) !!}
    </div>