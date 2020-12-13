<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="size"></label>
    <input id="size" name="size" value="<?php if (isset($_POST["size"])) {
        echo $_POST["size"];
    } ?>" type="number" style="width:100px">
    <input type="submit" value="Size of Array">
</form>

<?php

if (isset($_POST["size"])) {
    $_SESSION["size"]  = $_POST["size"];
    $size = $_SESSION["size"];
    echo "</br><form method='POST'>";
    for ($i = 0; $i < $size; $i++) {
        echo "<input name='element(" . $i . ")' type='number' style='width:50px;'>";
    };
    echo "</br></br><input name='find' type='submit' value='Find min'></form>";
}
if (isset($_POST["find"])) {
    $size = $_SESSION["size"];
    $array = array();
    for ($i = 0; $i < $size; $i++) {
        array_push($array, $_POST["element($i)"]);
    }
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    echo "<b> Min value of array :" . min($array) . "</b>";
}
?>