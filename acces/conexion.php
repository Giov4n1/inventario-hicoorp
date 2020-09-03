<?php
function getConnexion()
{
  $mysqli = new Mysqli('localhost', 'hicoo158_dbadmin', 'Gooroo2b2020', 'hicoo158_si');
  if($mysqli->connect_errno) exit('Error en la conexin: ' . $mysqli->connect_errno);
  $mysqli->set_charset('utf8');
  return $mysqli;
}
