<?php
  /*
    First check if go_child_menu is availabe, so the theme does not
    cause php Errors, if the Child Menu Plugin is unavailable
  */
  if (function_exists('go_child_menu')) {
    go_child_menu();
  }
?>