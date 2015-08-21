<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace LogAnalyzer\Parser;


class FPM extends AbstractParser {

    /**
     * Parse log
     * @return mixed
     */
    public function parse()
    {
        $data = $this->getData();
        $rows = explode(PHP_EOL, $data);

        if(empty($rows)) {
            throw new \RuntimeException("Incorrect data for parse");
        }

        $rowsCount = count($rows);
        for($i = 0; $i< $rowsCount; $i++) {

        }
    }
}