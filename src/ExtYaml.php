<?php

declare(strict_types=1);

namespace Acme;

final class ExtYaml
{
    public function __construct(private string $source, private string $fileName)
    {
    }

    public function parse()
    {
        return \yaml_parse($this->source);
    }

    public function parseFile()
    {
        return \yaml_parse_file($this->fileName);
    }
}
