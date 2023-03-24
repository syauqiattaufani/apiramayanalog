<?php

namespace App\Transformers;

use App\Models\my_transaksi_rtn;
use League\Fractal\TransformerAbstract;

class MyTransasksiRtnTransformer extends TransformerAbstract
{
    public function transform(my_transaksi_rtn $data)
    {
        // $first = \App\Models\my_transaksi_rtn::find(9);
        return [
            'tanggal'           => $data->tanggal,
            'toko'          => $data->toko,
            'no_trx'          => $data->no_trx,
            'nocp'          => $data->nocp,
            'amount'          => $data->amount,
            'status'          => $data->status,
            'date_cr'          => $data->date_cr,
            'date_upd'          => $data->date_upd
        ];
    }
}