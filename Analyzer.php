<?php
/**
 * @author Deller myogogo@gmail.com
 */
namespace LogAnalyzer;

use LogAnalyzer\Console;
use LogAnalyzer\Validator\Console\NotEmptyORValidator;

class Analyzer {

    /**
     *
     */
    public function init()
    {
        spl_autoload_register(function ($className){
            $path = explode('\\', $className);
            unset($path[0]);
            $classFile = __DIR__
                . DIRECTORY_SEPARATOR
                .'src'
                . DIRECTORY_SEPARATOR
                . implode(DIRECTORY_SEPARATOR, $path)
                . '.php';
            if(file_exists($classFile)) {
                require_once $classFile;
            }
        });
    }

    /**
     *
     */
    public function run()
    {
        try {
            $config = require_once('config/config.php');
            /** @var Console\CommonArgumentsConsole $commonConsoleArguments */
            $commonConsoleArguments = Console\AbstractFactoryArgumentsConsole::createArgumentsClass('common');
            $options = $commonConsoleArguments->getOptions();
            $optionsValues = getopt($options[0], $options[1]);
            $validator = new NotEmptyORValidator('notEmptyOrValidator', [
                'or' => str_replace(':','',$options[1])
            ]);
        } catch (\Exception $e) {
            echo $e->getMessage()
                . PHP_EOL
                . $e->getTraceAsString()
                . PHP_EOL;
        }
    }
}