<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, Sluggable;

    public function sluggable(): array
    {
        return [
            'unique_id' => [
                'source' => 'unique_id'
            ]
        ];
    }
    protected static function booted()
    {
        static::creating(function ($user): void {
            $user->unique_id = $user->generateUnique_id();
        });
    }

    public function generateUnique_id()
    {
        $length = 7;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $unique_id = '';

        for ($i = 0; $i < $length; $i++) {
            $unique_id .= $characters[random_int(0, strlen($characters) - 1)];
        }

        // Check if the generated patient number already exists in the database
        while (User::where('unique_id', $unique_id)->exists()) {
            $unique_id = '';
            for ($i = 0; $i < $length; $i++) {
                $unique_id .= $characters[random_int(0, strlen($characters) - 1)];
            }
        }

        return $unique_id;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'contact',
        'gender', 'role', 'unique_id', 'address', 'password',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->map(fn(string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }

    public function routers(): HasMany
    {
        return $this->hasMany(Router::class);
    }
}
