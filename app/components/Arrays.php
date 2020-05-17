<?php

namespace Testify\Component;

class Arrays {

    public static function in_array_key($array, $key, $value) : bool {
        foreach ($array as $item) {
            if ($item[$key] == $value)
                return true;
        }
        return false;
    }
}
