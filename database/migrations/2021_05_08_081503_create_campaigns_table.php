<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->integer('iid');
            $table->string('campaigntitle');
            $table->longText('campaignobj');
            $table->longText('campaigndes');
            $table->date('startdate');
            $table->date('enddate');
            $table->integer('campstatus')->default(1);//00 draft 1 scheduled 2 ongoing 3 completed
            
            $table->longText('picked1')->nullable();
            $table->longText('scategory')->nullable();
            $table->longText('picked2')->nullable();
            $table->longText('stype')->nullable();
            $table->longText('picked3')->nullable();
            $table->longText('sage')->nullable();

            $table->longText('picked4')->nullable();
            $table->longText('smgender')->nullable();
            $table->longText('sfgender')->nullable();

            $table->longText('picked5')->nullable();
            $table->longText('slocation')->nullable();
            
            $table->longText('picked6')->nullable();
            $table->longText('saage')->nullable();

            $table->longText('picked7')->nullable();
            $table->longText('samgender')->nullable();
            $table->longText('safgender')->nullable();
            
            $table->longText('picked8')->nullable();
            $table->longText('salocation')->nullable();
 
 
            $table->longText('pproduct')->nullable();
            $table->longText('orderedby')->nullable();
            $table->longText('pprice')->nullable();
            $table->string('crange')->nullable();
            $table->boolean('cexpense')->default(0);
            $table->longText('otherinfo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
