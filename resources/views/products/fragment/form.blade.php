<div class="form-group">

    {{ Form::label('name', 'Nombre del producto') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}

</div>

<div class="form-group">

    {{ Form::label('short', 'Pequeña descripción') }}
    {{ Form::text('short', null, ['class' => 'form-control']) }}

</div>

<div class="form-group">

    {{ Form::label('description', 'Descripción detallada') }}
    {{ Form::text('description', null, ['class' => 'form-control']) }}

</div>

<div class="form-group">

    {{ Form::submit('ENVIAR', ['class' => 'btn btn-primary']) }}

</div>