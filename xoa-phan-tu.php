<?php $arrayNumber = array('Danh', 'Tuan', 'Huy', 'Quang', 'Nhu', 'Chinh', 'Long');
echo "<pre>";
print_r($arrayNumber);
echo "</pre>";
?>
<form method="post">
    <input type="text" name="input" />
    <input type="submit" value="Remove" />
</form>

<?php

function find($input, $array)
{
    $position = null;
    for ($i = 0; $i < count($array); $i++) {
        if ($input == $array[$i]) {
            $position = $i;
            return $position;
        };
    };
};
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['input'];
    try {
        if (find($input, $arrayNumber) === null) {
            throw new Exception();
        };
        $index_del = find($input, $arrayNumber);
        for ($i = $index_del; $i < count($arrayNumber) - 1; $i++) {
            $arrayNumber[$i] = $arrayNumber[$i + 1];
        };
        array_pop($arrayNumber);
        array_push($arrayNumber,'');
        echo "<pre>";
        print_r($arrayNumber);
        echo "</pre>";
    } catch (Exception $e) {
        echo "Không có giá trị này trong mảng";
    }
}
?>
