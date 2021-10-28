@extends('layouts.base')
@section('content')
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-30">
                <h2 class="text-center mb-5" > LISTADO DE USUARIOS</h2>
        
           
            <table class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>COMPANIA</th>
                    
                 </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                       <td>{{ $user->nombre }}</td>
                       <td>{{ $user->email }}</td>
                       <td>{{ $user->telefono }}</td>
                       <td>{{ $user->compania }}</td>
                        

                     </tr>
                    @endforeach

                </tbody>

            </table>
            {{ $users->links() }}

        </div>

    </div>
 </div>
 @endsection