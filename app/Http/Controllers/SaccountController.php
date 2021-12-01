<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Influencer;
use App\Language;
use App\InstagramSocial;
use App\YFTSocials;
use App\SocialLog;
use App\InfluencerLog;

use App\Intrest;
use Str;
use File;
use Storage;
use Auth;
use App\User;
use Validator;

use Phpfastcache\Helper\Psr16Adapter;
use Phpfastcache\Config\Config;
use InstagramScraper\Instagram;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use InstagramScraper\Exception\InstagramNotFoundException;
use InstagramScraper\Exception\InstagramException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use ErrorException;

use InstagramScraper\Exception\InstagramAuthException;




class SaccountController extends Controller
{
    public function index()
    {
        $insta=InstagramSocial::where('iid',Auth::user()->id)->first();
        $influencer=Influencer::where('iid',Auth::user()->id)->first();
        $yftsocial=YFTSocials::where('iid',Auth::user()->id)->first();

        $pic = json_decode($influencer->contentphoto);

        return view('Influencer/saccount',['insta'=>$insta,'influencer'=>$influencer,'yftsocial'=>$yftsocial,'pic'=>$pic]);
    }
    public function store(Request $request)
    {
        // return $request;
        $user=User::find(Auth::user()->id);
        $insta=InstagramSocial::where('iid',$user->id)->first();
        $insta->iusername = $request->iusername;
        $insta->iconnect=0;
        $insta->save();
        
        $request->session()->flash('status', 'Successfully saved');
        
        return redirect('/socialaccounts');
    }

    public function instaconnect(Request $request)
    {

    
    try{


      

          $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), 'chec.k846', 'Praveen7041', null);
    
        
        $instagram->loginWithSessionId('9234466429%3ARW5oece5M5jj7H%3A10'); 
        // $instagram->saveSession();

        $user=User::find(Auth::user()->id);
        $insta=InstagramSocial::where('iid',$user->id)->first();
        $influencer=Influencer::where('iid',$user->id)->first();

         
        $username = $insta->iusername;

       
      
         $account = $instagram->getAccount($username);
        
        $response = $instagram->getPaginateMedias($username);
        $medias = $instagram->getMedias($username, 12);

         $bio= $account->getBiography() ; 
         $user =$account->getUsername();
        
         $fname = $account->getFullName();
         $purl = $account->getProfilePicUrl(); 
         $check = $account->isVerified();
         $private = $account->isPrivate();
         
         

            $r=0;
            $f=0;

            foreach ($medias as $media) {
                /** @var \InstagramScraper\Model\Media $media */
            
                $r = $r + $media->getLikesCount();
                $f = $f + $media->getCommentsCount();
            
                // $image = $media->getImageHighResolutionUrl();
                // echo "Number of comments: {$media->getCommentsCount()}" . PHP_EOL;
                //  echo "Number of likes: {$media->getLikesCount()}" . PHP_EOL;

            
            }

            $following= $account->getFollowsCount() ; 
            $insta->iposts= $account->getMediaCount() ; 
            $insta->ifollowers= $account->getFollowedByCount() ; 

            if($account->getMediaCount() < 12)
            {
                $l = round($r / $account->getMediaCount(),2);
                $insta->iavglike = $l;
                
    
                $c = round($f / $account->getMediaCount(),2) ;
                $insta->iavgcmt = $c;
            }
            if($account->getMediaCount() >= 12)
            {
                $l = round($r / 12,2);
                $insta->iavglike = $l;
                
    
                $c = round($f / 12,2) ;
                $insta->iavgcmt = $c;
            }

          
            

            if($account->getFollowedByCount() > 0)
            {
                $e = ( ($l + $c) / $account->getFollowedByCount() ) * 100 ;

            
            $insta->iengagementrate = round($e,2);
                
            }
            if($account->getFollowedByCount() == 0)
            {
                $insta->iengagementrate = '0';
            }

          

            if($insta->ifollowers <= 10000)
            {
                $influencer->inftype='Nano';
            }
            elseif ($insta->ifollowers > 10000 && $insta->ifollowers <= 100000) {
                $influencer->inftype='Micro';
            }
            elseif ($insta->ifollowers > 100000 && $insta->ifollowers <= 1000000) {
                $influencer->inftype='Macro';
            }
            else {
                $influencer->inftype='Mega';
            }

            $insta->iconnect = 1;

            $insta->save();
            $influencer->save();

            $request->session()->flash('status', 'Your Instagram Account Added Successfully');
            return redirect('/socialaccounts');
            //   return view('Successpage/accepted');

        }

            catch (InstagramAuthException  $exception) {

                $request->session()->flash('error', 'Something Went Wrong ! Connect Again Later');
                return redirect('/socialaccounts'); 
        }
                catch (RequestException  $exception) {

 
            $request->session()->flash('error', 'Something Went Wrong ! Connect Again Later');
            return redirect('/socialaccounts');
                
            }
            catch (ErrorException  $exception) {

            $request->session()->flash('error', 'Something went wrong ! Please connect again!');
            return redirect('/socialaccounts');

            
        } 
            catch (InstagramException  $exception) {

            $request->session()->flash('error', 'Something went wrong ! Please connect again');
            return redirect('/socialaccounts');
        
            
        } 
        catch (ConnectException  $exception) {
          
            $request->session()->flash('error', 'Something went wrong ! Please connect again');
            return redirect('/socialaccounts');
    } 
            catch (InstagramNotFoundException  $exception) {
                
            $request->session()->flash('error', 'Could not find a user ! Please try another user.');
            return redirect('/socialaccounts');
                
            } 
     
     }

     public function pcost(Request $request)
     {
        $user=User::find(Auth::user()->id);
        $insta=InstagramSocial::where('iid',$user->id)->first();
        $yft=YFTSocials::where('iid',$user->id)->first();

        $insta->ispost = $request->ispost;
        $insta->ireel = $request->ireel;
        $insta->ivedio = $request->ivedio;
        $insta->istory = $request->istory;
        $insta->iigtv = $request->iigtv;
        $yft->icost = 1;
        $yft->save();
        $insta->save();

        $request->session()->flash('status', 'Successfully saved');
        return redirect('/socialaccounts');


     }
     public function editpcost(Request $request)
     {
        $user=User::find(Auth::user()->id);
        $insta=InstagramSocial::where('iid',$user->id)->first();
        $yft=YFTSocials::where('iid',$user->id)->first();

        $yft->icost = null;
        $yft->save();
        // $request->session()->flash('status', 'Successfully saved');
        return redirect('/socialaccounts');


     }







     public function fbname(Request $request)
     {
        $user=User::find(Auth::user()->id);
        $yft=YFTSocials::where('iid',$user->id)->first();
        $yft->furl= $request->furl;
        $yft->fbname = 1;
        $yft->save();
        $request->session()->flash('status', 'Successfully saved');
        return redirect('/socialaccounts');

     }


     public function ytname(Request $request)
     {
        $user=User::find(Auth::user()->id);
        $yft=YFTSocials::where('iid',$user->id)->first();
        $yft->yurl= $request->yurl;
        $yft->ycname = 1;
        $yft->save();
        $request->session()->flash('status', 'Successfully saved');
        return redirect('/socialaccounts');

     }
     public function edituname(Request $request)
     {
        $user=User::find(Auth::user()->id);
        $insta=InstagramSocial::where('iid',$user->id)->first();
        $insta->iconnect = 0;
        $insta->save();
        //  $request->session()->flash('status', 'Successfully saved');
        return redirect('/socialaccounts');


     }

     public function editfb(Request $request)
     {
        $user=User::find(Auth::user()->id);
        $yft=YFTSocials::where('iid',$user->id)->first();
        $yft->fbname = null;
        $yft->save();
         $request->session()->flash('status', 'Successfully saved');
        return redirect('/socialaccounts');


     }
     public function edityt(Request $request)
     {
        $user=User::find(Auth::user()->id);
        $yft=YFTSocials::where('iid',$user->id)->first();
        $yft->ycname = null;
        $yft->save();
        $request->session()->flash('status', 'Successfully saved');
        return redirect('/socialaccounts');


     }

     public function imgdel(Request $request)
     {
        $user=User::find(Auth::user()->id);
        $influencer=Influencer::where('iid',$user->id)->first();

        $influencer->contentphoto = null;

        $influencer->save();

       
         
            $request->session()->flash('status', 'Successfully Insights Deleted');
            return redirect('/socialaccounts');
         
         
     }





}
