<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "add_books";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve all books from the add_book table
$sql = "SELECT * FROM add_book";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="heading">
        <h1>View Books</h1>
    </div>

    <div class="container">
        <table style="margin-left:50px;margin-right:50px;">
            <tr>
                <th>Book ID</th>
                <th>Textbook Title</th>
                <th>Author</th>
                <th>Status</th>
            </tr>
            <?php
            // Display the retrieved data in a table
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='table-cell'>" . $row["Book_ID"] . "</td>";
                    echo "<td class='table-cell'>" . $row["Textbook_Title"] . "</td>";
                    echo "<td class='table-cell'>" . $row["Author"] . "</td>";
                    echo "<td class='table-cell'>" . $row["Status"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No books found</td></tr>";
            }
            ?>
        </table>
    </div>

    <div class="form-group" style="margin-left: 170px;">
        <input type="button" id="quit" value="Quit">
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php
$conn->close();
?>
