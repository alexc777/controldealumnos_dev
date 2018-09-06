app.controller('HomeCtrl', function ($scope, $http, $timeout, $log) {

    /**
   * Sección de Modal Ayuda
   **/
    $scope.fondoModal = false;
    $scope.nuevoAlumno = false;

    $scope.crearAlumno = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.nuevoAlumno = !$scope.nuevoAlumno;
    };

    $scope.cerrarAlumno = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.nuevoAlumno = !$scope.nuevoAlumno;
    };

    $scope.sexo = [
        { nombre: 'Hombre', id: '1' },
        { nombre: 'Mujer', id: '2' }
    ];

    $scope.estados = [
        { nombre: 'Activo', id: '1' },
        { nombre: 'Inactivo', id: '2' }
    ];


    /**
     *
     * Asignación de cursos
     *
     */

    $scope.verCurso = false;

    $scope.asignarCurso = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.verCurso = !$scope.verCurso;
    };

    $scope.cerrarCurso = function () {
        $scope.fondoModal = !$scope.fondoModal;
        $scope.verCurso = !$scope.verCurso;
    };

    $scope.categorias = [
        { nombre: 'Conocimientos Númericos', id: '1' },
        { nombre: 'Conocimientos de Sistemas', id: '2' },
        { nombre: 'Conocimientos de teoria', id: '3' }
    ];

    $scope.cursos = [
        { nombre: 'Mátematicas', id: '1' },
        { nombre: 'Software', id: '2' },
        { nombre: 'Razón y Fé', id: '3' }
    ];

});
