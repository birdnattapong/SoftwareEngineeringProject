
<?php
    include "connection.php";
    include "header.php";

    $name = $_GET['name'];
    $id = $_GET['id'];

    $DeviceID = $_GET['DeviceID'];
    $DeviceName = $_GET['DeviceName'];
    $DeviceDetail = $_GET['DeviceDetail'];
    $typeName = $_GET['typeName'];
    $status = $_GET['status'];
    $Address = $_GET['Address'];
    $lastDevice = $_GET['lastDevice'];
	echo $DeviceDetail;
    //echo $DeviceID,$DeviceName,$DeviceDetail,$typeName,$status,$Address,$lastDevice;
    $res = mysqli_query($conn, "SELECT * FROM Device,DeviceType WHERE device.deviceType=devicetype.typeID AND deviceID='$DeviceID'");
     $row = mysqli_fetch_assoc($res);
     if($row['status']=='Borrowed'){
     $Borrower = $_GET['Borrower'];
     $DueDate = $_GET['DueDate'];
     $sql = "UPDATE device SET deviceID='$DeviceID',deviceName='$DeviceName',detail='$DeviceDetail',address='$Borrower'
            ,status='$status',deviceType='$typeName', device_duedate1='$DueDate' WHERE deviceID='$lastDevice';";
     $conn->query($sql);}
     else{
     $sql = "UPDATE device SET deviceID='$DeviceID',deviceName='$DeviceName',detail='$DeviceDetail',address='$Address'
     ,status='$status',deviceType='$typeName'WHERE deviceID='$lastDevice';";
     $conn->query($sql);
    }
     echo " <form method='GET' action='index_admin.php?id=$id.'&name=$name'>
     <input type='hidden' name='id' value='".$id."'>
     <input type='hidden' name='name' value='".$name."'> </form>";
?>
		 <script>
		 document.getElementsByTagName("form")[0].submit();
		 </script>

