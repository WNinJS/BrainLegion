<?
  session_start();
  $GLOBALS['mysqli'] = new mysqli('localhost', 'root', '', 'brainLegion');
  $GLOBALS['mysqli']->query("SET NAMES 'utf8'");

  function getFromOneTable($table)
  {
    $exampleDB = $GLOBALS['mysqli']->query("SELECT * FROM `".$table."`");
    $ourData;
    while(($row = $exampleDB->fetch_assoc()) != false)
    {
      $ourData[] = $row;
    }
    return $ourData;
  }

  function getFromOneTable_OneCurrentAttribute($table, $attribute)
  {
    $exampleDB = $GLOBALS['mysqli']->query("SELECT `".$attribute."` FROM `".$table."`");
    $ourData;
    while(($row = $exampleDB->fetch_assoc()) != false)
    {
      $ourData[] = $row;
    }
    return $ourData;
  }

  function getFromOneTableWithCondition($table, $attribute, $condition)
  {
    $exampleDB = $GLOBALS['mysqli']->query("SELECT * FROM `".$table."` WHERE `".$attribute."` = '".$condition."'");
    $ourData;
    while(($row = $exampleDB->fetch_assoc()) != false)
    {
      $ourData[] = $row;
    }
    return $ourData;
  }
?>
