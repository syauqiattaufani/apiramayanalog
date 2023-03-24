<?php

namespace App\Transformers;

use App\Models\tbl_category;
use League\Fractal\TransformerAbstract;

class TblCategoryTransformer extends TransformerAbstract
{
    public function transform(tbl_category $data)
    {
        $first = \App\Models\tbl_category::find(9);
        return [
            'data_id'           => (int) $data->id,
            'category'          => $data->category,
            'created_by'          => $first
        ];
    }
}