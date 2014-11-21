<?php
mysql_connect(
"127.0.0.1",
"j_lambie"
);
mysql_select_db("world");


$LOOKUP = $_REQUEST['lookup'];
$ALL=$_REQUEST['all'];
if($LOOKUP){
# execute a SQL query on the database
$results = mysql_query("SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';");
# loop through each country
while ($row = mysql_fetch_array($results)) {
  ?>
  <li> <?php echo $row["name"]; ?>, ruled by <?php echo $row["head_of_state"]; ?> </li>
  <?php
}

}
elseif($ALL=="true"){
  $results= mysql_query("SELECT * FROM countries");
  while ($row = mysql_fetch_array($results)) {
  ?>
  <li> <?php echo $row["name"]; ?>, ruled by <?php echo $row["head_of_state"]; ?> </li>
  <?php
}
}
else{
  echo "";
}


?>
