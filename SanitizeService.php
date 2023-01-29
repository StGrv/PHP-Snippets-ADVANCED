<?php

namespace services;

class SanitizeService
{
    /**
     * Used for sanitizing the input when inserting a record to the DB
     * @param string $var
     * @param $type
     * @return string
     */
    public static function sanitize(string $var, $type = ENT_QUOTES): string
    {
        if (empty($var)) {
            return "";
        }

        while ($var != ($temp = html_entity_decode($var, $type))) {
            $var = $temp;
        }

        while ($var != ($temp = stripslashes($var))) {
            $var = $temp;
        }

        return htmlentities($var);
    }

    /**
     * Used for decoding the record from the DB
     * @param string $var
     * @param $type
     * @return string
     */
    public static function sanitize_decode(string $var, $type = ENT_QUOTES): string
    {
        if (empty($var)) {
            return "";
        }

        return html_entity_decode($var, $type);
    }
}
