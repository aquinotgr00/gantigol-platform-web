<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBlogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('author')->nullable();
        });
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('source_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('blogs', 'author')) {
            Schema::table('blogs', function (Blueprint $table) {
                $table->dropColumn('author');
            });
        }
        if (Schema::hasColumn('blogs', 'source_image')) {
            Schema::table('blogs', function (Blueprint $table) {
                $table->dropColumn('source_image');
            });
        }
    }
}
