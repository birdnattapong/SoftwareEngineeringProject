<?php
    include "connection.php";
    $name = $_GET['name'];
    $id = $_GET['id'];
    $deviceID= $_GET['deviceID'];

	//echo $name,$id,$typeID ,$typeName;

        $sql = "DELETE FROM device WHERE deviceID='$deviceID';";
        $conn->query($sql);
    //header("location: index_admin.php?id=$id.'&name=$name");
    echo " <form method='GET' action='index_admin.php?id=$id.'&name=$name'>
    <input type='hidden' name='id' value='".$id."'>
    <input type='hidden' name='name' value='".$name."'> </form>";
?>
		<script>
		document.getElementsByTagName("form")[0].submit();
		</script>
