<?php



use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateTesstingsTable extends Migration  {





public function up()
{
    



Schema::create('tesstings', function (Blueprint $table) {
    $table->increments('id');

$table->string('testas')->nullable();

$table->timestamps();

$table->softDeletes();


});
    
}


}