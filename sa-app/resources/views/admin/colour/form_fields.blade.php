

    <div class="form-group">
      {!! Form::label('title', 'Name') !!}
      {!! Form::text('name', $colour->name, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('row_order', 'Hexa Code') !!}
      {!! Form::text('hexa_code', $colour->hexa_code, ['class' => 'form-control']) !!}
    </div>

