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
        Schema::create('heure_ouvertures', function (Blueprint $table) {
            $table->id();
            $table->string("jour",200)->unique();
            $table->string("debut");
            $table->string("fin");
            $table->enum("type",['1','2'])->default(1);
            $table->enum("actived",['0','1'])->default(1);
            $table->enum('migration',['0','1','2','3'])->default(0);

            $table->foreignidFor(User::class);
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
        Schema::dropIfExists('heure_ouvertures');
    }
};
