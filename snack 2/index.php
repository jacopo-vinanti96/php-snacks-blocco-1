<?php
// Mostra tutti gli errori/notice/warning
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = $_GET['name'];
$age = $_GET['age'];
$mail = $_GET['mail'];
$msg = 'Accesso negato';

if ( strlen( $name ) > 3 ) {
  if ( strpos( $mail, '.' ) !== false && strpos( $mail, '@' ) !== false ) {
    if ( is_nan( $age ) == false ) {
      $msg = 'Accesso riuscito';
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Snacks</title>
</head>
<body>
  <main>
    <p>
      <?php echo $msg; ?>
    </p>
  </main>

</body>
</html>
