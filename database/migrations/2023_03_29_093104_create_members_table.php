<?php

use App\Models\User;
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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('member_id');
            $table->foreignIdFor(User::class);
            $table->boolean('type');
            $table->string('name');
            $table->string('designation');
            $table->string('department');
            $table->string('organization');
            $table->string('email');
            $table->string('mobile');
            $table->text('address');
            $table->boolean('is_admin');
            $table->timestamps();

            // $table->foreign('member_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
