<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'date',
        'description',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'datetime',
    ];

    public function group()
    {
        return $this->hasOne(Group::class);
    }

    public function attendees()
    {
        return $this->hasMany(Attendee::class);
    }
}
