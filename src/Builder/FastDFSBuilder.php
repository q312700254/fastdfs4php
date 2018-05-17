<?php
/**
 * Created by PhpStorm.
 * User: WUC
 * Date: 2018/5/16
 * Time: 16:25
 */
namespace FastDFS\Builder;

use FastDFS\Interfaces\Builder;
use FastDFS\Exception\FastDFSException;

class FastDFSBuilder implements Builder
{
    protected static $_instance;

    protected function __construct(){}
    protected function __clone(){}

    public static function getInstance($host = '', $port = '')
    {
        if (!class_exists('FastDFS'))
            throw new FastDFSException('Do not support fastFDS');

        if (false == (static::$_instance instanceof static)) {
            static::$_instance = new \FastDFS();
        }
        return static::$_instance;
    }
}