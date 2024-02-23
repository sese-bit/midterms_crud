<?php
    header("Access-Control-Allow-Origin: *");
    $con = mysqli_connect("localhost", "root", "", "sapiks");
    $result = mysqli_query($con, "SELECT * FROM employees");
    $employees = [];
    while($record = mysqli_fetch_assoc($result))
        $employees[] = $record;

    echo json_encode($employees);

    mysqli_close($con);
?>