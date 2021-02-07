<?php
require('includes/config.php');
error_reporting(0);


			$query="delete from book where b_id =".$_GET['sid'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:all_book.php");

?>