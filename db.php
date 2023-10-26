<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CommentSection";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $naam = $_POST['name'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO comment(naam, comment) VALUES ('$naam', '$comment')";
    if ($conn->query($sql)=== TRUE); {
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        if (empty($name)) {
            echo "name is empty </br>";
        }
        if (empty($comment)){
        echo "comment is empty";
        }
    }
}

$getcomment = "SELECT id, naam, comment, time FROM comment";
$result = $conn->query($getcomment);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["naam"]." Comment: " . $row["comment"]. " Date: " . $row["time"]. "<br>";
    }
  } else {
}