<?php
/**
 * @author Deller myogogo@gmail.com
 */

namespace LogAnalyzer\Console;


class CommonArgumentsConsole
    extends AbstractArgumentsConsole
    implements ConsoleArgumentsInterface {
    /**
     * @var string
     */
    protected $type = '';

    /**
     * @var string
     */
    protected $service = '';

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
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

    /**
     * @return array
     */
    public function getOptions()
    {
        return ['s::t::', ['service::','type::']];
    }


}