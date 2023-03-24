<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Login extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'space.category_space';
    protected $filetable = [
        'code_category_space',
        'description',
        'type_space',
        'user_create',
        'user_modified',
        'date_modified',
        'fash_baz'
    ];
    protected $hidden = [];
}

