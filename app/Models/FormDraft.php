<?php

namespace App\Models;

use App\Casts\EncryptedArray;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormDraft extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'uuid',
        'form_data',
        'expires_at',
        'max_step',
        'current_step'
    ];

    protected $casts = [
        'form_data' => EncryptedArray::class,
        'expires_at' => 'datetime'
    ];
}
