<?php
/**
 * Created by PhpStorm.
 * User: WUC
 * Date: 2018/5/16
 * Time: 11:54
 */
namespace FastDFS\Builder;

use FastDFS\Interfaces\Builder;

class TarckerBuilder implements Builder
{
    protected static $_instance;

    protected function __construct(){}
    protected function __clone(){}

    public static function getInstance($host = '', $port = '')
    {
        if (false == (static::$_instance instanceof static)) {
            static::$_instance = fastdfs_tracker_get_connection();
        }
        return static::$_instance;
    }
}