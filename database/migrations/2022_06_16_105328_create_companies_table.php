<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('created_by');
            $table->string('name');
            $table->string('slug');
            $table->boolean('new_member')->default(0);
            $table->boolean('suspended')->default(0);
            $table->boolean('status')->default(0);
            $table->boolean('on_website')->default(0);
            $table->date('enrollment_date');
            $table->date('expire_date');
            $table->string('country');
            $table->string('city');
            $table->text('address');
            $table->string('website');
            $table->text('profile')->nullable();
            $table->string('logo');
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
        Schema::dropIfExists('companies');
    }
}
