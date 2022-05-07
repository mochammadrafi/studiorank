<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeGroup extends Model
{
    use HasFactory;

    protected $table = 'grades_group';

    protected $guarded = [];

    public function scopeByCompany($query)
    {
        $query->where('company_id', auth()->id());
    }
}