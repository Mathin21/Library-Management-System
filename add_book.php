<html>
<body>
<?php
// database connection
$con=mysqli_connect('localhost','root','','add_books');

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
$book_Title = $_REQUEST['bookTitle'];
$author = $_REQUEST['author'];
$status = $_REQUEST['status'];

//inserting the data into the table 
$sql="INSERT INTO add_book VALUES ('$book_ID', '$book_Title', '$author', '$status')";

if ($con->query($sql) === TRUE) {
    echo "Book details added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


$con->close();
?>
</body>
</html>