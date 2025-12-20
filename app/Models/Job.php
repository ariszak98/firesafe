<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $table = 'fejobs';
    protected $guarded = [];
 
    public function company(): BelongsTo {
        return $this->belongsTo(Company::class);
    }
}
