<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }

    public function countJobs(): int
    {
        return $this->jobs()->count();
    }
}
