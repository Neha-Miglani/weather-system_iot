<?php
include_once('connection.php');

$query = "SELECT * FROM device_1 ORDER BY id DESC";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tab.css">
</head>
<body>
  <div class="back-arrow">
    <a href="../Device_Dashboard/index.html" onclick="history.go(-1)">
        <img src="https://png.pngtree.com/png-vector/20190505/ourmid/pngtree-vector-back-icon-png-image_1023353.jpg" alt="Back" class="back-arrow-icon" >
    </a>
</div>

    <h1>History_Device1</h1>
    <div class="admin-button">
      <button class="login-button">LogOut</button>
    </div>

    <table>
      <thead>
        <tr>
          
          <th>Date/Time</th>
          <th>Temperature</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($rows = $result->fetch_assoc()) {
            echo "<tr>";
            
            echo "<td>" . $rows['date_time'] . "</td>";
            echo "<td>" . $rows['temp'] . "</td>";
            echo "</tr>";
        }
        ?>
      </tbody>
    </table>

    <?php
    // Close the connection
    $conn->close();
    ?>
</body>
</html>
