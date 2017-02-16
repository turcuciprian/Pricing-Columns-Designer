//the angular part
    var ppdMod = angular.module('ppdAng', []);
    ppdMod.controller('ppdControler', ['$scope', function($scope) {
        $scope.greeting = 'Hola!';
        console.log($scope.greeting);
    }]);
//the jquery part
jQuery(document).ready(function($) {

});
