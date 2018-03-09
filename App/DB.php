<?php
 
namespace app;
 
class DB extends \PDO {

    public function __construct($dsn = null, $username = null, $password = null, $options = array())
    {
        $dsn = ($dsn != null) ? $dsn : sprintf('mysql:dbname=%s;host=%s', getConfig('db.dbname'), getConfig('db.host'));
        $username = ($username != null) ? $username : getConfig('db.user');
        $password = ($password != null) ? $password : getConfig('db.pass');
         
        parent::__construct($dsn, $username, $password, $options);
    }
    
}