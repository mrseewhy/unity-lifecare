<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubmittedFormData extends Model
{
    //
    protected $fillable = ['form_data', 'contacted', 'is_read'];

    protected $casts = [
        'form_data' => 'array',
    ];
}
