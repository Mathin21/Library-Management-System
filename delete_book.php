<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "add_books";
// database connection
$con=new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sel=mysqli_select_db($con,'add_books');
if(!$sel){
    echo "Database is not selected";
}

//retrieve data from the HTML form
$book_ID = $_REQUEST['bookID'];

//delete the data from the table 
$sql="DELETE FROM add_book where Book_ID='$book_ID'";

if ($con->query($sql) === TRUE) {
    echo "Book details are successfully deleted";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>