<?php
/**
 * Created by PhpStorm.
 * User: WUC
 * Date: 2018/5/16
 * Time: 16:38
 */
namespace FastDFS\Traits;

trait FileTrait
{
    /**
     * 获取产生反偷令牌函数
     * @param string $file_id
     * @param int $timestamp
     * @return string
     */
    public function http_gen_token(string $file_id, int $timestamp):string
    {
        return $this->fastDFS->http_gen_token($file_id, $timestamp);
    }

    /**
     * 通过文件名得到文件详细信息
     * @param string $group_name
     * @param string $filename
     * @return array
     */
    public function get_file_info(string $group_name, string $filename):array
    {
        return $this->fastDFS->get_file_info($group_name, $filename);
    }

    /**
     * 通过文件id获取文件信息
     * @param string $file_id
     * @return array
     */
    public function get_file_info1(string $file_id):array
    {
        return $this->fastDFS->get_file_info1($file_id);
    }

    /**
     * 设置文件元数据属性
     * @param string $group_name
     * @param string $remote_filename
     * @param array $meta_list
     * @param string $op_type
     * @return bool
     */
    public function storage_set_metadata(string $group_name, string $remote_filename, array $meta_list, string $op_type = ''):bool
    {
        return $this->fastDFS->storage_set_metadata($group_name, $remote_filename, $meta_list, $op_type, $this->tracker, $this->storage);
    }

    /**
     * 获取文件元数据属性
     * @param string $group_name
     * @param string $remote_filename
     * @return array
     */
    public function storage_get_metadata(string $group_name, string $remote_filename):array
    {
        return $this->fastDFS->storage_get_metadata($group_name, $remote_filename);
    }
}