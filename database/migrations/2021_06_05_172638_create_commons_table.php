<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commons', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('points')->default(0);
            $table->integer('indicator')->unsigned()->nullable();
            $table->integer('left_indicated')->unsigned()->nullable();
            $table->integer('right_indicated')->unsigned()->nullable();
            
            $table->foreign('id', 'fk_user_common')
                ->references('id')->on('users')
                ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('indicator', 'fk_indicator')
                ->references('id')->on('commons')
                ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('left_indicated', 'fk_left_indicated')
                ->references('id')->on('commons')
                ->onUpdate('cascade')
            ->onDelete('set null');
            $table->foreign('right_indicated', 'fk_right_indicated')
                ->references('id')->on('commons')
                ->onUpdate('cascade')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commons');
    }
}
