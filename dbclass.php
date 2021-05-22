<?php
class Database{
    const DB_HOSTNAME = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'enrolment';
    protected $_db_connect;
    protected $_sql;
    protected $_result;
    protected $_row;

    function db_connect(){
        $this->_db_connect = mysql_connect(self::DB_HOSTNAME,self::DB_USERNAME,self::DB_PASSWORD) or die(mysql_error());
    }

    function slect_db(){
        mysql_select_db(self::database_project) or die(mysql_error());
    }

    function sql($query){
        $this->_sql =$query;
    }

    function query(){
        $this->_result = mysql_query($this->_sql);
            echo "<ul>";
                echo "<li>".$lastname."</li>";
            echo "</ul>";
        }
    }

    function fetch_array(){
        while($this->_row = mysql_fetch_array($this->_result)){
            $lastname = $this->_row['lastname'];

    }

    function db_close(){
        mysql_close($this->_db_connect);
    }
}


?>