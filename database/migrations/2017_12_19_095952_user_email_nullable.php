<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserEmailNullable extends Migration
{

    protected $table= 'users';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->table) && !Schema::hasColumn($this->table, 'username')) {
            Schema::table($this->table, function (Blueprint $table){
                $table->string('email')->nullable()->change();
                $table->string('username')->unique()->nullable();
            });
        }

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasColumn($this->table, 'username')){
            Schema::table($this->table, function (Blueprint $table){
                $table->string('email')->unique()->change();
                $table->dropColumn('username');
            });
        }
    }
}
