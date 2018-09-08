@extends('components.app')
@section('content')

@include('components.menulateral')

<div class="areacontenido col-lg-g" ng-controller="HomeCtrl" ng-cloak>

    {{-- Crear alumno --}}
        <div class="caja_modal dnone_phone" ng-if="fondoModal"></div>

        <div id="modalAyuda" ng-if="nuevoAlumno">
            <div class="head_ayuda">
                <p>Nuevo Alumno</p>
                <div class="icocerrarc" ng-click="cerrarAlumno()">X</div>
            </div>


            <div class="form_registro">
                <div class="form_container">
                    <form class="form_alumno" name="frm" ng-submit="guardarAlumno()">

                        <div class="form-group col-sm-12 spd spi">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del Alumno" ng-model="alumno.nombre">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="text" class="form-control" name="apellido" placeholder="Apellido del Alumno" ng-model="alumno.apellido">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <label>Fecha Nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacio" ng-model="alumno.fecha_nacio">
                        </div>

                        <div class="form-group">
                            <select class="custom-select"
                                    name="grado"
                                    ng-model="alumno.grado">
                                <option selected disabled value="">Facultad</option>
                                <option ng-repeat="grado in grados" value="@{{grado.id}}">
                                    @{{grado.nombre}}
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="custom-select"
                                    name="selectSexo"
                                    ng-model="alumno.selectSexo">
                                <option selected disabled value="">Tipo Sexo</option>
                                <option ng-repeat="tsexo in sexo" value="@{{tsexo.id}}">
                                    @{{tsexo.nombre}}
                                </option>
                            </select>
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="text" class="form-control" name="lugarcio" placeholder="Lugar de nacimiento" ng-model="alumno.lugarcio">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="text" class="form-control" name="nacionalidad" placeholder="Nacionalidad del alumno" ng-model="alumno.nacionalidad">
                        </div>

                        <div class="form-group">
                            <select class="custom-select"
                                    name="estadoc"
                                    ng-model="alumno.estadoc">
                                <option selected disabled value="">Estado Civil</option>
                                <option ng-repeat="civil in civiles" value="@{{civil.id}}">
                                    @{{civil.nombre}}
                                </option>
                            </select>
                        </div>


                        <div class="form-group col-sm-12 spd spi">
                            <select class="custom-select"
                                    name="estado"
                                    ng-model="alumno.estado">
                                <option selected disabled value="">Estado alumno</option>
                                <option ng-repeat="estado in estados" value="@{{estado.id}}">
                                    @{{estado.nombre}}
                                </option>
                            </select>
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="number" class="form-control" name="telefono" placeholder="Teléfono del alumno" ng-model="alumno.telefono">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="email" class="form-control" name="email" placeholder="E-mail del alumno" ng-model="alumno.email">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <label>Fecha Ingreso</label>
                            <input type="date" class="form-control" name="fecha_ingreso" ng-model="alumno.fecha_ingreso">
                        </div>

                        <div class="form-group col-sm-12 spd spi">
                            <input type="password" class="form-control" name="clave" placeholder="Contraseña del alumno" ng-model="alumno.clave">
                        </div>



                        <div class="col-sm-12 col-xs-12 mtop">
                            <button type="submit" class="btn btn-outline-dark btn-block" ng-disabled="frm.$invalid">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {{-- fin Crear alumno --}}

    {{-- Editar alumno --}}
        <div id="modalAyuda" ng-if="editAlumno">
            <div class="head_ayuda">
                <p>Editar Alumno @{{existeAlumno.nombre}}</p>
                <div class="icocerrarc" ng-click="cerrarEditalumno()">X</div>
            </div>


            <div class="form_registro">
                <div class="form_container">
                    <form class="form_alumno" name="frm" ng-submit="actualizarAlumno(alumno)">

                      <div class="form-group col-sm-12 spd spi">
                          <input type="text" class="form-control" name="nombre" placeholder="Nombre del Alumno" ng-model="existeAlumno.nombre">
                      </div>

                      <div class="form-group col-sm-12 spd spi">
                          <input type="text" class="form-control" name="apellido" placeholder="Apellido del Alumno" ng-model="existeAlumno.apellido">
                      </div>

                      <div class="form-group col-sm-12 spd spi">
                          <label>Fecha Nacimiento</label>
                          <input type="date" class="form-control" name="fecha_nacio" ng-model="existeAlumno.fecha_nacimiento">
                      </div>

                      <div class="form-group">
                          <select class="custom-select"
                                  name="grado"
                                  ng-model="existeAlumno.grado">
                              <option selected disabled value="">Facultad</option>
                              <option ng-repeat="grado in grados" value="@{{grado.id}}">
                                  @{{grado.nombre}}
                              </option>
                          </select>
                      </div>

                      <div class="form-group">
                          <select class="custom-select"
                                  name="selectSexo"
                                  ng-model="existeAlumno.selectSexo">
                              <option selected disabled value="">Tipo Sexo</option>
                              <option ng-repeat="tsexo in sexo" value="@{{tsexo.id}}">
                                  @{{tsexo.nombre}}
                              </option>
                          </select>
                      </div>

                      <div class="form-group col-sm-12 spd spi">
                          <input type="text" class="form-control" name="lugarcio" placeholder="Lugar de nacimiento" ng-model="existeAlumno.lugar_nacimiento">
                      </div>

                      <div class="form-group col-sm-12 spd spi">
                          <input type="text" class="form-control" name="nacionalidad" placeholder="Nacionalidad del alumno" ng-model="existeAlumno.nacionalidad">
                      </div>

                      <div class="form-group">
                          <select class="custom-select"
                                  name="estadoc"
                                  ng-model="existeAlumno.estadoc">
                              <option selected disabled value="">Estado Civil</option>
                              <option ng-repeat="civil in civiles" value="@{{civil.id}}">
                                  @{{civil.nombre}}
                              </option>
                          </select>
                      </div>


                      <div class="form-group col-sm-12 spd spi">
                          <select class="custom-select"
                                  name="estado"
                                  ng-model="existeAlumno.estado">
                              <option selected disabled value="">Estado alumno</option>
                              <option ng-repeat="estado in estados" value="@{{estado.id}}">
                                  @{{estado.nombre}}
                              </option>
                          </select>
                      </div>

                      <div class="form-group col-sm-12 spd spi">
                          <input type="number" class="form-control" name="telefono" placeholder="Teléfono del alumno" ng-model="existeAlumno.telefono">
                      </div>

                      <div class="form-group col-sm-12 spd spi">
                          <input type="email" class="form-control" name="email" placeholder="E-mail del alumno" ng-model="existeAlumno.email">
                      </div>

                      <div class="form-group col-sm-12 spd spi">
                          <label>Fecha Ingreso</label>
                          <input type="date" class="form-control" name="fecha_ingreso" ng-model="existeAlumno.fecha_ingreso">
                      </div>

                      <div class="form-group col-sm-12 spd spi">
                          <input type="password" class="form-control" name="clave" placeholder="Contraseña del alumno" ng-model="existeAlumno.contrasena">
                      </div>

                        <div class="col-sm-12 col-xs-12 mtop">
                            <button type="submit" class="btn btn-outline-dark btn-block" ng-disabled="frm.$invalid">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {{-- fin Editar alumno --}}

    {{-- Asignar Curso --}}
        <div id="modalAyuda" ng-if="verCurso">
            <div class="head_ayuda">
                <p>Asignar Curso a Alejandro</p>
                <div class="icocerrarc" ng-click="cerrarCurso()">X</div>
            </div>


            <div class="form_registro">
                <div class="form_container">
                    <form class="form_alumno" name="frm" ng-submit="asignarCursos()">

                        <div class="form-group">
                            <select class="custom-select"
                                    name="cursonombre"
                                    ng-model="curso.cursonombre">
                                <option selected disabled value="">Seleccione el curso</option>
                                <option ng-repeat="curso in cursos" value="@{{curso.id}}">
                                    @{{curso.nombre}}
                                </option>
                            </select>
                        </div>

                        <div class="col-sm-12 col-xs-12 mtop">
                            <button type="submit" class="btn btn-outline-dark btn-block" ng-disabled="frm.$invalid">Asignar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="container_listadoCursoasig">
                <p>Listado de Cursos Asignados</p>
                <ul class="list-group">
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                </ul>
            </div>
        </div>
    {{-- fin Asignar Curso --}}

    <div class="container">
        <div class="container_cabecera">
            <h1>Listado de Alumnos</h1>

            <div class="btn_options">
                <button class="btn btn_nuevoalumno" ng-click="crearAlumno()">Nuevo Alumno</button>
            </div>
        </div>

        <div class="container_dash">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Alumno</th>
                        <th scope="col">Carrera</th>
                        <th scope="col">Trimestre</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Nacimiento</th>
                        <th scope="col">Nacionalidad</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr ng-repeat="alumno in alumnos">
                        <td>@{{alumno.nombre}}</td>
                        <td>@{{alumno.apellido}}</td>
                        <td>@{{alumno.grado_alumno}}</td>
                        <td>@{{alumno.telefono}}</td>
                        <td>@{{alumno.email}}</td>
                        <td>@{{alumno.fecha_nacimiento}}</td>
                        <td>@{{alumno.nacionalidad}}</td>
                        <td>@{{alumno.estado}}</td>
                        <td>
                            <div class="cont_btnoptions">
                                <button type="button" class="btn btn-outline-dark" ng-click="asignarCurso(alumno)">Cursos</button>
                                <button type="button" class="btn btn-outline-info" ng-click="editarAlumno(alumno)">Editar</button>
                                <button type="button" class="btn btn-outline-danger" ng-click="btn_eliminar(alumno.id)">Eliminar</button>
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
    <script src="/js/controller/HomeCtrl.js"></script>
@endpush
