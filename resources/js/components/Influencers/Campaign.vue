<template>
<div>
     <!-- <h1>All Campaign</h1> -->

    

     <div>
  
   
     <!-- <div class="row mt-4">
      <div class="col-sm-3">
          <div class="">
              <h6 class="text-muted text-uppercase mt-0">Campaigns  Recived</h6>
              <h2 class="" data-plugin="counterup"> {{campaign.length}}</h2></div>
      </div>
    
      <div class="col-sm-3">
          <div class="card-box tilebox-one">
              <h6 class="text-muted text-uppercase mt-0">Campaigns  Applied</h6>
              <h2 class="" data-plugin="counterup">{{capp.length}}</h2></div>
      </div>
     
      <div class="col-sm-3">
          <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
              <h6 class="text-muted text-uppercase mt-0">Campaigns  Participated</h6>
          
                  <h2 class="" data-plugin="counterup" >
             {{cpar.length + cpaarr.length }}
               
              </h2>
                
          </div>
      </div>
        <div class="col-sm-3">
          <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
              <h6 class="text-muted text-uppercase mt-0">Campaigns  Completed</h6>
              <h2 class="" data-plugin="counterup" >
             {{ccom.length}}
              </h2>
                
          </div>
      </div>
  
     </div> -->

     
    

          <!-- <div class="row mt-4">
      
        <div class="col-sm-8"> 
            <div class="form-group has-search">
      
            <input type="text"  name="campaigntitle"  class="form-control" placeholder="Search by Campaign Name">
            </div>
        </div>
          <div class="col-sm-4">
              <div class="col">
                <button type="submit"  class="btn btn-primary mr-3">Search</button>
                <button type="submit"  class="btn btn-secondary">Reset</button>
              </div>
        </div>
      </div> -->
    



      <div class="row mt-2" >
          <div class="col-6 col-md-4 mt-4" v-if="campaign.data.length > 0" v-for="item,index in campaign.data" :key="index+'124'">
           
              
         
              <div class="card" style="height:530px" >
              
              <span v-for="row in item.brandlinked">
                 <span v-if="row.brandphoto == null">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQ3fegNa5a5si6R-U2zMlldvLxAAbMSWtBnxfRzTp2SsPE1_wJj06UJqf_As34AOG6SI0&usqp=CAU" class="card-img-top"  alt="" width="150" height="250">

                 </span>
                 <span v-else>
                  <img :src="row.brandphoto" class="card-img-top" width="200" height="250"  alt="">

                 </span>

              </span>
               
                <div class="card-body">
                <p class="card-text float-right"><small class="text-muted">{{ item.created_at | moment('MMMM Do YYYY') }}</small></p>
   
                  <h5 class="card-title"><b>{{item.campaigntitle}}</b></h5>


                  <p class="card-text mt-2" style="height:100px">{{item.campaigndes}}</p>
                  <p v-for="row in item.influencerlinked" class="card-text" style="text-align:center;">
                    
                       <span v-if="row.status == 0">
                      <p style="color:black">Waiting for your Profile to be Shortlisted</p>
                    </span>
                    <span v-if="row.status == 1">
                      <p style="color:green">Your profile has been shortlisted</p>
                    </span>
                      <span v-if="row.status == 2">
                      <p style="color:green">Your profile was finalized </p>
                    </span>
                     <span v-if="row.status == 3">
                      <p style="color:green">You accepted the deliverables</p>
                    </span>
                      <span v-if="row.status == 4">
                      <p style="color:red">You declined the deliverables</p>
                    </span>
                      <span v-if="row.status == 5">
                      <p style="color:red">Your Profile was Rejected</p>
                    </span>
                      <span v-if="row.status == 8">
                      <p style="color:green"> You received campaign details</p>
                    </span>
                      <span v-if="row.status == 9">
                      <p style="color:green">Your content was received</p>
                    </span>
                     <span v-if="row.status == 10">
                      <p style="color:green">Your content was approved</p>
                    </span>
                     <span v-if="row.status == 11">
                      <p style="color:green">You posted the content</p>
                    </span>
                     <span v-if="row.status == 12">
                      <p style="color:green">Your post insights was uploaded</p>
                    </span>
                      <span v-if="row.status == 14">
                      <p style="color:green">Product(s) were marked as ordered</p>
                    </span>
                      <span v-if="row.status == 15">
                      <p style="color:green">Product(s) were marked as received</p>
                    </span>
                    <span v-if="row.status == 13">
                      <p style="color:green">Your Commercials has Disbursed</p>
                    </span>
                                                         
                    </p>

             <span v-if="item.influencerlinked == ''">

                <p class="card-text mb-3" style="text-align:center;">
                      <vue-countdown-timer
                          @start_callback="startCallBack('event started')"
                          @end_callback="endCallBack('event ended')"
                          :start-time="item.startdate"
                          :end-time="item.enddate"
                          :interval="1000"
                          :start-label="'Starts in'"
                          :end-label="'Expires in'"
                          label-position="begin"
                          :end-text="'-'"
                          :day-txt="' : '"
                          :hour-txt="' : '"
                          :minutes-txt="' : '"
                          :seconds-txt="'  '">
                               <template slot="start-label" slot-scope="scope">
                                  <span style="color: green" v-if="scope.props.startLabel !== '' && scope.props.tips && scope.props.labelPosition === 'begin'">{{scope.props.startLabel}}:</span>
                                  <span style="color: red" v-if="scope.props.endLabel !== '' && !scope.props.tips && scope.props.labelPosition === 'begin'">{{scope.props.endLabel}}:</span>
                                </template>
                          
                          
                                <template slot="end-label" slot-scope="scope">
                                  <span style="color: red" v-if="scope.props.startLabel !== '' && scope.props.tips && scope.props.labelPosition === 'end'">{{scope.props.startLabel}}:</span>
                                  <span style="color: red" v-if="scope.props.endLabel !== '' && !scope.props.tips && scope.props.labelPosition === 'end'">{{scope.props.endLabel}}:</span>
                                </template>
                          
                                <template slot="end-text" slot-scope="scope">
                                  <span style="color: white">{{ scope.props.endText}}</span>
                                </template>
                        
                        </vue-countdown-timer>
                        </p>
      
             </span>
                
                      
           
                     
                     <span class="card-text mt-2 row justify-content-center" v-if="item.startdate <= today && item.enddate >= today">
                           <div class="">
                               <a :href="'/campaign/status/' + item.id" class="btn btn-primary ">Go to Campaign Manager</a>
                          </div>
                     </span>
                        <span class="card-text mt-3 row justify-content-center" v-if=" today >= item.enddate">
                           <div class="">
                                  <button  class="btn btn-secondary" disabled>Campaign Ended</button>
                          </div>
                     </span>

                   
                 <!-- <p class="card-text float-right"><small class="text-muted" > Application received so far</small></p> -->


    
                </div>
            </div>
            

          </div>  

          <div v-else>
                  <div class="jumbotron">
                      <div class="container">
                          <h1 class="display-7"></h1>
                          <p class="lead">
                              
                              Currently there are no campaign opportunities matching your profile. You will receive an email whenever there is a new opportunity matching your profile. Please make sure you keep your profile updated.
                  
                          
                          </p>
                      </div>
              </div>
          </div>
           <!-- <div v-if="campaign.data.length <= 0">

                <div class="jumbotron">
                     <div class="container">
                          <h1 class="display-7"></h1>
                          <p class="lead">
                             
                             Currently there are no campaign opportunities matching your profile. You will receive an email whenever there is a new opportunity matching your profile. Please make sure you keep your profile updated.
                  
                            
                            </p>
                       </div>
                </div>

          </div> -->


      </div>

       


      </div>
        




  

    <!-- <span >
        <h2 class="" style="text-align:center">Note : Your Account is under verification , once your account is approved you can able to participate in the campaigns </h2>
          <div class="jumbotron">
                <div class="container">
                  <h1 class="display-4">Oops !</h1>
                  <p class="lead">
                   
                    Your profile is under verification, once it is approved you will be able to receive campaign opportunities.
                    
                    </p>
                </div>
        </div>
    </span> -->



    








</div>
   
</template>

<script>

    export default {
        props:['campaign','user','capp',
        'cpar','ccom','cpaarr','brand'],
      
        data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
                today:0,
                loading:1,
                name: 'Timer',
               
               

              
        };
    },

        mounted() {
             this.today = new Date();
    var dd = this.today.getDate();
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
                  startCallBack: function(x) {
                console.log(x);
              },
              endCallBack: function(x) {
                console.log(x);
              },
              //  clearfilter() {
              //   this.fil = {
              //     name: null,
              //     id: null,
              //     email: "",
              //   };
              //   this.getResults();
              // },
                // getResults(page = 1) {
                //   this.loading = 1;
                //   axios
                //     .post("/campaign/paginatecamp?page=" + page, {
                //       ord: this.filname,
                    
                //       filtertitle: this.fil.campaigntitle,
                //     })
                //     .then((response) => {
                //       console.log(response);
                //       this.campaign = response.data;
                //       this.loading = 0;
                //     });
                // },

  }
           
        }
    
</script>