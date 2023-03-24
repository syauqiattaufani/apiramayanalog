<?php

namespace App\Transformers;

use App\Models\tbl_divisi;
use League\Fractal\TransformerAbstract;

class TblDivisiTransformer extends TransformerAbstract
{
    public function transform(tbl_divisi $data)
    {
        return [
            'data_id'           => (int) $data->id,
            'description'          => $data->description,
            'created_by'          => $data->created_by
        ];
    }
}