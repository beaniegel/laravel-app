<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'user',
        'group',
        'admin',
    ];

    /**
     * @var array<string, mixed>
     */
    protected $attributes = [
        'admin' => false,
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function group()
    {
        return $this->hasOne(Group::class);
    }
}
