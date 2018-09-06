@extends('components.app')
@section('content')

@include('components.menulateral')

<div class="areacontenido col-lg-g" ng-controller="FichaCtrl" ng-cloak>
    <div class="caja_modal" ng-if="mas_obj">
        <div id="area_masID">
            <div class="header_area">
                <h1>Ficha detallada del alumno Alejandro</h1>
                <div class="areacerrar">
                    <a ng-click="cerrar_masID()" class="icocerrar">X</a>
                </div>
            </div>

            <div class="contenido_area">
                <div class="col-sm-12 col-xs-12 seccion_contenido dnone_phone">
                    <div class="col-sm-12 col-xs-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Curso</th>
                                    <th>Nota</th>
                                    <th>Catedratico</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Software</td>
                                    <td>80</td>
                                    <td>José López</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container_cabecera">
            <h1>Fichas de Alumnos</h1>
        </div>

        <div class="container_dash">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Código</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Alejandro Sanchez</td>
                        <td>1804002004</td>
                        <td>
                            <div class="cont_btnoptions">
                                <button type="button" class="btn btn-outline-dark" ng-click="verFicha()">Detalles</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@push('scripts')
    <script src="/js/controller/FichaCtrl.js"></script>
@endpush
