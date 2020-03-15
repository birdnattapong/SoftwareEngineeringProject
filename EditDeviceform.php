<?php
    include "connection.php";
	include "header.php";
    $name = $_GET['name'];
    $id = $_GET['id'];
    $DeviceID = $_GET['deviceID'];
	$res = mysqli_query($conn, "SELECT * FROM Device,DeviceType WHERE device.deviceType=devicetype.typeID AND deviceID='$DeviceID'");


     // if ($stmt = mysqli_prepare($conn, "INSERT INTO device (deviceID, deviceName, detail, address, status, deviceType,device_duedate1) VALUES (?,?,?,?,?,?,?)"));
     // mysqli_stmt_bind_param($stmt, 'sssssss', $DeviceID, $DeviceName,$DeviceDetail,$Address,$status,$typeName,$duedate);
     // mysqli_stmt_execute($stmt);
     // mysqli_stmt_close($stmt);
     // mysqli_close($conn);
     // header("location: index_admin.php?id=$id.'&name=$name");

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
                    <?php
                        echo "<a href='index_admin.php?id=" . $id . "&name=" .$name. "'>";
                    ?>
                    <i class="fas fa-wrench"></i>
                    รายการแจ้งซ่อม</a>
                    <?php
                        echo "<a href='borrow_request.php?id=" . $id . "&name=" .$name. "'>";
                    ?>
                    <i class="fas fa-hands-helping"></i>
                    รายการแจ้งยืม</a>               
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
                        <div style="padding-top: 10px; padding-left: 80px"><h2>แก้ไขครุภัณฑ์</h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						<br>
						<?php $row = mysqli_fetch_assoc($res) ?>
						<form method='GET' action='EditDevice.php'>
                                        <div class='form-group'>                                                        
                                            <label for='recipient-name' class='col-form-label'>Device ID </label>
                                            <input type='text' class='form-control' name='DeviceID' id='DeviceID' value="<?php echo $row['deviceID']; ?>">  
                                        </div>
                                        <div class='form-group'>
                                            <label for='message-text' class='col-form-label'>Device Name</label>
                                            <input type='text' class='form-control' id='DeviceName' name='DeviceName' value="<?php echo $row['deviceName']; ?>">
                                        </div>
                                        <div class='form-group'>
                                            <label for='message-text' class='col-form-label'>Device Detail</label>
                                            <textarea class='form-control' id='DeviceDetail' name='DeviceDetail'><?php echo $row['detail']; ?></textarea>
                                        </div>
                                        <div class='form-group'>
                                            Device Type<br>
                                            <select class='form-control' name='typeName'>
											<option value="<?php echo $row['deviceType']; ?>"><?php echo $row['typeName']; ?></option>
                                            <?php
											$type=$row['deviceType'];
                                            require 'connection.php'; 
                                            $res1 = mysqli_query($conn, "SELECT * FROM devicetype WHERE NOT devicetype.typeID='$type'");
                                            while($row1 = mysqli_fetch_assoc($res1)) {?>
                                            <option value='<?php echo $row1['typeID'];?>'><?php echo $row1['typeName']; }?></option>
                                            </select> 
                                            <div class='form-group'>
                                            <label for='message-text' class='col-form-label'>Address</label>
                                            <input type='text' class='form-control' id='Address' name='Address' value=<?php echo $row['address']; ?>>
                                            </div>            
											<div class='form-group'>
                                            Status<br>
                                            <select class='form-control' name='status'>
                                            <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
											<?php if($row['status']!='Available'){
											echo "<option value='Available'>Available</option>";
											}?>
											<?php if($row['status']!='Borrowed'){
											echo "<option value='Borrowed'>Borrowed</option>";
											}?>
											<?php if($row['status']!='Discharge'){
											echo "<option value='Discharge'>Discharge</option>";
											}?>
											<?php if($row['status']!='Fixing'){
											echo "<option value='Fixing'>Fixing</option>";
											}?>
											<?php if($row['status']!='NotAvailable'){
											echo "<option value='NotAvailable'>NotAvailable</option>";
											}?>
                                            <?php if($row['status']!='RequestBorrow'){
											echo "<option value='RequestBorrow'>RequestBorrow</option>";
											}?>
											<?php if($row['status']!='RequestforRepair'){
											echo "<option value='RequestforRepair'>RequestForBorrow</option>";
											}?>
											<?php if($row['status']!='SendforRepair'){
											echo "<option value='SendforRepair'>SendforRepair</option>";
											}?>
                                            </select> 
                                            
                                            <?php if($row['status']=='Borrowed'){
                                            echo "<div class='form-group'>
                                            <label for='message-text' class='col-form-label'>Borrower</label>
                                            <input type='text' class='form-control' id='Borrower' name='Borrower' value='". $row['address']."'></div>";
                                            echo "<div class='form-group'>
                                            <label for='message-text' class='col-form-label'>Due Date</label>
                                            <input type='text' class='form-control' id='DueDate' name='DueDate' value='". $row['device_duedate1']."'></div>";}?>
                                            <div class='modal-footer'>
                                            <input type='hidden' name='id' value='<?php echo $id; ?>'>
                                            <input type='hidden' name='name' value='<?php echo $name; ?>'>
                                            <input type='hidden' name='lastDevice' value='<?php echo $row['deviceID']; ?>'>
                                            <input type='submit' name='submit' class='btn btn-primary' onclick="return confirm('Do you want to edit device Item?\n')" value='แก้ไขครุภัณฑ์' />
                                                </div>  
                                        </form>
                                         </div>
                                       </div>
                                        </div>
                                        </div>&ensp;
        </div><div class="spacing2"></div>
        </div>
        </div><div class="spacing2"></div>
    </div>
     
    <?php include "footer.php"; ?>