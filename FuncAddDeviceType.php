<?php
    include "connection.php";
    $name = $_GET['name'];
    $id = $_GET['id'];
    $typeID = $_GET['TypeID'];
    $typeName = $_GET['TypeName'];
	
	//echo $name,$id,$typeID ,$typeName;



    if ($stmt = mysqli_prepare($conn, "INSERT INTO devicetype (typeID, typeName) VALUES (?, ?)"));
    mysqli_stmt_bind_param($stmt, 'ss', $typeID, $typeName);
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