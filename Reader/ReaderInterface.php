<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace LogAnalyzer\Reader;


interface ReaderInterface {

    /**
     * @param mixed $path
     * @return mixed
     */
    public function read();
}