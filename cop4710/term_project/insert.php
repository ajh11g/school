<!--  Takes input from the candidate search page and inserts new info -->

<?php
require('config/connection.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Candidates (name, age, sex, party) VALUES ('$_POST[name]', '$_POST[age]', '$_POST[sex]', '$_POST[party]')";
$result = mysqli_query($conn, $sql);

// Check for successful insertion
if (!$result)
{
	die('Error: ' . mysqli_error());
}
else
{
	echo "New Candidate added to database!";
}


$conn->close();
//header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
<br>
<a href="candidates.php" />Click here to return.</a>