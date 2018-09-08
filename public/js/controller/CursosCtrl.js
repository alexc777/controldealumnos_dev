app.controller('CursosCtrl', function ($scope, $http, $timeout, $log) {

    /**
   * Crear Curso
   **/
    $scope.fondoModal = false;
    $scope.verCurso = false;

    $scope.crearCurso = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.verCurso = !$scope.verCurso;
    };

    $scope.cerrarCurso = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.verCurso = !$scope.verCurso;
    };

    $scope.tipoc = [
        { nombre: 'Conocimientos Númericos', id: '1' },
        { nombre: 'Conocimientos de Sistemas', id: '2' },
        { nombre: 'Conocimientos de teoria', id: '3' }
    ];

    //Funciones Catedraticos
    $scope.curso = {};
    $scope.guardarCurso = function() {

      var datacatedratico = {
          nombre_curso: $scope.curso.nombre,
          id_catedratico: $scope.curso.catedratico,
          id_tipo: $scope.curso.tipo,
      };

      $http.post('/curso/create', datacatedratico)
          .success(function(data, status, headers) {
              console.log("Guardado correctamente");

              $scope.get_cursos();
              $scope.fondoModal = !$scope.fondoModal;
              $scope.verCurso = !$scope.verCurso;
          })
          .error(function(data, status, header, config) {
              console.log("Error al crear Curso");
          });
    };

    //Todos los cursos
    $scope.get_cursos = function() {
      $http.get('/cursosl').success(

          function(cursos) {
              $scope.cursos = cursos.datos;
          }).error(function(error) {
          $scope.error = error;
      });
    }
    $scope.get_cursos();

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


    $scope.actualizarCurso = function() {

      var data = {
          nombre_curso: $scope.existeCurso.nombre_curso,
        id_catedratico: $scope.curso.catedratico,
        id_tipo: $scope.curso.tipo
      };

      $http.put('/curso/' + $scope.existeCurso.id, data)
          .success(function(data, status, headers) {

              $scope.get_cursos();
              $scope.fondoModal = !$scope.fondoModal;
              $scope.editCurso = !$scope.editCurso;

          })
          .error(function(data, status, header, config) {
              console.log('Error al actualizar.');
          });
    }

    $scope.btn_eliminar = function(id) {
      $scope.id_curso = id;

      $http.delete('/curso/destroy/' + $scope.id_curso)
          .success(function(data, status, headers) {
              $scope.get_cursos();

          }).error(function(data, status, header, config) {
              console.log('Error al borrar');
          });
    }



    $scope.editCurso = false;

    $scope.editarCurso = function (curso) {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.editCurso = !$scope.editCurso;
        $scope.existeCurso = curso;
        console.log($scope.existeCurso);

    };

    $scope.cerrarEditcurso = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.editCurso = !$scope.editCurso;
    };

});
