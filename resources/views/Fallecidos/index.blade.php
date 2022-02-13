@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Fallecidos covid - 19</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-success btn-sm" href="{{route('fallecidos.create')}}">Create</a>
                            <a class="btn btn-primary btn-sm" href="">Importar datos</a>
                        </div>
                        <div class="col-md-6">
                            
                        </div>

                        <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">uuid</th>
                                    <th scope="col">f_corte</th>
                                    <th scope="col">f_fallecimiento</th>
                                    <th scope="col">edad</th>
                                    <th scope="col">sexo</th>
                                    <th scope="col">clasificacion_defuncion</th>
                                    <th scope="col">departamento</th>
                                    <th scope="col">provincia</th>
                                    <th scope="col">distrito</th>
                                    <th scope="col">ubigeo</th>
                                    <th class="text-center" scope="col">funciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fallecidos as $key => $fallecido)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $fallecido->uuid }}</td>
                                        <td>{{ $fallecido->f_corte }}</td>
                                        <td>{{ $fallecido->f_fallecimiento }}</td>
                                        <td>{{ $fallecido->edad }}</td>
                                        <td>{{ $fallecido->sexo }}</td>
                                        <td>{{ $fallecido->clasificacion_defuncion }}</td>
                                        <td>{{ $fallecido->departamento }}</td>
                                        <td>{{ $fallecido->provincia }}</td>
                                        <td>{{ $fallecido->distrito }}</td>
                                        <td>{{ $fallecido->ubigeo }}</td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-secondary btn-sm">ver</a>
                                            <a href="{{ route('fallecidos.edit',$fallecido->id)}}" class="btn btn-warning btn-sm">editar</a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$fallecido->id}}">Eliminar</button>
                                        </td>
                                    </tr>
                                    @include('fallecidos.delete')
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
