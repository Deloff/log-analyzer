<?php
/**
 * @author Deller myogogo@gmail.com
 */

namespace LogAnalyzer\Console;


class FileArgumentsConsole extends AbstractArgumentsConsole {
    /**
     * @var array
     */
    protected $shortArguments = [
        'f:',
        'form:'
    ];

    protected $longArguments = [
        'file:',
        'format:'
    ];

    /**
     * @return array
     */
    public function getShortArguments()
    {
        return $this->shortArguments;
    }

    /**
     * @param array $shortArguments
     */
    public function setShortArguments($shortArguments)
    {
        $this->shortArguments = $shortArguments;
    }

    /**
     * @return array
     */
    public function getLongArguments()
    {
        return $this->longArguments;
    }

    /**
     * @param array $longArguments
     */
    public function setLongArguments($longArguments)
    {
        $this->longArguments = $longArguments;
    }

}