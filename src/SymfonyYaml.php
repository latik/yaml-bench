<?php

declare(strict_types=1);

namespace Acme;

use Symfony\Component\Yaml\Yaml;

final class SymfonyYaml
{
    public function __construct(private string $source, private string $fileName)
    {
    }

    public function parse()
    {
        return Yaml::parse($this->source);
    }

    public function parseFile()
    {
        return Yaml::parseFile($this->fileName);
    }
}
