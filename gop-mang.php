<?php
$a1num1 = $a1num2 = $a1num3 = $a1num4 = "";
$a2num1 = $a2num2 = $a2num3 = $a2num4 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a1num1 = $_POST["a1num1"];
    $a1num2 = $_POST["a1num2"];
    $a1num3 = $_POST["a1num3"];
    $a1num4 = $_POST["a1num4"];

    $a2num1 = $_POST["a2num1"];
    $a2num2 = $_POST["a2num2"];
    $a2num3 = $_POST["a2num3"];
    $a2num4 = $_POST["a2num4"];
}
function combineArray($arr1, $arr2)
{
    $arr3 = $arr1;
    foreach ($arr2 as $index => $element) {
        array_push($arr3, $element);
    }
    return $arr3;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <p>Array 1:</p>
    <input type="number" value="<?php echo $a1num1 ?>" style="width:50px;" name="a1num1">
    <input type="number" value="<?php echo $a1num2 ?>" style="width:50px;" name="a1num2">
    <input type="number" value="<?php echo $a1num3 ?>" style="width:50px;" name="a1num3">
    <input type="number" value="<?php echo $a1num4 ?>" style="width:50px;" name="a1num4">
    <p>Array 2:</p>
    <input type="number" value="<?php echo $a2num1 ?>" style="width:50px;" name="a2num1">
    <input type="number" value="<?php echo $a2num2 ?>" style="width:50px;" name="a2num2">
    <input type="number" value="<?php echo $a2num3 ?>" style="width:50px;" name="a2num3">
    <input type="number" value="<?php echo $a2num4 ?>" style="width:50px;" name="a2num4">
    <br><br>
    <input type="submit" value="Combine">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array1 = array(
        $_POST["a1num1"],
        $_POST["a1num2"],
        $_POST["a1num3"],
        $_POST["a1num4"]
    );
    $array2 = array(
        $_POST["a1num1"],
        $_POST["a2num2"],
        $_POST["a2num3"],
        $_POST["a2num4"]
    );
    $result = combineArray($array1, $array2);
    echo "<br>";
    print_r($result);
}
?>
