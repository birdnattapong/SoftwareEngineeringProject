<!DOCTYPE html>
<?php include "connection.php"; session_start();?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Scrummy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    <script src="main.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
  <body class="container">
      
    <div class="spacing"></div>

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
                $stmt = $pdo->prepare("SELECT * FROM device");
                $stmt->execute();
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = $stmt->fetch()) {            
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
                $stmt = $pdo->prepare("SELECT * FROM device WHERE deviceType = 1");
                $stmt->execute();
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = $stmt->fetch()) {            
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
                $stmt = $pdo->prepare("SELECT * FROM device WHERE deviceType = 2");
                $stmt->execute();
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = $stmt->fetch()) {            
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
                $stmt = $pdo->prepare("SELECT * FROM device WHERE deviceType = 3");
                $stmt->execute();
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = $stmt->fetch()) {            
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
                $stmt = $pdo->prepare("SELECT * FROM device WHERE deviceType = 4");
                $stmt->execute();
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = $stmt->fetch()) {            
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
                $stmt = $pdo->prepare("SELECT * FROM device WHERE deviceType = 5");
                $stmt->execute();
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = $stmt->fetch()) {            
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
                $stmt = $pdo->prepare("SELECT * FROM device WHERE deviceType = 6");
                $stmt->execute();
                echo "<thead class='table-success'>
                <tr>
                    <th scope='col' class='num'>No.</th>
                    <th scope='col' class='mid'>ชื่ออุปกรณ์</th>
                    <th scope='col' class='type'>สถานะ</th>
                </tr>
                </thead>
                <tbody class='table-wrapper-scroll-y my-custom-scrollbar table-striped'>";
                    while ($row = $stmt->fetch()) {            
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
</body>
</html>