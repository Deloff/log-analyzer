<?php
/**
 * @author Deller myogogo@gmail.com
 */

namespace LogAnalyzer\Reader\Adapter;


class LocalAdapter extends AbstractAdapter {

    /**
     * @param $path
     * @return mixed
     */
    public function get($path)
    {
        return $path;
    }

}