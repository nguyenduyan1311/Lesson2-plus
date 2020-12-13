<form method="post">
    <div>
        String:<input type="text" name="str" /><br />
        Char :<input type="text" name="char" />
    </div>
    <div>
        <input type="submit" name="Count" />
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['str'];
    $char = $_POST['char'];
    try {
        if (strlen($char) != 1) {
            throw new Exception(' char không phải là 1 kí tự');
        };
        if (strlen($str) === 0) {
            throw new Exception(' chưa nhập chuỗi');
        };
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] === $char) {
                $count++;
            };
        }
        echo "<br/>Kí tự $char xuất hiện $count lần trong chuỗi $str";
    } catch (Exception $e) {
        echo "<br/>Lỗi :" . $e->getMessage();
    }
}
?>