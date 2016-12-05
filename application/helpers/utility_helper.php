<?php

function asset_url($additional = ""){
   return base_url() . 'bower_components/' . $additional;
}

function upload_url($additional = ""){
   return base_url() . 'uploads/' . $additional;
}

?>
