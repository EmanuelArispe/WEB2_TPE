<?php

    class VerifyHelpers {

        public static function verifyDates($dates){
            foreach ($dates as $date) {
                if (isset($date) && empty($date)) {
                    return false;
                }
            }
            return true;
        }
    }