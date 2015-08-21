<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace LogAnalyzer\Reader;


use LogAnalyzer\Reader\Adapter\AbstractAdapter;
use LogAnalyzer\Reader\Exception\InvalidResource;

class FileReader extends AbstractReader implements ReaderInterface {

    /**
     * @var AbstractAdapter
     */
    protected $adapter;


    public function read()
    {
        try {
            $resource = $this->getAdapter()->get($this->getResource());
            $fileObject = new \SplFileObject($resource);
            if (!$fileObject->isFile()) {
                throw new InvalidResource("Resource must be a file");
            }
            $fileObject->openFile();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @return mixed
     */
    public function getAdapter()
    {
        return $this->adapter;
    }


    /**
     * @param AbstractAdapter $adapter
     * @return $this
     */
    public function setAdapter(AbstractAdapter $adapter)
    {
        $this->adapter = $adapter;
        return $this;
    }


}