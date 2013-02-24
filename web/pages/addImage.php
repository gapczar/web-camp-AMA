<?php

include("connect.php");

if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) { 

  // Temporary file name stored on the server
  $tmpName  = $_FILES['image']['tmp_name'];  
  $fname = $_POST['fname'];
  // Read the file 
  $fp      = fopen($tmpName, 'r');
  $data = fread($fp, filesize($tmpName));
  $filename = $_FILES['image']['name'];
  $data = addslashes($data);
  fclose($fp);


  // Create the query and insert
  mysql_query("INSERT INTO apps VALUES(null,'$fname', '$filename',0)") or die("Error: ".mysql_error());

  // Print results
  print "Thank you, your file has been uploaded.";

  }
  else {
  print "No image selected/uploaded";
  }

?>

<form enctype="multipart/form-data" action="" method="post" name="changer">
<input name="MAX_FILE_SIZE" value="102400" type="hidden"/>
<input name="fname" type="text"/>
<input name="image" accept="image/jpeg" type="file"/>
<input value="Submit" type="submit"/>
</form>