<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<form method="GET">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operand">
        <option value="none" selected>None</option>
        <option value="+">Add</option>
        <option value="-">Subtract</option>
        <option value="*">Multiply</option>
        <option value="/">Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>This answer is:</p>
<?php
function calculate($type, $a, $b)
{
    return $type($a, $b);
}

$add = function ($first, $second) {
    return $first + $second;
};
$sub = function ($first, $second) {
    return $first - $second;
};
$multiply = function ($first, $second) {
    return $first * $second;
};
$divide = function ($first, $second) {
    return $first / $second;
};

if (isset($_GET['submit'])) {
    $val1 = $_GET['num1'];
    $val2 = $_GET['num2'];
    $operand = $_GET['operand'];
    switch ($operand) {
        case 'none':
            echo 'YOU NEED TO SELECT A METHOD';
            break;
        case '+':
            echo calculate($add, $val1, $val2);
            break;
        case '-':
            echo calculate($sub, $val1, $val2);
            break;
        case '*':
            echo calculate($multiply, $val1, $val2);
            break;
        case '/':
            echo calculate($divide, $val1, $val2);
            break;
    }

}
?>
</body>
</html>