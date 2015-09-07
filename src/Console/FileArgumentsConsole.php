<?php
/**
 * @author Deller myogogo@gmail.com
 */

namespace LogAnalyzer\Console;


class FileArgumentsConsole extends AbstractArgumentsConsole implements ConsoleArgumentsInterface {

    /**
     * @var string
     */
    protected $format = '';

    /**
     * @var string
     */
    protected $file = '';

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return get_object_vars($this);
    }


}