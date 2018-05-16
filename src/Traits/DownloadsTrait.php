<?php
/**
 * Created by PhpStorm.
 * User: WUC
 * Date: 2018/5/16
 * Time: 17:27
 */
namespace FastDFS\Traits;

trait DownloadsTrait
{
    /**
     * 下载文件
     * @param string $group_name
     * @param string $remote_filename
     * @param int $file_offset
     * @param int $download_bytes
     * @return mixed
     */
    public function storage_download_file_to_buff(string $group_name, string $remote_filename , int $file_offset = 0, int $download_bytes = 0):string
    {
        return $this->fastDFS->storage_download_file_to_buff($group_name, $remote_filename, $file_offset, $download_bytes, $this->tracker, $this->storage);
    }

    /**
     * 根据file_id下载文件
     * @param string $file_id
     * @param int $file_offset
     * @param int $download_bytes
     * @return string
     */
    public function storage_download_file_to_buff1(string $file_id , int $file_offset = 0, int $download_bytes = 0):string
    {
        return $this->fastDFS->storage_download_file_to_buff($file_id, $file_offset, $download_bytes, $this->tracker, $this->storage);
    }

    /**
     * 下载文件到本地
     * @param string $group_name
     * @param string $remote_filename
     * @param string $local_filename
     * @param int $file_offset
     * @param int $download_bytes
     * @return bool
     */
    public function storage_download_file_to_file(string $group_name, string $remote_filename, string $local_filename, int $file_offset = 0, int $download_bytes = 0):bool
    {
        return $this->fastDFS->storage_download_file_to_file($group_name, $remote_filename, $local_filename, $file_offset, $download_bytes, $this->tracker, $this->storage);
    }
}