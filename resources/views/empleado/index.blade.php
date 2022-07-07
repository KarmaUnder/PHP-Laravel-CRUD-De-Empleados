@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('mensaje'))
<div class="alert alert-success" role="alert">
    {{{Session::get('mensaje')}}}
    
</div>
@endif


<br/>
<a href="{{url('empleado/create')}}" class="btn btn-success">Registrar nuevo empleado</a>
<br/>
<br/>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Fotografia</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado )
        <tr>
            <td><br/><br/>{{$empleado->id}}</td>
            <td>
            
            <img class="img-thumbnail img-fluid" width="100" src="{{asset('storage').'/'.$empleado->Foto}}" alt="">
        
            </td>
            <td><br/><br/>{{$empleado->Nombre}}</td>
            <td><br/><br/>{{$empleado->Apellido}}</td>
            <td><br/><br/>{{$empleado->Correo}}</td>
            <td><br/>
                <a href="{{url('/empleado/'.$empleado->id.'/edit')}}", class="btn btn-warning">
                    Editar
                </a> 
                |
            <form action="{{url('empleado/'.$empleado->id)}}" class="d-inline" method="post">
                @csrf
                {{method_field('DELETE')}}
            <input type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">

            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!!$empleados->links()!!}
</div>
@endsection