app.controller('FichaCtrl', function ($scope, $http, $timeout, $log) {
    $scope.mas_obj = false;

    $scope.cerrar_masID = function () {
        $scope.mas_obj = !$scope.mas_obj;
    }

    $scope.verFicha = function () {
        $scope.mas_obj = true;
    }

});
