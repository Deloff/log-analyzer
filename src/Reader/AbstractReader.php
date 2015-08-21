<?php
/**
 * @author Deller myogogo@gmail.com
 */

namespace LogAnalyzer\Reader;


use LogAnalyzer\Reader\Exception\InvalidResource;

abstract class AbstractReader {

    /**
     * @var string
     */
    private $resource = '';

    /**
     * @param $resource
     */
    public function __construct($resource)
    {
        if(empty($resource)) {
            throw new InvalidResource('Resource can not be empty');
        }
        $this->setResource($resource);
    }

    /**
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param string $resource
     * @return $this
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @return string
     */
    abstract public function read();
}