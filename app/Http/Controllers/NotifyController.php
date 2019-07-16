<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifyController extends Controller
{
    public function notify()
    {
        $file = file_get_contents('php://input');
        $log = date("Y-m-d H:i:s").">>>".$file."\n";
        file_put_contents("logs/oss.log",$log,FILE_APPEND);
        
    }
}
