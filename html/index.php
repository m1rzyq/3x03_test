<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$search = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $search = test_input($_POST["search"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Search</h2>
<form method="post" action="search.php">  
  Search: <input type="text" name="search">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>
