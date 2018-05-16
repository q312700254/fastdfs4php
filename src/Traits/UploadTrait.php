<?php
/**
 * Created by PhpStorm.
 * User: WUC
 * Date: 2018/5/16
 * Time: 17:09
 */
namespace FastDFS\Traits;

trait UploadTrait
{
    /**
     * 根据文件名上传本地文件到服务器
     * @param string $local_filename
     * @param string $file_ext_name
     * @param array $meta_list
     * @param string $group_name
     * @return array
     */
    public function storage_upload_by_filename(string $local_filename, string $file_ext_name = '', array $meta_list = [], string $group_name = ''):array
    {
        return $this->fastDFS->storage_upload_by_filename($local_filename, $file_ext_name, $meta_list, $group_name, $this->tracker, $this->storage);
    }

    /**
     * 根据文件名上传本地文件到服务器
     * @param string $local_filename
     * @param string $file_ext_name
     * @param array $meta_list
     * @param string $group_name
     * @return string
     */
    public function storage_upload_by_filename1(string $local_filename, string $file_ext_name = '', array $meta_list = [], string $group_name = ''):string
    {
        return $this->fastDFS->storage_upload_by_filename1($local_filename, $file_ext_name, $meta_list, $group_name, $this->tracker, $this->storage);
    }

    /**
     * 根据文件内容上传文件到服务器
     * @param string $file_buff
     * @param string $file_ext_name
     * @param array $meta_list
     * @param string $group_name
     * @return array
     */
    public function storage_upload_by_filebuff(string $file_buff, string $file_ext_name = '', array $meta_list = [], string $group_name = ''):array
    {
        return $this->fastDFS->storage_upload_by_filebuff($file_buff, $file_ext_name, $meta_list, $group_name, $this->tracker, $this->storage);
    }

    /**
     * 根据文件名追加本地文件到服务器
     * @param string $local_filename
     * @param string $file_ext_name
     * @param array $meta_list
     * @param string $group_name
     * @return array
     */
    public function upload_appender_by_filename(string $local_filename, string $file_ext_name = '', array $meta_list = [], string $group_name = ''):array
    {
        return $this->fastDFS->upload_appender_by_filename($local_filename, $file_ext_name, $meta_list, $group_name, $this->tracker, $this->storage);
    }
}