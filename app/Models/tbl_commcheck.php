<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Model;

class tbl_commcheck extends Model{
    protected $connection ='pgsql-192.168.2.26-monitoring_activities';
    protected $table = "monitoring_activities.my_commcheck";
    protected $primaryKey = "id_commcheck"; // tergantung kebutuhan
    protected $guarded = [];
    public $timestamps = false; 
    public $inscrementing = false;

    public function tbl_gol_hbhj()
    {
        \Log::info('damn 556');
        return $this->belongsTo('App\Models\tbl_gol_hbhj', 'sku', 'sku_maris');
    }
}
 