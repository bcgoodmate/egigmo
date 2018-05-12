<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->uuid('id')->primary(); // the ID of the web form
            $table->string('name'); // the name of the web form
            $table->uuid('workflow_id')->index()->default(0); // the ID of the workflow. Defaults to 0 if "Don't use a workflow" is selected
            $table->uuid('zone_id')->index()->default(-1); // the ID of the secure zone. Defaults to -1 if "Don't subscribe to a Secure Zone" is selected
            $table->uuid('affiliate_id')->index()->default(-1); // affiliate program ID. Defaults to -1 if "Don't subscribe to an Affiliate Program" is selected
            $table->boolean('create_opportunity')->default(0); // true if sales opportunity is used, false is otherwise
            $table->uuid('opportunity_type_id')->index()->nullable(); // opportunity type ID
            $table->uuid('stage_type_id')->index()->nullable(); // opportunity stage ID
            $table->decimal('probability', 8, 2)->default(0.00); // default probability
            $table->decimal('amount', 8, 2)->default(0.00); // the estimated value of this sale opportunity
            $table->integer('cycle_type_id')->default(0); // 0 - createOpportunity is false, 3 - In a week, 4 - In a fortnight, 5 - In a month, 6 - In 3 months, 7 - In 6 months, 8 - In 1 year
            $table->boolean('set_wholesale')->default(0); // wholesale subscription enabled
            $table->boolean('send_autoresponder')->default(0); // to send or not the autoresponder email to the customer filling out the web form
            $table->uuid('send_autoresponder_id')->index()->nullable();
            $table->longText('fields')->nullable();
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
        Schema::dropIfExists('forms');
    }
}
