app.controller('HomeCtrl', function($scope, $http, $timeout, $log) {

    /**
     * Crear alumno
     **/
    $scope.fondoModal = false;
    $scope.nuevoAlumno = false;

    $scope.crearAlumno = function() {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.nuevoAlumno = !$scope.nuevoAlumno;
    };

    $scope.cerrarAlumno = function() {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.nuevoAlumno = !$scope.nuevoAlumno;
    };

    $scope.grados = [{
            nombre: 'Ingenieria',
            id: '1'
        },
        {
            nombre: 'Medicina',
            id: '2'
        },
        {
            nombre: 'Administración',
            id: '3'
        },
        {
            nombre: 'Diseño',
            id: '4'
        }
    ];

    $scope.sexo = [{
            nombre: 'Hombre',
            id: '1'
        },
        {
            nombre: 'Mujer',
            id: '2'
        }
    ];

    $scope.estados = [{
            nombre: 'Activo',
            id: '1'
        },
        {
            nombre: 'Inactivo',
            id: '2'
        }
    ];

    $scope.civiles = [{
            nombre: 'Soltero',
            id: '1'
        },
        {
            nombre: 'Casado',
            id: '2'
        },
        {
            nombre: 'Divorciado',
            id: '3'
        },
        {
            nombre: 'Viudo',
            id: '4'
        }
    ];


    // +++++ Funciones Alumnos  +++++

    $scope.alumno = {};
    $scope.guardarAlumno = function() {

        var dataalumno = {
            nombre: $scope.alumno.nombre,
            apellido: $scope.alumno.apellido,
            fecha_nacimiento: $scope.alumno.fecha_nacio,
            grado_alumno: $scope.alumno.grado,
            tipo_sexo: $scope.alumno.selectSexo,
            lugar_nacimiento: $scope.alumno.lugarcio,
            nacionalidad: $scope.alumno.nacionalidad,
            estado_civil: $scope.alumno.estado,
            estado: $scope.alumno.estado,
            telefono: $scope.alumno.telefono,
            email: $scope.alumno.email,
            fecha_ingreso: $scope.alumno.fecha_ingreso,
            contrasena: $scope.alumno.clave
        };

        $http.post('/alumno/create', dataalumno)
            .success(function(data, status, headers) {
                console.log("Guardado correctamente");

                $scope.fondoModal = !$scope.fondoModal;
                $scope.nuevoAlumno = !$scope.nuevoAlumno;
                $scope.get_alumnos();
            })
            .error(function(data, status, header, config) {
                console.log("Error al crear alumno");
            });
    };

    //Todos los alumnos
    $scope.get_alumnos = function() {
        $http.get('/alumnos').success(

            function(alumnos) {
                $scope.alumnos = alumnos.datos;
            }).error(function(error) {
            $scope.error = error;
        });
    }
    $scope.get_alumnos();


    $scope.actualizarAlumno = function() {

      var data = {
          nombre: $scope.alumno.nombre,
          apellido: $scope.alumno.apellido,
          fecha_nacimiento: $scope.alumno.fecha_nacio,
          grado_alumno: $scope.alumno.grado,
          tipo_sexo: $scope.alumno.selectSexo,
          lugar_nacimiento: $scope.alumno.lugarcio,
          nacionalidad: $scope.alumno.nacionalidad,
          estado_civil: $scope.alumno.estado,
          estado: $scope.alumno.estado,
          telefono: $scope.alumno.telefono,
          email: $scope.alumno.email,
          fecha_ingreso: $scope.alumno.fecha_ingreso,
          contrasena: $scope.alumno.clave
      };

      $http.put('/alumno/' + $scope.existeAlumno.id, data)
          .success(function(data, status, headers) {

            $scope.get_alumnos();
            $scope.fondoModal = !$scope.fondoModal;
            $scope.editAlumno = !$scope.editAlumno;

          })
          .error(function(data, status, header, config) {
              console.log('Error al actualizar.');
          });
    }

    //Eliminar Alumno
    $scope.btn_eliminar = function(id) {

        $scope.id_alumno = id;

        $http.delete('/alumno/destroy/' + $scope.id_alumno)
            .success(function(data, status, headers) {
                $scope.get_alumnos();

            }).error(function(data, status, header, config) {
                console.log('Error al borrar');
            });

    }


    $scope.curso = {};
    $scope.asignarCursos = function(){

      var dataalumno = {
          id_alumno: $scope.existeAlumno.id,
          id_curso: $scope.curso.cursonombre
      };

      $http.post('/cursoalumno/create', dataalumno)
          .success(function(data, status, headers) {
              console.log("Guardado correctamente");

              $scope.fondoModal = !$scope.fondoModal;
              $scope.verCurso = !$scope.verCurso;

              $scope.get_cursosalum = function() {
                  $http.get('/cursosalumno/' + $scope.existeAlumno.id).success(

                      function(cursosasing) {
                          $scope.cursosasing = cursosasing.datos;
                      }).error(function(error) {
                      $scope.error = error;
                  });
              }

              $scope.get_cursosalum();
          })
          .error(function(data, status, header, config) {
              console.log("Error al crear alumno");
          });
    }


    $scope.editAlumno = false;

    $scope.editarAlumno = function(alumno) {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.editAlumno = !$scope.editAlumno;
        $scope.existeAlumno = alumno;
    };

    $scope.cerrarEditalumno = function() {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.editAlumno = !$scope.editAlumno;
    }


    /**
     *
     * Asignación de cursos
     *
     */

    $scope.verCurso = false;

    $scope.asignarCurso = function(alumno) {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.verCurso = !$scope.verCurso;

        $scope.existeAlumno = alumno;

        $scope.get_cursosalum = function() {
            $http.get('/cursosalumno/' + $scope.existeAlumno.id).success(

                function(cursosasing) {
                    $scope.cursosasing = cursosasing.datos;
                }).error(function(error) {
                $scope.error = error;
            });
        }

        $scope.get_cursosalum();
    };

    $scope.cerrarCurso = function() {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.verCurso = !$scope.verCurso;
    };

    $scope.categorias = [{
            nombre: 'Conocimientos Númericos',
            id: '1'
        },
        {
            nombre: 'Conocimientos de Sistemas',
            id: '2'
        },
        {
            nombre: 'Conocimientos de teoria',
            id: '3'
        }
    ];

    $scope.cursos = [{
            nombre: 'Mátematicas',
            id: '1'
        },
        {
            nombre: 'Software',
            id: '2'
        },
        {
            nombre: 'Razón y Fé',
            id: '3'
        }
    ];

});
