<!DOCTYPE html>
<?php 
    include "connection.php"; 
    include "header.php";
    include "footer.php";
?>
<html>

<body>
    <section class="container">
    <div class="btn-group">
        <button class="btn">All</button>
        <button class="btn dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
            <li><a onclick="openTable(event, 'All')">All</a></li>
            <li><a onclick="openTable(event, 'Computer')">Computer</a></li>
            <li><a onclick="openTable(event, 'Drone')">Drone</a></li>
            <li><a onclick="openTable(event, 'Android Tablet')">Android Tablet</a></li>
            <li><a onclick="openTable(event, 'iPad')">iPad</a></li>
            <li><a onclick="openTable(event, 'Graphics Tablet')">Graphics Tablet</a></li>
            <li><a onclick="openTable(event, 'VR Glasses')">VR Glasses</a></li>
        </ul>
    </div>

    <div class="spacing2"></div>

    <div id="All" class="tabcontent" style="display: block;">
        <table class="table" cellspacing="0">
            <?php   
                $query = "SELECT * FROM device";
                $result = mysqli_query($conn, $query); 
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = mysqli_fetch_array($result)) {            
                        echo "<tr>";
                        echo "<td class='num'>" . $row['deviceID'] . "</td>";
                        echo "<td class='mid2'>" . $row['deviceName'] . "</td>";            
                        echo "<td class='type2'>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <div id="Computer" class="tabcontent">
        <table class="table" cellspacing="0">
            <?php   
                $query = "SELECT * FROM device WHERE deviceType = 1";
                $result = mysqli_query($conn, $query); 
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = mysqli_fetch_array($result)) {            
                        echo "<tr>";
                        echo "<td class='num'>" . $row['deviceID'] . "</td>";
                        echo "<td class='mid2'>" . $row['deviceName'] . "</td>";            
                        echo "<td class='type2'>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <div id="Drone" class="tabcontent">
        <table class="table" cellspacing="0">
            <?php   
                $query = "SELECT * FROM device WHERE deviceType = 2";
                $result = mysqli_query($conn, $query); 
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = mysqli_fetch_array($result)) {            
                        echo "<tr>";
                        echo "<td class='num'>" . $row['deviceID'] . "</td>";
                        echo "<td class='mid2'>" . $row['deviceName'] . "</td>";            
                        echo "<td class='type2'>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <div id="Android Tablet" class="tabcontent">
        <table class="table" cellspacing="0">
            <?php   
                $query = "SELECT * FROM device WHERE deviceType = 3";
                $result = mysqli_query($conn, $query); 
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = mysqli_fetch_array($result)) {            
                        echo "<tr>";
                        echo "<td class='num'>" . $row['deviceID'] . "</td>";
                        echo "<td class='mid2'>" . $row['deviceName'] . "</td>";            
                        echo "<td class='type2'>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <div id="iPad" class="tabcontent">
        <table class="table" cellspacing="0">
            <?php   
                $query = "SELECT * FROM device WHERE deviceType = 4";
                $result = mysqli_query($conn, $query); 
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = mysqli_fetch_array($result)) {            
                        echo "<tr>";
                        echo "<td class='num'>" . $row['deviceID'] . "</td>";
                        echo "<td class='mid2'>" . $row['deviceName'] . "</td>";            
                        echo "<td class='type2'>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <div id="Graphics Tablet" class="tabcontent">
        <table class="table" cellspacing="0">
            <?php   
                $query = "SELECT * FROM device WHERE deviceType = 5";
                $result = mysqli_query($conn, $query); 
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = mysqli_fetch_array($result)) {            
                        echo "<tr>";
                        echo "<td class='num'>" . $row['deviceID'] . "</td>";
                        echo "<td class='mid2'>" . $row['deviceName'] . "</td>";            
                        echo "<td class='type2'>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <div id="VR Glasses" class="tabcontent">
        <table class="table" cellspacing="0">
            <?php   
                $query = "SELECT * FROM device WHERE deviceType = 6";
                $result = mysqli_query($conn, $query); 
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = mysqli_fetch_array($result)) {            
                        echo "<tr>";
                        echo "<td class='num'>" . $row['deviceID'] . "</td>";
                        echo "<td class='mid2'>" . $row['deviceName'] . "</td>";            
                        echo "<td class='type2'>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>