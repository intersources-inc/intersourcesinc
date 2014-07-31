<?php
require("dbconnect.php");

$tbl_name="Contactus";

echo $email = $_POST['email'];
echo $name = $_POST['name'];
echo $message = $_POST['message'];

#header("Location: http://localhost"); 
#die("Redirecting to http://localhost");

// Check if a file has been uploaded
if(is_uploaded_file($_FILES['file']['tmp_name'])) {
    
    // Make sure the file was sent without errors
    if($_FILES['file']['error'] == 0) {

        $file_name = $_FILES['file']['name'];
        $file_size = intval($_FILES['file']['size']);
        // $file_data = file_get_contents($_FILES['file']['tmp_name']);
        $file_data = $_FILES['file']['tmp_name'];
        
        $sql="INSERT INTO Contactus(email, name, message, file_name, file_size, file_data)
			VALUES('$email', '$name', '$message', '$file_name', '$file_size', '$file_data')";
		
		$result=mysql_query($sql);
		
 	// 	$result = ($query);
 	// 	if($result) {
  //           echo 'Success! Your file was successfully added!';
  //       }
  //       else {
  //           echo 'Error! Failed to insert the file'
  //       }
        
  //       mysql_close();
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['file']['error']);
    }
}
?>