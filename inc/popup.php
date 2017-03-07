<?php
add_action('admin_footer', 'ppdPopupHTML');
function ppdPopupHTML()
{
    ?>
  <div class="ppd hidden" ng-app="ppdAng">
    <div class="ppdPopupHTML" ng-controller="ppdControler">
      <a href="#" class="ppdClose button">X</a>
      <button type="button" class="ppdSave button button-primary button-large" name="button">Save</button>
      <div class="addStuff">
        <button type="button" class="button button-primary button-large addColumn" ng-click="addColumn()" name="button">Add Column</button>
        <button type="button" class="button button-primary button-large addRow" ng-click="addRow()" name="button">Add Row</button>
      </div>
      <div class="mCont">
        <div class="column side">
          <div class="row title">
          </div>
          <div class="row cell" ng-class="{highlight: highlughtIfIndex(sideKey+1)}" ng-repeat="(sideKey,sideValue) in sideColumn track by $index">
            {{sideValue}}
            <input ng-model="sideColumn[sideKey]" type="text" class="editable" name="" value="{{sideColumn[sideKey]}}">
            <div class="delete" ng-show="grid[0].length > 1" ng-mouseleave="changeRowIndex(-1)" ng-mouseover="changeRowIndex(sideKey+1)" ng-click="deleteRow(sideKey)">
Delete
            </div>
          </div>
        </div>
        <div class="column" ng-repeat="(key,value) in grid track by $index">

          <div class="row cell" idVal="{{key}}" ng-class="{highlight: highlughtIfIndex(key2),'row title side': key2==0}" ng-repeat="(key2,value2) in value track by $index">
            {{grid[key][key2]}}
            <input ng-model="grid[key][key2]" type="text" class="editable" name="" value="{{grid[key][key2]}}">
          </div>
          <div ng-click="removeColumn($index)" ng-show="grid.length > 1" class="delete">
            Delete
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php

}
