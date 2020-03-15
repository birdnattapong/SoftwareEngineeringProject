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
                <div class="pagetag">
                        <div style="padding-top: 10px; padding-left: 80px">รายการครุภัณฑ์ &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 			<!-- <button type="button" class="btn btn-warning" >Add Device Type</button>&ensp; -->


                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Add Device Type</button>
                                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Add device type</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="GET" action="FuncAddDeviceType.php">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Type ID </label>
                                                                <input type="text" class="form-control" id="TypeID" name="TypeID">  
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Type Name</label>
                                                                <input type="text" class="form-control" id="TypeName" name="TypeName">
                                                            </div>
															<input type="hidden" name='id' value="<?php echo $id; ?>">
                                                            <input type="hidden" name='name' value="<?php echo $name; ?>">
                                                            <div class="modal-footer">
                                                            <input type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Do you want to add device type?\n')" value="Add Device Type" />
                                                        </div>  
                                                            
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    &ensp; 

                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo1">Add Device Item</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document1">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add device item</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="GET" action="FuncAddDevice.php">
                                        <div class="form-group">                                                        
                                            <label for="recipient-name" class="col-form-label">Device ID </label>
                                            <input type="text" class="form-control" name="DeviceID" id="DeviceID">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Device Name</label>
                                            <input type="text" class="form-control" id="DeviceName" name="DeviceName">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Device Detail</label>
                                            <textarea class="form-control" id="DeviceDetail" name="DeviceDetail"></textarea>
                                        </div>
                                        <div class="form-group">
                                            Device Type<br>
                                            <select class="form-control" name="typeName">
                                            <?php
                                            require "connection.php"; 
                                            $res = mysqli_query($conn, 'SELECT * FROM DeviceType');
                                            while($row = mysqli_fetch_assoc($res)) {?>
                                            <option value="<?php echo $row['typeID'];?>"><?php echo $row['typeName']; }?></option>
                                            </select> 
                                            <div class="form-group">
                                            <label for="message-text" class="col-form-label">Address</label>
                                            <input type="text" class="form-control" id="Address" name="Address">
                                            </div>            
                                            <div class="modal-footer">
                                            <input type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Do you want to add device Item?\n')" value="Add Device" />
                                                </div>  
                                            <input type="hidden" name='id' value="<?php echo $id; ?>">
                                            <input type="hidden" name='name' value="<?php echo $name; ?>">
                                        </form>
                                         </div>
                                       </div>
                                        </div>
                                        </div>&ensp;


  



                       	</div>
            <div id="content-in">       
                <div class="spacing2">
                </div>            
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
                                    echo "<td ><a href='detail_admin.php?deviceName=" .$row['deviceName'] . "&id=". $id . "&name=". $name ."'> ". $row['deviceName'] . "</a></td>";            
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