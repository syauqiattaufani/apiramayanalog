<?php

namespace App\Models;
// =============== start default use model ===============
use Illuminate\Foundation\Auth\User as Model;
// =============== start default use model ===============


class tbl_category extends Model
{
    protected $connection= 'pgsql-192.168.2.26-monitoring_activities';
    protected $table = "monitoring_activities.tbl_category"; //nama schema\tabel nya
    // protected $primaryKey = "brdbracod"; // tergantung kebutuhan
    protected $guarded = []; //bawaan
    public $timestamps = false; // tergantung kebutuhan

     /**
      * autoincrement or sequence die.
      *
      * @return bool
      */
     public $incrementing = false;
}

//penambahan