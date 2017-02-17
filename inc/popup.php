<?php
add_action('admin_footer', 'ppdPopupHTML');
function ppdPopupHTML()
{
    ?>
  <div class="ppd" ng-app="ppdAng">
    <div class="ppdPopupHTML hidden" ng-controller="ppdControler">
      <a href="#" class="ppdClose button">X</a>
      <button type="button" class="ppdSave button button-primary button-large" name="button">Save</button>
      <div class="mCont">
        <div class="column" ng-repeat="(key,value) in grid">
          <div class="row" idVal="{{key}}" ng-repeat="(key2,value2) in value">
            {{value2}}
          </div>
        </div>
        <div class="column add">
          <div class="row">
            <button type="button" class="addColumn" name="button">+ Col</button>
          </div>
        </div>
      </div>
      <div class="column add br">
        <div class="row">
          <button type="button" ng-click="addRow()" class="addRow" name="button">+ Row</button>
        </div>
      </div>
    </div>
  </div>
  <?php

}
