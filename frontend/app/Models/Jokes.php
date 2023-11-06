<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jokes extends Model
{
    use HasFactory;
    protected $table = 'jokes';
    protected $fillable = [
        'id',
        'content',
        'funny',
        'nofunny',
    ];
    public function scopeGetJokes($query)
    {

        return $query 
            ->select(
                'jokes.id', 
                'jokes.content',
                'jokes.funny', 
                'jokes.nofunny', 
            )
            ->groupBy(
                'jokes.id', 
                'jokes.content',
                'jokes.funny', 
                'jokes.nofunny', 
            );
    }
}
