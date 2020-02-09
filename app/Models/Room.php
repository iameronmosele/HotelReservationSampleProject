<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'room_number','room_type_id'
    ];

    public function roomType(){
        return $this->belongsTo(RoomType::class,'room_type_id');
    }

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
