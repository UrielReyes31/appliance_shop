

<div class="form-floating mb-3">
    <input type="text" class="form-control" name ="Sucursal" placeholder="Sucursal"  value = "{{ isset($tienda->Sucursal)? $tienda->Sucursal:'' }}" id ="Sucursal">
</div>
<input class ="btn btn-success"type="submit" value ="Guardar Datos">
<a class = "btn btn-primary" href="{{ url('tienda/') }}"> Volver a lista de tiendas</a><br>
