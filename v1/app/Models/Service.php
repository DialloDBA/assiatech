<?php

namespace App\Models;

use App\Models\GroupeService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_service',
        'description_service',
        'slug_service',
        'unique',
        'prix_service',
        'duree_service',
        'disponible',
        'image_service',
        'details_service',
        'groupe_service_id',
        'date_debut',
        'date_fin',
        'caracteristiques',
        'avantages',
        'actived',
        'user_id',
        'migration',
        'online',
    ];

    /**
     * Get the GroupeServices that owns the GroupeService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function groupe()
    {
        return $this->belongsTo(GroupeService::class,'groupe_service_id','id');
    }

    /**
     * Get the user that owns the GroupeService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}
