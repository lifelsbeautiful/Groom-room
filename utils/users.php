<?

require_once ('connect.php');

echo '<br>';

function registrationUser($cr, $login, $password) {
  $sql = "INSERT INTO `tabel-user` (`Id`, `Login`, `Password`, `Role`) VALUES ('NULL', '$login', '$password', 'bot')";
  if ($cr->query($sql) === TRUE) {
    echo "Пользователь создан";
  } else {
    echo "Error: " . $sql . "<br>" . $cr->error;
  }
}

function authorizationUser($cr, $login, $password) {
  $users =  mysqli_query($cr, "SELECT * FROM `users`");
  $mass = [];
  while ($mass = mysqli_fetch_assoc($users)) {
    array_push($mass, [$mass['login'], $mass['password']]);
  }
  $result = '';
  for ($i=0; $i < count($mass); $i++) {
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

?>