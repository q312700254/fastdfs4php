<?php
/**
 * Created by PhpStorm.
 * User: WUC
 * Date: 2018/5/16
 * Time: 17:44
 */
namespace FastDFS\Traits;

trait TrackerTrait
{
    /**
     * 获取一个tracker server连接
     * @return bool
     */
    public function tracker_get_connection():array
    {
        return $this->fastDFS->tracker_get_connection();
    }

    /**
     * 连接到所有tracker
     * @return bool
     */
    public function tracker_make_all_connections():bool
    {
        return $this->fastDFS->tracker_make_all_connections();
    }

    /**
     * 关闭所有tracker连接
     * @return bool
     */
    public function tracker_close_all_connections():bool
    {
        return $this->fastDFS->tracker_close_all_connections();
    }

    /**
     * 获取小组统计信息
     * @param string $group_name
     * @return mixed
     */
    public function tracker_list_groups(string $group_name = ''):array
    {
        return $this->fastDFS->tracker_list_groups($group_name, $this->tracker);
    }

    /**
     * 获取存储服务器storage信息
     * @param string $group_name
     * @return array
     */
    public function tracker_query_storage_store(string $group_name = ''):array
    {
        return $this->fastDFS->tracker_query_storage_store($group_name, $this->tracker);
    }

    /**
     * 获取上传服务器storage的信息列表
     * @param string $group_name
     * @return array
     */
    public function tracker_query_storage_store_list(string $group_name = ''):array
    {
        return $this->fastDFS->tracker_query_storage_store_list($group_name, $this->tracker);
    }

    /**
     * 删除一个存储服务器storage
     * @param string $group_name
     * @param string $storage_ip
     * @return bool
     */
    public function tracker_delete_storage(string $group_name, string $storage_ip):bool
    {
        return $this->fastDFS->tracker_delete_storage($group_name, $storage_ip);
    }

    public function tracker_query_storage_update($group_name, $remote_fileName):bool
    {
        return $this->fastDFS->tracker_query_storage_update($group_name, $remote_fileName);
    }

    public function tracker_query_storage_fetch($group_name, $remote_fileName)
    {
        return $this->fastDFS->tracker_query_storage_fetch($group_name, $remote_fileName);
    }

    public function tracker_query_storage_list($group_name, $remote_fileName)
    {
        return $this->fastDFS->tracker_query_storage_list($group_name, $remote_fileName);
    }

    public function tracker_query_storage_update1($file_id)
    {
        return $this->fastDFS->tracker_query_storage_update1($file_id);
    }

    public function tracker_query_storage_fetch1($file_id)
    {
        return $this->fastDFS->tracker_query_storage_fetch1($file_id);
    }

    public function tracker_query_storage_list1($file_id):array
    {
        return $this->fastDFS->tracker_query_storage_list1($file_id);
    }
}