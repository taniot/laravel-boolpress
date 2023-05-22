<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {

            $table->unsignedBigInteger('category_id')->nullable()->after('id');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->nullOnDelete();

                // $table->foreignId('category_id')
                //     ->nullable()
                //     ->after('id')
                //     ->constrained()
                //     ->nullOnDelete();;


        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //$table->dropForeign('categories_category_id_foreign'); //posts_ tabella user_id //campo _foreign
            $table->dropForeign(['category_id']); //elimino la relazione
            $table->dropColumn('category_id'); //elimino la colonna
        });
    }
};
