<?php
/**
 * Copyright (c) 2018. JoomPlace, all rights reserved
 */

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdeasTable extends Migration
{
    public function up()
    {
        $model = new \Joomplace\Component\Roadmap\Admin\Model\Idea();
        DB::schema()->create($model->getTable(), function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->integer('project_id', false, true)->comment('id of the related project');
            $table->timestamps();
        });
    }
}