<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
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
    ];

    public static function getAllUser()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'Maksudujjaman',
                'email' => 'maksudujjaman24@gmail.com',
                'password' => '12345'
            ],
            1 => [
                'id' => 2,
                'name' => 'Emon Bepari',
                'email' => 'emon@gmail.com',
                'password' => '54321'
            ],
            2 => [
                'id' => 3,
                'name' => 'Sumon Sarkar',
                'email' => 'sumon@gmail.com',
                'password' => '12345'
            ],
            3 => [
                'id' => 4,
                'name' => 'Hridoy Khan',
                'email' => 'hridoy@gmail.com',
                'password' => '54321'
            ],
        ];
    }
}
