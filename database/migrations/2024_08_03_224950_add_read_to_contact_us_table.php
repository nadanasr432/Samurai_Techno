<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('contact_us', function (Blueprint $table) {
            $table->boolean('read')->default(false); // Add the read column with a default value
        });
    }

    public function down()
    {
        Schema::table('contact_us', function (Blueprint $table) {
            $table->dropColumn('read'); // Remove the read column
        });
    }
};
