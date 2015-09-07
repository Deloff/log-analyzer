<?php
/**
 * @author Deller myogogo@gmail.com
 */

namespace LogAnalyzer\Console;


abstract class AbstractArgumentsConsole {




    /**
     * @var string
     */
    protected $storage = 'file';

    /**
     * @return string
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * @param string $storage
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;
        return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param string $service
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

}