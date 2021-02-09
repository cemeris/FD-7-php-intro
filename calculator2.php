<form action="" method="get">
    <label>number1: </label>
    <input type="number" name="number-1">
    <label>operation: </label>
    <select name="operator" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
    </select>
    <label>number2: </label>
    <input type="number" name="number-2">
    <button type="submit">submit</button>
</form>

<?php
 if (array_key_exists('number-1', $_GET) &&
    array_key_exists('number-2', $_GET) &&
    array_key_exists('operator', $_GET)
 ) {
     $n1 = $_GET['number-1'];
     $n2 = $_GET['number-2'];
     $operator = $_GET['operator'];
     if (isValueInt($n1) &&
        isValueInt($n2) &&
        array_key_exists($operator, ['+' => null, '-' => null])
     ) {
        echo 'success';
     }
     else {
         echo "wrong field values";
     }
 }
 else {
     echo 'please set values';
 }




 function isValueInt($value) {
    if ((int) $value > 0 || $value === "0") {
        return true;
    }
    return false;
}
?>