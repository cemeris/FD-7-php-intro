<?php
$n1 = '';
$n2 = '';
$operator = '';

if (array_key_exists('number-1', $_GET) &&
    array_key_exists('number-2', $_GET) &&
    array_key_exists('operator', $_GET)
) {
    $n1 = $_GET['number-1'];
    $n2 = $_GET['number-2'];
    $operator = $_GET['operator'];
    if (isValueInt($n1) &&
        isValueInt($n2) &&
        array_key_exists($operator, ['+' => null, '-' => null, '*' => null, '/' => null, '**' => null])
    ) {
        switch ($operator) {
            case '+':
                $result = $n1 + $n2;
                break;
            case '-':
                $result = $n1 - $n2;
                break;
            case '*':
                $result = $n1 * $n2;
                break;
            case '/':
                $mod = $n1 % $n2;
                $result = ($n1 - $mod) / $n2 . " и " . $mod . "/" . $n2;
                break;
            case '**':
                $result = $n1 ** $n2;
                break;
            default:
                $result = "unknown";
        }

        echo "$n1 $operator $n2 = $result";
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


<form action="" style="" method="get">
    <label>number1: </label>
    <input type="number" name="number-1" value="<?=$n1;?>">
    <label>operation: </label>
    <select name="operator" id="">
        <option value="+">+</option>
        <option value="-" selected>-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="**">^</option>
    </select>
    <label>number2: </label>
    <input type="number" name="number-2" value="<?=$n2;?>">
    <button type="submit">submit</button>
</form>
<br>
<a href="calculator2.php">reload</a>