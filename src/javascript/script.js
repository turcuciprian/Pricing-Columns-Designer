//the angular part
    var ppdMod = angular.module('ppdAng', []);
    ppdMod.controller('ppdControler', ['$scope', function($scope) {
        $scope.grid = [['']];
        $scope.sideColumn=[''];
        
        $scope.addRow = function(){
          var newGenArr = $scope.grid;
          newGenArr.forEach(function(value,index){
            value.push(' ');

          });
          $scope.grid = newGenArr;
        };
        $scope.addColumn = function(){
          var newGenArr = $scope.grid;
          if(newGenArr[0]){
            newGenArr.push(returnArrLen(newGenArr[0].length));
          }else{
            newGenArr.push([]);
          }
        };
        $scope.removeColumn = function(index){
          $scope.grid.splice(index,1);
        };
        var returnArrLen = function(size){
          var arr = [];
          while(arr.length < size){
            arr.push('');
          }
          return arr;
        }
    }]);
//the jquery part
jQuery(document).ready(function($) {



});
