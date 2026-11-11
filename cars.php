<?php
require_once "settings.php";
$dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Trinh Thanh Chuong">
  <title>Cars</title>
  <style>
    table { border-collapse: collapse; }
    th, td { border: 1px solid #333; padding: 4px 8px; }
  </style>
</head>
<body>
  <h1>Used Cars</h1>
<?php
if ($dbconn) {
    $query = "SELECT * FROM cars";
    $result = mysqli_query($dbconn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table>\n";
        echo "<thead><tr><th>Car ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr></thead>\n<tbody>\n";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . htmlspecialchars($row['make']) . "</td>";
            echo "<td>" . htmlspecialchars($row['model']) . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['yom'] . "</td>";
            echo "</tr>\n";
        }
        echo "</tbody>\n</table>\n";
        mysqli_free_result($result);
    } else {
        echo "<p>There are no cars to display.</p>\n";
    }
    mysqli_close($dbconn);
} else {
    echo "<p>Unable to connect to the db.</p>\n";
}
?>
</body>
</html>
