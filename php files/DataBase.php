<?php

    class DataBase
    {
        public $con;
        
        //to get connection
        public function __construct()
        {
            $this->con = pg_connect("host = localhost dbname = hp user = hp"); 
            session_start();
            }
        
        //used for select query and will directly return array of result set.
        public function executeQuery($sqlQuery)
        {
            $resultSet = pg_query($this->con,$sqlQuery);
            
            return pg_fetch_array($resultSet);
        
        }
       
        //used for insert delete update.
        public function fetchResult($sqlQuery)
        {
            return pg_query($this->con,$sqlQuery);
        }
    
        ///*Akash Nirantar Version 1.0 © 2016*/to get next primary key of specified table
        public function getNextPrimaryKey($tableName)
        {
            $sqlNextPrimaryKey = "select (max(id) + 1) as nextId from $tableName";
           
            $row = $this -> executeQuery($sqlNextPrimaryKey); //function from DataBase class.
            
            return $row['nextid'];
        }
    }

?>
