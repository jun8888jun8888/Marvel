<?php
/**
 *db基础数据类
 *可以连接各种类型的数据库
 */
class DB implements InterfaceDbTyep
{
  private $_dbType = null;
  private $_dsn = null;
  private $_user = null;
  private $_pwd = null;

  public function __connstruct($type, $dsn, $user, $pwd)
  {
    $this->_dbType = $type;
    $this->_dsn  = $dsn;
    $this->_user = $user;
    $this->_pwd = $pwd;
  }

  public function
}
