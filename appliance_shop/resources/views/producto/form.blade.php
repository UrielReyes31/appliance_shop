<div class="box box-info padding-1">
    <div class="box-body">
        

        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('Precio', $producto->Precio, ['class' => 'form-control' . ($errors->has('Precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('Precio', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('Nombre_producto') }}
            {{ Form::text('Nombre_producto', $producto->Nombre_producto, ['class' => 'form-control' . ($errors->has('Nombre_producto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Producto']) }}
            {!! $errors->first('Nombre_producto', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('Modelo', $producto->Modelo, ['class' => 'form-control' . ($errors->has('Modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('Modelo', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('Categoria') }}
            {{ Form::select('idCategoria_fk',$categorias, $producto->idCategoria_fk, ['class' => 'form-control' . ($errors->has('idCategoria_fk') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('idCategoria_fk', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::select('idMarca_fk',$marcas, $producto->idMarca_fk, ['class' => 'form-control' . ($errors->has('idMarca_fk') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('idMarca_fk', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div>
            <label for="Imagen"></label>
            <img src="{{ asset('storage').'/'.$producto->imagen }}" width="300px">
            <input type="file" name="imagen" value = ""id="imagen">
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>