<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('company_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('parent_company_group_id')->nullable();
            $table->unsignedBigInteger('group_head_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('set null');
            $table->foreign('parent_company_group_id')->references('id')->on('company_groups')->onDelete('set null');
            $table->foreign('group_head_id')->references('id')->on('employees')->onDelete('set null');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('company_groups');
    }
}

