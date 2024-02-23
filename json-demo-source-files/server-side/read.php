<?php
    header("Access-Control-Allow-Origin: *");
    $con = mysqli_connect("localhost", "root", "", "json-demo-3b");
    $result = mysqli_query($con, "SELECT * FROM employees");
    $employees = [];
    while($record = mysqli_fetch_assoc($result))
        $employees[] = $record;

    echo json_encode($employees);

    mysqli_close($con);
?>  