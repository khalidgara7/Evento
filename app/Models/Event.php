<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",'description','category_id','capacity','location','organizer_id','image','date','status','availableSeats','reservation_type'
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


    public function CheckIfReservationExist($user, $event_id)
    {
        $userReservation = $user->reservations()->where('event_id', $event_id)->first();
        if ($userReservation) {
            return false;
        } else {
            return true;
        }
    }

    public function CheckIfAvaliableSeats($event, $user)
    {
        $available_seats = $event->capacity - $event->reservations->where('status', 'confirmed')->count();
        if ($available_seats > 0) {
            return true;
        } else {
            return false;
        }
    }
}
