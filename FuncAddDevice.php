<?php
    include "connection.php";
    $name = $_POST['name'];
    $id = $_POST['id'];
    $DeviceID = $_POST['DeviceID'];
    $DeviceName = $_POST['DeviceName'];
    $DeviceDetail = $_POST['DeviceDetail'];
    $typeName= $_POST['typeName'];
    $Address = $_POST['Address'];
    $status = "Available";
    $duedate = "0000-00-00";

    if ($stmt = mysqli_prepare($conn, "INSERT INTO device (deviceID, deviceName, detail, address, status, deviceType,device_duedate1) VALUES (?,?,?,?,?,?,?)"));
    mysqli_stmt_bind_param($stmt, 'sssssss', $DeviceID, $DeviceName,$DeviceDetail,$Address,$status,$typeName,$duedate);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("location: index_admin.php?id=$id.'&name=$name");

?>