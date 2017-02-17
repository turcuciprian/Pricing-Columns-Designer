//the angular part
    var ppdMod = angular.module('ppdAng', []);
    ppdMod.controller('ppdControler', ['$scope', function($scope) {
        $scope.grid = [['a1','a2','a3'],['b1','b2','b3']];
    }]);
//the jquery part
jQuery(document).ready(function($) {

});
