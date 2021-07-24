<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstagramSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instagram_socials', function (Blueprint $table) {
            $table->id();
            $table->integer('iid')->unsigned();
            $table->string('iusername')->nullable();
            $table->string('istatus')->default(0);
            $table->string('itype')->nullable();
            $table->string('ifollowers')->default(0);
            $table->string('iposts')->default(0);
            $table->string('iavglike')->default(0);
            $table->string('iavgcmt')->default(0);
            $table->string('iengagementrate')->default(0);
            $table->string('iqs')->nullable();
            $table->string('ipfr')->default(0); //portfolio :follower ratio
            $table->string('iaudienceage')->nullable();
            $table->string('iaudienceloc')->nullable();
            $table->string('iaudiencegen')->nullable();
            $table->longText('updateinsphoto')->nullable();

            $table->integer('iusernamesstatus')->default(0);//00 pending 1 active 2 rejected
            $table->integer('ifollowersstatus')->default(0);//00 pending 1 active 2 rejected
            $table->integer('ipostsstatus')->default(0);//00 pending 1 active 2 rejected
           $table->integer('iavglikestatus')->default(0);//00 pending 1 active 2 rejected   
           $table->integer('iavgcmtstatus')->default(0);//00 pending 1 active 2 rejected
           $table->integer('ipfrstatus')->default(0);//00 pending 1 active 2 rejected
           $table->integer('iaudagestatus')->default(0);//00 pending 1 active 2 rejected
            $table->integer('iaudlocstatus')->default(0);//00 pending 1 active 2 rejected
            $table->integer('iaudgenestatus')->default(0);//00 pending 1 active 2 rejected
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
        Schema::dropIfExists('instagram_socials');
    }
}
