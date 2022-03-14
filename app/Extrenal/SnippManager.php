<?php

namespace App\Extrenal;

class SnippManager
{
    private $_snipps_arr;

    public function __construct($arr)
    {
        $this->_snipps_arr = $arr;
    }

    public function getSnipp($key){
        try {
            if(isset($this->_snipps_arr[$key])) return $this->_snipps_arr[$key];
        }catch (Undefined $e){
            return 'н/з';
        }
        return 'н/з';
    }
}
