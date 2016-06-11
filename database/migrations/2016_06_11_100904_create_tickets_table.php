<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'tickets', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('phone_number');
                $table->string('description');

                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tickets');
    }
//     CREATE TABLE `tickets` (
//   `id` int(11) NOT NULL,
//   `name` varchar(250) NOT NULL,
//   `phone_number` varchar(50) NOT NULL,
//   `description` text NOT NULL,
//   `created_at` datetime NOT NULL,
//   `updated_at` datetime NOT NULL
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
}
