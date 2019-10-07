<?php



use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateTestAaaasTable extends Migration  {





public function up()
{
    



Schema::create('test_aaaas', function (Blueprint $table) {
    $table->increments('id');

$table->string('testas')->nullable();

$table->timestamps();

$table->softDeletes();


});
    
}


}