<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    use HasFactory;

    /**
     * @var array<string, mixed>
     */
    protected $attributes = [
        'organiser' => false,
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function event()
    {
        return $this->hasOne(Event::class);
    }
}
