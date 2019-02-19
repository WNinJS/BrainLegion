<?
  $GLOBALS['mysqli'] = new mysqli('localhost', 'root', '', 'brainLegion');
  $GLOBALS['mysqli']->query("SET NAMES 'utf8'");
  
  $GLOBALS['mysqli']->query("DELETE FROM `news` WHERE `id` ='".$_POST['sex']."'");
?>
