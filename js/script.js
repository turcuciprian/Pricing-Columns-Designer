//the angular part
    var ppdMod = angular.module('ppdAng', []);
    ppdMod.controller('ppdControler', ['$scope', function($scope) {
        $scope.grid = [[]];
        $scope.addRow = function(){
          var newGenArr = $scope.grid;
          newGenArr.forEach(function(value,index){
            value.push(' ');

          });
          $scope.grid = newGenArr;
        };
        $scope.addColumn = function(){
          var newGenArr = $scope.grid;
          console.log(newGenArr);
          if(newGenArr[0]){
            console.log(newGenArr[0].length);
            newGenArr.push(returnArrLen(newGenArr[0].length));
          }else{
            newGenArr.push([]);
          }
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
