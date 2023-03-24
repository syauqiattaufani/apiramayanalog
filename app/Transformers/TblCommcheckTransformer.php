<?php

namespace App\Transformers;

use App\Models\tbl_category;
use App\Models\tbl_commcheck;
use League\Fractal\TransformerAbstract;

class TblCommcheckTransformer extends TransformerAbstract
{
    public function transform(tbl_commcheck $data)
    {
        // $first = \App\Models\tbl_commcheck::find(9);
        return [ 
            'id_komcek'          => $data->id_commcheck,
            'sku'           =>$data->sku,
            'toko'          => $data->toko,
            'm1'          => $data->m1,
            'hbeli'          => $data->hbeli,
            'hjual'          => $data->hjual,
            'hjual_baru'          => $data->hjual_baru,
            'date_cr'          => $data->date_cr,
            'time_cr'          => $data->time_cr,
            'user_cr'          => $data->user_cr,
            'is_approv'          => $data->is_approv,
            'date_approve'          => $data->date_approve,
            'user_approv'          => $data->user_approv,
            'periode_awal'          => $data->periode_awal,
            'periode_akhir'          => $data->periode_akhir,
            'deskripsi_brg' => $data->tbl_gol_hbhj->article_desc ?? null
        ];
    }
}