@extends('layouts.app')

@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">Editar Usuario</div>

    <div class="panel-body">

        @if (session('notification'))
            <div class = "alert alert-success">
                {{ session('notification') }}
            </div>
        @endif 

        @if (count($errors) > 0)
            <div class = "alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif 

        <form action="" method="POST">
            {{ csrf_field() }}

           <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control" readonly value="{{ old('email',$user->email) }}">
            </div>
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" name="name" class="form-control"  value="{{ old('name',$user->name) }}">
            </div>
            <div class="form-group">
                <label for="password">Contraseña <em>Ingresar solo si desea modificar</em></label>
                <input type="text" name="password" class="form-control"  value="{{ old('password') }}">
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Guardar Usuario</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Proyecto</th>
                    <th>Nivel</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Proyecto A</td>
                    <td>N1</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a href="" class="btn btn-sm btn-danger" title="Dar de baja">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
            
@endsection
