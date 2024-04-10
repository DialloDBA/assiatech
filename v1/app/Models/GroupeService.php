<?php

namespace App\Models;

use App\Models\User;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupeService extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle_groupe',
        'slug_groupe',
        'description_groupe',
        'unique',
        'actived',
        'migration',
        'online',
        'user_id',
    ];


    /**
     * Get all of the Services for the GroupeService
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany(Service::class, 'groupe_service_id', 'id');
    }

    /**
     * Get the user that owns the GroupeService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
