<?php
/**
 * @author Deller myogogo@gmail.com
 */

class Init {

    public function __construct()
    {
        spl_autoload_extensions(".php"); // comma-separated list
        spl_autoload_register();
    }

    public function run()
    {
        $config = require_once('config/config.php');
        if(PHP_SAPI == 'cli') {
            $services = $config['logAnalyzer']['service'];
            $typeOption = getopt('s:'.'service:');
            if(empty($typeOption) || !in_array($typeOption, array_keys($services))) {
                throw new \Exception('Invalid type');
            }

        }
    }
}