<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",'description','category_id','capacity','location','organizer_id','image','date',
    ] ;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function organizer()
    {
        return $this->belongsTo(Organizer::class, 'organizer_id', 'user_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function reservingUsers()
    {
        return $this->belongsToMany(User::class, 'reservations')->withPivot('number_of_seats', 'status');
    }

    public function image()
    {
        return $this->hasOne(EventImage::class);
    }
}
