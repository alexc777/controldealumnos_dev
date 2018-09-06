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

    $scope.catedraticos = [
        { nombre: 'Steven Blanco', id: '1' },
        { nombre: 'José López', id: '2' },
        { nombre: 'Enrique López', id: '2' },
    ];

    $scope.tipoc = [
        { nombre: 'Conocimientos Númericos', id: '1' },
        { nombre: 'Conocimientos de Sistemas', id: '2' },
        { nombre: 'Conocimientos de teoria', id: '3' }
    ];


    /**
     *
     * Editar Curso
     *
     */
    $scope.editCurso = false;

    $scope.editarCurso = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.editCurso = !$scope.editCurso;
    };

    $scope.cerrarEditcurso = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.editCurso = !$scope.editCurso;
    };

});
