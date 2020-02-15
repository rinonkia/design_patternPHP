<?php

require_once __DIR__ . '/Factory/CharacterFactory.php';

$chars = [
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L',
    'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
    'Y', 'Z'
];

$factory = CharacterFactory::getInstance();

for ($i=0; $i<20; $i++) {
    $select_char = $chars[rand(0, 25)];
    echo sprintf('%s/', $select_char);
    $factory->addCharacter($select_char);
}

echo "\n--------\n";

foreach ($factory->getCharacters() as $char_data) {
    echo sprintf("文字列： %s\n", $char_data->getCharacter());
}
