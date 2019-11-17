<?php
# 错误码设计为小于 0 的整数即 负整数
# db type
#    mysql 1
#    redis 2
#
#
#
# db errorCode
#    mysql 1100 [1:表示db类错误, 1:表示mysql(类型), 3-4:具体的错误码]


const error_db_mysql_connection_fail = -1101;  //数据库连接失败
