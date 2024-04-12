<?php

use App\Models\User;
use App\Models\GroupeService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_service'); // Nom du service
            $table->text('description_service'); // Description du service
            $table->string('slug_service')->unique(); // URL conviviale (slug) du service
            $table->string('unique')->unique();
            $table->decimal('prix_service', 8, 2); // Prix du service
            $table->text('duree_service',10); // Durée du service
            $table->boolean('disponible')->default(true); // Disponibilité du service
            $table->string('image_service')->nullable()->default("Services/service.jpg"); // Chemin de l'image associée au service (optionnel)
            $table->longtext('details_service'); // Détails supplémentaires du service
            $table->foreignIdFor(GroupeService::class); // Clé étrangère reliant le service à une catégorie
            
            $table->date('date_debut')->nullable(); // Date de début de disponibilité du service
            $table->date('date_fin')->nullable(); // Date de fin de disponibilité du service
            $table->longtext('caracteristiques')->nullable(); // Caractéristiques spécifiques du service
            $table->longtext('avantages')->nullable(); // Avantages ou bénéfices liés au service
            

            $table->enum('actived',['0','1'])->default(1);
            $table->foreignIdFor(User::class);
            $table->enum('migration',['0','1','2','3'])->default(0);
            $table->enum('online',['0','1'])->default(1)->comment("le statut dans le formulaire du Front");
            $table->timestamps();
            $table->softDeletes();
            $table->integer('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
