<?php

use Illuminate\Support\Facades\Route;
use App\Campaign;
use App\Influencer;
use App\CampaignInflList;
use App\Mail\CampaignRequest;
use App\Mail\CampaignOpportunityReceived;
use Illuminate\Contracts\Encryption\DecryptException;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth','isUser']], function () {

Route::get('/home', 'HomeController@index')->name('home');


});



Route::get('/email',function(){
    // return config("app.url");
    $data = Campaign::first();
    $influencer = Influencer::first();
    // return $influencer;
    Mail::to('praveen7041@gmail.com')->send(new CampaignRequest($influencer,$data));
    return 'new WelcomeMail()';

});

Route::get('/campaign/{cid}/accept/{iid}',function($cid,$iid){
    try {
        $camp = Campaign::first();
        if(date('y-m-d') > $camp->startdate)
        {
        $data = new CampaignInflList;
        $data->cid = decrypt($cid);
        $data->iid = decrypt($iid);
        $data->status = 0 ;
        $data->save();
        return view('Successpage/accepted');
        }
        else{
           return view('/Pagenotfound/404');      
        }
    }
    catch (DecryptException $e) {
        $request->session()->flash('error', 'Please refresh page');
    }
       

});




Route::get('/campaign/{cid}/newaccept/{id}/brand/{bid}',function($cid,$id,$bid){
    try {
        $camp = Campaign::first();
        if(date('Y-m-d') >= $camp->startdate && date('Y-m-d') <= $camp->enddate)
        {
        $data = new CampaignInflList;
        $data->cid = decrypt($cid);
        $data->iid = decrypt($id);
        $data->bid = decrypt($bid);
        $data->status = 0 ;
        $data->save();
        return view('Successpage/accepted');
        }
        else{
           return view('/Pagenotfound/404');      
        }
    }
    catch (DecryptException $e) {
        $request->session()->flash('error', 'Please refresh page');
    }
       

});



Route::get('/acceptrequest/{cid}/{status}',function($cid,$status){
    try {
        $camp = CampaignInflList::find(decrypt($cid));

        if($camp->status == 1 || $camp->status == 4)
        {
            $x = decrypt($status);
            
        $camp->status = $x;
        $camp->save();
        if($x == 3){
            return view('Successpage/accepted');
        }

        else{
            return view('/Pagenotfound/camp404');   //reject
        }

        }
        
        
        else{
           return view('Successpage/accepted');      
        }
    }
    catch (DecryptException $e) {
        $request->session()->flash('error', 'Please refresh page');
    }
       

});





Route::middleware(['admin', 'web','auth'])->prefix('admin')->group(function () {
    Route::get('/','AdminController@homepage');
    
    Route::prefix('influencer')->group(function () {
        Route::get('/','AdminController@ListInfluencer');
        Route::get('/pendinglist','AdminController@PendingInfluencer');
        Route::post('/paginate','AdminController@paginateInfluencer');
        Route::post('/pendingpaginate','AdminController@pendingpaginateInfluencer');
        Route::get('/view/{id}','AdminController@ViewInfluencer');
        Route::get('/add','AdminController@AddInfluencer');
        Route::get('/exportfiles', 'InfluencerController@export');
      
        Route::post('/importfiles', 'AdminController@influencersimport');
        Route::post('/add','AdminController@StoreInfluencer');
        Route::get('/edit/{id}','AdminController@EditInfluencer');
        Route::post('/edit/{id}','AdminController@UpdateInfluencer');

        Route::post('/content/{id}','InfluencerController@content');
        Route::post('/pendinglist/{id}','InfluencerController@profilestatus');
        Route::post('/accountstatus/{id}','InfluencerController@accountstatus');
        Route::post('/emailstatus/{id}','InfluencerController@emailstatus');
        Route::post('/phonestatus/{id}','InfluencerController@phonestatus');
        Route::post('/categorystatus/{id}','InfluencerController@categorystatus');
        Route::post('/iusernamesstatus/{id}','InfluencerController@iusernamesstatus');
        Route::post('/ifollowersstatus/{id}','InfluencerController@ifollowersstatus');
        Route::post('/ipostsstatus/{id}','InfluencerController@ipostsstatus');
        Route::post('/iavglikestatus/{id}','InfluencerController@iavglikestatus');
        Route::post('/iavgcmtstatus/{id}','InfluencerController@iavgcmtstatus');
        Route::post('/iaudagestatus/{id}','InfluencerController@iaudagestatus');
        Route::post('/iaudlocstatus/{id}','InfluencerController@iaudlocstatus');
        Route::post('/iaudgenestatus/{id}','InfluencerController@iaudgenestatus');

        Route::post('/yurlstatus/{id}','InfluencerController@yurl');
        Route::post('/furlstatus/{id}','InfluencerController@furl');
        Route::post('/tusernamestatus/{id}','InfluencerController@tusername');

  
    });
    Route::prefix('brand')->group(function () {
        Route::get('/','AdminController@listBrand');
        Route::get('/add','AdminController@addBrand');
        Route::post('/add','AdminController@storeBrand');
        Route::post('/paginate','AdminController@paginateBrand');
        Route::post('/brandimport', 'AdminController@brandimport');
        Route::get('/brandexport', 'BrandController@export');
        // Route::post('/pendingpaginate','BrandController@pendingpaginateBrand');
        // Route::get('/view/{id}','AdminController@ViewInfluencer');
        // Route::post('/importfiles', 'AdminController@importfiles');
        Route::get('/edit/{id}','AdminController@editBrand');
        Route::post('/validatebrand','AdminController@validatebrand');
        Route::post('/edit/{id}','AdminController@updateBrand');
    });
    Route::prefix('otheropp')->group(function () {
        Route::get('/','OtherOppController@index');
        Route::get('/add','OtherOppController@addopp');
        Route::post('/add','OtherOppController@storeopp');
        Route::get('/view/{id}','OtherOppController@viewopp');
    
        Route::get('/edit/{id}','OtherOppController@editopp');
        Route::post('/validatebrand','OtherOppController@validatebrand');
        Route::post('/edit/{id}','OtherOppController@updateopp');
        Route::get('/deleteopp/{id}','OtherOppController@deleteopp');

        Route::post('/changes/{id}','OtherOppController@changes');
        Route::post('/changein/{id}','OtherOppController@changein');
    });
    Route::prefix('campaign')->group(function () {
        Route::get('/','CampaignController@index');
        Route::get('/create','CampaignController@createcampaign');
        Route::get('/createone/{id}','CampaignController@createcampaign0');
        
        Route::post('/create','CampaignController@storecampaign0');

        Route::post('/createone/{id}','CampaignController@storecampaign');

        Route::get('/edit/{id}','CampaignController@editcampaign');
        Route::post('/edit/{id}','CampaignController@updatecampaign');
        Route::get('/view/{id}','CampaignController@viewcamp');
        Route::get('/delete/{id}','CampaignController@delcamp');

        Route::post('/validatecamp','CampaignController@validatecamp');
        Route::get('/view/{id}/exportinsights','CampaignController@exportinsights');
        Route::get('/newcreator/{id}','CampaignController@newcreator');
      
         Route::post('/newcreator/{id}','CampaignController@addnewcreator');
       
         Route::get('/sendmail/{id}','CampaignController@sendmail');
         Route::get('/view/download/{id}','CampaignController@downloadins');
         
        // Route::post('/add','AdminController@storeBrand');
        Route::post('/revisedoffer/{id}','CaignInfuListController@revisedoffer');
        Route::post('/admindecline/{id}','CaignInfuListController@admindecline');
        Route::post('/adminreject/{id}','CaignInfuListController@adminreject');
        Route::post('/changestatus/{id}','CaignInfuListController@changestatus');
         Route::post('/contenttype/{id}','CaignInfuListController@contenttype');
        Route::post('/ratecreator/{id}','CaignInfuListController@ratecreator');
        Route::post('/updatein/{id}','CaignInfuListController@updatein');
        Route::post('/posturl/{id}','CaignInfuListController@posturl');
        Route::post('/shortlist/{id}','CaignInfuListController@shortlist');
        Route::post('/finalstatus/{id}','CaignInfuListController@finalstatus');
        Route::post('/proorder/{id}','CaignInfuListController@proorder');
        // Route::post('/edit/{id}','AdminController@updateBrand');
        Route::post('/view/savecm/{id}','CampaignController@savecm');


    });
    Route::prefix('settings')->group(function () {
        Route::prefix('interest')->group(function () {
            Route::get('/','IntrestController@index');
            
            Route::post('/add','IntrestController@store');
            Route::post('/edit/{id}','IntrestController@update');
            Route::post('/delete','IntrestController@destroy');
        });
        Route::prefix('language')->group(function () {
            Route::get('/','LanguageController@index');
            Route::post('/add','LanguageController@store');
            Route::post('/edit/{id}','LanguageController@update');
            Route::post('/delete','LanguageController@destroy');
        });
        
    });
    Route::prefix('yol-products')->group(function () {
        Route::prefix('yolytics')->group(function () {
            Route::get('/','AdminController@yol');
            
      
        });

        
    });
});


Route::middleware(['web','auth'])->group(function () {
    Route::prefix('settings')->group(function () {
        Route::post('/changeavatars','SettingsController@changeavatar');
        Route::post('/uploadins','SettingsController@uploadins');
        Route::post('/iconnect','SettingsController@iconnect');
        Route::post('/idelete','SettingsController@idelete');
        Route::get('/','SettingsController@index');
        Route::post('/','SettingsController@store');
    });
    Route::prefix('socialaccounts')->group(function () {
    
        Route::get('/','SaccountController@index');
        Route::post('/','SaccountController@store');
        Route::post('/edituname','SaccountController@edituname');
        Route::post('/edityt','SaccountController@edityt');
        Route::post('/editfb','SaccountController@editfb');
        Route::post('/pcost','SaccountController@pcost');
        Route::post('/editpcost','SaccountController@editpcost');

        Route::get('/imgdel','SaccountController@imgdel');

        Route::post('/instaconnect','SaccountController@instaconnect');
        Route::post('/fbname','SaccountController@fbname');
        Route::post('/ytname','SaccountController@ytname');

    });
    Route::prefix('payment')->group(function () {
        Route::get('/','SettingsController@payment');
        Route::post('/','SettingsController@paymentstore');
        


    });
    Route::prefix('otheroffers')->group(function () {
        Route::get('/','OtherOppController@ooffer');
        // Route::post('/','OtherOppController@paymentstore');
        


    });

    Route::prefix('campaign')->group(function () {
        Route::get('/','CampaignController@userindex');
        Route::get('/status/{id}','CampaignController@cstatus');
        Route::post('/useraccept/{id}','CampaignController@useraccept');
        Route::get('/notsuits/{id}','CampaignController@notsuits');
        Route::post('/userdecline/{id}','CampaignController@userdecline');
        Route::post('/acceptmou/{id}','CampaignController@acceptmou');
        Route::post('/addurl/{id}','CampaignController@addurl');
        Route::post('/addposin/{id}','CampaignController@addposin');
        Route::post('/uploadins/{id}','CampaignController@uploadins');
        Route::post('/porder/{id}','CampaignController@porder');
        Route::post('/preceive/{id}','CampaignController@preceive');
        Route::get('/{cid}/campaccept/{iid}/brandid/{bid}','CampaignController@campaccept');
        Route::get('/{cid}/campnotsuit/{iid}/brandid/{bid}','CampaignController@campnotsuit');
        // Route::post('/paginatecamp','CampaignController@paginatecamp');
    });
    Route::prefix('brand')->group(function () {
  
        Route::get('/','BrandController@index');
     
    });
});








Route::get('/youtube/redirect', function () {
    return Socialite::driver('youtube')->redirect();
});

Route::get('/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/yoloud/public/login/youtube/callback', function () {
    $user = Socialite::driver('youtube')->stateless()->user();
    // return json_encode(Auth::user());
    return json_encode($user);
});


Route::get('/yoloud/public/login/google/callback', function () {
    $user = Socialite::driver('google')->stateless()->user();
    // return json_encode(Auth::user());
    return json_encode($user);
});

