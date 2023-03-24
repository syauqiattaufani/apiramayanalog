<?php

namespace App\Transformers;

use App\Models\master_user;
use League\Fractal\TransformerAbstract;

class MasterUserTransformer extends TransformerAbstract
{
    public function transform(master_user $data)
    {
        return [
            'user_id'           => (int) $data->id,
            'name'              => $data->full_name,
            'username'          => $data->user_name,
            'email'          => $data->email,
            'password'          => $data->password,
            'id_sub_divisi'          => $data->id_sub_divisi,
            'is_active' => $data->is_active,
            'toko'          => $data->data,
            'md' => $data->group_md
        ];
    }
}