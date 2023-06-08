<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });
        Schema::create('role_user', function (Blueprint $table) {
            $table->foreignIdFor(Role::class);
            $table->foreignIdFor(User::class);
        });
        DB::table('roles')->insert([
            ['name' => 'Suporte'],
            ['name' => 'Administrador'],
            ['name' => 'Avaliador'],
            ['name' => 'Pesquisador'],
            ['name' => 'Ouvinte'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
