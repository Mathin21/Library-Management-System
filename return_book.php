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
$return_By=$_REQUEST['returnBy'];

//inserting the data into the table 
$sql="DELETE FROM issue_book where Book_ID='$book_ID' and Student_ID='return_By'";

if ($con->query($sql) === TRUE) {
    echo "Book is returned successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>