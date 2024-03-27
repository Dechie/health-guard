<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HealthProfessionalProfile extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'first_name',
        'last_name',
        'specialization',
        'hospital_affiliation',
        'address',
        'years_of_experience',
        'contribution_tags',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function healthProfessionalRatings(): HasMany {
        return $this->hasMany(HealthProfessionalRating::class);
    }
}