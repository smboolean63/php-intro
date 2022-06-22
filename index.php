<?php

$lista = ['pane', 'latte', 'vino'];
$lista[] = 'biscotti';

$persona = [
    'nome' => 'Samuele',
    'cognome' => 'Madrigali',
    'eta' => 30,
    'amici' => [
        'Federico',
        'Maurizio'
    ],
];
$persona['indirizzo'] = "non ve lo dico!";

$studenti = [
    [
        "nome" => "Paolo",
        "cognome" => "Bianchi"
    ],
    [
        "nome" => "Mario",
        "cognome" => "Rossi"
    ]
];

// echo $lista[0];
// echo $persona['nome'];
// echo $persona['amici'][0];
// var_dump($studenti);
// echo $studenti[1]['cognome'];
// echo $studenti[0]['nome'];

$htmlUL = "";
for($i = 0; $i < count($lista); $i++) {
    $htmlUL .= "<li>$lista[$i]</li>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista Spesa</h2>
    <ul>
        <?php
            for($i = 0; $i < count($lista); $i++) {
                echo "<li>$lista[$i]</li>";
            }
        ?>
    </ul>
    <hr>
    <ul>
        <?php for($i = 0; $i < count($lista); $i++) { ?>
            <li><?php echo $lista[$i]; ?></li>
        <?php } ?>
    </ul>
    <hr>
    <ul>
        <?php for($i = 0; $i < count($lista); $i++): ?>
            <li><?= $lista[$i]; ?></li>
        <?php endfor; ?>
    </ul>
    <hr>
    <ul>
        <?= $htmlUL; ?>
    </ul>
</body>
</html>