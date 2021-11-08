<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];
switch ($opponentWeapon) {
    case 'fists':
        $indyWeapon = 'gun';
        break;
    case 'whip':
        $indyWeapon = 'fists';
        break;
    case 'gun':
        $indyWeapon = 'whip';
        break;
}
echo "The opponent chooses the " . $opponentWeapon . " so Indy should use his " . $indyWeapon . '.';
?>