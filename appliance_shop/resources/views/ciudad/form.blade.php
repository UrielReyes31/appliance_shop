<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_ciudad') }}
            {{ Form::text('Nombre_ciudad', $ciudad->Nombre_ciudad, ['class' => 'form-control' . ($errors->has('Nombre_ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Ciudad']) }}
            {!! $errors->first('Nombre_ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>