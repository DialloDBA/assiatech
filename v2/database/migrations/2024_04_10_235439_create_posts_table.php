<?php

use App\Models\User;
use App\Models\Category;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->string('slug')->unique();
            $table->string('unique')->unique();
            $table->longtext('contenu');
            $table->text('image_min');
            $table->text('image_max');
            $table->longtext('resume');
            $table->text('route');
            $table->string('motscles',255)->nullable();
            $table->string('metas',255)->nullable();
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->enum('actived',['0','1'])->default(1);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Category::class)->nullable();
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
        Schema::dropIfExists('posts');
    }
};
