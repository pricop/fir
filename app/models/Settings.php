<?php

namespace Fir\Models;

class Settings extends Model
{
    /**
     * Gets the site `settings`
     *
     * @return    array
     */
    public function get()
    {
        $query = $this->db->prepare("SELECT * FROM `".DB_PREFIX."settings`");
        $query->execute();
        $result = $query->get_result();
        $query->close();

        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[$row['name']] = $row['value'];
        }

        return $data;
    }
}