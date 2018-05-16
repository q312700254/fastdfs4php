<?php
/**
 * Created by PhpStorm.
 * User: WUC
 * Date: 2018/5/16
 * Time: 16:09
 */
namespace FastDFS;

use FastDFS\Builder\FastDFSBuilder;
use FastDFS\Traits\{TrackerTrait, FileTrait, ClientTrait, SlaveTrait, UploadTrait, DeleteTrait, DownloadsTrait};

class FastDFSClient
{
    use TrackerTrait, FileTrait, ClientTrait, SlaveTrait, UploadTrait, DeleteTrait, DownloadsTrait;

    protected $fastDFS = null;
    protected $tracker = null;
    protected $storage = null;

    public function __construct()
    {
        $this->fastDFS = FastDFSBuilder::getInstance();
        $this->tracker = $this->tracker_get_connection();
        $this->storage = $this->tracker_query_storage_store();
    }

    /**
     * 连接服务器
     * @return array
     */
    public function connect_server():array
    {
        return $this->fastDFS->connect_server($this->tracker['ip_addr'], $this->tracker['port']);
    }

    /**
     * 断开连接
     * @param $server
     * @return bool
     */
    public function disconnect_server($server):bool
    {
        return $this->fastDFS->disconnect_server($server);
    }

    /**
     * 测试服务器
     * @param array $server_info
     * @return bool
     */
    public function active_test(array $server_info):bool
    {
        return $this->fastDFS->active_test($server_info);
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        return $this->fastDFS->{$name($arguments)};
    }
}