<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_templates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('content_path')->nullable();
            $table->text('content_html')->nullable();
            $table->boolean('is_draft')->default(0);
            $table->boolean('default_template')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('pages', function (Blueprint $table) {
            $table->foreign('page_template_id')->references('id')->on('page_templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('pages', function (Blueprint $table) {
            $table->dropForeign(['page_template_id']);
        });
        Schema::dropIfExists('page_templates');
    }
}
