<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpdbRegistration extends Model
{
    protected $table = 'ppdb_registrations';

    protected $fillable = [
        'registration_number',
        'major_id',
        'zone',
        'school',
        'full_name',
        'nisn',
        'date_of_birth',
        'previous_school',
        'status',
        'document_url'
    ];

    public function majors() {
        return $this->belongsTo(Majors::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
