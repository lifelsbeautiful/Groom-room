<?

require_once('connect.php');

echo '<br>';

function registrationUser($cr, $login, $password)
{
  $sql = "INSERT INTO `tabel-user` (`Id`, `Login`, `Password`, `Role`) VALUES ('NULL', '$login', '$password', 'bot')";
  if ($cr->query($sql) === TRUE) {
    echo "Пользователь создан";
  } else {
    echo "Error: " . $sql . "<br>" . $cr->error;
  }
}
session_start();

$login = $_POST["login"];
$password = $_POST["password"];
$repeat_password = $_POST["repeat"];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $repeat_password === $password) {
  registrationUser($cr, $login, $password);
} else {
  echo "Произошла ошибка. пароли не совпадают";
}

function authorizationUser($cr, $login, $password)
{
  $users =  mysqli_query($cr, "SELECT * FROM `users`");
  $mass = [];
  while ($mas = mysqli_fetch_assoc($users)) {
    array_push($mass, [$mas['login'], $mas['password']]);
  }
  $result = '';
  for ($i = 0; $i < count($mass); $i++) {
    if ($login === $mass[$i][0] && $password === $mass[$i][1]) {
      $result = 'Вход выполнен успешно';
      break;
    }
  }
  if ($result === 'succses') {
    echo 'Авторизация выполнена успешно';
  } else {
    echo 'пользователь не найден или неправильно введен пароль';
  }
}
session_start();

$login = $_POST["login"];
$password = $_POST["password"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION["userkey"] = authorizationUser($mass, $login, $password);
}

function examination($cr, $login)
{
  $users =  mysqli_query($cr, "SELECT * FROM `users`");
  $mass = [];
  while ($mas = mysqli_fetch_assoc($users)) {
    array_push($mass, [$mas['login'], $mas['role']]);
  }
  for ($i = 0; $i < count($mass); $i++) {
    if ($login === $mass[$i][0]) {
      return $mass[$i][1];
      break;
    }
  }
}



$connect = $_POST['connect'];


switch ($type) {
  default:
    echo 'Error';
    break;
  case "REGISTER_USER":
    echo json_encode(registrationUser($cr, $_POST['login'], $_POST['password']));
    break;
  case "LOGIN_USER":
    echo json_encode(authorizationUser($cr, $_POST['login'], $_POST['password']));
    break;
  case "EXAMINATION_USER":
    echo json_encode(examination($cr, $_POST['login']));
    break;
}
