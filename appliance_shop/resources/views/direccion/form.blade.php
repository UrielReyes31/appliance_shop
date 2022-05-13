<div class="box box-info padding-1">
    <div class="box-body">
       
        <div class="form-group">
            {{ Form::label('codigo_postal') }}
            {{ Form::text('codigo_postal', $direccion->codigo_postal, ['class' => 'form-control' . ($errors->has('codigo_postal') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Postal']) }}
            {!! $errors->first('codigo_postal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Colonia') }}
            {{ Form::select('Colonia_idColonia', $colonias, $direccion->Colonia_idColonia, ['class' => 'form-control' . ($errors->has('Colonia_idColonia') ? ' is-invalid' : ''), 'placeholder' => 'Colonia']) }}
            {!! $errors->first('Colonia_idColonia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::select('Ciudad_idCiudad',$ciudades, $direccion->Ciudad_idCiudad, ['class' => 'form-control' . ($errors->has('Ciudad_idCiudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('Ciudad_idCiudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>