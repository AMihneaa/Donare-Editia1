<?php

//update.php


$servername = "localhost";
$username = "u824022186_mihneacalendar";
$password = "?LcS@4y6Ns4";



$connect = new PDO("mysql:host=$servername;dbname=u824022186_calendar", $username, $password);

if(isset($_POST["id"]))
{
 $query = "
 UPDATE events 
 SET title=:title, start_event=:start_event, end_event=:end_event 
 WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':id'   => $_POST['id']
  )
 );
}

?>