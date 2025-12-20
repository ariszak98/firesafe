<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
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
