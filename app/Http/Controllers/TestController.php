<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OSS\OssClient;
use OSS\Core\OssException;
class TestController extends Controller
{
    protected $accessKeyId = 'LTAIGAO5tHCm7z4k';
    protected $accessKeySecret = 'WEKCcw0st6QIhgdlQnQfw76RnGQZaB';
    protected $endpoint = 'WEKCcw0st6QIhgdlQnQfw76RnGQZaB';

    public function oss1()
    {
        $ossClient = new OssClient(env('AccessKey_ID'), env('AccessKeySecret'), env('EndPoint'));
        $bucket = 'wacm2008';
        $object = 'img/a.txt';
        $content = 'angel';
        $oss = $ossClient->putObject($bucket,$object,$content);
        var_dump($oss);
    }
    public function oss2()
    {
        $ossClient = new OssClient(env('AccessKey_ID'), env('AccessKeySecret'), env('EndPoint'));
        $bucket = 'wacm2008';
        $object = 'img/1212.jpg';
        $path = '1.jpg';
        $oss = $ossClient->uploadFile($bucket,$object,$path);
        var_dump($oss);
    }
}
