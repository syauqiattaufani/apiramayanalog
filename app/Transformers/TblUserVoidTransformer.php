<?php

namespace App\Transformers;

use App\Models\tbl_user_void_return;
use League\Fractal\TransformerAbstract;

class TblUserVoidTransformer extends TransformerAbstract
{
    public function transform(tbl_user_void_return $data)
    {

    \Log::info('iza 33');
        return [
            'sitecode'           => $data->sitecode,
            'rollout_date'          => $data->rollout_date,
            'maris_store'          => $data->maris_store
        ];
    }
}