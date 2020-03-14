<html>
<head>
  <title>Book-O-Rama Book Entry Results</title>
</head>
<body>
<h1>Book-O-Rama Book Entry Results</h1>
<?php
    if (!isset($_POST['ISBN']) || !isset($_POST['Author']) || !isset($_POST['Title']) || !isset($_POST['Price'])){
        echo "<p>You have not entered all the required details.<br />"
            ."Please go back and try again.</p>";
        exit;
    }

  // create short variable names
      $isbn=$_POST['ISBN'];
      $author=$_POST['Author'];
      $title=$_POST['Title'];
      $price=$_POST['Price'];
      $price = doubleval($price);

  @$db = new mysqli('192.168.74.129', 'book', 'book', 'book');

  if ($db->connect_error) {
     echo "<p>Error: Could not connect to database.<br/>  
            Please try again later.</p>";
     exit;
  }

  $query = "insert into Books values (?,?,?,?)";
  $stmt = $db->prepare($query);
  $stmt->bind_param('sssd',$isbn, $author, $title, $price);
  $stmt->execute();

  if ($stmt->affected_rows > 0) {
      echo "<p>Book inserted into the database.</p>";
  } else {
  	  echo "<p>An error has occurred.<br/>  
            The item was not added.</p>";
  }

  $db->close();
?>
</body>
</html>
