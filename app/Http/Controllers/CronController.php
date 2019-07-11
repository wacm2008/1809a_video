<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OSS\OssClient;
use OSS\Core\OssException;
use Illuminate\Support\Str;
class CronController extends Controller
{
    protected $accessKeyId = 'LTAIGAO5tHCm7z4k';
    protected $accessKeySecret = 'WEKCcw0st6QIhgdlQnQfw76RnGQZaB';
    protected $endpoint = 'WEKCcw0st6QIhgdlQnQfw76RnGQZaB';
    protected $bucket = 'wacm2008';
    public function saveToOss()
    {
        $ossClient = new OssClient($this->accessKeyId, $this->accessKeySecret, env('EndPoint'));
        //获取目录
        $filePath = storage_path('app/public/files');
        //echo $filePath;die;
        //获取目录中文件
        $fileList = scandir($filePath);
        //print_r($fileList);die;
        foreach ($fileList as $k=>$v){
            if($v=='.'||$v=='..'){
                continue;
            }
            $extension = pathinfo($v,PATHINFO_EXTENSION);
            //echo $extension;
            $object = 'files/'.Str::random(6).'.'.$extension;
            $local_file = $filePath.'/'.$v;
            //echo $local_file;
            //$oss = $ossClient->uploadFile($this->bucket,$object,$local_file);
            //var_dump($oss);
            try{
                $ossClient->uploadFile($this->bucket,$object,$local_file);
            } catch(OssException $e) {
                printf(__FUNCTION__ . ": FAILED\n");
                printf($e->getMessage() . "\n");
                return;
            }
            echo 'bien';echo '</br>';
            //上传后删除文件
            unlink($local_file);
        }
    }
}
