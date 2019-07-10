<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    protected $table='p_videos';
    public $timestamps=false;
    protected $primaryKey='vid';
}
