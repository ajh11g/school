<!--  Various SQL DELETE/UPDATE Queries made here -->

<?php
require('config/connection.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$my_val = isset($_POST['selection']) ? $_POST['selection'] : '';

// If the user wishes to delete an entry
if(isset($_POST['delete']))
{
	$sql = "DELETE FROM Candidates WHERE name='$my_val'";
	$result = mysqli_query($conn, $sql);

	if($result === TRUE)
	{
		echo "Candidate Successfully deleted!";
	}
	else
	{
		echo "Error deleting record: " . $conn->error;
	}
}

// Edit an existing candidate
if(isset($_POST['newEdit']))
{
	// setting some variables
	$newAge = isset($_POST['age']) ? $_POST['age'] : '';
	$newName = isset($_POST['newName']) ? $_POST['newName'] : '';
	$newSex = isset($_POST['sex']) ? $_POST['sex'] : '';
	$newParty = isset($_POST['party']) ? $_POST['party'] : '';
	$newState = isset($_POST['state']) ? $_POST['state'] : '';

	$sql2 = "UPDATE Candidates SET name='$newName', age='$newAge', sex='$newSex', party='$newParty', homeState='$newState' WHERE name='$my_val'";
	$result2 = mysqli_query($conn, $sql2);

	// Check for successful insertion
	if (!$result2)
	{
		die('Error: ' . mysqli_error());
	}
	else
	{
		echo "Candidate information updated!";
	}
}


$conn->close();
?>
<br>
<br>
<button onclick="goBack()">Click here to return.</button>
<script>
function goBack() {
    //window.history.back();
    header('Location: ' . $_SERVER["HTTP_REFERER"] );
    exit;
}
</script>