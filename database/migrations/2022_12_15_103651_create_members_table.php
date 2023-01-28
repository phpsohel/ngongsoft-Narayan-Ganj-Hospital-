<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('cbc_sl')->nullable();
            $table->string('member_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->date('birth')->nullable();
            $table->string('education')->nullable();
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('company_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('blood')->nullable();
            $table->string('nid')->nullable();
            $table->string('cbc_type')->nullable();
            $table->string('photo')->nullable();
            $table->string('payment_status')->default('2')->comment('1.Paid 2.Unpaid')->nullable();
            $table->string('note')->nullable();
            $table->string('application_status')->default('2')->comment('1.Approve 2.pending 3.Reject')->nullable();
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
        Schema::dropIfExists('members');
    }
}