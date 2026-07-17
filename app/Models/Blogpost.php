<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    //
    protected $fillable = ['title', 'slug', 'body', 'featured_image', 'user_id'];
    public function user(){
        return $this->belongsTo(User::class);  // assuming User model has a user_id field. Replace with your actual User model.  // belongsTo() is used to establish a one-to-one relationship with another model.  // This method returns the related model.  // Here, it's returning the User model associated with this Blogpost.  // In this case, User model is the owner of the Blogpost model.  // This is a common relationship in many-to-many or one-to-many relationships.  // The "user_id" field in the Blogpost model is referencing the "id" field in the User model.  // The "user" method is used to fetch the related User model.  // This method is used to fetch the related User model.  // In this case, it's fetching the User model associated with this Blogpost.  // This is a common relationship in many-to-many or
    }
}
