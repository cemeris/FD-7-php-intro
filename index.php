<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  include "head.php";
  include "conditions.php";

  include "functions.php";

  include "form.php";

  $end = 42;
  

  if (isset($_GET['end']) && isValueInt($_GET['end'])) {
    $end = $_GET['end'];
  }

  $start = 1;

  if (isset($_GET['start']) && isValueInt($_GET['start'])) {
    $start = $_GET['start'];
  }

  $order = 4;
  if (isset($_GET['success']) && isValueInt($_GET['success'])) {
    $order = $_GET['success'];
  }

  addMultipleButtons($start, $end, $order);
