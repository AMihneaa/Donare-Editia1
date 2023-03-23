<?php

//delete.php

if(isset($_POST["id"]))
{
 
$connect = new PDO('mysql:host=localhost;dbname=u824022186_calendar', 'u824022186_mihneacalendar', '?LcS@4y6Ns4');

 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>
