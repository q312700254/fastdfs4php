<?php
/**
 * Created by PhpStorm.
 * User: WUC
 * Date: 2018/5/16
 * Time: 16:46
 */
namespace FastDFS\Traits;

trait ClientTrait
{
    /**
     * 获取FastDFS的版本
     * @return string
     */
    public function client_version():string
    {
        return $this->fastDFS->client_version();
    }

    /**
     * 获取错误记录数
     * @return int
     */
    public function get_last_error_no():int
    {
        return $this->fastDFS->get_last_error_no();
    }

    /**
     * 获取错误信息
     * @return string
     */
    public function get_last_error_info():string
    {
        return $this->fastDFS->get_last_error_info();
    }
}