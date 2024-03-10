<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        "cin","phone_number","profile_picture","bio","user_id"
    ] ;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'organizer_id', 'user_id');
    }


}
