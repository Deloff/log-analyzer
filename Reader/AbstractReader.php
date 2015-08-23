<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace LogAnalyzer\Reader;


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


}