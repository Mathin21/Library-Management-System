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
$issue_to=$_REQUEST['issuedTo'];

//inserting the data into the table 
$sql="INSERT INTO issue_book (Book_ID, Student_ID) VALUES ('$book_ID', '$issued_to')";

if ($con->query($sql) === TRUE) {
    echo "Book is issued successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>