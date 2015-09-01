<?php
/**
 * @author Deller myogogo@gmail.com
 */

namespace LogAnalyzer\Reader;


use LogAnalyzer\Reader\Adapter\AbstractAdapter;
use LogAnalyzer\Reader\Exception\InvalidResource;

class FileReader extends AbstractReader implements ReaderInterface {

    /**
     * @var AbstractAdapter
     */
    protected $adapter;

    /**
     * @var \SplFileObject
     */
    protected $file;

    /**
     * Return
     * @return \SplFileObject
     */
    private function getFileObject()
    {
        $resource = $this->getAdapter()->get($this->getResource());
        $fileObject = new \SplFileObject($resource);
        return $fileObject;
    }

    /**
     * Read file and return data as string
     * @return string
     */
    public function read()
    {
        $data = '';
        try {
            $fileObject = $this->getFileObject();
            if (!$fileObject->isFile()) {
                throw new InvalidResource('Resource must be a file');
            }
            while($fileObject->valid()) {
                $data .= $fileObject->fgets();
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return $data;
    }

    /**
     * Read file from end and return data as string
     * @param int $lines
     * @return string
     */
    public function readFromEnd($lines = 0)
    {
        $data = '';
        if(empty($lines) || $lines < 0) {
            $lines = 0;
        }
        try {
            /** @var \SplFileObject $fileObject */
            $fileObject = $this->getFileObject();
            if (!$fileObject || !$fileObject->isFile()) {
                throw new InvalidResource('Resource must be a file');
            }
            $fileObject->fseek(0, SEEK_END);
            $key = $fileObject->key();
            for ($i = $key; $i > $lines; $key--) {
                $fileObject->seek($key);
                $data .= $fileObject->current();
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return $data;
    }

    /**
     * Return adapter for get file
     * @return mixed
     */
    public function getAdapter()
    {
        return $this->adapter;
    }


    /**
     * Set adapter for get file
     * @param AbstractAdapter $adapter
     * @return $this
     */
    public function setAdapter(AbstractAdapter $adapter)
    {
        $this->adapter = $adapter;
        return $this;
    }


}