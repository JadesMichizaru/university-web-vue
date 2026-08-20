<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndustryPartner extends Model
{
    protected $table = 'industry_partners';

    protected $fillable = [
        'company_name',
        'industry_sector',
        'logo_url',
        'address',
        'partnership_type'
    ];

    public function vacancies() {
        return $this->hasMany(Vacancy::class);
    }
}
