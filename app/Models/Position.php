<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = ['pos_name','pos_designation','pos_enddate'];

    public function barangayOfficials()
    {
        return $this->hasMany(BarangayOfficial::class);
    }
}
