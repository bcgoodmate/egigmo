<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystememailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_emails', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->boolean('enable')->default(0);
            // $table->uuid('page_template_id')->index()->nullable();
            $table->string('subject')->nullable(); // autoresponder subject
            $table->string('from_name')->nullable(); // name of the sender
            $table->string('from_email')->nullable(); // email of the sender
            $table->integer('format')->index()->default(1); // body format: 1 - HTML, 2 - Text
            $table->longText('body')->nullable(); // body of the email
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('forms', function (Blueprint $table) {
            $table->foreign('send_autoresponder_id')->references('id')->on('system_emails');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->dropForeign(['send_autoresponder_id']);
        });
        Schema::dropIfExists('system_emails');
    }
}
