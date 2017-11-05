<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ticket de caisse</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

<h1>Affichage simple</h1>
<!-- ///////////////////////////////////////////
///////////////Challenge partie 1///////////////
//////////////////////////////////////////// -->
<?php

$articles = [
    [
        "produit" => "pc",
        "qt" => 4,
        "prixU" => 1299.90
    ],
    [
        "produit" => "tablette",
        "qt" => 10,
        "prixU" => 499.90
    ],
    [
        "produit" => "iPhone",
        "qt" => 10,
        "prixU" => 599.90
    ]
];

// Exemple pour parcourir un tableau
// foreach ($articles as $key => $article) {
//     foreach ($article as $key => $value) {
//         print_r($key.' : '.$value.'<br>');
//     }
//     print_r('<br>');
// }


echo '<ul>';

foreach ($articles as $key => $article) {
    echo '<li>';
    echo $article['produit'].' : '.$article['qt'].' * '.$article['prixU'].' = '.$article['qt']*$article['prixU'].' &euro;';
    echo '</li>';
}

echo '</ul>';

?>

<!-- //////////////Fin Partie 1///////////// -->

<h1>Bonus 1</h1>
<!-- ///////////////////////////////////////////
///////////////Challenge bonus 1////////////////
//////////////////////////////////////////// -->

<?php

$ticketCaisse = [
    [
        "produit" => "Macbook Air",
        "prixU" => 1299.90,
        "qt" => 4,
    ],
    [
        "produit" => "Galaxy Tab 5",
        "prixU" => 499.90,
        "qt" => 1,
    ],
    [
        "produit" => "iPhone 6",
        "prixU" => 599.90,
        "qt" => 2,
    ],
    [
        "produit" => "Clés USB 64 Go",
        "prixU" => 24.90,
        "qt" => 12,
    ],
    [
        "produit" => "iPhone 6",
        "prixU" => 599.90,
        "qt" => 10,
    ],
];

?>

<table border="1">
    <thead>
        <tr>
            <th>Désignation</th>
            <th>Prix unitaire</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
    </thead>

<?php

echo '<tbody>';

foreach ($ticketCaisse as $key => $article) {
    echo '<tr>';
    foreach ($article as $key => $value) {
        echo '<td>';
        if ($key === 'prixU') {
            echo $value.' &euro;';
        }
        else {
            echo $value;
        }
        echo '</td>';
    }
    echo '<td>'.$article['prixU'] * $article['qt'].' &euro;</td>';
    echo '</tr>';
}

echo '</tbody>';

$montantAPayer = 0;
foreach ($ticketCaisse as $key => $article) {
    $montantAPayer += $article['prixU'] * $article['qt'];
}

?>

    <tfoot>
        <tr>
            <th colspan="3">Total</th>
            <td><?= $montantAPayer;?> &euro;</td>
        </tr>
    </tfoot>
</table>

<!-- //////////////Fin Bonus 1////////////// -->

<h1>Bonus 2</h1>
<!-- ///////////////////////////////////////////
///////////////Challenge bonus 2////////////////
//////////////////////////////////////////// -->

<table class="bonus2" border="1">
    <thead>
        <tr>
            <th>Désignation</th>
            <th>Prix unitaire</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
    </thead>
<?php

echo '<tbody>';

foreach ($ticketCaisse as $key => $article) {
    echo '<tr>';
    foreach ($article as $key => $value) {
        echo '<td>';
        if ($key === 'prixU') {
            $value = number_format($value, 2, '.', ',');
            echo $value.' &euro;';
        }
        else {
            echo $value;
        }
        echo '</td>';
    }
    $totalArticle = $article['prixU'] * $article['qt'];
    $totalArticle = number_format($totalArticle, 2, '.', ',');
    echo '<td>'.$totalArticle.' &euro;</td>';
    echo '</tr>';
}

echo '</tbody>';

$montantAPayer = 0;
foreach ($ticketCaisse as $key => $article) {
    $montantAPayer += $article['prixU'] * $article['qt'];
}

?>
        <tfoot>
            <tr>
                <th colspan="3">Total</th>
                <td><?= number_format($montantAPayer, 2, '.', ',');?> &euro;</td>
            </tr>
        </tfoot>
    </table>
    </body>
</html>

<!-- //////////////Fin Bonus 2////////////// -->
