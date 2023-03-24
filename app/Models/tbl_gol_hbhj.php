<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Model;

class tbl_gol_hbhj extends Model{
    protected $connection ='pg-192.168.2.89';
    protected $table = "report.gol_hb_hj";
    protected $primaryKey = "article_gold"; // tergantung kebutuhan
    protected $guarded = [];
    public $timestamps = false; 
    public $inscrementing = false;
    // /pariopa
}
 