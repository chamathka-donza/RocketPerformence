<?php
     session_start();
     $name = "";
	$body_price = "";
	$id = 0;
	$edit_state=false;


$db = mysqli_connect('localhost', 'root', '', 'mcrud');


        if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$body_price = $_POST['body_price'];

      	$query="INSERT INTO myinfo (name,body_price) VALUES ('$name', '$body_price')"; 
		mysqli_query($db,$query);
		$_SESSION['msg'] = "Address saved"; 
		header('location: project.php');
	}

	if (isset($_POST['update'])) {
		$name=mysql_real_escape_string($_POST['name']);
		$address=mysql_real_escape_string($_POST['body_price']);
		$id=mysql_real_escape_string($_POST['id']);

		mysqli_query($db,"UPDATE myinfo SET name='$name',body_price='$body_price' WHERE id=$id");
			$_SESSION['msg'] = "Address updated";
			header('location:project.php') ;
	}
    if (isset($_GET['del'])) {
 	     $id = $_GET['del'];
	mysqli_query($db, "DELETE FROM myinfo WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: project.php');
}
   $results =mysqli_query($db,"SELECT*FROM myinfo");
?>