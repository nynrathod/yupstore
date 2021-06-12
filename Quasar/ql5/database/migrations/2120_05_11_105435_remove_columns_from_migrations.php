<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class RemoveColumnsFromMigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('migrations')
          ->where('migration', '2120_05_10_213215_add_columns_to_table')
          ->delete();
        DB::table('migrations')
          ->where('migration', '2120_05_13_195110_delete_columns_from_migrations')
          ->delete();
    }
}
