<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace LogAnalyzer\Parser;


use LogAnalyzer\Parser\Exception\InvalidArgumentException;

abstract class AbstractParser {

    /**
     * Данные приходящие в парсер в виде строки
     * @var string
     */
    protected $data = '';

    /**
     * @param string $data
     */
    public function __construct($data)
    {
        if(empty($data) || !is_string($data)) {
            throw new InvalidArgumentException("Incorrect data set into parser");
        }
        $this->setData($data);
    }

    /**
     * Parse log
     * @return mixed
     */
    abstract public function parse();

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}