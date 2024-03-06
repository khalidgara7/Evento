<?php

namespace App\Models;

use App\Models\Organizer;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Reservation;
use App\Models\Role;
use App\Traits\HasPermissionsTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static function getEmailChecked($email){
        return self::where('email', $email)->first();
    }

    public static function getTokenSingle($token){
        return self::where('remember_token', $token)->first();
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function organizer()
    {
        return $this->hasOne(Organizer::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function reservedEvents()
    {
        return $this->belongsToMany(Event::class, 'reservations')->withPivot('number_of_seats', 'status');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }


    public function isAdmin()
    {
        return $this->roles()->where('name', 'admin')->exists();
    }
    
    public function isOrganizer()
    {
        return $this->roles()->where('name', 'organizer')->exists();
    }
    
    public function isSpectator()
    {
        return $this->roles()->where('name', 'spectator')->exists();
    }


}
