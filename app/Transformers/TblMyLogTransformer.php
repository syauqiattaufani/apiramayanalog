<?php 
namespace App\Transformers;

use App\Models\tbl_my_log;
use League\Fractal\TransformerAbstract;

class TblMyLogTransformer extends TransformerAbstract
{
    public function transform(tbl_my_log $data)
    {
        return[
            'progname' => $data.'-'.'Dev-v.01', 
            'versi' => $data -> versi, 
            'date_run' => $data -> date_run, 
            'info1' => $data -> info1, 
            'info2' => $data -> info2, 
            'userid' => $data -> userid, 
            'toko' => $data -> toko, 
            'devicename' => $data -> devicename,  
        ];
    }
} 
