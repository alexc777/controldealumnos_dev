@extends('components.app')
@section('content')

@include('components.menulateral')

<div class="areacontenido col-lg-g" ng-controller="CatedraticosCtrl" ng-cloak>

    {{-- Crear catedratico --}}
        <div class="caja_modal dnone_phone" ng-if="fondoModal"></div>

        <div id="modalAyuda" ng-if="nuevoCatedratico">
            <div class="head_ayuda">
                <p>Nuevo Catedratico</p>
                <div class="icocerrarc" ng-click="cerrarCatedratico()">X</div>
            </div>

            <div class="form_registro">
                <div class="form_container">
                    <form class="form_alumno" name="frm" ng-submit="guardarCatedratico()">
                        <div class="form-group col-sm-12 spd spi">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del Catedratico" ng-model="catedratico.nombre">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="text" class="form-control" name="apellido" placeholder="Apellido del Catedratico" ng-model="catedratico.apellido">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <label>Fecha Nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacio" ng-model="catedratico.fecha_nacio">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="number" class="form-control" name="telefono" placeholder="Teléfono del Catedratico" ng-model="catedratico.telefono">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="email" class="form-control" name="email" placeholder="E-mail del Catedratico" ng-model="catedratico.email">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="password" class="form-control" name="clave" placeholder="Contraseña del Catedratico" ng-model="catedratico.clave">
                        </div>

                        <div class="col-sm-12 col-xs-12 mtop">
                            <button type="submit" class="btn btn-outline-dark btn-block" ng-disabled="frm.$invalid">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {{-- fin Crear catedratico --}}

    {{-- Editar catedratico --}}
        <div id="modalAyuda" ng-if="editarCatedratico">
            <div class="head_ayuda">
                <p>Información Catedratico @{{existeCatedratico.nombre}}</p>
                <div class="icocerrarc" ng-click="cerrarEditcate()">X</div>
            </div>

            <div class="form_registro">
                <div class="form_container">
                    <form class="form_alumno" name="frm" ng-submit="actualizarCatedratico()">
                        <div class="form-group col-sm-12 spd spi">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del Catedratico" ng-model="existeCatedratico.nombre">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="text" class="form-control" name="apellido" placeholder="Apellido del Catedratico" ng-model="existeCatedratico.apellido">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <label>Fecha Nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacio" ng-model="existeCatedratico.fecha_nacio">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="number" class="form-control" name="telefono" placeholder="Teléfono del Catedratico" ng-model="existeCatedratico.telefono">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="email" class="form-control" name="email" placeholder="E-mail del Catedratico" ng-model="existeCatedratico.email">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="password" class="form-control" name="clave" placeholder="Contraseña del Catedratico" ng-model="existeCatedratico.contrasena">
                        </div>

                        <div class="col-sm-12 col-xs-12 mtop">
                            <button type="submit" class="btn btn-outline-dark btn-block" ng-disabled="frm.$invalid">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {{-- fin Editar catedratico --}}

    {{-- Actulizar notas --}}
        <div id="modalAyuda" ng-if="verNotas">
            <div class="head_ayuda">
                <p>Actulizar Notas</p>
                <div class="icocerrarc" ng-click="cerrarCurso()">X</div>
            </div>


            <div class="form_registro">
                <div class="form_container">
                    <form class="form_alumno" name="frm" ng-submit="guardarNota()">

                        <div class="form-group">
                            <select class="custom-select"
                                    name="alumno"
                                    ng-model="alumno.nota">
                                <option selected disabled value="">Selecciona el alumno</option>
                                <option ng-repeat="alumno in alumnos" value="@{{alumno.id}}">
                                    @{{alumno.nombre}}
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="custom-select"
                                    name="curso"
                                    ng-model="alumno.curso">
                                <option selected disabled value="">Seleccione el curso</option>
                                <option ng-repeat="curso in cursos" value="@{{curso.id}}">
                                    @{{curso.nombre_curso}}
                                </option>
                            </select>
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="number" class="form-control" name="notaalumno" placeholder="Nota del alumno" ng-model="alumno.notaalumno">
                        </div>

                        <div class="col-sm-12 col-xs-12 mtop">
                            <button type="submit" class="btn btn-outline-dark btn-block" ng-disabled="frm.$invalid">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {{-- fin Actulizar notas --}}

    <div class="container">
        <div class="container_cabecera">
            <h1>Listado de Catedraticos</h1>

            <div class="btn_options">
                <button class="btn btn_nuevoalumno" ng-click="crearCatedratico()">Nuevo Catedratico</button>
            </div>
        </div>

        <div class="container_dash">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Fecha nacio</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr ng-repeat="catedratico in catedraticos">
                        <td>@{{catedratico.nombre}}</td>
                        <td>@{{catedratico.apellido}}</td>
                        <td>@{{catedratico.fecha_nacimiento}}</td>
                        <td>@{{catedratico.telefono}}</td>
                        <td>@{{catedratico.email}}</td>
                        <td>
                            <div class="cont_btnoptions">
                                <button type="button" class="btn btn-outline-dark" ng-click="asignarCurso(catedratico)">Notas</button>
                                <button type="button" class="btn btn-outline-info" ng-click="editarCate(catedratico)">Editar</button>
                                <button type="button" class="btn btn-outline-danger" ng-click="btn_eliminar(catedratico.id)">Eliminar</button>
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
    <script src="/js/controller/CatedraticosCtrl.js"></script>
@endpush
