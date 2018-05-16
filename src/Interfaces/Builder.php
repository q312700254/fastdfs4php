<?php
/**
 * Created by PhpStorm.
 * User: WUC
 * Date: 2018/5/16
 * Time: 12:10
 */
namespace FastDFS\Interfaces;

interface Builder
{
    public static function getInstance($host = '', $port = '');
}