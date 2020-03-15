<?php
    include "connection.php";
    $name = $_GET['name'];
    $id = $_GET['id'];
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
	 
	 echo " <form method='GET' action='index_admin.php?id=$id.'&name=$name'>
    <input type='hidden' name='id' value='".$id."'>
    <input type='hidden' name='name' value='".$name."'> </form>";

?>
		<script>
		document.getElementsByTagName("form")[0].submit();
		</script>
