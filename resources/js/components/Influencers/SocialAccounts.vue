<template>

    <div class="mt-5">
            
          <h2  style="font-size:22px;"> <b> Social Accounts</b></h2>



                     
  

                 <div class="card" style="border-radius:22px;margin-bottom:5rem">
                     <div class="card-body">
                         <h6><b>Manage your social profiles from here</b></h6>

  
                         
             

                     </div>

                     <div class="container">

                    

                     <div class="mb-5" id="accordionExample">
                                <div class="">
                                    <div class="card-header" id="headingOne">
                                         <div class="row ">
                                                <div class="col-md-1 col-1">
                                                     <i class="fab fa-instagram instai" ></i>
                                               
                                                </div>
                                              <div class="col-md-7 col-7 mt-1">
                                                    <h5 class="instaf "><b>Instagram</b></h5>

                                                    <p class="toosm" style="color:grey;" > <b>(Save your instagram username and press Connect)</b></p>
                                               
                                                </div>

                                                   <div class="col-md-3 col-3 mt-4">
                                                    <h6 class="iuname" v-if="instagram.iusername != null && instagram.iconnect == 1"><b>
                                                      <a style="color:#7e7979" target="_blank" :href="'https://www.instagram.com/' + instagram.iusername ">
                                                      {{instagram.iusername}} <i class="fas fa-external-link-alt"></i>
                                                      </a>
                                                      
                                                      </b></h6>

                                                    
                                               
                                                </div>

                                                
                                                <div class="col-md-1 col-1">
                                            

                                                    <span v-if="instagram.iconnect == 0">
                                                       <a class="btn btn-link movi float-right mt-2  " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            <i class="fas fa-plus-circle ciri" ></i>
                                                          </a>
                                                    </span>

                                                    <span v-if="instagram.iconnect == 1">
                                                           <a class="btn btn-link float-right mt-2 mr-3 "  type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-up upar" ></i>
                                                    </a>
                                                    </span>
                                                

                                                

                                               
                                                </div>
                                           </div>

                                    </div>


                                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">

                                        <div class="row ">

                                            <div class="col-md-7">

                                                 <p class="shead"><b style="color:grey;">Only Public Accounts can be added</b>
                                                  <a type="button" style="color:#6aa3d8;" class="btn btn-link mt-2 dia" data-toggle="modal" data-target="#pacc"> 
                                                    <p class="shead" style="margin: -13px 0 5px 0;">
                                                   <b>How can you Swtich to a Public Account?</b> </p> </a> </p>

                                      

                                             <div class="row">
                                            <div class="col-sm-12 col-md-8">
                                                <div class="form-group">
                                                <!-- <label for="phone" class="form-label" style="color:#6aa3d8;"> <b>Username</b> </label>
                                               <input type="hidden" name="_token" :value="csrf" />
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                   
                                                    v-model="instagram.iusername"
                                                    id="iusername"
                                                    placeholder="Enter Instagram Username"
                                                    disabled
                                                /> -->

                                                
                                         <div class="form-floating" >
                                          <input type="text" class="form-control" name="iusername" style="border-radius:10px; border: solid 3px #c4c4c4;" :disabled="instagram.iconnect == 1"  v-model="instagram.iusername" id="floatingInput" >
                                          <label for="floatingInput" style="color:#6aa3d8"> <b>Username</b></label>
                                        </div>
                                                    
                                                </div>
                                            </div>

                                        </div>

                               


                                         




                                            <div class="row">

                                              <div class="col-md-3 col-6">
                                                   <span v-if="instagram.iusername == null">
                                               <button type="button" class="btn  btn-sm" v-on:click="saveinsta()" style="border-radius:20px;width:6rem;background-color:#6aa3d8;color:White"><b>Save</b></button>
                                                   </span>
                                                   <span  v-if="instagram.iconnect == 1">
                                                        <button type="button" class="btn btn-outline-dark btn-sm" v-on:click="edituname()"
                                                      style="border-radius:20px;"><b>Edit Username</b> </button>
                                                   </span>
                                                      <span  v-if="instagram.iconnect == 0 && instagram.iusername != null">
                                                        <button type="button" class="btn  btn-sm" v-on:click="saveinsta()"
                                                      style="border-radius:20px;width:6rem;background-color:#6aa3d8;color:White"><b>Save</b> </button>
                                                   </span>
                                              </div>
                                               <div class="col-md-3 col-5">
                                                     <form action="/socialaccounts/instaconnect" method="post" enctype="multipart/form-data" >
                                                    <input type="hidden" name="_token" :value="csrf" />
                                                 <span v-if="instagram.iconnect != 1">
                                               <button type="submit" class="btn  btn-sm"  style="border-radius:20px;width:6rem;background-color:#6aa3d8;color:White"><b>Connect</b></button>
                                                 </span>
                                                   <span v-if="instagram.iconnect == 1">
                                                 <button type="submit" class="btn  btn-sm"  style="border-radius:20px;width:7rem;background-color:#6aa3d8;color:White"><b>Update Stats</b></button>

                                                   </span>
                                                     </form>
                                              </div>
                                          <span v-if="instagram.iusername != null && instagram.iconnect == 1">

                                                   <p style="color:#9c9898;font-size:12px" class="mt-4 ml-2 myp"><b>Please note: Update your instagram account stats every week
                                                 so that you never miss out on any opportunity matching your profile</b></p>
                                              

                                          </span>
                                    

                                            </div>



















                                            </div>


                                             <div class="col-md-5 mt-2">

                                                 <span v-if="instagram.iconnect == 1">

                                              
                                                 <div class="row mt-2">

                                                     <div class="col-6">
                                                         <h5 style="color:#7e7979">Followers</h5>
                                                     </div>
                                                      <div class="col-6">
                                                          <h5 style="color:#7e7979"><b>{{instagram.ifollowers}}</b></h5>
                                                     </div>

                                                 </div>
                                                 <div class="row mt-2">

                                                     <div class="col-6">
                                                         <h5 style="color:#7e7979">Posts</h5>
                                                     </div>
                                                      <div class="col-6">
                                                          <h5 style="color:#7e7979"><b>{{instagram.iposts}}</b></h5>
                                                     </div>

                                                 </div>
                                                  <div class="row mt-2">

                                                     <div class="col-6">
                                                         <h5 style="color:#7e7979">Average Likes</h5>
                                                     </div>
                                                      <div class="col-6">
                                                          <h5 style="color:#7e7979"><b>{{instagram.iavglike}}</b></h5>
                                                     </div>

                                                 </div>
                                                  <div class="row mt-2">

                                                     <div class="col-6">
                                                         <h5 style="color:#7e7979">Average Comments</h5>
                                                     </div>
                                                      <div class="col-6">
                                                          <h5 style="color:#7e7979"><b>{{instagram.iavgcmt}}</b></h5>
                                                     </div>

                                                 </div>
                                                  <div class="row mt-2">

                                                     <div class="col-6">
                                                         <h5 style="color:#7e7979">Engagement
                                                                        Rate</h5>
                                                     </div>
                                                      <div class="col-6">
                                                          <h5 style="color:#7e7979"><b>{{instagram.iengagementrate}}%</b></h5>
                                                     </div>

                                                 </div>
                                                  <div class="row mt-2">

                                                     <div class="col-6">
                                                         <h5 style="color:#7e7979">Last Updated 
                                                                    On </h5>
                                                     </div>
                                                      <div class="col-6">
                                                          <h5 style="color:#7e7979"><b>{{instagram.updated_at | moment('DD-MM-YYYY')}}</b></h5>
                                                     </div>

                                                 </div>
                                                    </span>

                                                 

                                                 

                                            </div>


                                        </div>


                                <h3 class="mt-2 head"><b>Upload Audience Insights</b></h3>

                                                          <p ><a style="color:#6aa3d8;margin: 0 0 0 -11px;" type="button" class="btn btn-link " data-toggle="modal" data-target="#audins"><b>
                                     <p class="shead sheadlink">How to find your audience insights on instagram?</p> </b></a>
</p>
                                    <p class="shead" style="color:#7e7979;margin: -24px 0 0 0;font-size:11px"><b>(Insights will increase the chances of your profile being matched with any upcoming campaign)</b>
                                    </p>
    


                                    <div class="row mt-4">

                                        <div class="col-md-8">
                              <form action="/settings/uploadins" method="post" enctype="multipart/form-data" id="myInputFileID">
                       
                                <div class="row justify-content-start">
                                    <!-- <div class="col-md-4">
                                  <input type="hidden" name="_token" :value="csrf" />
                                      <div class="form-group">
                                        <label for="">Update Audience Insights</label>  
                                        <input type="file" class="form-control-file" name="contentphoto[]" multiple id="myInputFileID"  aria-describedby="fileHelpId">
                                        <small id="myInputFileID" class="form-text text-muted">Select a File of Png,Svg,Jpg with a size limit  of 7mb</small>
                                      </div>
                                    </div> -->
                                    <div class="col-md-3 mt-1">
                                      <div class="mb-2">
                                              <button type="button" class="btn  btn-sm" style="border-radius:20px;width:8rem;background-color:#6aa3d8;color:White" data-toggle="modal" data-target="#chooseimg">
                                           <b>Upload Insights</b> 
                                          </button>
                                      </div>
                                          </div>

                                        <div class="col-md-9" v-if="influencers.contentphoto != null">

                                            <div class="row">

                                                <div class="col-md-4 ">
                                                    <p style="color:green"><b>Uploaded</b></p>
                                                      <!-- <button type="button" class="btn btn-outline-dark btn-sm mt-2" style="border-radius:15px;" data-toggle="modal" data-target="#exampleModalCenter">
                                            View
                                          </button> -->
                                                </div>

                                                   <!-- <div class="col-md-4 ">
                                                   
                                          <button type="button" class="btn btn-outline-danger btn-sm mt-2" style="border-radius:15px;" data-toggle="modal" data-target="#exampleModalCenter">
                                            Delete All
                                          </button>
                                                  
                                                </div> -->

                                            </div>

                                            <div class="row">

                                             

                                                <div class="col-2" v-for="rot in pics">

                                                   <form action="/socialaccounts/imgdel" method="get">

                                             <input type="hidden" name="_token" :value="csrf" />
                                               <!-- <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="color:red;margin: 0 11px 0 1px;">&times;</span>
                                  </button>   -->
                                   
                                                  <img :src="'/storage/content/' + rot" width="40" height="40" alt="">

                                                                                
                                                   
                                                   
                                                    </form>  
                                                   

                                                 </div>
                                                 <span v-if="influencers.contentphoto != null">

                                              
                                                 <div class="col-8">

                                                   <form action="/socialaccounts/imgdel" method="get">

                                                       <button type="submit" class="btn btn-outline-danger btn-sm mt-2" style="border-radius:15px;">
                                                     Delete All
                                                     </button>


                                                   </form>
                                                      

                                                 </div>
                                                    </span>

                                          

                                            </div>


                                            
                                              
                                        
                                          
                                      </div>
                                
                                    
                              </div>
                        </form>

                                        </div>
                                       

                                    </div>

                                

                            <h4 class="mt-5 head"><b>How much do you usually charge a brand for the following post on your instagram profile?</b></h4>

                      
                       
                            <div class="row mt-3">

                                <div class="col-sm-12 mt-2 col-md-6">
                                        <div class="form-group" >
                                        <!-- <label for="phone" class="form-label" style="color:#6aa3d8"><b>Story</b></label>
                                         <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">₹</div>
                                            </div>
                         

                                           <input type="text" class="form-control" name="istory" :disabled="yft.tusername == 1"  v-model="instagram.istory">
                                       </div> -->

                                         <div class="form-floating" >
                                          <input type="text" class="form-control" placeholder="  "  name="istory" style="border-radius:10px; border: solid 3px #c4c4c4;" :disabled="yft.icost == 1"  v-model="instagram.istory" id="floatingInput" >
                                          <label for="floatingInput" style="color:#6aa3d8"> <b>Story</b></label>
                                        </div>
                                      
                                            
                                        </div>

                                      




                                    </div>

                                      <div class="col-sm-12 mt-2 col-md-6">
                                        <div class="form-group">
                                        <!-- <label for="phone" class="form-label" style="color:#6aa3d8"><b>Static Post</b></label>
                                         <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">₹</div>
                                            </div>
                                            <input type="text" class="form-control" name="ispost" :disabled="yft.tusername == 1"  v-model="instagram.ispost">
                                       </div> -->

                                       
                                         <div class="form-floating" >
                                          <input type="text" class="form-control" placeholder="  "  name="ispost" style="border-radius:10px; border: solid 3px #c4c4c4;" :disabled="yft.icost == 1"  v-model="instagram.ispost" id="floatingInput" >
                                          <label for="floatingInput" style="color:#6aa3d8"> <b>Static Post</b></label>
                                        </div>
                                      
                                            
                                        </div>
                                    </div>

                                     <div class="col-sm-12 mt-2 col-md-6">
                                        <div class="form-group">

                                       
                                         <div class="form-floating" >
                                          <input type="text" class="form-control"  name="ireel" placeholder="  "  style="border-radius:10px; border: solid 3px #c4c4c4;" :disabled="yft.icost == 1"  v-model="instagram.ireel" id="floatingInput" >
                                          <label for="floatingInput" style="color:#6aa3d8"> <b>Reel</b></label>
                                        </div>
                                      
                                            
                                        </div>
                                    </div>

                                     <div class="col-sm-12 mt-2 col-md-6">
                                        <div class="form-group">
                                

                                       
                                         <div class="form-floating" >
                                          <input type="text" class="form-control" placeholder="  "  name="ivedio" style="border-radius:10px; border: solid 3px #c4c4c4;" :disabled="yft.icost == 1"  v-model="instagram.ivedio" id="floatingInput" >
                                          <label for="floatingInput" style="color:#6aa3d8"> <b>Video</b></label>
                                        </div>
                                      
                                            
                                        </div>
                                    </div>

                                     <div class="col-sm-12 mt-2 col-md-6">
                                        <div class="form-group">
                                   

                                       
                                         <div class="form-floating" >
                                          <input type="text" class="form-control" placeholder="  "  name="iigtv" style="border-radius:10px; border: solid 3px #c4c4c4;" :disabled="yft.icost == 1"  v-model="instagram.iigtv" id="floatingInput" >
                                          <label for="floatingInput" style="color:#6aa3d8"> <b>IGTV</b></label>
                                        </div>
                                      
                                            
                                        </div>
                                    </div>

                            </div>

                            <span v-if="this.yft.icost == null">
                            <button type="button" v-on:click="pcost" class="btn  mt-2 btn-sm" style="border-radius:20px;width:7rem;background-color:#6aa3d8;color:White"> <b>Confirm</b> </button>

                            </span>

                                       

                     

                        <span v-if="this.yft.icost == 1">
                     <button type="submit" v-on:click="editpcost" class="btn btn-outline-dark mt-2 btn-sm" style="border-radius:20px;width:6rem"> <b>Edit</b> </button>



                        </span>

                         























                                    </div>

                                    </div>
                                </div>
                                <div class="">
                                            <div class="card-header mt-4" id="headingTwo">
                                         <div class="row ">
                                                <div class="col-md-1 col-1">
                                                     <i class="fab fa-facebook instai" ></i>
                                               
                                                </div>
                                              <div class="col-md-10 col-9 mt-1">
                                                    <h5 class="instaf"><b>Facebook</b></h5>
                                                    <p class="toosm" style="color:grey;"> <b>(Save your Facebook Page URL)</b></p>
                                               
                                                </div>
                                                
                                                <div class="col-md-1 col-2">
                                                <h2 class="mt-1">
                                                    <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="fas fa-plus-circle instaii" ></i>
                                                    </a>
                                                </h2>
                                                </div>
                                           </div>

                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">


                                        <div class="row mt-1">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                            

                                               <div class="form-floating" >
                                          <input type="text" class="form-control" placeholder="  "  name="furl" style="border-radius:10px; border: solid 3px #c4c4c4;" :disabled="yft.fbname == 1"   v-model="yft.furl" id="floatingInput" >
                                          <label for="floatingInput" style="color:#6aa3d8"> <b>Page URL</b></label>
                                        </div>

                                        

                                             
                                                    
                                                </div>
                                            </div>

                                        </div>
                                        <span v-if="yft.fbname == null">
                                 <button type="button" class="btn  mt-2" v-on:click="fb" style="border-radius:20px;width:6rem;background-color:#6aa3d8;color:White"> <b>Save</b> </button>

                                        </span>
                                        <span v-if="yft.fbname == 1">
                                        <button type="button" class="btn btn-outline-dark mt-2" v-on:click="editfb" style="border-radius:20px;width:6rem"> <b>Edit</b> </button>


                                        </span>



                                    </div>
                                    </div>
                                </div>
                                <div class="">
                                     <div class="card-header mt-4 mb-3" id="headingThree">
                                         <div class="row ">
                                                <div class="col-md-1 col-1">
                                                     <i class="fab fa-youtube instai" ></i>
                                               
                                                </div>
                                              <div class="col-md-10 col-9 mt-1">
                                                    <h5 class="instaf"><b>Youtube</b></h5>
                                                    <p class="toosm" style="color:grey;"> <b>(Save your Youtube channel name)</b></p>
                                               
                                                </div>
                                                
                                                <div class="col-md-1 col-2">
                                                <h2 class="mt-1">
                                                    <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="fas fa-plus-circle instaii" ></i>
                                                    </a>
                                                </h2>
                                                </div>
                                           </div>

                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">

                                           <div class="row mt-1">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">



                                                <div class="form-floating" >
                                          <input type="text" class="form-control" placeholder="  "  name="yurl" style="border-radius:10px; border: solid 3px #c4c4c4;" :disabled="yft.ycname == 1"   v-model="yft.yurl" id="floatingInput" >
                                          <label for="floatingInput" style="color:#6aa3d8"> <b>Channel Name</b></label>
                                        </div>

                                            
                                                
                                                </div>
                                            </div>

                                        </div>

                                       <span v-if="yft.ycname == null">
                                 <button type="button" class="btn  mt-2" v-on:click="yt" style="border-radius:20px;width:6rem;background-color:#6aa3d8;color:White"> <b>Save</b> </button>

                                        </span>
                                        <span v-if="yft.ycname == 1">
                                        <button type="button" class="btn btn-outline-dark mt-2" v-on:click="edityt" style="border-radius:20px;width:6rem"> <b>Edit</b> </button>


                                        </span>

                                    </div>
                                    </div>
                                </div>
                                </div>


                                  <div class="modal fade" id="pacc" tabindex="-1" role="dialog" aria-labelledby="pacc" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="">
                                                  <button type="button" class="close mr-4 mt-2" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                          </div>
                                                 <div class="row justify-content-start">
                                                    <div class="col-2">
                                                    <img src="img/pub.png" alt=""  class="ml-2 dimg">
                                                    </div>
                                                    <div class="col-10 mt-3">
                                                    <h5 class="dhead" style="color:#7e7979"><b> How can you switch to a public account?</b></h5>
                                                    </div>
                                                </div>
                                                                            

                                               <div class="container mt-3">

                                                 <div class="row justify-content-start">
                                                    <div class="col-md-2 col-3">
                                                   <p class="dshead" style="color:#dda05d">Step 1:</p>
                                                    </div>
                                                    <div class="col-md-10 col-9">
                                                    <h6 class="dshead" style="color:#dda05d">Tap on the <b>Profile Icon</b> from the bottom-right corner of the app screen</h6>
                                                    </div>
                                                </div>

                                                    <div class="row justify-content-start">
                                                    <div class="col-md-2 col-3">
                                                   <p class="dshead" style="color:#dda05d">Step 2:</p>
                                                    </div>
                                                    <div class="col-md-10 col-9">
                                                    <h6 class="dshead" style="color:#dda05d">
                                                        Tap on the <b>Hamburger Menu</b> from the top-right corner 
                                                        </h6>
                                                    </div>
                                                </div>

                                                  

                                                    <div class="row justify-content-start">
                                                    <div class="col-md-2 col-3">
                                                   <p class="dshead" style="color:#dda05d">Step 3:</p>
                                                    </div>
                                                    <div class="col-md-10 col-9">
                                                    <h6 class="dshead" style="color:#dda05d">Click on <b>Settings</b> </h6>
                                                    </div>
                                                </div>

                                                    <div class="row justify-content-start">
                                                   <div class="col-md-2 col-3">
                                                   <p class="dshead" style="color:#dda05d">Step 4:</p>
                                                    </div>
                                                 <div class="col-md-10 col-9">
                                                    <h6 class="dshead" style="color:#dda05d">Click on <b>Privacy</b> </h6>
                                                    </div>
                                                </div>
                                                  <div class="row justify-content-start">
                                                     <div class="col-md-2 col-3">
                                                   <p class="dshead" style="color:#dda05d">Step 5:</p>
                                                    </div>
                                                     <div class="col-md-10 col-9">
                                                    <h6 class="dshead" style="color:#dda05d"> <b>Switch off Private Account</b> </h6>
                                                    </div>
                                                </div>


                                                </div>
                                             

                                           
                                         
                                            </div>
                                          </div>
                                   </div>



                                              <div class="modal fade" id="audins" tabindex="-1" role="dialog" aria-labelledby="audins" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="">
                                                  <button type="button" class="close mr-4 mt-2" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                          </div>
                                                 <div class="row justify-content-start">
                                                    <div class="col-2">
                                                    <img src="img/pub.png" alt=""  class="ml-2 dimg">
                                                    </div>
                                                    <div class="col-10 mt-1">
                                                    <h5 class="dhead" style="color:#7e7979"><b>How to find your audience insights on instagram?</b></h5>
                                                    <p class="dshead" style="color:#9c9898;font-size:12px;"><b>(Before you begin, you need to have a business account
                                                         or creator account to view insights by Swtiching to a Profesional Account under Settings)</b></p>
                                                    </div>
                                                </div>
                                                                            

                                               <div class="container mt-3 mb-2 dshead">

                                                 <div class="row justify-content-start">
                                                    <div class="col-2">
                                                   <p style="color:#dda05d">Step 1:</p>
                                                    </div>
                                                    <div class="col-10 ">
                                                    <h6 class="dshead" style="color:#dda05d">Go to your <b>Profile Icon</b> Profile Icon</h6>
                                                    </div>
                                                </div>

                                                    <div class="row justify-content-start">
                                                    <div class="col-2">
                                                   <p style="color:#dda05d">Step 2:</p>
                                                    </div>
                                                    <div class="col-10 ">
                                                    <h6 class="dshead" style="color:#dda05d">
                                                        Tap on the <b>Hamburger Menu</b> from the top-right corner 
                                                        </h6>
                                                    </div>
                                                </div>

                                                  

                                                    <div class="row justify-content-start">
                                                    <div class="col-2">
                                                   <p style="color:#dda05d">Step 3:</p>
                                                    </div>
                                                    <div class="col-10 ">
                                                    <h6 class="dshead" style="color:#dda05d">Tap on <b>Insights</b> </h6>
                                                    </div>
                                                </div>

                                                  


                                                </div>
                                             

                                           
                                         
                                            </div>
                                          </div>
                                   </div>


                                   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Content Photo</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="row mt-4 mb-4">

                                 
                                  <div class="col-6" v-for="rot in pics">
                                   
                                  <img :src="'/storage/content/' + rot" width="200" height="200" alt="">

                                  </div>

                                   </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>  




                          <div class="modal fade" id="chooseimg" tabindex="-1" role="dialog" aria-labelledby="chooseimg" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="chooseimg">Upload Audience Insights</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                          <form action="/settings/uploadins" method="post" enctype="multipart/form-data" id="myInputFileID">

                                <div class="modal-body">
                       
                                <div class="row justify-content-start">
                                    <div class="col-md-12">
                                  <input type="hidden" name="_token" :value="csrf" />
                                      <div class="form-group">
                                        <label for="">Choose Images <b>(max. 4 images allowed)</b></label>  
                                        <input type="file" class="form-control-file" name="contentphoto[]" multiple id="myInputFileID"  aria-describedby="fileHelpId">
                                        <small id="myInputFileID" class="form-text text-muted">Select a File of Png,Svg,Jpg with a size limit  of 7mb</small>
                                      </div>
                                    </div>
                                  
                                    
                              </div>
                      
                                </div>
                                <div class="modal-footer">
                                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->

                                   <button type="submit" class="btn btn-success" >Submit</button>
                                  
                                </div>
                              </form>
                              </div>
                            </div>
                          </div>  






                
                
                  </div>

                                    
                 </div>
    </div>

</template>




<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js">
  
 </script>



<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
   $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    });
})

export default {
  props: [
    "instagram",
    "influencers",
    "yft",
    "pics"
  ],
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      page: 0,
      furl:this.yft.furl,
      yurl:this.yft.yurl,
      iconnect:this.instagram.iconnect,
      


    }
  },
  methods:{

       pcost()
      {

            axios.post('/socialaccounts/pcost',{
                istory:this.instagram.istory,
                 ispost:this.instagram.ispost,
                  ireel:this.instagram.ireel,
                   ivedio:this.instagram.ivedio,
                    iigtv:this.instagram.iigtv

              })
              .then(res => {
            
                console.log(res);
                
                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
      },
      editpcost(){

           axios.post('/socialaccounts/editpcost',{
                icost:this.yft.icost,
              

              })
              .then(res => {
            
                console.log(res);
                
                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })

      },


      saveinsta()
      {
            axios.post('/socialaccounts',{
                iusername:this.instagram.iusername
              })
              .then(res => {
            
                console.log(res);
                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
      },
      
      edituname()
      {
            axios.post('/socialaccounts/edituname',{
                iconnect:this.instagram.iconnect
              })
              .then(res => {
            
                console.log(res);
                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
      },

      editfb()
      {
        
              axios.post('/socialaccounts/editfb',{
                fbname:this.yft.fbname
              })
              .then(res => {
            
                console.log(res);
                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
             
      },

      fb()
      {
        
              axios.post('/socialaccounts/fbname',{
                furl:this.yft.furl
              })
              .then(res => {
            
                console.log(res);
                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
             
      },
       yt()
      {
        
              axios.post('/socialaccounts/ytname',{
                yurl:this.yft.yurl
              })
              .then(res => {
            
                console.log(res);
                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
             
      },
      edityt()
      {
                   var self=this
                self.ycname = 1;
              axios.post('/socialaccounts/edityt',{
                ycname:this.yft.ycname
              })
              .then(res => {
            
                console.log(res);
                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
             
      },
      

  }

}
</script>