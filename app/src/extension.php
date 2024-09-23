<?php
class Extension
{
    private $_database;

    public function __construct(database $database)
    {
        $this->_database = $database;
    }

    public function getInitialExtension($client_id)
    {
        $query = "SELECT * FROM extensions_list ORDER BY id DESC LIMIT 1";
        $result = $this->_database->get_result($query);
        if ($result && !is_object($result)) {
            $start = $result['end'] + 1;
            $end = $start + 99;

            $query = "INSERT INTO extensions_list (start, end, client_id) VALUES('$start', '$end', '$client_id')";
            if ($this->_database->dbquery($query)) {
                return $start;
            } else {
                return false;
            }
        } else {
            return $result;
        }
    }
}
