<?php

namespace App\Models;
// =============== start default use model ===============
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
// =============== start default use model ===============


class master_user extends Authenticatable
{
    protected $connection= 'pgsql-192.168.2.30-monitoring_activities';
    protected $table = "monitoring_activities.master_user"; //nama schema\tabel nya
    protected $primaryKey = "user_id"; // tergantung kebutuhan
    protected $guarded = []; //bawaan
    public $timestamps = false; // tergantung kebutuhan

     /**
      * autoincrement or sequence die.
      *
      * @return bool
      */
     public $incrementing = false;
}


class create_mycommand extends Authenticatable
{
    protected $connection= 'pgsql-192.168.2.30-monitoring_activities';
    protected $table = "monitoring_activities.my_command"; //nama schema\tabel nya
    protected $primaryKey = "id"; // tergantung kebutuhan
    protected $guarded = []; //bawaan
    public $timestamps = false; // tergantung kebutuhan

     /**
      * autoincrement or sequence die.
      *
      * @return bool
      */
     public $incrementing = false;
}

class create_mylog extends Authenticatable
{
    protected $connection= 'pgsql-192.168.2.30-monitoring_activities';
    protected $table = "monitoring_activities.my_log"; //nama schema\tabel nya
    protected $primaryKey = "id_log"; // tergantung kebutuhan
    protected $guarded = []; //bawaan
    public $timestamps = false; // tergantung kebutuhan

     /**
      * autoincrement or sequence die.
      *
      * @return bool
      */
     public $incrementing = false;
}

class update_imei extends Authenticatable
{
    protected $connection= 'pgsql-192.168.2.30-monitoring_activities';
    protected $table = "monitoring_activities.master_user"; //nama schema\tabel nya
    // protected $primaryKey = "id_log"; // tergantung kebutuhan
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