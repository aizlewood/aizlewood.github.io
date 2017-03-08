<?php

class Table {

    var $table; //array

    public function __construct($table)
    {
        $this->table = $table;
    }

    // An ID not longer has to be a number. Name-based (slugs) IDs FTW!
    public function get($id='') {
        if( $id != '' ) {
            foreach ($this->table as $row) {
                if( $row['id'] == $id ) {
                    return $row;
                    break;
                }
            }
        }
        else {
            return $this->table;
        }
    }

    public function where($col, $str='') {
        foreach ($this->table as $row) {
            if( $row[$col] == $str ) {
                return $row;
                break;
            }
        }
    }


    public function whereIn($col, $id) {
        $arr = array();
        foreach ($this->table as $row) {
            if( in_array($id, $row[$col]) ) {
                array_push($arr, $row);
            }
        }
        return $arr;
    }

    public function orberBy($col, $dir="asc") {
        $arr = $this->table;

        usort($arr, function($a, $b) {
            return strcmp($a['name'], $b['name']);
        });

        return $arr;
    }
}
