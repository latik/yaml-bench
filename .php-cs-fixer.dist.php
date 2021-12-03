<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(false)
    ->setRules(
        [
            '@PSR1' => true,
            '@PSR12' => true,
            '@PhpCsFixer' => true,
        ]
    )->setFinder($finder);
