<?php
function Redirect($New_Location)
{
  header("Location: " . $New_Location);
  exit;
}
