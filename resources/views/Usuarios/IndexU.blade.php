@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Listado de Usuarios'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Usuarios</h4>
                                    <p class="card-category">Usuarios registrados</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">

                                            <a href="{{ route('Usuarios.create') }}" class="btn btn-sm btn-primary">Añadir
                                                usuario</a>

                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Correo</th>
                                                <th>Fecha de creación</th>
                                                <th class="text-right">Acciones</th>

                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="td-actions text-right">

                                                        <a href="#"class="btn btn-info"><i class="material-icons">person</i></a>
                                                        <a href="#" class="btn btn-warning"><i class="material-icons">edit</i></a>

                                                        <form action="#" method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit" rel="toltip">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </form>

                                                    </td>

                                                </tr>

                                            </tbody>



                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
