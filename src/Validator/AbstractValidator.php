<?php
/**
 * @author Deller myogogo@gmail.com
 */

namespace LogAnalyzer\Validator;


abstract class AbstractValidator {

    /**
     * @var array
     */
    protected $errorText = [];

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param mixed $value
     * @return bool
     */
    abstract public function valid($value);
}