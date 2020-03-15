
<?php
    include "connection.php";
    include "header.php";

    $name = $_GET['name'];
    $id = $_GET['id'];

    $DeviceID = $_GET['deviceID'];
    $NameFix = $_GET['NameFix'];
    $FixRequestID = $_GET['FixRequestID'];
    $FixDetail = $_GET['FixDetail'];
    $RequestDate = $_GET['RequestDate'];
    

      //echo $DeviceID,$BorrowRequestID,$NameBorrower,$RequestDate,$name,$id;
      $res = mysqli_query($conn, "SELECT * FROM Device,DeviceType WHERE device.deviceType=devicetype.typeID AND deviceID='$DeviceID'");
      $row = mysqli_fetch_assoc($res);

       $sql = "UPDATE device SET  status='Available' WHERE deviceID='$DeviceID';";
       $conn->query($sql);
       $sql = "DELETE FROM FixRequest WHERE FixRequestID='$FixRequestID';";
       $conn->query($sql);
       echo " <form method='GET' action='borrow_request.php?id=$id.'&name=$name'>
       <input type='hidden' name='id' value='".$id."'>
       <input type='hidden' name='name' value='".$name."'> </form>";
?>
		 <script>
		 document.getElementsByTagName("form")[0].submit();
		 </script>

