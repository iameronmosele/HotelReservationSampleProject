<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;
    
    //1,100,0
    protected $fillable = [
        'reference',
        'room_id',
        'email',
        'mobile_number',
        'reserved_from',
        'reserved_to',
        'status'
    ];

    public function room(){
        return $this->belongsTo(Room::class,'room_id');
    }
}
