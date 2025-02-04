<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostalExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postal_exchanges', function (Blueprint $table) {
            $table->id('id');
            $table->string('type');
            $table->dateTime('date');
            $table->string('ref_no', 25)->unique();
            $table->string('subject')->nullable();

            $table->string('to');

            $table->string('from');

            $table->text('note')->nullable();

            $table->text('attachment')->nullable();

            $table->boolean('status')->default(1);

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('last_updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postal_exchanges');
    }
}
