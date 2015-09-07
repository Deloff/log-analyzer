<?php
/**
 * @author Deller myogogo@gmail.com
 */

namespace LogAnalyzer\Validator\Console;


use LogAnalyzer\Validator\AbstractValidator;

class NotEmptyORValidator extends AbstractValidator {

    /**
     * @param string $name
     * @param array $options
     */
    public function __construct($name, array $options = [])
    {
        $this->setName($name);
        $this->setOptions($options);
    }

    /**
     * @param mixed $value
     * @return bool
     * @throws \Exception
     */
    public function valid($value)
    {
        $result = [];
        if(!is_array($value)) {
            throw new \Exception('$value is not array');
        }
        $keys = array_keys($value);
        $optionsVal = array_values($this->getOptions()['or']);
        if($res = array_intersect($keys, $optionsVal)) {
            $result = array_filter($res, function($val) use($value) {
                return !empty($value[$val]);
            });
            if(count($result) == count($optionsVal)) {
                $result = [];
            }
        }

        return count($result) ? true : false;
    }
}