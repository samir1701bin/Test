<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_stages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lead_type');
            $table->string('show_on_dashboard')->default('0')->comment('0:not_shown,1:shown');
            $table->string('status')->default('1')->comment("1 for active,2 for inactive,0 for delete");
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lead_stages');
    }
}
