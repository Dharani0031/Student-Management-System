<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Student List</h2>

    <?php
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['name']}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No students found. <a href='add_student.php'>Add a student</a></p>";
    }
    ?>
</body>
</html>
