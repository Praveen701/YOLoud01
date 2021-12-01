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
   
    

  
                                          
                  <div class="card mt-4 mb-4" style="border-radius:22px;">
                    


      <div class="container row mb-4" >
          <div class="col-sm-12 col-12 col-md-4 mt-4" v-if="campaign.data.length > 0" v-for="item,index in campaign.data" :key="index+'124'">
          
  
         
              <div class="card mb-3 cadsm" style="height:42rem"> 

           
                <div class="card Rectangle-18 Recsm" style="background-color:#6aa3d8"
                 v-if="item.ustatus == null && item.campmatch.startdate <= today && item.campmatch.enddate >= today">
                 
                  <h6 style="color:white" class="ml-3 ffss">Open</h6>
                 </div>
                  <div class="card Rectangle-18 Recsm" style="background-color:#ebae52;" 
                  v-if="item.ustatus == 0">

                  <h6 style="color:white" class="ml-1 ffss">Applied</h6>
                  </div>

                   <div class="card Rectangle-18 Recsm" style="background-color:#3bd42d"  v-if=" item.campmatch.startdate > today">
                  <h6 style="color:white" class=" ffss">Upcoming</h6>
                   </div>

                    <div class="card Rectangle-18 Recsm" style="background-color:#7e7979"  v-if=" today >= item.campmatch.enddate">

                  <h6 style="color:white" class="ml-2 ffss">Expired</h6>
                  
                    </div>

                  <div class="card Rectangle-18 Recsm" style="background-color:red"  v-if="item.ustatus == 2">

                  <h6 style="color:white" class="ml-1 ffss">Rejected</h6>
                  
                    </div>
               

              
              

              
          
                 <span v-if="item.brandlinked.brandphoto == null">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQ3fegNa5a5si6R-U2zMlldvLxAAbMSWtBnxfRzTp2SsPE1_wJj06UJqf_As34AOG6SI0&usqp=CAU" class="card-img-top"  alt="" width="120" height="250">

                 </span>
                 <span v-else>
                  <!-- <img :src="item.brandlinked.brandphoto" class="card-img-top" width="200" height="250"  alt=""> -->
                  <img src="https://images.ctfassets.net/hrltx12pl8hq/3MbF54EhWUhsXunc5Keueb/60774fbbff86e6bf6776f1e17a8016b4/04-nature_721703848.jpg?fit=fill&w=480&h=270" class="card-img-top"  alt="" width="120" height="200">


                 </span>

             
               
                <div class="card-body" >
   

                 
                  <div class="row justify-content-between">
                      <div class="col-md-12 col-12">
                         <h6 class="card-title"><b>{{item.campmatch.campaigntitle}}</b></h6>
                      </div>
                
                    </div>

                    <div class="row">

                        <div class="col align-self-end">
                         <p class="card-text float-right mt-3 ffss"><small class="text-muted">Published on : {{ item.campmatch.created_at | moment('YY/MM/DD') }}</small></p>

                          </div>

                    </div>


              <hr class="mt-2">
                  <p class="card-text mt-2 cdes cdesmd" style="height:14rem">
               
                    {{ item.campmatch.campaigndes.substring(0,450) + "" }}
                    </p>
              
                  <p v-for="row in item.influencerlinked" class="card-text" style="text-align:center;">
                    
                       <span v-if="row.status == 0">
                      <p style="color:black">Waiting for your Profile to be Shortlisted</p>
                    </span>
                    <span v-if="row.status == 1">
                      <p style="color:green">Your profile has been shortlisted</p>
                    </span>
                      <span v-if="row.status == 2">
                      <p style="color:red">You marked as Not Suitable </p>
                    </span>
                     <span v-if="row.status == 3">
                      <p style="color:green">You accepted the deliverables</p>
                    </span>
                      <span v-if="row.status == 4">
                      <p style="color:red">You declined the deliverables</p>
                    </span>
                      <span v-if="row.status == 5">
                      <p style="color:green">Revised Deliverables Received</p>
                    </span>
                      <span v-if="row.status == 6">
                      <p style="color:red">Your Profile was Rejected</p>
                    </span>
                      <span v-if="row.status == 7">
                      <p style="color:green">Your Profile was Finalized</p>
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

                <p class="card-text " style="text-align:center;">
                      <vue-countdown-timer
                          @start_callback="startCallBack('event started')"
                          @end_callback="endCallBack('event ended')"
                          :start-time="item.campmatch.startdate"
                          :end-time="item.campmatch.enddate"
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
                                  <span style="color: red;" v-if="scope.props.endLabel !== '' && !scope.props.tips && scope.props.labelPosition === 'begin'">{{scope.props.endLabel}}: </span>
                                  
                                    
                                </template>
                 
                          
                          
                                <template slot="end-label" slot-scope="scope">
                                  <span style="color: red" v-if="scope.props.startLabel !== '' && scope.props.tips && scope.props.labelPosition === 'end'">{{scope.props.startLabel}}:</span>
                                  <span style="color: red" v-if="scope.props.endLabel !== '' && !scope.props.tips && scope.props.labelPosition === 'end'">{{scope.props.endLabel}}:</span>
                                </template>
                          
                                <template slot="end-text" slot-scope="scope">
                                  <span style="color: white">{{ scope.props.endText}}</span>
                                </template>
                         

                        </vue-countdown-timer>
                          <p style="color:grey;text-align:center;font-size:0.77rem;" v-if=" today < item.campmatch.enddate">
                              <b>Hurry Up! Few Slots Left</b> </p>
                        
      
             </span>
                
                      
           
                     
                     <span class="card-text  row justify-content-center" >
                           <div class="" v-if="item.ustatus == null && item.campmatch.startdate <= today && item.campmatch.enddate > today">
                               <a :href="'/campaign/status/' + item.campmatch.id" class="btn btn-primary " >Go to Campaign Manager</a>
                          </div>
                            <div class="" v-if="item.campmatch.startdate > today ">
                               <a :href="'/campaign/status/' + item.campmatch.id" class="btn btn-primary " >Go to Campaign Manager</a>
                          </div>
                          
                            <div class="" v-if="item.ustatus != null">
                               <a :href="'/campaign/status/' + item.campmatch.id" class="btn btn-primary cmbtn" >Go to Campaign Manager</a>
                          </div>
                           <div class="" v-if="item.ustatus == null && today >= item.campmatch.enddate">
                               <a :href="'/campaign/status/' + item.campmatch.id" class="btn btn-primary cmbtnex" >Go to Campaign Manager</a>
                          </div>
                          
                          
                     </span>

               
    
                </div>
            </div>
            

          </div>  

          <div v-else>
                 
                      <div class="container">
                        <img class="nodata" src="/img/nodata.PNG" alt="">
                          <h1 class="display-7"></h1>
                          <p class="lead">
                              
                          Sorry, we could not find any campaign matching your profile                  
                          
                          </p>
                      </div>
            
          </div>
         


      </div>
          </div>

       


      </div>
        




  

  

    








</div>
   
</template>

<style scoped>
.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:visited,
.btn-primary:focus {
     background-color:#6aa3d8;
      border-color: #6aa3d8;
}
.Rectangle-18 {
  width: 80px;
  position: absolute;
  height: 27px;
  margin: 8px 0px 236px 272px;
  padding: 5.7px 0px 23.3px 8.8px;
 
}
  .ffss{
        font-size: 0.88rem;
      }
      .cmbtn{
        margin: 33px auto;
      }
      .cmbtnex{
        margin:52px 0 0 0;
      }

@media only screen and (max-width:767px) {
     .Recsm {
        width: 58px;
        position: absolute;
        height: 10px;
        margin: 8px 0px 0px 252px;
        padding: 5.7px 0px 17.3px 0px;
     
      
        
       
      }
      .cmbtnex{
        margin:40px 0 0 0;
      }
      .cmbtn{
        margin:15px 0 0 0;
      }
      
      .ffss{
        font-size: 0.66rem;
      }
      .cadsm{
        left: 1rem;
      }
    
}
@media only screen and (min-width:1190px) and (max-width:1450px) {
    .Recsm {
        width: 56px;
        position: absolute;
        height: 12px;
        margin: 8px 0px 0px 252px;
      padding: 4.7px 0 19.3px 0px;    
       
      }
        .ffss{
        font-size: 0.73rem;
      }
     
    
   
}

</style>

<script>

    export default {
        props:['campaign','user','capp',
        'cpar','ccom'],
      
        data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
                today:0,
                loading:1,
                name: 'Timer',
               item:''

               

              
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