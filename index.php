<?php
// Mostra tutti gli errori/notice/warning
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$partite = [
  [
    'casa' => [
      'squadra' => 'Olimpia',
      'punteggio' => 78
    ],
    'ospite' => [
      'squadra' => 'Gervasio',
      'punteggio' => 68
    ],
  ],
  [
    'casa' => [
      'squadra' => 'Atletica',
      'punteggio' => 72
    ],
    'ospite' => [
      'squadra' => 'Sportiva',
      'punteggio' => 89
    ],
  ],
]

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
      <?php
        for ( $i = 0; $i < count($partite); $i++ ) {
          echo $partite[$i]['casa']['squadra'].' - '
          .$partite[$i]['ospite']['squadra'].'<br>'
          .$partite[$i]['casa']['punteggio'].' - '
          .$partite[$i]['ospite']['punteggio'].'<br>';
        }
      ?>
    </p>
  </main>

</body>
</html>
