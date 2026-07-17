<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
    protected $fillable = ['title', 'slug', 'body', 'featured_image', 'user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }

}
