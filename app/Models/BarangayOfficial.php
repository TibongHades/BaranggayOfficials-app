<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangayOfficial extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'position_id', 'age', 'address'];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
