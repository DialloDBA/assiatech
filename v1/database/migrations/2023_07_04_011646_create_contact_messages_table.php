<?php

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
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('nom',255);
            $table->string('email',255);
            $table->string('telephone',255);
            $table->text('site_web');
            $table->text('sujet');
            $table->longtext('message');
            $table->foreignIdFor(GroupeService::class)->nullable();
            $table->enum("actived",['0','1'])->default(0); // 
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
        Schema::dropIfExists('contact_messages');
    }
};
