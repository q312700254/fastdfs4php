<?php
/**
 * Created by PhpStorm.
 * User: WUC
 * Date: 2018/5/16
 * Time: 16:09
 */
namespace FastDFS;

use FastDFS\Builder\FastDFSBuilder;

class FastDFSClient
{
    protected $fastDFS = null;

    public function __construct()
    {
        $this->fastDFS = FastDFSBuilder::getInstance();
    }
}