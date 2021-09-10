<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('id');
            $table->string('nit')->nullable();
            $table->string('codeBill')->nullable();
            $table->dateTime('date');
            $table->double('total');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
