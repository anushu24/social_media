<div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
		<hr>
		<a class="btn btn-success" href="change_pic.php">Change Profile Picture</a>
      </div>
		<div class="col-md-5">
			<hr>
			<p>Personal Info</p>
				<?php
            $sql ="select * from user_login where user_id = '$session_id'";
            $query=mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($query);
			$id = $row['user_id'];
			?>
			<hr>
		
		</div>
      <div class="col-md-5">
			<form method="post" action="post.php">
						<textarea name="content" placeholder="Share your Story Here"></textarea>
						<br>
						<hr>
						<button class="btn btn-success"><i class="icon-share"></i> Share </button>
			</form>
      </div>
    </div> 