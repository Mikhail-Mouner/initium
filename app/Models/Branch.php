<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'branch_name',
        'location_id',
        'hotel_id',
    ];


    public function Location()
    {
        return $this->belongsTo(Location::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
