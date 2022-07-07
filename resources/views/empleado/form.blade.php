

<h1>{{$modo}} empleado</h1>
<br/>

@if(count($errors)>0)
    
    <div class="alert alert-danger" role="alert">
      <ul>
          @foreach($errors->all() as $error)
      <li> {{$error}}</li>
          @endforeach
        </ul>    
    </div>
@endif

<div class="form-group">
<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre"> <br/>
</div>
<div class="form-group">
<label for="Apellido">Apellido</label>
<input type="text" class="form-control" name="Apellido" value="{{isset($empleado->Apellido)?$empleado->Apellido:old('Apellido')}}" id="Apellido"><br/>
</div>
<div class="form-group">
<label for="Correo">Correo</label>
<input type="text" class="form-control" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" id="Correo"><br/>
</div>
<div class="form-group">
<label for="Foto">Foto</label>
<br/>
@if(isset($empleado->Foto))
<img class="img-thumbnail img-fluid" width="100" src="{{asset('storage').'/'.$empleado->Foto}}" alt="">
<br/>
<br/>
@endif
<input class="form-control" type="file" name="Foto" value="" id="Foto"><br/>
</div>

<input class ="btn btn-success" type="submit" value="{{$modo}}">

<a class="btn btn-primary" href="{{url('empleado/')}}">Regresar Main Page</a>
