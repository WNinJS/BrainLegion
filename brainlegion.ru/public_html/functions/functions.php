<?
  $mysqli = new mysqli('localhost', 'root', '', 'brainLegion');
  $mysqli->query("SET NAMES 'utf8'");

  function getFromOneTable($table)
  {
    $exampleDB = $mysqli->query("SELECT * FROM `".$table."`");
    $ourData;
    while(($row = $exampleDB->fetch_assoc()) != false)
    {
      $ourData[] = $row;
    }
    return $ourData;
  }

  function getFromOneTable_OneCurrentAttribute($table, $attribute)
  {
    $exampleDB = $mysqli->query("SELECT `".$attribute."` FROM `".$table."`");
    $ourData;
    while(($row = $exampleDB->fetch_assoc()) != false)
    {
      $ourData[] = $row;
    }
    return $ourData;
  }
?>
