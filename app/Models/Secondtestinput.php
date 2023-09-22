<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondtestinput extends Model
{
    use HasFactory;

    protected $fillable = [
        'text2',
        'ti_id',
    ];

    public function testinputs()
    {
        return $this->belongsTo(Testinput::class, 'ti_id');
    }
}
