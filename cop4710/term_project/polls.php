<!--  Takes running count of poll votes -->

<?php
require('config/connection.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$select1 = isset($_POST['poll0']) ? $_POST['poll0'] : '';
$select2 = isset($_POST['poll1']) ? $_POST['poll1'] : '';
$select3 = isset($_POST['poll2']) ? $_POST['poll2'] : '';
$select4 = isset($_POST['poll3']) ? $_POST['poll3'] : '';

if(isset($_POST['poll0']))
{
	$sql = "INSERT INTO Poll VALUES('', 'Donald Trump')";
	$result = mysqli_query($conn, $sql);
	CheckResult($result);
}
else if(isset($_POST['poll1']))
{
	$sql = "INSERT INTO Poll VALUES('', 'Ben Carson')";
	$result = mysqli_query($conn, $sql);
	CheckResult($result);
}
else if(isset($_POST['poll2']))
{
	$sql = "INSERT INTO Poll VALUES('', 'Hillary Clinton')";
	$result = mysqli_query($conn, $sql);
	CheckResult($result);
}
else if(isset($_POST['poll3']))
{
	$sql = "INSERT INTO Poll VALUES('', 'Bernie Sanders')";
	$result = mysqli_query($conn, $sql);
	CheckResult($result);
}

// Check if vote was cast
function CheckResult($result)
{
	if(!$result)
	{
		echo "Error! : " . mysql_error();
		return;
	}
	else
	{
		echo "Thanks for your vote!";
		return;
	}
}

// MATH STUFF
$resultVote = "SELECT * FROM Poll";
$voteRes = mysqli_query($conn, $resultVote);
$rowVoteRes = mysqli_num_rows($voteRes);


$result1 = "SELECT * FROM Poll WHERE choice='Donald Trump'";
$results1 = mysqli_query($conn, $result1);
$num_rows1 = mysqli_num_rows($results1);

$result2 = "SELECT * FROM Poll WHERE choice='Ben Carson'";
$results2 = mysqli_query($conn, $result2);
$num_rows2 = mysqli_num_rows($results2);

$result3 = "SELECT * FROM Poll WHERE choice='Hillary Clinton'";
$results3 = mysqli_query($conn, $result3);
$num_rows3 = mysqli_num_rows($results3);

$result4 = "SELECT * FROM Poll WHERE choice='Bernie Sanders'";
$results4 = mysqli_query($conn, $result4);
$num_rows4 = mysqli_num_rows($results4);

echo "<br>";
echo "RESULTS: ";
echo "<br>";
echo $percentq1 = floor(($num_rows1 / $rowVoteRes)*100) . "%";
echo "<br>";
echo $percentq2 = floor(($num_rows2 / $rowVoteRes)*100) . "%";
echo "<br>";
echo $percentq3 = floor(($num_rows3 / $rowVoteRes)*100) . "%";
echo "<br>";
echo $percentq4 = floor(($num_rows4 / $rowVoteRes)*100) . "%";
echo "<br>";

// Current Results

$conn->close();
//header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
<br>
<a href="poll.php" />Click here to return.</a>