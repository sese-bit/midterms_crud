<?php
    header("Access-Control-Allow-Origin: *");
    $con = mysqli_connect("localhost", "root", "", "json-demo-3b");
    if(isset($_POST['data'])) {
        $data = json_decode($_POST['data']);
        $strSql = "INSERT INTO employees(name, designation, address) VALUES('" . $data->name . "', '" . $data->designation . "', '" . $data->address . "')";
        
        if(mysqli_query($con, $strSql))
            echo json_encode(["data" => "Success"]);
        else
            echo json_encode(["data" => "Failed"]);
    }
    mysqli_close($con);
?>