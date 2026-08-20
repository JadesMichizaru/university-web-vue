<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Majors extends Model
{
    protected $table = 'majors';

    protected $fillable = [
        'code',
        'head_of_majors',
        'quota',
        'registration_fee',
        'name',
        'description'
    ];

    protected $casts = [
        'quota' => 'integer',
        'registration_fee' => 'integer',
        'created_at' => 'datetime'
    ];

    public function ppdbRegistration() {
        return $this->hasMany(PpdbRegistration::class);
    }

    public function alumnis() {
        return $this->hasMany(Alumni::class);
    }
}
