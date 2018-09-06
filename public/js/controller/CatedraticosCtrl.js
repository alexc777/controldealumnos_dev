app.controller('CatedraticosCtrl', function ($scope, $http, $timeout, $log) {

    /**
   * Crear Catedratico
   **/
    $scope.fondoModal = false;
    $scope.nuevoCatedratico = false;

    $scope.crearCatedratico = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.nuevoCatedratico = !$scope.nuevoCatedratico;
    };

    $scope.cerrarCatedratico = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.nuevoCatedratico = !$scope.nuevoCatedratico;
    };


    /**
     *
     * Editar Catedratico
     *
     */

    $scope.editarCatedratico = false;

    $scope.editarCate = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.editarCatedratico = !$scope.editarCatedratico;
    };

    $scope.cerrarEditcate = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.editarCatedratico = !$scope.editarCatedratico;
    };


    /**
     *
     * Actulizar Notas
     *
     */

    $scope.verNotas = false;

    $scope.asignarCurso = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.verNotas = !$scope.verNotas;
    };

    $scope.cerrarCurso = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.verNotas = !$scope.verNotas;
    };

    $scope.alumnos = [
        { nombre: 'Alesandro Sanchez', id: '1' },
        { nombre: 'Pablo Curumaco', id: '2' },
        { nombre: 'Osman Cruz', id: '3' }
    ];

    $scope.cursos = [
        { nombre: 'Mátematicas', id: '1' },
        { nombre: 'Software', id: '2' },
        { nombre: 'Razón y Fé', id: '3' }
    ];

});
