<?php
require_once "settings.php";
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Trinh Thanh Chuong">
  <title>Search Results</title>
  <style>
    table { border-collapse: collapse; }
    th, td { border: 1px solid #333; padding: 5px; }
  </style>
</head>
<body>
  <h1>Search Results</h1>
<?php
if (!$conn) {
    echo "<p>Unable to connect to the db.</p>\n";
} elseif (isset($_GET['model']) && trim($_GET['model']) !== '') {
    $model = mysqli_real_escape_string($conn, trim($_GET['model']));
    $sql = "SELECT * FROM cars WHERE model LIKE '%$model%'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table>\n";
        echo "<tr><th>ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>\n";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . htmlspecialchars($row['make']) . "</td>";
            echo "<td>" . htmlspecialchars($row['model']) . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['yom'] . "</td>";
            echo "</tr>\n";
        }
        echo "</table>\n";
    } else {
        echo "<p>No matching cars found.</p>\n";
    }
} else {
    echo "<p>Please enter a model to search.</p>\n";
}
if ($conn) { mysqli_close($conn); }
?>
  <p><a href="search_form.php">New search</a></p>
</body>
</html>
