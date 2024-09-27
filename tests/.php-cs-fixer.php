<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__)       // Dies gibt das Verzeichnis an, das durchsucht werden soll
    ->exclude('vendor'); // Optional: Schließt das `vendor`-Verzeichnis von der Überprüfung aus

$config = new Config();
$config
    ->setRules([
        '@PSR12' => true,
        // Weitere Regeln hier hinzufügen
    ])
    ->setFinder($finder);

return $config;
