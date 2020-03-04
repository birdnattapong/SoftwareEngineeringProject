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
                <div class="spacing2"></div>            
                <div id="All" class="d-flex justify-content-center" class="tabcontent" style="display: block;">
                    <table class="table table-striped table-wrapper-scroll-y my-custom-scrollbar" cellspacing="0" style="width: fit-content !important;">
                        <?php   
                            $count = "SELECT deviceName,deviceType, COUNT(*) as count_rec ,
                            CASE 
                                WHEN deviceType = 4 THEN 'Office'
                                WHEN deviceType = 5 THEN 'Vehicles and Transport'
                                WHEN deviceType = 6 THEN 'Electricity and radio'
                                WHEN deviceType = 7 THEN 'Advertising and publishing'
                                WHEN deviceType = 12 THEN 'Medical science'
                                WHEN deviceType = 13 THEN 'Computer'
                                ELSE 'Unknown'
                            END AS deviceTypeName
                            FROM device GROUP BY deviceName"; 
                            $result = mysqli_query($conn, $count); 
                            $i = 1;
                            echo "<thead class='table-success'>
                            <tr>
                                <th scope='col' class='noth'>No.</th>
                                <th scope='col' class='nameth'>Name</th>
                                <th scope='col' class='typeth'>Type</th>
                                <th scope='col' class='amountth'>Amount</th>
                            </tr>
                            </thead>
                            <tbody>";
                                while ($row = mysqli_fetch_array($result)) {           
                                    echo "<tr>";
                                    echo "<td class='notd'>" . $i . "</td>";
                                    echo "<td ><a href='detail_academic.php?deviceName=" .$row['deviceName'] . "&id=". $id . "&name=". $name ."'> ". $row['deviceName'] . "</a></td>";            
                                    echo "<td class='typetd'>" . $row['deviceTypeName'] . "</td>";          
                                    echo "<td class='amounttd'>" . $row['count_rec'] . "</td>";
                                    echo "</tr>";
                                    $i++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>            
            </div>
        </div><div class="spacing2"></div>
    </div>

    <?php include "footer.php"; ?>