<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class CampMac extends Model
{
    public function campmatch(){
        return $this->hasOne('App\Campaign','id','cid');
     
    }
    
   
    public function bbb(){
        return $this->hasOne('App\CampaignInflList','cid','cid')->where('iid',Auth::user()->id);
    }

    public function campaign(){
        return $this->hasMany('App\Campaign','id','cid');
    }



    public function brandlinked(){
        return $this->hasOne('App\Brand','id','bid');
    }
    public function influencerlinked(){
        return $this->hasMany('App\CampaignInflList','cid','cid')->where('iid',Auth::user()->id);
    }
    public function inf(){
        return $this->hasMany('App\Influencer','iid','iid');
    }
    public function user(){
        return $this->hasMany('App\User','id','iid');
    }
    public function insta(){
        return $this->hasMany('App\InstagramSocial','iid','iid');
    }
   
}


