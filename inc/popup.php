<?php
add_action('admin_footer','ppdPopupHTML');

function ppdPopupHTML(){
  ?>
  <div class="ppd">
    <div class="ppdPopupHTML hidden">
      <a href="#" class="ppdClose button">X</a>
      <button type="button" class="ppdSave button button-primary button-large" name="button">Save</button>
    </div>
  </div>
  <?php
}
