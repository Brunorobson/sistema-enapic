<?php

use App\Models\Avaliation;
use App\Models\Criteria;
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
        Schema::create('avaliation_items', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(model:Avaliation::class);
            $table->foreignIdFor(model:Criteria::class);
            $table->integer('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliation_items');
    }
};
