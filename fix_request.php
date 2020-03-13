<?php 
    include "connection.php"; 
    include "header.php";
    $name = $_GET['name'];
    $id = $_GET['id'];
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
                    <a href="#">
                    <i class="fas fa-home"></i>
                    Home
                    </a>                   
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
                <div class="pagetag">รายการแจ้งซ่อมครุภัณฑ์</div>
                <div id="All" class="d-flex justify-content-center" class="tabcontent" style="display: block;">
                    <table class="table table-striped table-wrapper-scroll-y my-custom-scrollbar" cellspacing="0" style="width: fit-content !important;">
                        <?php   
                            $count = "SELECT fixrequest.FixRequestID,user.Name,fixrequest.deviceID,device.deviceName,fixrequest.FixDetail,fixrequest.RequestDate FROM fixrequest LEFT JOIN user ON fixrequest.userID = user.userID LEFT JOIN device ON fixrequest.deviceID = device.deviceID"; 
                            $result = mysqli_query($conn, $count); 
                            echo "<thead class='table-success'>
                            <tr>
                                <th scope='col' class='RequestIDth'>FixRequestID</th>
                                <th scope='col' class='Informerth'>Informer</th>
                                <th scope='col' class='DeviceIDth'>DeviceID</th>
                                <th scope='col' class='DeviceNameth'>DeviceName</th>
                                <th scope='col' class='Fixdetailth'>FixDetail</th>
                                <th scope='col' class='RequestDateth'>RequestDate</th>
                                <th scope='col' class='Actionth'>Action</th>
                            </tr>
                            </thead>
                            <tbody>";
                                while ($row = mysqli_fetch_array($result)) {           
                                    echo "<tr>";
                                    echo "<td class='RequestIDth'>" .$row['FixRequestID']. "</td>";
                                    echo "<td class='Informerth'>" .$row['Name']. "</td>";            
                                    echo "<td class='DeviceIDth'>" .$row['deviceID']. "</td>";          
                                    echo "<td class='DeviceNameth'>" .$row['deviceName']. "</td>";
                                    echo "<td class='Fixdetailth'>" .$row['FixDetail']. "</td>";
                                    echo "<td class='RequestDateth'>" .$row['RequestDate']. "</td>";
                                    echo "<td class='Actionth'><button type='button' class='ApproveButt'>Approve</button><button type='button' class='DisapproveButt'>Disapprove</button></td>";
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