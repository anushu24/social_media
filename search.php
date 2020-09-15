<?php
   include 'connection.php';
   if(isset($_POST["query"]))
   {
   	$output = '';
   	$query = "SELECT * FROM user_login WHERE username LIKE '%".$_POST["query"]."%' ";
   	$result = mysqli_query($conn, $query);
   	$output = '<ul class="list-unstyled">';
   	if(mysqli_num_rows($result) > 0)
   	{
   		while($row = mysqli_fetch_array($result))
   		{
   			$output .= '<li>'.$row["username"].'</li>';
   		}
   	}
   	else
   	{
   		$output .= '<li>User not found</li>';
   	}
   	$output .= '<ul>';
   	echo $output;
   }
?>

