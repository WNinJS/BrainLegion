<?
  $GLOBALS['mysqli'] = new mysqli('localhost', 'root', '', 'brainLegion');
  $GLOBALS['mysqli']->query("SET NAMES 'utf8'");

  if($_GET['type'] == 'img')
  {
    $GLOBALS['mysqli']->query("DELETE FROM `".$_GET['type']."` WHERE `idImg` ='".$_POST['sex']."'");
  }
  else
  {
    $GLOBALS['mysqli']->query("DELETE FROM `".$_GET['type']."` WHERE `id` ='".$_POST['sex']."'");
  }

?>
