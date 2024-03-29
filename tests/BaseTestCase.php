<?php

namespace CureDAO\Tests;

use PHPUnit\Framework\TestCase;
class BaseTestCase extends TestCase
{

    /**
     * @param string $className
     * @param $body
     * @return void
     */
    protected function generateModels(string $className, $body, string $namespace = "CureDAO\\Client\\Models"): void{
        if(!$_ENV['GENERATE_MODELS']){
            return;
        }
        $generator = new PhpGenerator(true, true, $namespace);
        $classes = $generator->fromJson($className, json_encode($body));
        foreach ($classes as $className => $content) {
            try {
                $content = str_replace("private $", "public $", $content);
                file_put_contents(__DIR__ . "/../lib/Models/{$className}.php", $content);
            } catch (\Throwable $e) {
                error_log("Could not generate model: " . $className . " because: " . $e->getMessage());
            }
        }
    }
}
