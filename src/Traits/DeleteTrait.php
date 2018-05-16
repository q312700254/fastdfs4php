<?php
/**
 * Created by PhpStorm.
 * User: WUC
 * Date: 2018/5/16
 * Time: 16:43
 */
namespace FastDFS\Traits;

trait DeleteTrait
{
    /**
     * 根据组名，文件名删除文件
     * @param string $group_name
     * @param string $remote_filename
     * @return bool
     */
    public function storage_delete_file(string $group_name, string $remote_filename):bool
    {
        return $this->fastDFS->storage_delete_file($group_name, $remote_filename, $this->tracker, $this->storage);
    }

    /**
     * 根据文件id删除文件
     * @param string $file_id
     * @return bool
     */
    public function storage_delete_file1(string $file_id):bool
    {
        return $this->fastDFS->storage_delete_file1($file_id, $remote_filename, $this->tracker, $this->storage);
    }
}