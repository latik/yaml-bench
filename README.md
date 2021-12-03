# YAML PHP Benchmark

### Requirements

To run the tests yourself make sure you have met the following requirements:

- [PECL YAML](http://pecl.php.net/package/yaml) *(uses LibYAML)*
- [Symfony/Yaml](http://symfony.com/doc/current/components/yaml/introduction.html) *(pure PHP)*

Installing PECL Yaml can be done by running:
```bash
$ pecl install yaml
```

Symfony/Yaml should be installed using [Composer](https://getcomposer.org/) by running:
```bash
$ composer install
```

### Results

```bash
$ composer bench

> phpbench run tests/Benchmark --report=default
PHPBench (1.2.0) running benchmarks...
with PHP version 8.1.0, xdebug ✔, opcache ❌

\Acme\Tests\Benchmark\YamlBench

    bench_SymfonyYaml_parse.................I0 - Mo675.433μs (±0.00%)
    bench_ExtYaml_parse.....................I0 - Mo28.235μs (±0.00%)
    bench_SymfonyYaml_parseFile.............I0 - Mo732.164μs (±0.00%)
    bench_ExtYaml_parseFile.................I0 - Mo64.400μs (±0.00%)

Subjects: 4, Assertions: 0, Failures: 0, Errors: 0
+------+-----------+-----------------------------+-----+------+------------+-----------+--------------+----------------+
| iter | benchmark | subject                     | set | revs | mem_peak   | time_avg  | comp_z_value | comp_deviation |
+------+-----------+-----------------------------+-----+------+------------+-----------+--------------+----------------+
| 0    | YamlBench | bench_SymfonyYaml_parse     |     | 1000 | 1,145,928b | 675.433μs | +0.00σ       | +0.00%         |
| 0    | YamlBench | bench_ExtYaml_parse         |     | 1000 | 746,328b   | 28.235μs  | +0.00σ       | +0.00%         |
| 0    | YamlBench | bench_SymfonyYaml_parseFile |     | 1000 | 1,146,256b | 732.164μs | +0.00σ       | +0.00%         |
| 0    | YamlBench | bench_ExtYaml_parseFile     |     | 1000 | 746,328b   | 64.400μs  | +0.00σ       | +0.00%         |
+------+-----------+-----------------------------+-----+------+------------+-----------+--------------+----------------+
```