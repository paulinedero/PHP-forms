<?php
$movies = [
    "Indiana Jones et la dernière croisade" => ['Harrison Ford', 'Sean Connery', 'Alison Doody'],
    "Indiana Jones et le Temple maudit" => ['Harrison Ford', 'Kate Capshaw', 'Ke Huy Quan'],
    "Indiana Jones et le Royaume du crâne de cristal" => ['Harrison Ford', 'Cate Blanchett', 'Shia LaBeouf']
];
foreach ($movies as $movie => $actors) {
    echo $movie;
    echo "<br>";
    foreach ($actors as $actor) {
        echo ' - ' . $actor;
        echo "<br>";
    }
};
?>