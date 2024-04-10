<?php

use App\Models\User;
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
        Schema::create('groupe_services', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_groupe')->unique();
            $table->string('slug_groupe')->unique();
            $table->string('unique')->unique();
            $table->longText('description_groupe')->nullable();
            $table->enum('actived',['0','1'])->default(1);
            $table->enum('migration',['0','1','2','3'])->default(0);
            $table->enum('online',['0','1'])->default(1)->comment("le statut dans le formulaire du Front");
            $table->foreignIdFor(User::class);
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
        Schema::dropIfExists('groupe_services');
    }
};
