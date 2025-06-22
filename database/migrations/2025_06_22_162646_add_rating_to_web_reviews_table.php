<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('web_reviews', function (Blueprint $table) {
        $table->unsignedTinyInteger('rating')->default(0); 
    });
}

public function down()
{
    Schema::table('web_reviews', function (Blueprint $table) {
        $table->dropColumn('rating');
    });
}

};
