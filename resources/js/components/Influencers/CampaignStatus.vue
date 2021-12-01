<template>
    <div class="mb-5">
    
         <div class="float-left mt-2">
                <a href="/campaign" ><i class="fa fa-arrow-left" style="font-size:22px;color:black;" aria-hidden="true"></i> </a>
            </div>
      

        <div class="container mt-4 ">
            <p style="font-size: 22px" class="mt-2 ml-4"> <b>Campaign Manager</b> </p>
              <div class="main-body mt-3 " style="margin-bottom: 6rem;">
    
          <!-- Breadcrumb -->
   
          <!-- /Breadcrumb -->
    
          <!-- <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card" style="border-radius:25px;">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Disney_Store_logo.svg/1200px-Disney_Store_logo.svg.png" alt="Admin"  width="230" height="230">
                    <span v-if="brand.brandphoto == null">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQ3fegNa5a5si6R-U2zMlldvLxAAbMSWtBnxfRzTp2SsPE1_wJj06UJqf_As34AOG6SI0&usqp=CAU" alt="" width="280" height="250">

                    </span>
                    <span v-else>
                     <img :src="brand.brandphoto" alt=""  width="280" height="250">

                    </span>
                   
                    <div class="mt-3">
                      <h4>{{brand.name}}</h4>
                      <p class="text-secondary mb-1"></p>
                      <p class="text-muted font-size-sm">{{brand.city}}, {{brand.state}}, {{brand.country}}</p>
                
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mt-3" style="border-radius:25px;">
                <ul class="list-group list-group-flush">
               
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h5 class="mb-0">
                        <i class="fas fa-envelope-open-text mr-2" style="font-size: 1.5em;"></i>
                        {{napp.length}} applications has recived so far</h5>
                  </li>
                     <span v-if="data == null">
                   <li class="list-group-item  ">
                    
                      <h5 class="mb-3" style="text-align:center;color:green" v-if="campaign.startdate > today">
                      
                        Campaign will Starts in
                        </h5>

                           <h5 class="mb-3" style="text-align:center;color:red" v-if="campaign.startdate < today && campaign.enddate > today">
                      
                        Campaign will Expires in
                        </h5>
                     
                   
                    <h5 style="text-align:center;">
                     
                       <vue-countdown-timer
                         
                          :start-time="campaign.startdate"
                          :end-time="campaign.enddate"
                          :interval="1000"
                          :start-label="''"
                          :end-label="''"
                          label-position="begin"
                          :end-text="'Campign Expired !'"
                          :day-txt="' : '"
                          :hour-txt="' : '"
                          :minutes-txt="' : '"
                          :seconds-txt="'  '">
                               <template slot="start-label" slot-scope="scope">
                                  <span style="color: green" v-if="scope.props.startLabel !== '' && scope.props.tips && scope.props.labelPosition === 'begin'">{{scope.props.startLabel}} : <br><br> </span>
                                  <span style="color: red" v-if="scope.props.endLabel !== '' && !scope.props.tips && scope.props.labelPosition === 'begin'">{{scope.props.endLabel}} : <br></span>
                               </template>
                          
                          
                                <template slot="end-label" slot-scope="scope">
                                  <span style="color: red" v-if="scope.props.startLabel !== '' && scope.props.tips && scope.props.labelPosition === 'end'">{{scope.props.startLabel}} : </span>
                                  <span style="color: red" v-if="scope.props.endLabel !== '' && !scope.props.tips && scope.props.labelPosition === 'end'">{{scope.props.endLabel}} : </span>
                                </template>
                          
                                <template slot="end-text" slot-scope="scope">
                                  <span style="color: red">{{ scope.props.endText}}</span>
                                </template>
                        
                        </vue-countdown-timer>  

                        </h5>                
                  </li>
                     </span>

                   
               
                </ul>
              </div>

              
            </div>


            <div class="col-md-8">
              <div class="card mb-3" style="border-radius:25px;">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Campaign Title</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{campaign.campaigntitle}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Campaign Description</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{campaign.campaigndes}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Campaign Objective</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{campaign.campaignobj}}
                    </div>
                  </div>
                  <span v-if="data !=null">
              
              
                 <span v-if="data.contenttype  != null && data.commercial  != null">
                   <hr>
                      <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center"  >  
                            <b>Deliverables</b>
                        </h5>
                            </div>
                        </div>
                          <div class="row">
                          <div class="col-6 mt-2" v-if="data.contenttype  != null"><b>Content Type :</b>
                           {{data.contenttype.replace(/[\[\]"]+/g,"")}}
                           </div>
                          <div class="col-6 mt-2"   v-if="data.commercial  != null"><b>Commercials :</b> Rs.{{data.commercial}}</div>
                          <div class="col-12 mt-3" v-if="data.otherdetails  != null">
                            <b>Other Information :</b> {{data.otherdetails}}
                            </div>
                           
                        </div>
                 </span>
                 
             
              
               

                       <span  v-if="data.status == 0 || data.status == 1">
                        <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">You Applied for this opportunity on</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ data.created_at | moment('D/M/YYYY h:mm A') }}
                    </div>
                   
                  </div>
                </span>

                  <span  v-if="data.status == 3">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">You accepted the deliverables on</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>
                     <span  v-if="data.status == 5">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">You received a revised deliverable on</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>
                   
                     <span  v-if="data.status == 6">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Your Profile Rejected for the campaign on</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>
                   <span  v-if="data.status == 8">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0"> You received campaign details on </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>
                 
                     <span  v-if="data.status == 7">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0"> You Accepted MOU on </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>
                     <span  v-if="data.status == 9">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0"> Your content was received on </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>
                    <span  v-if="data.status == 10">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0"> Your content was approved on </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>
                    <span  v-if="data.status == 11">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0"> You posted the content on </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>

                      <span  v-if="data.status == 12">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0"> Your post insights was uploaded on  </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>

                    <span  v-if="data.status == 13">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0"> Your Commercials has Disbursed on  </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>

                    <span  v-if="data.status == 15">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0"> Product(s) were marked as received on   </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>

                    <span  v-if="data.status == 14">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0"> Product(s) were marked as ordered on   </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>

                     <span  v-if="data.status == 2">
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">You Marked as Not Suitable on</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          {{ data.updated_at | moment('D/M/YYYY h:mm A') }}
                          </div>
                        
                        </div>
                   </span>
                 
                 
               
                 
                  <span  v-if="data.status == 0">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center">  
                            <b>Waiting for your Profile to be Shortlisted</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5>  We are waiting for the brand to analyze and shortlist the profiles.
                            Please note you will be notified over Email when your profile is shortlisted.
                        </h5>
                            </div>
                        </div>
                    </span>

                     <span  v-if="data.status == 1">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:green">  
                            <b>Application Shortlisted</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                           Wohoo! Your profile has been shortlisted by the brand. Please go through the deliverables
                            and accept the campaign before all the slots are full.
                        </h5>
                            </div>
                        </div>
                         <hr>
                        <div class="row">
                             <div class="col-6 col-md-4">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#userdecline">
                                    Decline Offer
                                    </button>
                                        </div>
                                    <div class="col-6 col-md-4">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewdel">
                                    View Deliverables
                                    </button>
                                        </div>
                                    <div class="col-6 col-md-4">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#useraccept">
                                    Accept Offer
                                    </button>
                             </div>
                        </div> 
                    </span>

                   <span  v-if="campaign.enddate < today">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center">  
                            <b>Opportunity no longer available</b>
                        </h5>
                            </div>
                        </div>
                        <hr>
                            <div class="row">
                                <div class="col-sm-12">
                            <h5 style="text-align:center">
                                Oops, this opportunity is no longer available.
                                 Please note you will be notified over Email when you receive a next opportunity
                            </h5>
                                </div>
                            </div>
                    </span>

                    <span  v-if="data.status == 3">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center">  
                            <b>Waiting for your Profile to be Finalized</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                        We are waiting for the brand to finalize the profiles. Please note you will
                         be notified over Email when your profile is finalized for the campaign.
                        </h5>
                            </div>
                        </div>
                    </span>
                     <span  v-if="data.status == 4">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center" class="text-danger">  
                            <b>Deliverables Declined by you !</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5>  
                          Oops, the deliverables were declined by you. Please note you will be notified
                           if the brand sends a revised deliverable or when you receive a new opportunity
                        </h5>
                            </div>
                        </div>
                    </span>

              
                     <span  v-if="data.status == 5">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:green">  
                            <b>Revised Deliverables Received</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                          You have received a revised deliverable from the brand. Please
                           go through the deliverables and accept the campaign before all the slots are full.
                        </h5>
                            </div>
                        </div>
                         <hr>
                        <div class="row">
                             <div class="col-6 col-md-4">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#userdecline">
                                    Decline Offer
                                    </button>
                                        </div>
                                    <div class="col-6 col-md-4">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewdel">
                                    View Deliverables
                                    </button>
                                        </div>
                                    <div class="col-6 col-md-4">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#useraccept">
                                    Accept Offer
                                    </button>
                             </div>
                        </div> 
                    </span>

                  


                     <span  v-if="data.status == 2">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:red">  
                            <b>Opportunity no longer available !</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5>  
                        This opportunity was marked as not suitable by you. Please
                         note that you will be notified over Email when you receive a next opportunity.
                        </h5>
                            </div>
                        </div>
                    </span>

                        <span  v-if="data.status == 6">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:red">  
                            <b>Your Profile Rejected for the campaign</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5>  
                          Oops, your profile was rejected by the brand as the slots were already
                           full. Please note you will be notified over Email when you receive a next opportunity.
                        </h5>
                            </div>
                        </div>
                    </span>

                       <span  v-if="data.status == 7">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:green">  
                            <b>Your Profile was Finalized</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                           Wohoo! Your profile has been finalized for the campaign by the brand.
                           Please note that you will receive further campaign details over Email.
                         
                        </h5>
                            </div>
                        </div>
                    
                      
                    </span>

                    
                     <span  v-if="data.status == 8">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:green">  
                            <b>Campaign Details Received</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                          You have received the campaign details over Email. 
                          Please contact the account manager in case of any concern.
                        </h5>
                            </div>
                        </div>
                         <hr>
                        <div class="row justify-content-center">
                             <div class="">
                                <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#productorder" >
                                    Mark the product as ordered
                                    </button>
                             </div>
                                 
                                  
                        </div> 
                    </span>



                     <span  v-if="data.status == 9">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:green">  
                            <b>Content Received</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                          Your content piece is in review with the brand. 
                          Please note that you will be notified over Email when you content is approved.
                        </h5>
                            </div>
                        </div>
                    </span>

                    
                     <span  v-if="data.status == 10">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:green">  
                            <b>Content Approved</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                          Hurray, your content piece was approved by the brand. 
                          You can now post your content on your social media handle 
                          by following the guidelines received over Email.
                        </h5>
                            </div>
                        </div>
                         <hr>
                        <div class="row justify-content-center">
                             <div class="">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#posturl">
                              Mark the Content as posted
                            </button>
                             </div>
                                 
                                  
                        </div> 
                    </span>

                    
                     <span  v-if="data.status == 11">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:green">  
                            <b>Content Posted</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                          Please share you post insights after 4 days of posting your
                           content. Meanwhile you can share your content or publish
                            stories to increase the engagement on your post.
                        </h5>
                            </div>
                        </div>
                         <hr>
                        <div class="row justify-content-center">
                            <div class="">
                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updatein">
                               Update Insights
                               </button>
                               
                            </div>           
                        </div> 
                    </span>
                    
                     <span  v-if="data.status == 12">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:green">  
                            <b>Post Insights Received</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                          Hurray, your insights are under review. Please note 
                          that you will be notified when the commercials are disbursed.
                        </h5>
                            </div>
                        </div>
                    </span>

                      <span  v-if="data.status == 13">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:green">  
                            <b>Commercial Disbursed</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                      Congratulations, you have successfully completed the 
                      campaign. Please note that you will be notified once you
                       receive a new campaign opportunity.
                        </h5>
                            </div>
                        </div>
                    </span>

                     <span  v-if="data.status == 14">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:green">  
                            <b>Products Ordered</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                          We are waiting for the products to arrive at your place.
                           Please mark the products as received whenever you receive the products.
                        </h5>
                            </div>
                        </div>
                         <hr>
                        <div class="row justify-content-center">
                            <div class="">
                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productreceive">
                              Mark the products as Received
                               </button>
                               
                            </div>           
                        </div> 
                    </span>

                      <span  v-if="data.status == 15">
                        <hr>
                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:green">  
                            <b>Products Received</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                       Brand is eagerly waiting to review your content.
                        Quickly prepare the content and share with your account manager.
                        </h5>
                            </div>
                        </div>
                    </span>





                  </span>

                  <span v-else>

                    <span v-if="campaign.enddate > today">

               
                     <hr>

                        <div class="row">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:green">  
                            <b>Campaign Opportunity Received</b>
                        </h5>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                        
                            <div class="col-sm-12" style="text-align:center">
                        <h5> 
                       Wohoo! your profile has been matched with a new campaign. 
                       Hurry up and Accept the opportunity before it expires.
                        </h5>
                            </div>
                        </div>
                           <hr>
            
                            <div class="row justify-content-center">
                              <div class="col-3">
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#notsuits">
                                Not Suitable
                                </button>
                              </div>
                              <div class="col-2">
                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#campaccept">
                                Apply
                                </button>
                              </div>
                            </div>


                     <div class="modal fade" id="campaccept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <h5> Are your sure want to apply for this opportunity ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                     <a :href="'/campaign/'+ campaign.id +'/campaccept/'+ user.id +'/brandid/'+ campaign.iid" class="btn btn-success ">Yes</a>     

                                </div>
                                </div>
                            </div>
                    </div>
                             
                                 <div class="modal fade" id="notsuits" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <h5> Are your sure want to mark it as not suitable ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                     <a :href="'/campaign/'+ campaign.id +'/campnotsuit/'+ user.id +'/brandid/'+ campaign.iid" class="btn btn-success ">Yes</a>     

                                </div>
                                </div>
                            </div>
                    </div>
                      


                       </span>

                       <span v-else>
                         <hr>
                           <div class="row mt-4">
                        
                            <div class="col-sm-12">
                        <h5 style="text-align:center;color:red">  
                            <b>Campaign Opportunity Expired</b>
                        </h5>
                            </div>
                        </div>



                       </span>



                  </span>



                     
            



                </div>
              </div>

              

            
               
               
               
                </div>






              </div> -->
          


          <div class="card mb-5" style="border-radius:20px;">
            <div class="container p-4 ">

           
               <div class="row mt-4">

              <div class="col-md-4 col-sm-4">
                
                  <img class="cmpic" src="https://images.ctfassets.net/hrltx12pl8hq/3MbF54EhWUhsXunc5Keueb/60774fbbff86e6bf6776f1e17a8016b4/04-nature_721703848.jpg?fit=fill&w=480&h=270" alt="Admin"  >


                  <!-- <span v-if="brand.brandphoto == null">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQ3fegNa5a5si6R-U2zMlldvLxAAbMSWtBnxfRzTp2SsPE1_wJj06UJqf_As34AOG6SI0&usqp=CAU" alt="" width="280" height="250">

                    </span>
                    <span v-else>
                     <img :src="brand.brandphoto" alt=""  width="280" height="250">

                    </span> -->
                    <h6 class="mt-2 " style="text-align:center;color:#7e7979">
                       
                       <b>{{napp.length}} creator have already applied</b> </h6>

                    

              </div>
                <div class="col-md-8 col-sm-8 ">
                  <h4 ><b>  {{campaign.campaigntitle}}</b></h4>
                  <h6 style="color:#7e7979"><b>Published on: {{campaign.created_at | moment('YY/MM/DD')}}</b></h6>
             
                  <p class="cdes " style="color:#7e7979;height:11rem" >
                     {{campaign.campaigndes}}

                  </p>

                   <span v-if="data == null" >
                   
                    
                      <h5 class="mb-3" style="text-align:center;color:green" v-if="campaign.startdate > today">
                      
                        This opportunity will Starts in
                        </h5>

                           <h5 class="mb-3" style="text-align:center;color:red" v-if="campaign.startdate <= today && campaign.enddate > today">
                      
                        This opportunity will Expires in
                        </h5>
                     
                   
                    <h6 style="text-align:center;">
                     
                       <vue-countdown-timer
                         
                          :start-time="campaign.startdate"
                          :end-time="campaign.enddate"
                          :interval="1000"
                          :start-label="''"
                          :end-label="''"
                          label-position="begin"
                          :end-text="'Campign Expired !'"
                          :day-txt="' : '"
                          :hour-txt="' : '"
                          :minutes-txt="' : '"
                          :seconds-txt="'  '">
                               <template slot="start-label" slot-scope="scope">
                                  <span style="color: green" v-if="scope.props.startLabel !== '' && scope.props.tips && scope.props.labelPosition === 'begin'">{{scope.props.startLabel}} : <br><br> </span>
                                  <span style="color: red" v-if="scope.props.endLabel !== '' && !scope.props.tips && scope.props.labelPosition === 'begin'">{{scope.props.endLabel}} : <br></span>
                               </template>
                          
                          
                                <template slot="end-label" slot-scope="scope">
                                  <span style="color: red" v-if="scope.props.startLabel !== '' && scope.props.tips && scope.props.labelPosition === 'end'">{{scope.props.startLabel}} : </span>
                                  <span style="color: red" v-if="scope.props.endLabel !== '' && !scope.props.tips && scope.props.labelPosition === 'end'">{{scope.props.endLabel}} : </span>
                                </template>
                          
                                <template slot="end-text" slot-scope="scope">
                                  <span style="color: red">{{ scope.props.endText}}</span>
                                </template>
                        
                        </vue-countdown-timer>  

                        </h6>                
                  
                      </span>

                      <span v-if="data != null">

                    
                 

                     <span v-if="data.status == 0 || data.status == 1">


                        <h6 style="text-align:center;color:#7e7979"> <b>You Applied for this opportunity on   {{ data.created_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>
                     
                     <span v-if="data.status == 3">


                        <h6 style="text-align:center;color:#7e7979"> <b>You accepted the deliverables on  {{ data.updated_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>
                     
                     <span v-if="data.status == 5">


                        <h6 style="text-align:center;color:#7e7979"> <b>You received a revised deliverable on   {{ data.updated_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>
                          
                     <span v-if="data.status == 6">


                        <h6 style="text-align:center;color:#7e7979"> <b>Your Profile Rejected for the campaign on  {{ data.updated_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>

          

                      <span v-if="data.status == 8">


                        <h6 style="text-align:center;color:#7e7979"> <b>You received campaign details on  {{ data.updated_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>

                      <span v-if="data.status == 9">


                        <h6 style="text-align:center;color:#7e7979"> <b> Your content was received on  {{ data.updated_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>
                     
                      <span v-if="data.status == 10">


                        <h6 style="text-align:center;color:#7e7979"> <b> Your content was approved on  {{ data.updated_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>
                         <span v-if="data.status == 11">


                        <h6 style="text-align:center;color:#7e7979"> <b> You posted the content on  {{ data.updated_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>

                    <span v-if="data.status == 12">


                        <h6 style="text-align:center;color:#7e7979"> <b> Your post insights was uploaded on  {{ data.updated_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>

                    <span v-if="data.status == 13">


                        <h6 style="text-align:center;color:#7e7979"> <b> Your Commercials has Disbursed on  {{ data.updated_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>

                       <span v-if="data.status == 15">


                        <h6 style="text-align:center;color:#7e7979"> <b> Product(s) were marked as received on  {{ data.updated_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>

                       <span v-if="data.status == 14">


                        <h6 style="text-align:center;color:#7e7979"> <b> Product(s) were marked as ordered on  {{ data.updated_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>

                       <span v-if="data.status == 2">


                        <h6 style="text-align:center;color:#7e7979"> <b> You Marked as Not Suitable on  {{ data.updated_at | moment('D/M/YYYY h:mm A') }}</b> </h6>

                     </span>
                       </span>
                     
                     


              </div>


              </div> 



            <span v-if="data != null">

        

              <div class="jumbotron mt-3 " style="background-color:#f5f5f5">
                <div class="container">
                

               
                   <span  v-if="data.status == 0">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
                         <h5 style="text-align:center ">  
                            <b>Waiting for your Profile to be Shortlisted</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
                        <h5 style="text-align:center">  We are waiting for the brand to analyze and shortlist the profiles.
                            Please note you will be notified over Email when your profile is shortlisted.
                        </h5>

                   </div>

                 </div>
                   </span>

                     <span  v-if="data.status == 1">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
                         <h5 style="text-align:center;color:green">  
                            <b>Application Shortlisted</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
                   <h5 style="text-align:center;"> 
                           Wohoo! Your profile has been shortlisted by the brand. Please go through the deliverables
                            and accept the campaign before all the slots are full.
                        </h5>

                   </div>

                 </div>
                   </span>

                     <span v-if="campaign.enddate < today && data == null">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
                           <h5 style="text-align:center">  
                            <b>Opportunity no longer available</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">
                                Oops, this opportunity is no longer available.
                                 Please note you will be notified over Email when you receive a next opportunity
                            </h5>

                   </div>

                 </div>
                   </span>

                      <span v-if="data.status == 3">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
                          <h5 style="text-align:center">  
                            <b>Waiting for your Profile to be Finalized</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center"> 
                        We are waiting for the brand to finalize the profiles. Please note you will
                         be notified over Email when your profile is finalized for the campaign.
                        </h5>

                   </div>

                 </div>
                   </span>

                     <span v-if="data.status == 4">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
                        <h5 style="text-align:center" class="text-danger">  
                            <b>Deliverables Declined by you !</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                          Oops, the deliverables were declined by you. Please note you will be notified
                           if the brand sends a revised deliverable or when you receive a new opportunity
                        </h5>

                   </div>

                 </div>
                   </span>

                  <span v-if="data.status == 5">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
                       <h5 style="text-align:center;color:green">  
                            <b>Revised Deliverables Received</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                         You have received a revised deliverable from the brand. Please
                           go through the deliverables and accept the campaign before all the slots are full.
                        </h5>

                   </div>

                 </div>
                   </span>

                       <span v-if="data.status == 2">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
                     <h5 style="text-align:center;color:red">  
                            <b>Opportunity no longer available !</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                      This opportunity was marked as not suitable by you. Please
                         note that you will be notified over Email when you receive a next opportunity.
                        </h5>

                   </div>

                 </div>
                   </span>

                   
                       <span v-if="data.status == 6">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
                    <h5 style="text-align:center;color:red">  
                            <b>Your Profile Rejected for the campaign</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                     Oops, your profile was rejected by the brand as the slots were already
                           full. Please note you will be notified over Email when you receive a next opportunity.
                        </h5>

                   </div>

                 </div>
                   </span>

                   
                       <span v-if="data.status == 7">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
                  <h5 style="text-align:center;color:green">  
                            <b>Your Profile was Finalized</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                     Wohoo! Your profile has been finalized for the campaign by the brand.
                           Please note that you will receive further campaign details over Email.
                         
                        </h5>

                   </div>

                 </div>
                   </span>

                       <span v-if="data.status == 8">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
                    <h5 style="text-align:center;color:green">  
                            <b>Campaign Details Received</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                    You have received the campaign details over Email. 
                          Please contact the account manager in case of any concern.
                        </h5>

                   </div>

                 </div>
                   </span>

                    <span v-if="data.status == 9">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
              <h5 style="text-align:center;color:green">  
                            <b>Content Received</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                   Your content piece is in review with the brand. 
                          Please note that you will be notified over Email when you content is approved.
                        </h5>

                   </div>

                 </div>
                   </span>

                     <span v-if="data.status == 10">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
           <h5 style="text-align:center;color:green">  
                            <b>Content Approved</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                  Hurray, your content piece was approved by the brand. 
                          You can now post your content on your social media handle 
                          by following the guidelines received over Email.
                        </h5>

                   </div>

                 </div>
                   </span>

                   <span v-if="data.status == 11">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
             <h5 style="text-align:center;color:green">  
                            <b>Content Posted</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                   Please share you post insights after 4 days of posting your
                           content. Meanwhile you can share your content or publish
                            stories to increase the engagement on your post.
                        </h5>

                   </div>

                 </div>
                   </span>

                      <span v-if="data.status == 12">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
              <h5 style="text-align:center;color:green">  
                            <b>Post Insights Received</b>
                        </h5>
                  

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                 Hurray, your insights are under review. Please note 
                          that you will be notified when the commercials are disbursed.
                        </h5>

                   </div>

                 </div>
                   </span>

                    <span v-if="data.status == 13">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
                <h5 style="text-align:center;color:green">  
                            <b>Commercial Disbursed</b>
                        </h5>

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                    Congratulations, you have successfully completed the 
                      campaign. Please note that you will be notified once you
                       receive a new campaign opportunity.
                        </h5>

                   </div>

                 </div>
                   </span>

                        <span v-if="data.status == 14">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                    
               <h5 style="text-align:center;color:green">  
                            <b>Products Ordered</b>
                        </h5>

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                   We are waiting for the products to arrive at your place.
                           Please mark the products as received whenever you receive the products.
                        </h5>

                   </div>

                 </div>
                   </span>

                    <span v-if="data.status == 15">
                 <div class="row">
                   <div class="col-md-6 mt-3">
                <h5 style="text-align:center;color:green">  
                            <b>Products Received</b>
                        </h5>

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                  Brand is eagerly waiting to review your content.
                        Quickly prepare the content and share with your account manager.
                        </h5>

                   </div>

                 </div>
                   </span>


                 
                     
                      <!-- <span v-if="campaign.enddate < today">
                           <div class="row">
                   <div class="col mt-3">
              <h5 style="text-align:center;color:red">  
                            <b>Campaign Opportunity Received</b>
                        </h5>

                   </div>
                    

                 </div>

                      </span> -->





                </div>
              </div>

              <span v-if="data.status == 1">
                <div class="row mt-3  justify-content-md-center">
             
                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#userdecline">
                                    Decline Offer
                                    </button>
                    <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#viewdel">
                                    View Deliverables
                                    </button>
                      <button type="button" class="btn btn-success ml-3" data-toggle="modal" data-target="#useraccept">
                                    Accept Offer
                                    </button>

                
              </div>

              </span>

                <span v-if="data.status == 5">
                <div class="row mt-3  justify-content-md-center">
             
                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#userdecline">
                                    Decline Offer
                                    </button>
                    <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#viewdel">
                                    View Deliverables
                                    </button>
                      <button type="button" class="btn btn-success ml-3" data-toggle="modal" data-target="#useraccept">
                                    Accept Offer
                                    </button>

                
              </div>

              </span>

              <span v-if="data.status == 8">
                   <div class="row mt-3  justify-content-md-center">
             
                   <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#productorder" >
                                    Mark the product as ordered
                                    </button>

                
              </div>

              </span>

                <span v-if="data.status == 10">
                   <div class="row mt-3  justify-content-md-center">
             
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#posturl">
                              Mark the Content as posted
                            </button>

                
              </div>

              </span>

                <span v-if="data.status == 11">
                   <div class="row mt-3  justify-content-md-center">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updatein">
                               Update Insights
                               </button>

                
              </div>

              </span>

                <span v-if="data.status == 14">
                   <div class="row mt-3  justify-content-md-center">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productreceive">
                              Mark the products as Received
                               </button>

                
              </div>

              </span>





       
                    <!--USer Accept Offer Modal -->
                    <div class="modal fade" id="useraccept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <h5> Are your sure want to accept the offer ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-success" v-on:click="useraccept(data)">Yes</button>
                                </div>
                                </div>
                            </div>
                    </div>

                       <!--Decline Modal -->
                    <div class="modal fade" id="userdecline" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Are your sure want to decline the offer ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-success" v-on:click="userdecline(data)">Yes</button>
                                </div>
                                </div>
                            </div>
                    </div>
                            <!--MOU ACCEPT -->
                    <div class="modal fade" id="mouaccept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Are your sure want to accept the MOU ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-success"  v-on:click="acceptmou(data)">Yes</button>
                                </div>
                                </div>
                            </div>
                    </div>

                       <!--View  Deleiverables -->
                      <div class="modal fade " id="viewdel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Deliverables</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                     <div class="row mt-2">
                                        <div class="col-6">
                                        <h6>Content Type</h6>
                                        </div>
                                        <div class="col-6" v-if="data.contenttype == null">
                                             <h6>{{data.contenttype}}</h6>
                                        </div>
                                         <div class="col-6" v-else>
                                             <h6>{{data.contenttype.replace(/[\[\]"]+/g,"")}}</h6>
                                        </div>
                                    </div>
                                       <div class="row mt-2">
                                        <div class="col-6">
                                        <h6>                                
                                          Commercial that you will recieve on suuccessful completion of the campaign
                                        </h6>
                                        </div>
                                        <div class="col-6">
                                             <h6>Rs.{{data.commercial}}</h6>
                                        </div>
                                    </div>
                                         <div class="row mt-2">
                                        <div class="col-6">
                                        <h6>                                
                                          Other Information 
                                        </h6>
                                        </div>
                                        <div class="col-6" v-if="data.otherdetails != null">
                                             <h6>{{data.otherdetails}}</h6>
                                        </div>
                                         <div class="col-6" v-else>
                                             <h6>N / A</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            
                                </div>
                                </div>
                            </div>
                        </div>

                            <!--POST URL -->
                        <div class="modal fade" id="posturl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add your Post URL</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                      <div class="form-group">
                                          <label for="posturl"><b>Post URL</b> <span style="color:red">*</span></label>
                                          <input type="text"  class="form-control col-9" v-model="data.posturl" id="posturl">
                                      </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success" v-on:click="addurl(data)">Add</button>
                                </div>
                                </div>
                            </div>
                         </div>


                         

                      <!-- POst Insights    -->
                <div class="modal fade" id="updatein" tabindex="-1" role="dialog" aria-labelledby="updatein" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" style="text-align:-moz-center" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                      
                              
                                      <h5 class="modal-title" id="addcast">Update Post Insights</h5>
                              
                              
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="row">
                            <div class="modal-body">
                                  <div class="form-group">
                                      <label for="posturl"><b>Views</b></label>
                                      <input  class="form-control col-9"  v-model="data.views" id="views">
                                  </div>
                            </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                      <label for="likes"><b>Likes</b></label>
                                      <input  class="form-control col-9"  v-model="data.likes" id="likes">
                                  </div>
                            </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                    <label for="comments"><b>Comments</b></label>
                                      <input  class="form-control col-9" v-model="data.comments" id="comments">
                                  </div>
                            </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                      <label for="save"><b>Save</b></label>
                                      <input  class="form-control col-9" v-model="data.save" id="save">
                                  </div>
                            </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                      <label for="share"><b>Share</b></label>
                                      <input  class="form-control col-9"  v-model="data.share" id="share">
                                  </div>
                            </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                      <label for="reach"><b>Reach</b></label>
                                      <input  class="form-control col-9" v-model="data.reach" id="reach">
                                  </div>
                            </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                    <label for="impressions"><b>Impressions</b></label>
                                      <input  class="form-control col-8"  v-model="data.impressions" id="impressions">
                                  </div>
                            </div>
                                <div class="modal-body">
                              <form :action="'/campaign/uploadins/'+ data.id" method="post" enctype="multipart/form-data" id="myInputFileID">
                       
                               
                                    <div class="col-10">
                                  <input type="hidden" name="_token" :value="csrf" />
                                      <div class="form-group">
                                        <label for=""><b>Upload Insights</b> <span style="color:red">*</span></label>  
                                        <span v-if="data.insphoto ==null">
                                         <input required type="file" class="form-control-file" name="insphoto" id="myInputFileID"  aria-describedby="fileHelpId">
                                          <small id="myInputFileID" class="form-text text-muted">Select a File of Png,Svg,Jpg with a size limit  of 7mb</small>

                                        </span>
                                        <span v-else>
                                        <p>  Uploaded Insights</p> 
                                        </span>
                                     
                                     
                                      </div>
                                 
                                     <div class="col-2">
                                       <span v-if="data.insphoto == null">
                                      <div class="container">
                                           <button class="btn btn-dark btn-sm" type="sumbit">Upload</button>
                                      </div>
                                       </span>
                                      
                                  
                                      
                                    </div> 
                                    
                              </div>
                        </form>
                          </div>
                              <!-- <div class="modal-body">
                                  <div class="form-group">
                                      <label for="CTR"><b>CTR</b></label>
                                      <input  class="form-control col-9" v-model="data.ctr" id="CTR">
                                  </div>
                            </div> -->
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" v-on:click="addposin(data)" class="btn btn-primary">Update</button>
                        
                        
                              </div>
                          </div>
                      </div>
                  </div>


                         <!--MArk product as ordered -->
                        <div class="modal fade" id="productorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Product Details </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" >
                                      <div class="form-group">
                                          <label for="orderid"><b>Order ID</b> <span style="color:red">*</span></label>
                                          <input type="text"  class="form-control col-10" v-model="data.orderid" id="orderid">
                                      </div>
                                      <div class="form-group">
                                          <label for="pdeldate"><b>Estimated Delivery Date</b> <span style="color:red">*</span></label>
                                          <input type="date"  class="form-control col-10" v-model="data.pdeldate" id="pdeldate">
                                      </div>
                                </div>
                                  
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" v-on:click="porder(data)">Submit</button>
                                </div>
                                </div>
                            </div>
                         </div>

                          <!-- MARK Products as Received -->
                           <div class="modal fade" id="productreceive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Product Details </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" >
                                     
                                      <div class="form-group">
                                          <label for="pdeldate"><b>Actual Delivery Date</b> <span style="color:red">*</span></label>
                                          <input type="date"  class="form-control col-10" v-model="data.precdate" id="pdeldate" required>
                                      </div>
                                </div>
                                  
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" v-on:click="preceive(data)">Submit</button>
                                </div>
                                </div>
                            </div>
                         </div>















               




                
            


              </span>



           <span v-if="data == null">
              <span v-if="campaign.enddate > today && campaign.startdate <= today  && data == null">
              <div class="jumbotron mt-3 " style="background-color:#f5f5f5">
                <div class="container">
               
                        

                                   <div class="row">
                   <div class="col-md-6 mt-3">
              <h5 style="text-align:center;color:green">  
                            <b>Campaign Opportunity Received</b>
                        </h5>

                   </div>
                     <div class="col-md-6">
              <h5 style="text-align:center">  
                     Wohoo! your profile has been matched with a new campaign. 
                       Hurry up and Accept the opportunity before it expires.
                        </h5>

                          <div class="row mt-3  justify-content-md-center">
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#notsuits">
                                Not Suitable
                                </button>

                    <button type="button" class="btn btn-success ml-3" data-toggle="modal" data-target="#campaccept">
                  Apply
                  </button>


                
              </div>

                   </div>
                   

                 </div>

                 

           


                

                </div>
              </div>
              <div class="modal fade" id="campaccept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <h5> Are your sure want to apply for this opportunity ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                     <a :href="'/campaign/'+ campaign.id +'/campaccept/'+ user.id +'/brandid/'+ campaign.iid" class="btn btn-success ">Yes</a>     

                                </div>
                                </div>
                            </div>
                    </div>
                             
                                 <div class="modal fade" id="notsuits" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <h5> Are your sure want to mark it as not suitable ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                     <a :href="'/campaign/'+ campaign.id +'/campnotsuit/'+ user.id +'/brandid/'+ campaign.iid" class="btn btn-success ">Yes</a>     

                                </div>
                                </div>
                            </div>
                    </div>
                      
                 </span>
                    </span>






  
































































               </div>

          </div>
    
          
        
            </div>


                                
                  



          </div>






     
 </div>


  
</template>

<script>

    export default {
        props:['data','campaign','brand','napp','user'],
    
        data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
                today:0,
                ftoday:0,
            
        
               
               
              
               

              
        };
    },

        mounted() {
      
             this.today = new Date();
             
    var dd = this.today.getDate() ;
    var mm = this.today.getMonth() + 1; //January is 0!
    var yyyy = this.today.getFullYear();
    if (dd < 10) {
      dd = "0" + dd;
    }
    if (mm < 10) {
      mm = "0" + mm;
    }

  this.today = yyyy + "-" + mm + "-" + dd;

   
 



        },
        methods:{
            
                useraccept(data)
            {
              axios.post('/campaign/useraccept/'+ this.data.id,{
                status:data.status
              })
              .then(res => {
            
                console.log(res);

                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
             
            }, 
                userdecline(data)
            {
              axios.post('/campaign/userdecline/'+ data.id,{
                status:data.status
              })
              .then(res => {
            
                console.log(res);

                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
             
            }, 
                   acceptmou(data)
            {
              axios.post('/campaign/acceptmou/'+ this.data.id,{
                status:data.status
              })
              .then(res => {
            
                console.log(res);

                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
             
            },  
             addurl(data)
            {
              if(data.posturl != null)
              {
                  axios.post('/campaign/addurl/'+ this.data.id,{
                  status:data.status,
                  posturl:data.posturl
                })
                .then(res => {
              
                  console.log(res);

                      window.location.reload();
                })
             }
             
             
             
            }, 
            addposin(data)
            {  
              if(data.insphoto != null)
              {
                   axios.post('/campaign/addposin/'+ this.data.id,{
                
                         status:data.status,
                         views:data.views,
                         likes:data.likes,
                         impressions:data.impressions,
                         comments:data.comments,
                         save:data.save,
                         share:data.share,
                         reach:data.reach,
                         
                     
                    })
                    .then(res => {
                  
                      console.log(res);
                        
                          window.location.reload();
                    })
              }
           
            
             
            }, 
             porder(data)
            {
              if(data.pdeldate != null && data.orderid != null)
              {
                     axios.post('/campaign/porder/'+ this.data.id,{
                         status:data.status,
                         pdeldate:data.pdeldate,
                         orderid:data.orderid,
                        
              })
                .then(res => {
            
                console.log(res);

                    window.location.reload();
              })
              
              }
                
            }, 
                 preceive(data)
            {
              if (data.precdate != null) {
                   axios.post('/campaign/preceive/'+ this.data.id,{
                         status:data.status,
                         precdate:data.precdate,
                       
                        
                })
                .then(res => {
              
                  console.log(res);

                      window.location.reload();
                })
              }
           
             
            }, 

        }
    }
</script>