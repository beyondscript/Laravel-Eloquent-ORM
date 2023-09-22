<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testinput extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'number',
        'image',
    ];

    public function secondtestinputs()
    {
        return $this->hasMany(Secondtestinput::class, 'ti_id');
    }
}
