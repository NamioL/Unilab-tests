<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $description;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function card()
    {
        return $this->hasOne( Card::class);
    }
}
