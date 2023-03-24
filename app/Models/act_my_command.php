<?php

namespace App\Models;
// =============== start default use model ===============
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
// =============== start default use model ===============


class act_my_command extends Authenticatable
{
    protected $connection= 'dbprod';
    protected $table = "public.master_users"; //nama schema\tabel nya
    protected $primaryKey = "id_master_users"; // tergantung kebutuhan
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