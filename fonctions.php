<?php
function writeSecretSentence ( string $animal, string $thing): string {
    return "$animal s'incline face à $thing.";
}
echo writeSecretSentence('Le chat', 'la lune');
?>