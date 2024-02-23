<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "root", "", "json-demo-3b");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $strSql = "DELETE FROM employees WHERE id = $id";

    if (mysqli_query($con, $strSql)) {
        echo json_encode(["data" => "Success"]);
    } else {
        echo json_encode(["data" => "Failed"]);
    }
}

mysqli_close($con);
?>
