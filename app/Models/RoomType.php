<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomType extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name','image','description'
    ];

    public function room(){
        return $this->hasMany(Room::class);
    }
}
