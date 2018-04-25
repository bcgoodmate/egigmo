<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('slug');
            $table->string('content_path')->nullable();
            $table->text('content_html')->nullable();
            $table->uuid('page_template_id')->index()->nullable();
            $table->boolean('is_draft')->default(0);
            $table->boolean('is_start_page')->default(0);
            $table->boolean('default_template')->default(0);
            $table->string('page_title')->nullable();
            $table->string('page_url')->nullable();
            $table->text('page_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
