<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterBackendMenuTable extends Migration
{
    protected $schema;
    protected $table;

    public function __construct(){
        $this->schema = Schema::connection(\Common::connection('local'));
        $this->table = 'Master_BackendMenu';
    }

    public function up()
    {
        if(in_array($this->table,\Common::tableSetting())){
            $this->schema->create($this->table, function (Blueprint $table) {
                $table->collation = 'utf8_general_ci';
                $table->charset = 'utf8';
                $table->increments('IndexBackendMenu');
                $table->string('MenuName',150);
                $table->integer('MenuParent');
                $table->string('MenuUrl',150)->default('#');
                $table->string('Target',15)->default('_self');
                $table->string('MenuIcon',20);
                $table->string('ManualBookRealName',255)->nullable();
                $table->string('ManualBookNameInServer',255)->nullable();
                $table->integer('SortBy');
                $table->enum('Status',['ACTIVE', 'INACTIVE'])->default('ACTIVE');
                $table->datetime('CreatedDate');
                $table->string('CreatedByID', 50);
                $table->string('CreatedByName', 200);
                $table->dateTime('UpdatedDate')->nullable();
                $table->string('UpdatedByID', 50)->nullable();
                $table->string('UpdatedByName', 200)->nullable();
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
        if(in_array($this->table,\Common::tableSetting())){
            $this->schema->dropIfExists($this->table);
        }
    }
}
