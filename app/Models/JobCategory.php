<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon'];

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }

    public function totalJobs(): int
    {
        return $this->hasMany(Job::class)->count();
    }
}
