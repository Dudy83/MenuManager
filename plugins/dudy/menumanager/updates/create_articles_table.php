<?php namespace Dudy\MenuManager\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('dudy_menumanager_articles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('ingredients');
            $table->integer('prix');
            $table->integer('parent_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dudy_menumanager_articles');
    }
}
