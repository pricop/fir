<?php

/**
 * Convert the characters into HTML entities
 *
 * @param   string $value The string to be escaped
 * @return  string
 */
if (!function_exists('e')) {
    function e($value)
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}

/**
 * Limit the amount of characters in a string and provide an excerpt of it
 *
 * @param   string $value The string to extract the substring from
 * @param   int $start The character number to start from, counting from 0
 * @param   int $length The maximum number of characters to be used from the string
 * @param   array $options The string to be appended
 * @return  string
 */
if (!function_exists('str_limit')) {
    function str_limit($value, $start = 0, $length = null, $options = [])
    {
        $result = mb_substr($value, $start, $length);

        if (mb_strlen($value) > $length && is_null($length) == false) {
            if (isset($options['ellipsis'])) {
                $result = $result . $options['ellipsis'];
            }
        }

        return $result;
    }
}