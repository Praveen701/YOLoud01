<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignInflListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_infl_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('cid')->nullable()->unsigned(); //campaign_ID
            $table->integer('iid')->nullable()->unsigned(); //influencer_ID
            $table->integer('bid')->nullable()->unsigned(); //brand_ID
            $table->integer('status')->unsigned()->default(0);//0 pending //1 shortlisted & userpending //2 finalized //3-acceptedbyuser //4-declinebyuser  //5 - Admin rejects // //6-MOU sent
            $table->longText('contenttype')->nullable();
            $table->longText('otherdetails')->nullable();
            $table->string('commercial')->nullable();
            $table->string('orderid')->nullable();
            $table->date('pdeldate')->nullable();
            $table->date('precdate')->nullable();
            $table->longText('reason')->nullable();
            $table->string('posturl')->nullable();
            $table->bigInteger('views')->default(0);
            $table->bigInteger('likes')->default(0);
            $table->bigInteger('comments')->default(0);
            $table->bigInteger('save')->default(0);
            $table->bigInteger('share')->default(0); 
            $table->bigInteger('reach')->default(0);
            $table->bigInteger('impressions')->default(0);
            $table->longText('insphoto')->nullable();
            $table->bigInteger('ctr')->default(0);
            $table->double('cpm',10,2)->default(0);
            $table->double('engratew',10,2)->default(0);
            $table->double('engratewout',10,2)->default(0);
            $table->string('ratecreator')->default(0);
            $table->double('yolpoints',4,2)->default(0);
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
        Schema::dropIfExists('campaign_infl_lists');
    }
}
