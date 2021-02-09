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
    echo 'success';
 }
 else {
     echo 'please set values';
 }

?>