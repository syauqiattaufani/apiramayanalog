<?php

namespace App\Models;
// =============== start default use model ===============
 use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// =============== start default use model ===============

class create_mycommand extends Model
{
    protected $connection= 'pgsql-192.168.2.26-monitoring_activities';
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
