
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_marca') }}
            {{ Form::text('Nombre_marca', $marca->Nombre_marca, ['class' => 'form-control' . ($errors->has('Nombre_marca') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Marca']) }}
            {!! $errors->first('Nombre_marca', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>