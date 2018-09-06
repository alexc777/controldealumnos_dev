@extends('components.app')
@section('content')

@include('components.menulateral')

<div class="areacontenido col-lg-g" ng-controller="CursosCtrl" ng-cloak>

    {{-- Crear curso --}}
        <div class="caja_modal dnone_phone" ng-if="fondoModal"></div>

        <div id="modalAyuda" ng-if="verCurso">
            <div class="head_ayuda">
                <p>Crear Curso</p>
                <div class="icocerrarc" ng-click="cerrarCurso()">X</div>
            </div>


            <div class="form_registro">
                <div class="form_container">
                    <form class="form_alumno" name="frm" ng-submit="guardarCurso()">
                        <div class="form-group col-sm-12 spd spi">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del Curso" ng-model="curso.nombre">
                        </div>

                        <div class="form-group">
                            <select class="custom-select"
                                    name="catedratico"
                                    ng-model="curso.catedratico">
                                <option selected disabled value="">
                                    Seleccione el catedratico
                                </option>
                                <option ng-repeat="catedratico in catedraticos" value="@{{catedratico.id}}">
                                    @{{catedratico.nombre}}
                                </option>
                            </select>
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <select class="custom-select"
                                    name="tipo"
                                    ng-model="curso.tipo">
                                <option selected disabled value="">Tipo Curso</option>
                                <option ng-repeat="tipo in tipoc" value="@{{tipo.id}}">
                                    @{{tipo.nombre}}
                                </option>
                            </select>
                        </div>

                        <div class="col-sm-12 col-xs-12 mtop">
                            <button type="submit" class="btn btn-outline-dark btn-block" ng-disabled="frm.$invalid">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {{-- fin Crear alumno --}}

    {{-- Editar curso --}}
        <div id="modalAyuda" ng-if="editCurso">
            <div class="head_ayuda">
                <p>Editar curso Software</p>
                <div class="icocerrarc" ng-click="cerrarEditcurso()">X</div>
            </div>


            <div class="form_registro">
                <div class="form_container">
                    <form class="form_alumno" name="frm" ng-submit="guardarCurso()">
                        <div class="form-group col-sm-12 spd spi">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del Curso" ng-model="curso.nombre">
                        </div>

                        <div class="form-group">
                            <select class="custom-select"
                                    name="catedratico"
                                    ng-model="curso.catedratico">
                                <option selected disabled value="">
                                    Seleccione el catedratico
                                </option>
                                <option ng-repeat="catedratico in catedraticos" value="@{{catedratico.id}}">
                                    @{{catedratico.nombre}}
                                </option>
                            </select>
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <select class="custom-select"
                                    name="tipo"
                                    ng-model="curso.tipo">
                                <option selected disabled value="">Tipo Curso</option>
                                <option ng-repeat="tipo in tipoc" value="@{{tipo.id}}">
                                    @{{tipo.nombre}}
                                </option>
                            </select>
                        </div>

                        <div class="col-sm-12 col-xs-12 mtop">
                            <button type="submit" class="btn btn-outline-dark btn-block" ng-disabled="frm.$invalid">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {{-- fin Editar alumno --}}

    <div class="container">
        <div class="container_cabecera">
            <h1>Listado de Cursos</h1>

            <div class="btn_options">
                <button class="btn btn_nuevoalumno" ng-click="crearCurso()">Crear Curso</button>
            </div>
        </div>

        <div class="container_dash">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Catedratico</th>
                        <th scope="col">Tipo Curso</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Software |</td>
                        <td>José López</td>
                        <td>Computo</td>
                        <td>
                            <div class="cont_btnoptions">
                                <button type="button" class="btn btn-outline-info" ng-click="editarCurso()">Editar</button>
                                <button type="button" class="btn btn-outline-danger">Eliminar</button>
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
    <script src="/js/controller/CursosCtrl.js"></script>
@endpush
