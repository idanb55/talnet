<?php
if (!defined("TALNET_ENABLED"))
{
  require_once ("Communicate.php");
  require_once ("Entry.php");
  require_once ("BaseCondition.php");
  require_once ("Condition.php");
  require_once ("Table.php");
  require_once ("User.php");
  session_start();
  define("TALNET_ENABLED", TRUE);
}
?>
