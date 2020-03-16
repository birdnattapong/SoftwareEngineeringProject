<?php 
    include "connection.php"; 
    include "header.php";
    $deviceName = $_GET['deviceName'];
    $id = $_GET['id'];
    $name = $_GET['name'];
?>

<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Scrummy</h3>
                <strong>SM</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <?php
                    echo "<a href='index_admin.php?id=" . $id . "&name=" .$name. "'>";?>
                    <i class="fas fa-home"></i>
                    Home </a>
                </li>
                <li>
                    <?php
                        echo "<a href='borrow_request.php?id=" . $id . "&name=" .$name. "'>";
                    ?>
                    <i class="fas fa-hands-helping"></i>
                    รายการแจ้งยืม</a> 
                    <?php
                        echo "<a href='fix_request.php?id=" . $id . "&name=" .$name. "'>";
                    ?>
                    <i class="fas fa-wrench"></i>
                    รายการแจ้งซ่อม</a> 
                </li>     
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar">
                <div class="container-fluid">
                  <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <!-- Navbar Header-->
                    <div class="navbar-header" style="font-family: 'Kanit' ; cursor: default;">
                        ระบบยืมคืนครุภัณฑ์ คณะวิทยาศาสตร์ มหาวิทยาลัยขอนแก่น
                    </div>
                    <!-- Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center" style="text-decoration: none !important;">
                      <!-- Search-->
                      <!--li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li-->
                      <!-- Role dropdown    -->
                      <li class="nav-item dropdown"><a id="profile" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none !important;"><span class="d-none d-sm-inline-block"><i class="fas fa-user-circle"></i>
                        <?php
                            echo $name;
                        ?></span> <i class="fas fa-caret-down"> </i></a>
                        <ul aria-labelledby="profile" class="dropdown-menu">
                          <li><a href="logout.php" class="dropdown-item"><span class="d-none d-inline">Logout </span><i class="fas fa-sign-out-alt"></i></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            
            <div id="content-in">       
                <div class="spacing2"></div>            
                <div id="All" class="d-flex justify-content-center"  class="tabcontent" style="display: block; cursor: default;">
                    <table class="table table-striped table-wrapper-scroll-y my-custom-scrollbar" cellspacing="0" style="width: fit-content !important;">
                        <?php   
                            $count = "SELECT * FROM device WHERE deviceName ='" .$deviceName. "'"; 
                            $result = mysqli_query($conn, $count); 
                            echo "<thead class='table-success'>
                            <tr>
                            <th scope='col' >ID</th>
                            <th scope='col' >Name</th>
                            <th scope='col' class='DeviceNameth' >Detail</th>
                            <th scope='col' >Address</th>
                            <th scope='col' >ผู้ยืม</th>
                            <th scope='col' >Due date</th>
                            <th scope='col' >Status</th>
                            <th scope='col' >action</th>
                            </tr>
                            </thead>
                            <tbody>";
                            while ($row = mysqli_fetch_array($result)) {           
                                echo "<tr>";
                                echo "<td scope='row'>" . $row['deviceID'] . "</td>";
                                echo "<td >" . $row['deviceName'] . "</td>";             
                                echo "<td >" . $row['detail']."</td>";
                                if ($row['status'] == 'Borrowed') {
                                    echo "<td > - </td>";
                                } else {
                                    echo "<td >" .$row['address'] . "</td>"; 
                                }
                                if ($row['status'] == 'Borrowed') {
                                    echo "<td >" .$row['address'] . "</td>";
                                } else {
                                    echo  "<td > - </td>";
                                }            
                                //echo "<td >" . $row['address'] . "</td>";
                                //echo "<td >" . $row['address'] . "</td>";
                                        
                                if ($row['device_duedate1'] == '0000-00-00') {
                                    echo "<td > - </td>";
                                } else {
                                    echo "<td >" . $row['device_duedate1'] . "</td>"; 
                                }  
                                if ($row['status'] == 'Available') {
                                    echo "<td ><span class='badge badge-success'>" . $row['status'] . "</span></td>";
                                } elseif ($row['status'] == 'Borrowed') {
                                    echo "<td ><span class='badge badge-secondary'>" . $row['status'] . "</span></td>";
                                } elseif ($row['status'] == 'RequestforRepair') {
                                    echo "<td ><span class='badge badge-info'>" . $row['status'] . "</span></td>";
                                } elseif ($row['status'] == 'SendforRepair') {
                                    echo "<td ><span class='badge badge-primary'>" . $row['status'] . "</span></td>";
                                } elseif ($row['status'] == 'Fixing') {
                                    echo "<td ><span class='badge badge-warning'>" . $row['status'] . "</span></td>";
                                } elseif ($row['status'] == 'NotAvailable') {
                                    echo "<td ><span class='badge badge-danger'>" . $row['status'] . "</span></td>";
                                } elseif ($row['status'] == 'Discharge') {
                                    echo "<td ><span class='badge badge-dark'>" . $row['status'] . "</span></td>";
                                } elseif ($row['status'] == 'RequestForBorrow') {
                                    echo "<td ><span class='badge badge-dark'>" . $row['status'] . "</span></td>";
                                } else {
                                    echo "<td > - </td>";
                                }
                                echo "<td>
                                <form method='GET' action='EditDeviceform.php' >
                                <input type='hidden' name='deviceID' value='".$row['deviceID']."'>
                                <input type='hidden' name='id' value='".$id."'>
                                <input type='hidden' name='name' value='".$name."'>
                                <input type='submit' name='submit' class='btn btn-primary' value='แก้ไข' />
                                </form> ";
                                echo "<form method='GET' action='DeleteDevice.php' scope='col'>
                                <input type='hidden' name='deviceID' value='".$row['deviceID']."'>
                                <input type='hidden' name='id' value='".$id."'>
                                <input type='hidden' name='name' value='".$name."'>";?>
                                <input type='submit' name='submit' class='btn btn-warning' onclick="return confirm('Do you want to delete device Item?\n')" value='ลบ' /> </form>
                                <?php echo "</td>";                                                
                                echo "</tr>";

                            }
                            ?>
                        </tbody>
                    </table>
                </div>            
            </div>
        </div><div class="spacing2"></div>
    </div>
     
    <?php include "footer.php"; ?>