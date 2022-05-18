<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('client_type')->nullable();
            $table->string('project')->nullable();
            $table->string('cust_name')->nullable();
            $table->string('cust_img')->nullable();
            $table->string('cust_email')->nullable();
            $table->string('cust_mobile')->nullable();
            $table->string('travel_location')->nullable();
            $table->string('tt_id');
            $table->string('travel_date')->nullable();
            $table->string('budget_payment_type')->nullable();
            $table->string('budget_payment_value')->nullable();
            $table->string('adults')->nullable();
            $table->string('kids')->nullable();
            $table->string('infants')->nullable();
            $table->string('lead_source')->nullable();
            $table->string('lead_owner')->nullable();
            $table->string('requirements')->nullable();
            $table->unsignedBigInteger('assigned_to')->nullable();
            $table->foreign('assigned_to')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade')->comment('linked to admin table');
            $table->string('lead_type')->default('0')->comment("0:unassigned,1:new,2:followup,3:potential,4:positive,5:converted,6:close");
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
        Schema::dropIfExists('leads');

    }
}
