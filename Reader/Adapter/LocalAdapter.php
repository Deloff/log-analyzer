<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace LogAnalyzer\Reader\Adapter;


class LocalAdapter extends AbstractAdapter {

    public function get($path)
    {
        return $path;
    }

}