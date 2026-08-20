<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumnis';

    protected $fillable = [
        'major_id',
        'name',
        'graduation_year',
        'current_company',
        'current_position',
        'testimonials'
    ];

    protected $casts = [
        'graduation_year' => 'year'
    ];

    public function majors() {
        return $this->belongsTo(Majors::class);
    }


}
