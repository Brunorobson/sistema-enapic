<?php

use App\Models\Axle;
use App\Models\Event;
use App\Models\User;
use App\Models\Submission;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Event::class);
            $table->foreignIdFor(Axle::class);
            $table->string('title');
            $table->text('resume');
            //AA - Aguardando Avaliação, EA - Em Avaliação, AV - Avaliado,
            //AP - Aprovado, AC - Aprovado com Correções, RE - Reprovado
            $table->char('status', 2)->default('AA');
            $table->string('file');
            $table->string('file_new')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};