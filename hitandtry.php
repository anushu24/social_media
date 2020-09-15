<?php
  $row="";

  $link = mysql_connect("localhost","username","password");
  mysql_select_db("database");
  $query = "SELECT * from posts ORDER by post_id DESC limit 0,5";
  $result = mysql_query($query);
  $result = mysql_query($query) or die("Query to get blah failed with error:".mysql_error());

  while($row = mysql_fetch_array($result)) { 
    echo "<div id='display'>";
    echo "<h3 class='name'>".$row['username']."</h3>";
    echo "<h1 class='title' >".$row['post_title']."</h1>";
    echo "<p class='cat'>".$row['cat']."</p>";
    echo "<p class='sub_cat'>".$row['sub_cat']."</p>";
    echo "<p class='desc'>".$row['post_desc']."</p>";
    echo "</div>";
  } 
  
  mysql_close($link);
?>

<div id='display'>
  <h3 class='name'></h3>
  <h1 class='title'></h1>
  <p class='desc'></p>
  <p class='cat'></p>
  <p class='sub_cat'></p> 
</div>

<?php
  $row="";

  $link = mysql_connect("localhost","username","password");
  mysql_select_db("database");
  $query = "SELECT * from posts ORDER by post_id DESC limit 0,5";
  $result = mysql_query($query);
  $result = mysql_query($query) or die("Query to get blah failed with error:".mysql_error());

  while($row = mysql_fetch_array($result)) { 
    echo "<div id='display'>";
    echo "<h3 class='name'>".$row['username']."</h3>";
    echo "<h1 class='title' >".$row['post_title']."</h1>";
    echo "<p class='cat'>".$row['cat']."</p>";
    echo "<p class='sub_cat'>".$row['sub_cat']."</p>";
    echo "<p class='desc'>".$row['post_desc']."</p>";
    echo "</div>";
  } 

  mysql_close($link);
?>

<?php echo $content; ?>
<?php echo $location; ?>

$_SESSION['fname'];

