<?php

namespace Fir\Models;

/**
 * The base Model upon which all the other models are extended on
 */
class Model
{
    /**
     * The database connection
     * @var \mysqli
     */
    protected $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * @param $string
     * @return string
     */
    private function e($string)
    {
        return $this->db->real_escape_string($string);
    }
}