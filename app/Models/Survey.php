<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    public function getSurveys() {
        return Survey::with('answers')->get();
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
