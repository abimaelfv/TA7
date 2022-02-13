@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulario para registrar personas fallecidas por covid - 19</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    todo los campos con (*) son obligatorios

                    <form action="{{ route('fallecidos.store') }}" method="POST">
                        
                        @csrf 
                       <div class="row">
                           <div class="col-md-6">
                                <label class="form-label">uuid</label>
                                <input type="text" class="form-control" name="uuid" autocomplete="off">
                           </div>
                           <div class="col-md-6">
                                <label class="form-label">f_corte</label>
                                <input type="date" class="form-control" name="f_corte" autocomplete="off">
                           </div>
                           <div class="col-md-6">
                                <label class="form-label">f_fallecimiento</label>
                                <input type="date" class="form-control" name="f_fallecimiento" autocomplete="off">
                           </div>
                           <div class="col-md-6">
                                <label class="form-label">edad</label>
                                <input type="text" class="form-control" name="edad" autocomplete="off">
                           </div>
                           <div class="col-md-6">
                                <label class="form-label">sexo</label>
                                <select type="text" class="form-select" name="sexo" autocomplete="off">
                                    <option value="" hidden>Seleccione...</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                           </div>
                           <div class="col-md-6">
                                <label class="form-label">clasificacion_defuncion</label>
                                <input type="text" class="form-control" name="clasificacion_defuncion" autocomplete="off">
                           </div>
                           <div class="col-md-6">
                                <label class="form-label">departamento</label>
                                <input type="text" class="form-control" name="departamento" autocomplete="off">
                           </div>
                           <div class="col-md-6">
                                <label class="form-label">provincia</label>
                                <input type="text" class="form-control" name="provincia" autocomplete="off">
                           </div>
                           <div class="col-md-6">
                                <label class="form-label">distrito</label>
                                <input type="text" class="form-control" name="distrito" autocomplete="off">
                           </div>
                           <div class="col-md-6">
                                <label class="form-label">ubigeo</label>
                                <input type="text" class="form-control" name="ubigeo" autocomplete="off">
                           </div>
                       </div>
                       <br>
                       <div class="row">
                           <div class="col-md-12">
                               <div class="float-end">
                                <button type="submit" class="btn btn-success">Guardar</button>
                               </div>
                           </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection