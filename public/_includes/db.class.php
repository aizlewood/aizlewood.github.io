<?php

require_once('table.class.php');

class DB {

    var $file;
    var $db;
    var $tables;
    var $associations = array();

    public function __construct($file='') {
        $this->file = $file;
        $this->tables = array();

        $json = file_get_contents($file);
        $this->db = json_decode($json, true);
    }

    // When a table is accessed, we store it in a local array of tables.
    // Operations on a table happen directly on that table array, so when saving, we need to be able to put that table's info back into the original DB variable.
    // **New functionality**: Now, you can pass in an array (like, from an object within the returned table) to create a table with.
    /**
     * 1. $db->table('tableName')->get();
     *  - returns the table, which is assumed to be an object at the top level of the JSON.
     * 2. $db->table('tableName', $table['subTable'])->get();
     */
    public function table($table='', $arr=null) {
        if( !isset( $this->tables[$table] )) {
            if( isset($arr) && is_array($arr) ) {
                $this->tables[$table] = new Table($arr);
            }
            else {
                $this->tables[$table] = new Table($this->db[$table]);
            }
        }

        return $this->tables[$table];
    }
}
