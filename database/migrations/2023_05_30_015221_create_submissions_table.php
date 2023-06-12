<?php

use App\Models\Axis;
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
            $table->foreignIdFor(Axis::class);
            $table->string('title');
            $table->text('resume');
            $table->char('status')->default('P'); //'Pendente', 'Aprovada', 'Reprovada'
            $table->string('file');
            $table->string('file_path');
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
