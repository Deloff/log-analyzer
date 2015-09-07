<?php
/**
 * @author Deller myogogo@gmail.com
 */

namespace LogAnalyzer\Console;


class AbstractFactoryArgumentsConsole {

    /**
     * @param string $name
     */
    public static function createArgumentsClass($name) {
        if(!$name) {
            throw new \InvalidArgumentException('Arguments class name can not be empty');
        }
        $className = __NAMESPACE__ . '\\'. ucfirst($name);
        if(!class_exists($className) && !class_exists($className . 'ArgumentsConsole')) {
            throw new \RuntimeException('Class ' . $name . ' not exists');
        } elseif(class_exists($className . 'ArgumentsConsole')){
            $className = $className . 'ArgumentsConsole';
        }
        $class = new $className();
        if(!$class instanceof ConsoleArgumentsInterface) {
            throw new \RuntimeException('!' . $className . ' instanceof ConsoleArgumentsInterface');
        }
        return $class;
    }
}