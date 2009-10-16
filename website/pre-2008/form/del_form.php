<?php
  include("global.inc.php");
  include("copyfunc.php");

  pt_register("GET","id");

  if ($id <= 0 ) {
    header("Location: index.php");
  } else {
    $dir_list = ls_a("use");
    deldir("use/" . $dir_list[($id-1)]);
    header("Refresh: 0; url=index.php");
  }

