<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Model;

class tbl_divisi extends Model{
    protected $connection ='pgsql-192.168.2.26-monitoring_activities';
    protected $table = "monitoring_activities.master_divisi";
    protected $guarded =    [];
    public $timestamps = false;
    public $inscrementing = false;
}
 