<?php
    
        $name = $_GET['name'];
        $id = $_GET['id'];

    $DeviceIDErr = $DeviceNameErr = $DeviceDetailErr = $websiteErr = $Err ="";

    if (empty($_GET['DeviceID'])) {
        $DeviceIDErr = "Device ID is required";
    } else {
        $DeviceID = $_GET['DeviceID'];
    }
    
    if (empty($_GET['DeviceName'])) {
        $DeviceNameErr = "Device Name is required";
    } else {
        $DeviceName = $_GET['DeviceName'];
    }
        
    if (empty($_GET['DeviceDetail'])) {
        $DeviceDetailErr = "Device Detail is required";
    } else {
        $DeviceDetail = $_GET['DeviceDetail'];
    }
    if (empty($_GET['Address'])) {
        $AddressErr = "Address is required";
    } else {
        $Address = $_GET['Address'];
    }
    
    if (!empty($_GET['Address']) && !empty($_GET['DeviceID']) && !empty($_GET['DeviceName']) && !empty($_GET['DeviceDetail'])) {
        $typeName= $_GET['typeName'];
        $status = "Available";
        $duedate = "0000-00-00";
        include "connection.php";
        if ($stmt = mysqli_prepare($conn, "INSERT INTO device (deviceID, deviceName, detail, address, status, deviceType,device_duedate1) VALUES (?,?,?,?,?,?,?)"));
        mysqli_stmt_bind_param($stmt, 'sssssss', $DeviceID, $DeviceName,$DeviceDetail,$Address,$status,$typeName,$duedate);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        
    }else{
        echo "<script>alert('Please complete all information.')</script>"; 
        echo " <form method='GET' action='index_admin.php?id=$id.'&name=$name'>
        <input type='hidden' name='id' value='".$id."'>
        <input type='hidden' name='name' value='".$name."'> </form>"; 
    }
    

     /*
     $DeviceID = $_GET['DeviceID'];
     $DeviceName = $_GET['DeviceName'];
     $DeviceDetail = $_GET['DeviceDetail'];
     $typeName= $_GET['typeName'];
     $Address = $_GET['Address'];
     $status = "Available";
     $duedate = "0000-00-00";

     if ($stmt = mysqli_prepare($conn, "INSERT INTO device (deviceID, deviceName, detail, address, status, deviceType,device_duedate1) VALUES (?,?,?,?,?,?,?)"));
     mysqli_stmt_bind_param($stmt, 'sssssss', $DeviceID, $DeviceName,$DeviceDetail,$Address,$status,$typeName,$duedate);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);
     mysqli_close($conn);
     //header("location: index_admin.php?id=$id.'&name=$name");
	 */
	   

?>
		<script>
		document.getElementsByTagName("form")[0].submit();
		</script>
