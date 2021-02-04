<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  include "head.php";
  include "functions.php";
?>

<form action="" method="get">
    <input type="number" name="number-1">
    <input type="number" name="number-2">
    <select name="operator" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
    </select>
    <button type="submit">submit</button>
</form>

<?php
    if (isset($_GET['number-1']) &&
        isValueInt($_GET['number-1']) &&
        isset($_GET['number-2']) &&
        isValueInt($_GET['number-2'])
    ) {
            echo $_GET['number-1'] + $_GET['number-2'];
    }
?>

