<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('description');
            $table->string('severity',1);
            $table->boolean('active')->default(1);
            $table->foreignId('category_id')->nullable()->constrained('categories');

            $table->foreignId('project_id')->nullable()->constrained('projects');
            $table->foreignId('level_id')->nullable()->constrained('levels');
            $table->foreignId('client_id')->constrained('users');
            $table->foreignId('support_id')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidents');
    }
}
