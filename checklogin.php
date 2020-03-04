<?php
    session_start();
    if(isset($_POST['username'])){
        include("connection.php");
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."' ";
        $result = mysqli_query($conn,$sql);
            
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);

            $_SESSION["userRole"] = $row["userRole"];
            $name = $row["Name"];
            $id = $row["userID"];

            if($_SESSION["userRole"]=="academic"){ 
                Header("Location: index_academic.php?id=$id&name=$name");
            }else if($_SESSION["userRole"]=="administrative"){
                Header("Location: index_administrative.php?id=$id&name=$name");
            }else if($_SESSION["userRole"]=="student"){
                Header("Location: index_student.php?id=$id&name=$name");
            }
        }else{
            echo "<script>";
                echo "alert(\" username หรือ password ไม่ถูกต้อง\");"; 
                echo "window.history.back()";
            echo "</script>";
        }
    }else{
        Header("Location: login.php"); //user & password incorrect back to login again
    }
?>
