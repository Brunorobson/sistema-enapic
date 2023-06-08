<?php

use App\Models\Axe;
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
            $table->foreignIdFor(Axe::class);
            $table->string('title');
            $table->text('description');
            $table->char('status');
            $table->string('file_upload');
            $table->string('path_file');
            $table->timestamps();
        });

        Schema::create('user_submissions', function (Blueprint $table) {
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Submission::class);
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
