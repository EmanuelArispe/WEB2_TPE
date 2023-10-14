<?php

class VerifyHelpers
{

    public static function verifyData($data)
    {
        foreach ($data as $elem) {
            if (!(isset($elem)) || (empty($elem))) {
                return false;
            }
        }
        return true;
    }








    //// VERIFICAR ESTOOO ////
    public static function verifyDataRepeat($data, $listData)
    {
        foreach ($listData as $elemList) {
            if (VerifyHelpers::isEqual($data, $elemList)) {
                return true;
            }
        }
        return false;
    }

    private function isEqual($data, $elemList)
    {

        if (count($data) !== count($elemList)) {
            return false;
        }

        foreach ($data as $key) {
            if ($data[$key] != $elemList[$key]) {
                return false;
            }
        }
        return true;
    }

    /// HASTA ACA ///
}
