<?php

declare(strict_types=1);

namespace Acme\Tests\Benchmark;

use Acme\ExtYaml;
use Acme\SymfonyYaml;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

final class YamlBench
{
    private SymfonyYaml $symfonyYaml;
    private ExtYaml $extYaml;

    public function __construct()
    {
        $this->fileName = __DIR__.'/yaml/example-3.yml';
        $this->source = \file_get_contents($this->fileName);

        $this->symfonyYaml = new SymfonyYaml($this->source, $this->fileName);
        $this->extYaml = new ExtYaml($this->source, $this->fileName);
    }

    /**
     * @Revs(1000)
     */
    public function bench_SymfonyYaml_parse()
    {
        $this->symfonyYaml->parse();
    }

    /**
     * @Revs(1000)
     */
    public function bench_ExtYaml_parse()
    {
        $this->extYaml->parse();
    }

    /**
     * @Revs(1000)
     */
    public function bench_SymfonyYaml_parseFile()
    {
        $this->symfonyYaml->parseFile();
    }

    /**
     * @Revs(1000)
     */
    public function bench_ExtYaml_parseFile()
    {
        $this->extYaml->parseFile();
    }
}
