<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/18
 * Time: 18:22
 */
class DB{
    private $_dsn = 'mysql:dbname=test;host=127.0.0.1';
    private $_username = 'root';
    private $_password = 'root';
    /**
     * @var PDO
     */
    private $_pdo = null;
    private $_error = '';

    public function SetAttr($attr){
        if(is_array($attr)){
            foreach($attr as $name=>$value){
                if($name == 'dsn'){
                    $this->_dsn = $value;
                }
                if($name == 'username'){
                    $this->_username = $value;
                }
                if($name == 'password'){
                    $this->_password = $value;
                }
            }
        }
    }

    private function Init(){
        if(is_null($this->_pdo)){
            try{
                $this->_pdo = new PDO($this->_dsn, $this->_username, $this->_password);
            }catch(PDOException $PDOException){
                $this->_error = $PDOException->getMessage();
                return false;
            }
        }
        return true;
    }

    /**
     * 查询数据库
     * @param $sql
     * @return array|string
     */
    public function Query($sql){
        if($this->Init()){
            $ret = $this->_pdo->query($sql);
            if($ret === false){
                return $this->_pdo->errorInfo();
            }
            return $ret->fetchAll();
        }else{
            return $this->_error;
        }
    }

    /**
     * 更新与删除操作,返回影响的行数
     * @param $sql
     * @return int|string|array
     */
    public function Exec($sql){
        if($this->Init()){
            $ret = $this->_pdo->exec($sql);
            if($ret === false){
                return $this->_pdo->errorInfo();
            }
            return $ret;
        }else{
            return $this->_error;
        }
    }

}