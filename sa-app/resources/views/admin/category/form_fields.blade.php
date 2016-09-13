  <div class="form-group">
      {!! Form::label('product_type_id', 'Type') !!}
      {!! Form::select('product_type_id', $product_types,$category->product_type_id ,['class' => 'form-control','onClick'=>'load_category(this.value)']) !!}
    </div>
	<div class="form-group">
      {!! Form::label('parent_id', 'Parent Category') !!}
      {!! Form::select('parent_id', $parent_categories,$category->parent_id ,['class' => 'form-control select-category']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('title', 'Title') !!}
      {!! Form::text('title', $category->title, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('row_order', 'Order') !!}
      {!! Form::number('row_order', ($category->row_order==""?0:$category->row_order), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      <input type="hidden" name="status" value="0">
      {!! Form::label('status', 'Status') !!}
      {!! Form::checkbox('status','1',($category->status==""?"1":$category->status),['class' => 'checkbox']) !!}
    </div>


    