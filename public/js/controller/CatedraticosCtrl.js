app.controller('CatedraticosCtrl', function($scope, $http, $timeout, $log) {

    /**
     * Crear Catedratico
     **/
    $scope.fondoModal = false;
    $scope.nuevoCatedratico = false;

    $scope.crearCatedratico = function() {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.nuevoCatedratico = !$scope.nuevoCatedratico;
    };

    $scope.cerrarCatedratico = function() {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.nuevoCatedratico = !$scope.nuevoCatedratico;
    };


    //Funciones Catedraticos
    $scope.catedratico = {};
    $scope.guardarCatedratico = function() {

      var datacatedratico = {
          nombre: $scope.catedratico.nombre,
          apellido: $scope.catedratico.apellido,
          fecha_nacimiento: $scope.catedratico.fecha_nacio,
          telefono: $scope.catedratico.telefono,
          email: $scope.catedratico.email,
          contrasena: $scope.catedratico.clave
      };

      $http.post('/catedratico/create', datacatedratico)
          .success(function(data, status, headers) {
              console.log("Guardado correctamente");

              $scope.get_catedraticos();
              $scope.fondoModal = !$scope.fondoModal;
              $scope.nuevoCatedratico = !$scope.nuevoCatedratico;
          })
          .error(function(data, status, header, config) {
              console.log("Error al crear Catedratico");
          });
    };

    //Todos los catedraticos
    $scope.get_catedraticos = function() {
      $http.get('/catedraticosl').success(

          function(catedraticos) {
              $scope.catedraticos = catedraticos.datos;
          }).error(function(error) {
          $scope.error = error;
      });
    }
    $scope.get_catedraticos();

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

    $scope.get_cursos = function() {
        $http.get('/cursosl').success(

            function(cursos) {
                $scope.cursos = cursos.datos;
                console.log($scope.cursos);
            }).error(function(error) {
            $scope.error = error;
        });
    }
    $scope.get_cursos();



    $scope.actualizarCatedratico = function() {

      var data = {
        nombre: $scope.catedratico.nombre,
        apellido: $scope.catedratico.apellido,
        fecha_nacimiento: $scope.catedratico.fecha_nacio,
        telefono: $scope.catedratico.telefono,
        email: $scope.catedratico.email,
        contrasena: $scope.catedratico.clave
      };

      $http.put('/catedratico/' + $scope.existeCatedratico.id, data)
          .success(function(data, status, headers) {

              $scope.get_catedraticos();
              $scope.fondoModal = !$scope.fondoModal;
              $scope.editarCatedratico = !$scope.editarCatedratico;

          })
          .error(function(data, status, header, config) {
              console.log('Error al actualizar.');
          });
    }

    $scope.btn_eliminar = function(id) {
      $scope.id_catedratico = id;

      $http.delete('/catedratico/destroy/' + $scope.id_catedratico)
          .success(function(data, status, headers) {
              $scope.get_catedraticos();

          }).error(function(data, status, header, config) {
              console.log('Error al borrar');
          });
    }

    $scope.alumno = {};
    $scope.guardarNota = function(){

      var datanotas = {

        id_alumno: $scope.alumno.nota,
        id_curso: $scope.alumno.curso,
        nota: $scope.alumno.notaalumno,
        id_catedratico: $scope.existeCatedratico.id
      }

      console.log(datanotas);

      $http.post('/notacurso/create', datanotas)
          .success(function(data, status, headers) {
              console.log("Guardado correctamente");

              $scope.fondoModal = !$scope.fondoModal;
              $scope.verNotas = !$scope.verNotas;
          })
          .error(function(data, status, header, config) {
              console.log("Error al crear");
          });
    }

    $scope.editarCatedratico = false;

    $scope.editarCate = function(catedratico) {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.editarCatedratico = !$scope.editarCatedratico;
        $scope.existeCatedratico = catedratico;
    };

    $scope.cerrarEditcate = function() {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.editarCatedratico = !$scope.editarCatedratico;
    };


    /**
     *
     * Actulizar Notas
     *
     */

    $scope.verNotas = false;

    $scope.asignarCurso = function(catedratico) {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.verNotas = !$scope.verNotas;
        $scope.existeCatedratico = catedratico;

    };

    $scope.cerrarCurso = function() {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.verNotas = !$scope.verNotas;
    };


});
