<?php
$movies = [
    "Indiana Jones et la dernière croisade" => 1989,
    "Indiana Jones et le Temple maudit" => 1984,
    "Indiana Jones et le Royaume du crâne de cristal" => 2008,
];
asort($movies);
foreach ($movies as $releaseDate => $movieTitle) {
    echo '> ' . $movieTitle . ' - ' . $releaseDate;
    echo "<br>";
};
?>