<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input name="generate" type="submit" value="Generate Array">
</form>
<?php
if (isset($_POST["generate"])) {
    $_SESSION["result"] = "<br><div style='width:980px;'>";
    for ($i = 0; $i < 100; $i++) {
        $_SESSION["size"][$i] = mt_rand(0, 99);
        $_SESSION["result"] .= " " . $_SESSION['size'][$i];
    }
    $_SESSION["result"] .= "</div>";
    echo $_SESSION["result"];
    echo "</br><span>Index of array</span><form method='post'>
        <input name='index' type='number' style='width:50px'>
        </br><input type='submit' value='Find value'>";
}
if (isset($_POST["index"])) {
    $indexOfArray = $_POST["index"];
    try {
        echo $_SESSION["result"];
        if ($indexOfArray < 0 || $indexOfArray >= 100) {
            throw new Exception("Chỉ số vượt quá giới hạn của mảng");
        }
        echo "<br> Giá trị của mảng ở vị trí $indexOfArray là: <b>" . $_SESSION["size"][$indexOfArray] . "</b>";
    } catch (Exception $e) {
        echo "<br>Message: " . $e->getMessage();
    }
}

?>