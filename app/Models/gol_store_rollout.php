<?php

namespace App\Models;
// =============== start default use model ===============
 use Illuminate\Database\Eloquent\Model;
// =============== start default use model ===============


class gol_store_rollout extends Model
{
    protected $connection= 'pg-192.168.2.89';
    protected $table = "report.gol_store_rollout"; //nama schema\tabel nya
    protected $primaryKey = "sitecode"; // tergantung kebutuhan
    protected $guarded = []; //bawaan
    public $timestamps = false; // tergantung kebutuhan


    
     /**
      * autoincrement or sequence die.
      *
      * @return bool
      */
     public $incrementing = false;
     
}
