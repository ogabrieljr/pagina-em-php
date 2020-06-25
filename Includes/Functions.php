<?php
function Redirect($New_Location)
{
  header("Location: " . $New_Location);
  exit;
}

function TentativaDeLogin($Name, $Password)
{
  global $ConectarDB;
  $sql = "SELECT * FROM users WHERE name=:name AND password=sha2(:password, 224)";
  $stmt = $ConectarDB->prepare($sql);
  $stmt->bindValue(":name", $Name);
  $stmt->bindValue(":password", $Password);

  $stmt->execute();

  $Result = $stmt->rowCount();

  if ($Result) {
    return $ContaEncontrada = $stmt->fetch();
  } else {
    return;
  }
}
