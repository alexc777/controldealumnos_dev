app.controller('FichaCtrl', function ($scope, $http, $timeout, $log) {
    $scope.mas_obj = false;

    $scope.cerrar_masID = function () {
        $scope.mas_obj = !$scope.mas_obj;
    }

    $scope.verFicha = function (alumno) {
        $scope.mas_obj = true;

        $scope.existeAlumno = alumno;
        $scope.getCursos = function() {
            $http.get('/cursosalum/' + $scope.existeAlumno.id ).success(

                function(cursosap) {
                    $scope.cursosap = cursosap.datos;
                    $scope.get_alumnos();
                }).error(function(error) {
                $scope.error = error;
            });
        }
        $scope.getCursos();
    }


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

});
