<?php
/**
 * Created by PhpStorm.
 * User: WUC
 * Date: 2018/5/16
 * Time: 16:54
 */
namespace FastDFS\Traits;

trait SlaveTrait
{
    /**
     * 由主文件名产生从文件名
     * @param string $master_filename
     * @param string $prefix_name
     * @param string $file_ext_name
     * @return string 从文件名，出错返回error
     */
    public function gen_slave_filename(string $master_filename, string $prefix_name, string $file_ext_name = ''):string
    {
        return $this->fastDFS->gen_slave_filename($master_filename, $prefix_name, $file_ext_name);
    }
}