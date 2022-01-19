<?

require_once ('connect.php');

function сreateApplication($cr, $nickname, $category) {
  $standart = 'in process';
  $date = date('Y-m-d');
  $sql = "INSERT INTO `table-applications` (`id`, `nickname`, `before-foto`, `after-foto`, `vrem`, `category`, `status`) VALUES (NULL, '$nickname', 'before', 'after', '$date', '$category', '$standart')";
  if ($cr->query($sql) === TRUE) {
    echo "Заявка создана";
}
function obtainingAllApp($cr) {
  $app =  mysqli_query($cr, "SELECT * FROM `table-applications`");
  $mass = [];
  while ($val = mysqli_fetch_assoc($app)) {
    array_push($mass, [$mas['id'], $mas['nickname'], $mas['before-foto'], $mas['after-foto'], $mas['vrem'], $mas['category'], $mas['status']]);
  }
  for ($i=0; $i < count($mass); $i++) {
    for ($j=0; $j < count($mass[$i]); $j++) { 
      echo $mass[$i][$j]. " ";
    }
    echo '<br>';
  }
}
function receivingAppId($cr, $id) {
  for ($idx=0; $idx < count($id); $idx++) { 
    $app =  mysqli_query($cr, "SELECT * FROM `table-applications` Where `id` = '$id[$idx]'");
    $mass = [];
    while ($val = mysqli_fetch_assoc($app)) {
      array_push($mass, [$mas['id'], $mas['nickname'], $mas['before-foto'], $mas['after-foto'], $mas['vrem'], $mas['category'], $mas['status']]);
    }
    for ($i=0; $i < count($mass); $i++) {
      for ($j=0; $j < count($mass[$i]); $j++) { 
        echo $mass[$i][$j]. " ";
      }
      echo '<br>';
    }
  }
}
function removingApp($cr, $nickname) {
  $sql = "DELETE FROM `application` WHERE `table-applications`.`nickname` = '$nickname'";
  if ($cr->query($sql) === TRUE) {
    echo "Заявки удалены";
}
function appStatusChanges($cr, $nickname, $status) {
  $sql = "UPDATE `table-applications` SET `status` = '$status' WHERE `nickname` = '$nickname'";
  if ($cr->query($sql) === TRUE) {
    echo "Статус изменен";
}
?>