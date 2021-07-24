<template>
  <div >
    <div >
      <form
        :action="'/admin/influencer/edit/' + profile.id"
        method="post"
        id="myform"
      >
        <input type="hidden" name="_token" :value="csrf" />
        <input type="hidden" name="intrest" v-model="userintrests" />
        <!-- <input type="hidden" name="paytype" v-model="paytype" /> -->
        <!-- <input type="hidden" name="payval" id="payval" v-model="paymentform" /> -->
        <input type="hidden" name="name" v-model="name" />
        <input type="hidden" name="email" v-model="email" />

        <input type="hidden" name="profilestatus" v-model="profile.profilestatus" />
           <input type="hidden" name="verified" v-model="profile.verified" />
        <input type="hidden" name="accountstatus" v-model="profile.accountstatus" />
        <input type="hidden" name="phone" v-model="phone" />


        <input type="hidden" name="gender" v-model="gender" />
        <input type="hidden" name="pincode" v-model="pincode" />
        <input type="hidden" name="city" v-model="dcity" />
        <input type="hidden" name="state" v-model="state" />
        <input type="hidden" name="dob" v-model="dob" />
        <input type="hidden" name="languages" v-model="userlanguages" />
        <input type="hidden" name="country" v-model="country" />
        <input type="hidden" name="emailstatus" v-model="emailstatus" />
        <input type="hidden" name="phonestatus" v-model="phonestatus" />
        <input type="hidden" name="categorystatus" v-model="categorystatus" />

        <input
          type="hidden"
          name="iusername"
          v-model="instagram.iusername"
          id=""
        />
        <input
          type="hidden"
          name="ifollowers"
          v-model="instagram.ifollowers"
          id=""
        />
        <input type="hidden" name="iposts" v-model="instagram.iposts" id="" />
        <input type="hidden" name="istatus" v-model="instagram.istatus" id="" />

        <input
          type="hidden"
          name="iavglike"
          v-model="instagram.iavglike"
          id=""
        />
        <input type="hidden" name="iavgcmt" v-model="instagram.iavgcmt" id="" />

        <input
          type="hidden"
          name="iusernamesstatus"
          v-model="instagram.iusernamesstatus"
          id=""
        />
        <input
          type="hidden"
          name="ifollowersstatus"
          v-model="instagram.ifollowersstatus"
          id=""
        />
        <input
          type="hidden"
          name="ipostsstatus"
          v-model="instagram.ipostsstatus"
          id=""
        />
        <input
          type="hidden"
          name="iavglikestatus"
          v-model="instagram.iavglikestatus"
          id=""
        />
        <input
          type="hidden"
          name="iaudagestatus"
          v-model="instagram.iaudagestatus"
          id=""
        />
        <input
          type="hidden"
          name="iaudlocstatus"
          v-model="instagram.iaudlocstatus"
          id=""
        />
        <input
          type="hidden"
          name="iaudgenestatus"
          v-model="instagram.iaudgenestatus"
          id=""
        />
        <input
          type="hidden"
          name="iavgcmtstatus"
          v-model="instagram.iavgcmtstatus"
          id=""
        />
        <input
          type="hidden"
          name="ipfrstatus"
          v-model="instagram.ipfrstatus"
          id=""
        />
        <input type="hidden" name="iqs" v-model="instagram.iqs" id="" />
        <input
          type="hidden"
          name="iengagementrate"
          v-model="instagram.iengagementrate"
          id=""
        />
        <input type="hidden" name="ipfr" v-model="instagram.ipfr" id="" />

        <input
          type="hidden"
          name="iaudienceloc"
          v-model="audcity"
          id=""
        />
        <input
          type="hidden"
          name="iaudienceage"
          v-model="audage"
          id=""
        />
        <input
          type="hidden"
          name="iaudiencegen"
          v-model="instagram.iaudiencegen"
          id=""
        />
            <input type="hidden" name="yurl" v-model="yftsocial.yurl" id="" />
         <input type="hidden" name="furl" v-model="yftsocial.furl" id="" />
          <input type="hidden" name="tusername" v-model="yftsocial.tusername" id="" />
        <input type="hidden" name="yurlstatus" v-model="yftsocial.yurlstatus" id="" />
          <input type="hidden" name="furlstatus" v-model="yftsocial.furlstatus" id="" />     
       <input type="hidden" name="tusernamestatus" v-model="yftsocial.tusernamestatus" id="" />


      
      

        <h1 class="mt-2 mb-3 text-left">Influencers Details</h1>

        <div class="text-right">
          <ul class="nav text-left">
            <li class="nav-item">
              <a
                class="nav-link btn"
                v-on:click="changePage(0)"
                v-bind:style="page == 0 ? 'color:#DDA05D;' : 'color:#01AFBA;'"
              >
                <h4>Details</h4></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link btn"
                v-on:click="changePage(1)"
                v-bind:style="page == 1 ? 'color:#DDA05D;' : 'color:#01AFBA;'"
              >
                <h4>Profile</h4></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link btn"
                v-on:click="changePage(2)"
                v-bind:style="page == 2 ? 'color:#DDA05D;' : 'color:#01AFBA;'"
              >
                <h4>Settings</h4></a
              >
            </li>
                 <li class="nav-item">
              <a
                class="nav-link btn"
                v-on:click="changePage(3)"
                v-bind:style="page == 3 ? 'color:#DDA05D;' : 'color:#01AFBA;'"
              >
                <h4>Campaign Participated</h4></a
              >
            </li>
         
          </ul>
          <div class="container-fluid text-left">
            <span v-if="page == 0" class="row">
              <link
                rel="stylesheet"
                href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css"
              />
              <div class="container">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="row">
                      <div class="col-12 grid-margin">
                        <div class="card">
                          <div class="faq-block card-body">
                            <div class="container-fluid">
                              <h2 class="mb-3">Basic Details</h2>
                            </div>

                            <div class="col-6 col-md-12">
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Name</h6> 
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ profile.name }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Gender</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ gender }}
                                </div>
                              </div>
                                <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Date of Birth</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ dob }}
                                </div>
                              </div>
                             
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Email</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ profile.email }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Category</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ JSON.parse(influencers.intrest )}}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Phone Number</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ phone }}
                                </div>
                              </div>
                              
                              
                              <div class="row">
                                  <div class="col-6">
                                    <h6 class="mb-3">Pincode</h6>
                                  </div>
                                  <div class="col-6 text-secondary">
                                    {{ pincode }}
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">City</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ city }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">State</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ state }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Country</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ country }}
                                </div>
                              </div>
                               <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Date of Joining</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ profile.created_at | moment('YYYY-MM-DD')}}
                                </div>
                              </div>
                                  <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Verified</h6>
                                </div>

                                <div class="col-6 text-secondary">
                                  <b v-if="profile.verified == 0">NO</b>
                                  <b
                                    v-if="profile.verified == 1"
                                    style="color: green"
                                    >YES</b
                                  >
                                 
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Status</h6>
                                </div>

                                <div class="col-6 text-secondary">
                                  <b v-if="profile.profilestatus == 0">Not Approved</b>
                                  <b
                                    v-if="profile.profilestatus == 1"
                                    style="color: green"
                                    >Approved</b
                                  >
                                  <b
                                    v-if="profile.profilestatus == 2"
                                    style="color: red"
                                    >Rejected</b
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- sub col -->
                  <div class="col-12 col-md-6">
                    <div class="row">
                      <div class="col-12 grid-margin">
                        <div class="card">
                          <div class="faq-block card-body">
                            <div class="container-fluid">
                              <h2 class="mb-3">Social Profile</h2>
                            </div>

                            <div class="col-6 col-md-12">
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Instagram Id</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ instagram.iusername }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Followers</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ instagram.ifollowers }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Posts</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ instagram.iposts }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Average Likes</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ instagram.iavglike }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Average Comments</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ instagram.iavgcmt }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Engagement Rate (%)</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ instagram.iengagementrate }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Quality Score</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ instagram.iqs }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Posts : Followers</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                {{ instagram.ipfr }} 
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Location</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ instagram.iaudienceloc }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Top 3 Audience Age Group</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ instagram.iaudienceage }}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Top 3 Audience Gender</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ instagram.iaudiencegen }}
                                </div>
                              </div>
                                <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Youtube Channel URL</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ yftsocial.yurl }}
                                </div>
                              </div>
                                <div class="row">
                                <div class="col-6">
                                  <h6 class="mb-3">Facebook Profile URL</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ yftsocial.furl }}
                                </div>
                              </div>
                                <div class="row">
                                <div class="col-6">
                                  <h6>Twitter Username</h6>
                                </div>
                                <div class="col-6 text-secondary">
                                  {{ yftsocial.tusername }}
                                </div>
                              </div>



                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- parent row -->
              </div>
            </span>
            <span v-else-if="page == 1">
              <h2 class="mt-3 mb-3">Basic Info</h2>

              <div class="row">
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input
                      required
                      v-model="name"
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Enter Name"
                    />
                  </div>
                </div>
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" v-model="gender" class="form-control">
                      <option value="Male" selected>Male</option>
                      <option value="Female">Female</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input
                      required
                      v-model="email"
                      type="text"
                      class="form-control"
                      id="email"
                      placeholder="Enter Email"
                    />
                  </div>
                </div>

                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input
                      type="tel"
                      class="form-control"
                      value=""
                      v-model="phone"
                      id="phone"
                      placeholder="Enter Phone Number"
                    />
                  </div>
                </div>

                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input
                      type="date"
                      class="form-control"
                      id="dob"
                      @input="calcage"
                      v-model="dob"
                      placeholder="Enter Date of Birth"
                    />
                  </div>
                </div>
                  <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="pincode" class="form-label">Pincode</label>
                    <input
                      type="text"
                      class="form-control"
                      id="pincode"
                      v-model="pincode"
                      placeholder="Enter Pincode"
                    />
                  </div>
                </div>
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="city" class="form-label">City</label>
             
                        <multiselect  v-model="dcity"  :options="ccoptions"  :multiple="false" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select City" :preselect-first="false">
                          
                       </multiselect>
                  </div>
                </div>
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="state" class="form-label">State</label>
                    <input
                      type="text"
                      class="form-control"
                      id="state"
                      v-model="state"
                      placeholder="Enter State"
                    />
                  </div>
                </div>
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <select v-model="country" id="country" class="form-control">
                      <option value="Afganistan">Afghanistan</option>
                      <option selected>India</option>
                      <option value="Myanmar">Myanmar</option>
                      <option value="Pakistan">Pakistan</option>
                      <option value="Qatar">Qatar</option>
                      <option value="Saudi Arabia">Saudi Arabia</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Sri Lanka">Sri Lanka</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United Arab Erimates">
                        United Arab Emirates
                      </option>
                      <option value="United States of America">
                        United States of America
                      </option>
                    </select>
                  </div>
                </div>
              </div>
              <h3 class="mb-4 mt-4">
                Choose Your Intrested Areas(Select max.3)
              </h3>
              <div class="row mt-2">
                <button
                  type="button"
                  v-on:click="intrestcheck(item.name)"
                  :class="[
                    userintrests.includes(item.name)
                      ? 'col-sm-12 p-2 m-1 mt-2 col-md-2 btn btn-primary'
                      : 'col-sm-12 mt-2 m-1 p-2 col-md-2 btn btn-outline-primary',
                  ]"
                  v-for="(item, index) in intrest"
                >
                  {{ item.name }}
                  
                </button>
              </div>
              <h3 class="mb-3 mt-4">Choose Languages You Know</h3>
              <div class="row mt-2">
                 <button
                  type="button"
                  v-on:click="languagecheck(item.name)"
                  :class="[
                    userlanguages.includes(item.name)
                      ? 'col-sm-12 p-2 m-1 mt-2 col-md-2 btn btn-primary'
                      : 'col-sm-12 mt-2 m-1 p-2 col-md-2 btn btn-outline-primary',
                  ]"
                  v-for="(item, index) in languages"
                >
                  {{ item.name }}
                </button>
              </div>
            

              <h2 class="mt-4 mb-3">Social Profile</h2>

        
           
           <h2 class="mt-2">Instagram</h2>   
             <div class="row">
                      
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                      <label for="">Instagram Id</label>
                            <input
                              type="text"
                              class="form-control"
                              v-model="instagram.iusername"
                              placeholder="Enter Instagram Id"
                            />
                  </div>
                </div>
                   <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="">Followers</label>
                            <input
                              type="text"
                              class="form-control"
                              v-model="instagram.ifollowers"
                              placeholder="Enter Total Followers"
                            />
                  </div>
                </div>
                   <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                     <label for="">Posts</label>
                            <input
                              type="text"
                              class="form-control"
                              v-model="instagram.iposts"
                              placeholder="Enter Total Posts"
                            />
                  </div>
                </div>
                   <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="">Average Likes</label>
                            <input
                              type="text"
                              class="form-control"
                              v-model="instagram.iavglike"
                              placeholder="Enter Average Likes"
                            />
                  </div>
                </div>
                   <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                      <label for="">Average Comments</label>
                            <input
                              type="text"
                              class="form-control"
                              v-model="instagram.iavgcmt"
                              placeholder="Enter Average Comments"
                            />
                  </div>
                </div>
                   <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                      <label for="">Quality Score</label>

                            <select
                              value=""
                              id="audiencegen"
                              v-model="instagram.iqs"
                              class="form-control"
                            >
                              <option value="Below Average" selected>
                                Below Average
                              </option>
                              <option value="Average">Average</option>
                              <option value="Above Average">
                                Above Average
                              </option>
                            </select>
                  </div>
                </div>
                   <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="">Engagement Rate (%)</label>
                            <input
                              type="text"
                              class="form-control"
                              v-model="instagram.iengagementrate"
                              placeholder="Enter Engagement Rate"
                              disabled
                            />
                  </div>
                </div>
                 
                   <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                         <label for="audienceage">Top 3 Audience Age Group</label>
                      <multiselect  v-model="audage" :options="aaoptions" :max=3 :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Creator Location" :preselect-first="false">
                
                        </multiselect>
                  </div>
                </div>
                  <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                         <label for="audienceage">Top 3 Audience Location</label>
                         
                        <multiselect  v-model="audcity" :options="ccoptions" :max=3 :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Creator Location" :preselect-first="false">
              
                      </multiselect>

                         
                  </div>
                </div>
                   <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                     <label for="">Posts : Followers</label>
                            <input
                              type="text"
                              class="form-control"
                              v-model="instagram.ipfr"
                              
                             
                              disabled
                            />
                  </div>
                </div>
                   <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                      <label for="audiencegen">Audience Gender</label>

                            <select
                              value=""
                              id="audiencegen"
                              v-model="instagram.iaudiencegen"
                              class="form-control"
                            >
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                             
                            </select>
                  </div>
                </div>
                  <div class="col-sm-12 mt-2 col-md-6">
                 
                         <form :action="'/admin/influencer/content/'+profile.id" method="post" enctype="multipart/form-data" id="myInputFileID">
                       
                                <div class="row justify-content-start">
                                    <div class="col-8">
                                  <input type="hidden" name="_token" :value="csrf" />
                                      <div class="form-group">
                                        <label for="">Upload Insights</label>  
                                        <input required type="file" class="form-control-file" name="contentphoto" id="myInputFileID"  aria-describedby="fileHelpId">
                                        <small id="myInputFileID" class="form-text text-muted">Select a File of Png,Svg,Jpg with a size limit  of 7mb</small>
                                      </div>
                                    </div>
                                    <div class="col-4 mt-3">
                                      <div class="container">
                                           <button class="btn btn-dark btn-sm" type="sumbit">Upload</button>
                                      </div>
                                        <div class="container" v-if="influencers.contentphoto != null">
                                          <button type="button" class="btn btn-primary btn-sm mt-2" data-toggle="modal" data-target="#exampleModalCenter">
                                            View
                                          </button>
                                      </div>
                                    </div>
                                    
                              </div>
                        </form>



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
                                  <div class="col-6">
                                    <img :src="'/storage/content/' + influencers.contentphoto" width="250" height="230" alt="">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>   



                          
                  
                </div>
                
             </div>

               <div class="row">
                          <div class="col-6">
                             <h2 class="mt-2">Youtube</h2>    
                      
                                <div class="form-group">
                                      <label for="">Channel URL</label>
                                      <input
                                        type="text"
                                        name="yurl"
                                        class="form-control"
                                        v-model="yftsocial.yurl"
                                        placeholder="Enter Channel URL"
                                      />
                                 
                                      
                                </div>
                   
                          </div>
                           <div class="col-6">
                               <h2 class="mt-2">Facebook</h2>    
                        
                                  <div class="form-group">
                                        <label for="">Profile URL</label>
                                        <input
                                          type="text"
                                          name="furl"
                                          class="form-control"
                                          v-model="yftsocial.furl"
                                          placeholder="Enter Profile URL"
                                        />
                                       
                                        
                                  </div>
                          </div>
                        </div>
                        <h2 class="mt-3">Twitter</h2>      
                          <div class="row mt-2">  
                              <div class="form-group col-sm-12 col-md-6">
                                    <label for="">Username</label>
                                    <input
                                      type="text"
                                      name="tusername"
                                      class="form-control"
                                      v-model="yftsocial.tusername"
                                      placeholder="Enter Username"
                                    />
                            
                              
                        </div>
                      </div>



            </span>

            <span v-else-if="page == 2">
              <h2 class="mt-3 mb-3">Basic Info</h2>

     
              
                     <div class="row row-cols-4 mt-2">
                        <div class="col">
                            <div class="form-group">
                              <label for="name"><b>Name</b></label>

                              <p>{{ profile.name }}</p>
                            </div>
                        </div>
                        <div class="col mt-3">
                            </div>
                        <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Gender</b></label>

                                    <p>{{ gender }}</p>
                          </div>
                      </div>
                        <div class="col mt-3">
                     </div>
                  </div>
                  
                     <div class="row row-cols-4 mt-2">
                        <div class="col">
                            <div class="form-group">
                              <label for="name"><b>Email</b></label>

                              <p>{{ profile.email }}</p>
                            </div>
                        </div>
                        <div class="col mt-3">
                            </div>
                        <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Phone</b></label>

                                    <p>{{ phone }}</p>
                          </div>
                      </div>
                        <div class="col mt-3">
                     </div>
                  </div>
                   
                    <div class="row row-cols-4 mt-2">
                        <div class="col">
                            <div class="form-group">
                              <label for="name"><b>Category</b></label>

                              <p>{{ JSON.parse(influencers.intrest ) }}</p>
                            </div>
                        </div>
                        <div class="col mt-3">
                          <span v-if="influencers.categorystatus == 0">
                        <div class="col mt-3">
                          <button class="btn-sm btn-success mr-2" v-on:click="verifycatstatus(influencers)">Verify</button>
                        <!-- <button class="btn-sm btn-danger" v-on:click="rejectcatstatus(influencers)">Reject</button> -->
                        </div>
                       </span>
                       <span v-if="influencers.categorystatus == 1">
                          <div class="col mt-3">
                            <button class="btn-sm btn-success" disabled>Verified</button>
                          </div>
                       </span>
                         <span v-if="influencers.categorystatus == 2">
                          <div class="col mt-3">
                            <button class="btn-sm btn-success" disabled>Verified</button>
                          </div>
                       </span>
                     </div>
                        <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Languages Known</b></label>

                                    <p>{{JSON.parse(influencers.languages ) }}</p>
                          </div>
                      </div>
                        <div class="col mt-3">
                     </div>
                  </div>
                    <div class="row row-cols-4 mt-2">
                        <div class="col">
                            <div class="form-group">
                              <label for="name"><b>Date of Birth</b></label>

                              <p>{{ dob }}</p>
                            </div>
                        </div>
                        <div class="col mt-3">
                        </div>
                        <div class="col">
                           <div class="form-group">
                               <label for="name"><b>City</b></label>

                                    <p>{{ city }}</p>
                          </div>
                      </div>
                        <div class="col mt-3">
                     </div>
                  </div>
                    <div class="row row-cols-4 mt-2">
                        <div class="col">
                            <div class="form-group">
                              <label for="name"><b>State</b></label>

                              <p>{{ state }}</p>
                            </div>
                        </div>
                        <div class="col mt-3">
                        </div>
                        <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Country</b></label>

                                    <p>{{ country }}</p>
                          </div>
                      </div>
                        <div class="col mt-3">
                     </div>
                  </div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-link" data-toggle="modal" data-target="#inflog">
  View User Log History
</button>

<!-- Modal -->
<div class="modal fade" id="inflog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Profile Log History</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


           <div class="row" v-for="inf in inflog">
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="name">Activity</label>
                   <p>{{inf.des}}</p>
                  </div>
                </div>
                   <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="name">Updated</label>
                   <p>{{inf.created_at | moment('DD/MM/YYYY hh:mm A')}}</p>
                  </div>
                </div>
           </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

                 



            

              <h2 class="mt-3 mb-3">Social Profile</h2>


              <h3 class="mt-3 mb-3">Instagram</h3>
            
                  <div class="row row-cols-4 mt-4">
                 
                        <div class="col">
                            <div class="form-group">
                              <label for="name"><b>Instagram Id</b></label>

                              <p>{{ instagram.iusername }}</p>
                            </div>
                        </div>
                        <div class="col mt-3">
                          <span v-if="instagram.iusernamesstatus == 0 || instagram.iusernamesstatus == 3">
                        <div class="col mt-3"><button class="btn-sm btn-success mr-2" v-on:click="verifyiuserstatus(instagram)">Verify</button>
                        <button class="btn-sm btn-danger" v-on:click="rejectiuserstatus(instagram)">Reject</button>
                        </div>
                       </span>
                       <span v-if="instagram.iusernamesstatus == 2">
                          <div class="col mt-3">
                            <button class="btn-sm btn-success" disabled>Verified</button>
                          </div>
                       </span>
                         <span v-if="instagram.iusernamesstatus == 1">
                          <div class="col mt-3">
                            <button class="btn-sm btn-danger" disabled>Rejected</button>
                          </div>
                       </span>
                     </div>
                        <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Followers</b></label>

                                    <p>{{ instagram.ifollowers }}</p>
                          </div>
                      </div>
                           <div class="col mt-3">
                          <span v-if="instagram.ifollowersstatus == 0">
                        <div class="col mt-3"><button class="btn-sm btn-success mr-2" v-on:click="verifyifolstatus(instagram)">Verify</button>
                        <button class="btn-sm btn-danger" v-on:click="rejectifolstatus(instagram)">Reject</button>
                        </div>
                       </span>
                       <span v-if="instagram.ifollowersstatus == 2">
                          <div class="col mt-3">
                            <button class="btn-sm btn-success" disabled>Verified</button>
                          </div>
                       </span>
                         <span v-if="instagram.ifollowersstatus == 1">
                          <div class="col mt-3">
                            <button class="btn-sm btn-danger" disabled>Rejected</button>
                          </div>
                       </span>
                     </div>
                  </div>
                   <div class="row row-cols-4 mt-2">
                        <div class="col">
                            <div class="form-group">
                              <label for="name"><b>Posts</b></label>

                              <p>{{ instagram.iposts }}</p>
                            </div>
                        </div>
                         <div class="col mt-3">
                          <span v-if="instagram.ipostsstatus == 0">
                        <div class="col mt-3"><button class="btn-sm btn-success mr-2" v-on:click="verifyipoststatus(instagram)">Verify</button>
                        <button class="btn-sm btn-danger" v-on:click="rejectipoststatus(instagram)">Reject</button>
                        </div>
                       </span>
                       <span v-if="instagram.ipostsstatus == 2">
                          <div class="col mt-3">
                            <button class="btn-sm btn-success" disabled>Verified</button>
                          </div>
                       </span>
                         <span v-if="instagram.ipostsstatus == 1">
                          <div class="col mt-3">
                            <button class="btn-sm btn-danger" disabled>Rejected</button>
                          </div>
                       </span>
                     </div>
                        <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Average Likes</b></label>

                                    <p>{{ instagram.iavglike }}</p>
                          </div>
                      </div>
                        <div class="col mt-3">
                          <span v-if="instagram.iavglikestatus == 0">
                        <div class="col mt-3"><button class="btn-sm btn-success mr-2" v-on:click="verifyilikestatus(instagram)">Verify</button>
                        <button class="btn-sm btn-danger" v-on:click="rejectilikestatus(instagram)">Reject</button>
                        </div>
                       </span>
                       <span v-if="instagram.iavglikestatus == 2">
                          <div class="col mt-3">
                            <button class="btn-sm btn-success" disabled>Verified</button>
                          </div>
                       </span>
                         <span v-if="instagram.iavglikestatus == 1">
                          <div class="col mt-3">
                            <button class="btn-sm btn-danger" disabled>Rejected</button>
                          </div>
                       </span>
                     </div>
                  
                  </div>
                  
                   <div class="row row-cols-4 mt-2">
                     <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Average Comments</b></label>

                                    <p>{{ instagram.iavgcmt }}</p>
                          </div>
                      </div>
                         <div class="col mt-3">
                          <span v-if="instagram.iavgcmtstatus == 0">
                        <div class="col mt-3"><button class="btn-sm btn-success mr-2" v-on:click="verifyicmtstatus(instagram)">Verify</button>
                        <button class="btn-sm btn-danger" v-on:click="rejecticmtstatus(instagram)">Reject</button>
                        </div>
                       </span>
                       <span v-if="instagram.iavgcmtstatus == 2">
                          <div class="col mt-3">
                            <button class="btn-sm btn-success" disabled>Verified</button>
                          </div>
                       </span>
                         <span v-if="instagram.iavgcmtstatus == 1">
                          <div class="col mt-3">
                            <button class="btn-sm btn-danger" disabled>Rejected</button>
                          </div>
                       </span>
                     </div>

                        <div class="col">
                               <div class="form-group">
                               <label for="name"><b>Quality Score</b></label>

                                    <p>{{ instagram.iqs }}</p>
                          </div>
                        </div>
                        <div class="col mt-3">
                        </div>
                  
                       
                  </div>
                   <div class="row row-cols-4 mt-2">
                           <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Engagement Rate (%)</b></label>

                                    <p>{{ instagram.iengagementrate }}</p>
                          </div>
                      </div>
                      <div class="col mt-3">
                        </div>
                        <div class="col">
                            <div class="form-group">
                              <label for="name"><b>Posts : Followers</b></label>

                              <p>{{ instagram.ipfr }}</p>
                            </div>
                        </div>
                        <div class="col mt-3">
                        </div>
                      
                   
                  </div>
                   <div class="row row-cols-4 mt-2">
                          <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Top 3 Audience Location</b></label>

                                    <p>{{ instagram.iaudienceloc }}</p>
                          </div>
                      </div>
                        <div class="col mt-3">
                          <span v-if="instagram.iaudlocstatus == 0">
                        <div class="col mt-3"><button class="btn-sm btn-success mr-2" v-on:click="verifyilocstatus(instagram)">Verify</button>
                        <button class="btn-sm btn-danger" v-on:click="rejectilocstatus(instagram)">Reject</button>
                        </div>
                       </span>
                       <span v-if="instagram.iaudlocstatus == 2">
                          <div class="col mt-3">
                            <button class="btn-sm btn-success" disabled>Verified</button>
                          </div>
                       </span>
                         <span v-if="instagram.iaudlocstatus == 1">
                          <div class="col mt-3">
                            <button class="btn-sm btn-danger" disabled>Rejected</button>
                          </div>
                       </span>
                     </div>
                        <div class="col">
                            <div class="form-group">
                              <label for="name"><b>Top 3 Target Age Group</b></label>

                              <p>{{ instagram.iaudienceage }}</p>
                            </div>
                        </div>
                          <div class="col mt-3">
                          <span v-if="instagram.iaudagestatus == 0">
                        <div class="col mt-3"><button class="btn-sm btn-success mr-2" v-on:click="verifyiagestatus(instagram)">Verify</button>
                        <button class="btn-sm btn-danger" v-on:click="rejectiagestatus(instagram)">Reject</button>
                        </div>
                       </span>
                       <span v-if="instagram.iaudagestatus == 2">
                          <div class="col mt-3">
                            <button class="btn-sm btn-success" disabled>Verified</button>
                          </div>
                       </span>
                         <span v-if="instagram.iaudagestatus == 1">
                          <div class="col mt-3">
                            <button class="btn-sm btn-danger" disabled>Rejected</button>
                          </div>
                       </span>
                     </div>
                     
                  </div>

                      <div class="row row-cols-4 mt-2">
                             <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Target Gender</b></label>

                                    <p>{{ instagram.iaudiencegen }}</p>
                          </div>
                      </div>
 

                        <div class="col mt-3">
                          <span v-if="instagram.iaudgenestatus == 0">
                        <div class="col mt-3"><button class="btn-sm btn-success mr-2" v-on:click="verifyigenstatus(instagram)">Verify</button>
                        <button class="btn-sm btn-danger" v-on:click="rejectigenstatus(instagram)">Reject</button>
                        </div>
                       </span>
                       <span v-if="instagram.iaudgenestatus == 2">
                          <div class="col mt-3">
                            <button class="btn-sm btn-success" disabled>Verified</button>
                          </div>
                       </span>
                         <span v-if="instagram.iaudgenestatus == 1">
                          <div class="col mt-3">
                            <button class="btn-sm btn-danger" disabled>Rejected</button>
                          </div>
                       </span>
                     </div>

                      </div>

                     
                     
                     
                      <h2 class="mb-3 mt-3">Youtube</h2>

                        <div class="row row-cols-4 mt-2">
                             <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Channel URL</b></label>

                                    <p>{{ yftsocial.yurl }}</p>
                          </div>
                      </div>
 

                              <div class="col mt-3">
                                <span v-if="yftsocial.yurlstatus == 0">
                              <div class="col mt-3">
                                <button class="btn-sm btn-success mr-2" v-on:click="vyurl(yftsocial)">Verify</button>
                              <button class="btn-sm btn-danger" v-on:click="ryurl(yftsocial)">Reject</button>
                              </div>
                            </span>
                            <span v-if="yftsocial.yurlstatus == 2">
                                <div class="col mt-3">
                                  <button class="btn-sm btn-success" disabled>Verified</button>
                                </div>
                            </span>
                              <span v-if="yftsocial.yurlstatus == 1">
                                <div class="col mt-3">
                                  <button class="btn-sm btn-danger" disabled>Rejected</button>
                                </div>
                            </span>
                          </div>

                      </div>

                         <h2 class="mb-3 mt-3">Facebook</h2>

                        <div class="row row-cols-4 mt-2">
                             <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Profile URL</b></label>

                                    <p>{{ yftsocial.furl }}</p>
                          </div>
                      </div>
 

                              <div class="col mt-3">
                                <span v-if="yftsocial.furlstatus == 0">
                              <div class="col mt-3"><button class="btn-sm btn-success mr-2" v-on:click="vfurl(yftsocial)">Verify</button>
                              <button class="btn-sm btn-danger" v-on:click="rfurl(yftsocial)">Reject</button>
                              </div>
                            </span>
                            <span v-if="yftsocial.furlstatus == 2">
                                <div class="col mt-3">
                                  <button class="btn-sm btn-success" disabled>Verified</button>
                                </div>
                            </span>
                              <span v-if="yftsocial.furlstatus == 1">
                                <div class="col mt-3">
                                  <button class="btn-sm btn-danger" disabled>Rejected</button>
                                </div>
                            </span>
                          </div>

                      </div>


                         <h2 class="mb-3 mt-2">Twitter</h2>

                        <div class="row row-cols-4 mt-2">
                             <div class="col">
                           <div class="form-group">
                               <label for="name"><b>Username</b></label>

                                    <p>{{ yftsocial.tusername }}</p>
                          </div>
                      </div>
 

                              <div class="col mt-3">
                                <span v-if="yftsocial.tusernamestatus == 0">
                              <div class="col mt-3"><button class="btn-sm btn-success mr-2" v-on:click="vtuser(yftsocial)">Verify</button>
                              <button class="btn-sm btn-danger" v-on:click="rtuser(yftsocial)">Reject</button>
                              </div>
                            </span>
                            <span v-if="yftsocial.tusernamestatus == 2">
                                <div class="col mt-3">
                                  <button class="btn-sm btn-success" disabled>Verified</button>
                                </div>
                            </span>
                              <span v-if="yftsocial.tusernamestatus == 1">
                                <div class="col mt-3">
                                  <button class="btn-sm btn-danger" disabled>Rejected</button>
                                </div>
                            </span>
                          </div>

                      </div>







                      
                         <button type="button" class="btn btn-link mt-2" data-toggle="modal" data-target="#iloghis">
                          View Social Profile Log History
                        </button>
                          <h3 class="mt-2">Account Settings</h3><br>

                  <div class="row ">
                  
                   <div class="form-group col-sm-12 col-md-6 ">
                            <label for=""><b>Account Status</b></label>
                   
                            
                            <select
                             
                              id="accountstatus"
                               v-model="profile.accountstatus"
                              v-on:change="changeaccstatus(profile)"
                              class="form-control form-control-sm"
                            >
                             <option value="0" >Active</option>
                              <option value="1">Inactive</option>
                            </select>
                          </div>  

                               <div class="form-group col-sm-12 col-md-6 ">
                            <label for=""><b>Profile Status</b></label>
                   
                            
                            <select
                              
                              id="profilestatus"
                               v-model="profile.profilestatus"
                              v-on:change="changeprofstatus(profile)"
                              class="form-control form-control-sm"
                            >
                             <option value="0" >Pending Approval</option>
                              <option value="1">Approved</option>
                               <option value="2">Rejected</option>
                            </select>
                          </div>  
                  </div>


                  <div class="modal fade " id="iloghis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Social Profile Log History</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                        
                              <div class="row" v-for="soc in sociallog">
                                
                                    <div class="col-sm-12 mt-2 col-md-6">
                                      <div class="form-group">
                                        <label for="name">Activity</label>
                                      <p>{{soc.des}}</p>
                                      </div>
                                    </div>
                                      <div class="col-sm-12 mt-2 col-md-6">
                                      <div class="form-group">
                                        <label for="name">Updated</label>
                                      <p>{{soc.created_at | moment('DD/MM/YYYY hh:mm A')}}</p>
                                      </div>
                                    </div>
                            
                            
                              </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          
                          </div>
                        </div>
                      </div>

                      
                    </div>






          
            </span>

            <span v-else-if="page == 3">
                        <h2 class="mt-3">Campaigns Participated</h2>  
                    <div class="row mt-4"  v-for="camp in camppar">  
                              <div class="form-group col-sm-12 col-md-6">
                                    <label for=""><b>Campaign Title</b></label>
                                  <h6 v-for="row in camp.mcampaign"> {{row.campaigntitle}}</h6>
                            
                              
                        </div>
                         <div class="form-group col-sm-12 col-md-6">
                                    <label for=""><b>Campaign Description</b></label>
                                  <h6 v-for="row in camp.mcampaign"> {{row.campaigndes}}</h6>
                            
                              
                        </div>
                       
                      </div>
                       <div v-if="camppar.length == 0">
                            <h5 class="justify-content-center mt-3">No Campaign Participated</h5>
                          </div>

            </span>
          
          </div>
          <div class="tab-content text-left">
            <div role="tabpanel" class="tab-pane fade" id="aofi">
              <div class="mt-2 card">
                <div class="card-body text-dark"></div>
                <div class="card-footer">
                  <input
                    type="submit"
                    class="float-right btn btn-primary"
                    value="Save Changes"
                  />
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="Payment">
              <div class="mt-2 card">
                <div class="card-body text-dark"></div>
                <div class="card-footer">
                  <input
                    type="submit"
                    class="float-right btn btn-primary"
                    value="Save Changes"
                  />
                </div>
              </div>
            </div>
          </div>
          <button
            type="button"
            class="btn btn-primary p-2 mt-2"
            v-on:click="savebutton"
          >
            <i class="fas fa-save"></i> Save
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    "intrest",
    "influencers",
    "languages",
    "profile",
    "instagram",
    "yftsocial",
    "inflog",
    "sociallog",
    "camppar"
  
  ],
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      page: 0,
      // payments: ["Net Banking", "Paytm", "Google Pay", "UPI"],
      // payoption: "Net Banking",
      name: this.profile.name,
      email: this.profile.email,
      profilestatus: this.profile.profilestatus,
      accountstatus: this.profile.accountstatus,
         verified: this.profile.verified,
      phone: this.influencers.phone,
      categorystatus: this.influencers.categorystatus,
      gender: this.influencers.gender,
      dob: this.influencers.dob,
      updated_at: this.influencers.updated_at,
      userlanguages: this.influencers.languages
        ? JSON.parse(this.influencers.languages)
        : [],
      // occtx: JSON.parse(this.influencers.occupation),
      // occtype: "",
      // paymentform: "",
      // payval: "",
          pincode: this.influencers.pincode,
      city: this.influencers.city,
      state: this.influencers.state,
      country: this.influencers.country,
  
      emailstatus: this.influencers.emailstatus,
      phonestatus: this.influencers.phonestatus,
      num:null,

      id: null,
      limitdate: "",
      value: null,
      // payopt: {},
      userintrests: this.influencers.intrest
        ? JSON.parse(this.influencers.intrest)
        : [],
            userlanguages: this.influencers.languages
        ? JSON.parse(this.influencers.languages)
        : [],
           audage:this.instagram.iaudienceage
       ? this.instagram.iaudienceage.split(",")
        : []
       ,
       audcity:this.instagram.iaudienceloc
       ? this.instagram.iaudienceloc.split(",")
        : []
       ,
         dcity:this.influencers.city
       ? this.influencers.city.split(",")
        : []
       ,
      today: 0,
      insta: this.instagram,
        aaoptions: [
         '0 - 18'  ,
        '19 - 24' ,
      '25 - 32' ,
         '33 - 40'  ,
          '40 +'
         ],
          ccoptions: [
         "Achalpur",
  "Achhnera",
  "Adalaj",
  "Adilabad",
  "Adityapur",
  "Adoni",
  "Adoor",
  "Adra",
  "Adyar",
  "Afzalpur",
  "Agartala",
  "Agra",
  "Ahmedabad",
  "Ahmednagar",
  "Aizawl",
  "Ajmer",
  "Akola",
  "Akot",
  "Alappuzha",
  "Aligarh",
  "AlipurdUrban Agglomerationr",
  "Alirajpur",
  "Allahabad",
  "Alwar",
  "Amalapuram",
  "Amalner",
  "Ambejogai",
  "Ambikapur",
  "Amravati",
  "Amreli",
  "Amritsar",
  "Amroha",
  "Anakapalle",
  "Anand",
  "Anantapur",
  "Anantnag",
  "Anjangaon",
  "Anjar",
  "Ankleshwar",
  "Arakkonam",
  "Arambagh",
  "Araria",
  "Arrah",
  "Arsikere",
  "Aruppukkottai",
  "Arvi",
  "Arwal",
  "Asansol",
  "Asarganj",
  "Ashok Nagar",
  "Athni",
  "Attingal",
  "Aurangabad",
  "Aurangabad",
  "Azamgarh",
  "Bagaha",
  "Bageshwar",
  "Bahadurgarh",
  "Baharampur",
  "Bahraich",
  "Balaghat",
  "Balangir",
  "Baleshwar Town",
  "Ballari",
  "Balurghat",
  "Bankura",
  "Bapatla",
  "Baramula",
  "Barbil",
  "Bargarh",
  "Barh",
  "Baripada Town",
  "Barmer",
  "Barnala",
  "Barpeta",
  "Batala",
  "Bathinda",
  "Begusarai",
  "Belagavi",
  "Bellampalle",
  "Belonia",
  "Bengaluru",
  "Bettiah",
  "BhabUrban Agglomeration",
  "Bhadrachalam",
  "Bhadrak",
  "Bhagalpur",
  "Bhainsa",
  "Bharatpur",
  "Bharuch",
  "Bhatapara",
  "Bhavnagar",
  "Bhawanipatna",
  "Bheemunipatnam",
  "Bhilai Nagar",
  "Bhilwara",
  "Bhimavaram",
  "Bhiwandi",
  "Bhiwani",
  "Bhongir",
  "Bhopal",
  "Bhubaneswar",
  "Bhuj",
  "Bikaner",
  "Bilaspur",
  "Bobbili",
  "Bodhan",
  "Bokaro Steel City",
  "Bongaigaon City",
  "Brahmapur",
  "Buxar",
  "Byasanagar",
  "Chaibasa",
  "Chalakudy",
  "Chandausi",
  "Chandigarh",
  "Changanassery",
  "Charkhi Dadri",
  "Chatra",
  "Chennai",
  "Cherthala",
  "Chhapra",
  "Chhapra",
  "Chikkamagaluru",
  "Chilakaluripet",
  "Chirala",
  "Chirkunda",
  "Chirmiri",
  "Chittoor",
  "Chittur-Thathamangalam",
  "Coimbatore",
  "Cuttack",
  "Dalli-Rajhara",
  "Darbhanga",
  "Darjiling",
  "Davanagere",
  "Deesa",
  "Dehradun",
  "Dehri-on-Sone",
  "Delhi",
  "Deoghar",
  "Dhamtari",
  "Dhanbad",
  "Dharmanagar",
  "Dharmavaram",
  "Dhenkanal",
  "Dhoraji",
  "Dhubri",
  "Dhule",
  "Dhuri",
  "Dibrugarh",
  "Dimapur",
  "Diphu",
  "Dumka",
  "Dumraon",
  "Durg",
  "Eluru",
  "English Bazar",
  "Erode",
  "Etawah",
  "Faridabad",
  "Faridkot",
  "Farooqnagar",
  "Fatehabad",
  "Fatehpur Sikri",
  "Fazilka",
  "Firozabad",
  "Firozpur Cantt.",
  "Firozpur",
  "Forbesganj",
  "Gadwal",
  "Gandhinagar",
  "Gangarampur",
  "Ganjbasoda",
  "Gaya",
  "Giridih",
  "Goalpara",
  "Gobichettipalayam",
  "Gobindgarh",
  "Godhra",
  "Gohana",
  "Gokak",
  "Gooty",
  "Gopalganj",
  "Gudivada",
  "Gudur",
  "Gumia",
  "Guntakal",
  "Guntur",
  "Gurdaspur",
  "Gurgaon",
  "Guruvayoor",
  "Guwahati",
  "Gwalior",
  "Habra",
  "Hajipur",
  "Haldwani-cum-Kathgodam",
  "Hansi",
  "Hapur",
  "Hardoi ",
  "Hardwar",
  "Hazaribag",
  "Hindupur",
  "Hisar",
  "Hoshiarpur",
  "Hubli-Dharwad",
  "Hugli-Chinsurah",
  "Hyderabad",
  "Ichalkaranji",
  "Imphal",
  "Indore",
  "Itarsi",
  "Jabalpur",
  "Jagdalpur",
  "Jaggaiahpet",
  "Jagraon",
  "Jagtial",
  "Jaipur",
  "Jalandhar Cantt.",
  "Jalandhar",
  "Jalpaiguri",
  "Jamalpur",
  "Jammalamadugu",
  "Jammu",
  "Jamnagar",
  "Jamshedpur",
  "Jamui",
  "Jangaon",
  "Jatani",
  "Jehanabad",
  "Jhansi",
  "Jhargram",
  "Jharsuguda",
  "Jhumri Tilaiya",
  "Jind",
  "Jodhpur",
  "Jorhat",
  "Kadapa",
  "Kadi",
  "Kadiri",
  "Kagaznagar",
  "Kailasahar",
  "Kaithal",
  "Kakinada",
  "Kalimpong",
  "Kalpi",
  "Kalyan-Dombivali",
  "Kamareddy",
  "Kancheepuram",
  "Kandukur",
  "Kanhangad",
  "Kannur",
  "Kanpur",
  "Kapadvanj",
  "Kapurthala",
  "Karaikal",
  "Karimganj",
  "Karimnagar",
  "Karjat",
  "Karnal",
  "Karur",
  "Karwar",
  "Kasaragod",
  "Kashipur",
  "KathUrban Agglomeration",
  "Katihar",
  "Kavali",
  "Kayamkulam",
  "Kendrapara",
  "Kendujhar",
  "Keshod",
  "Khair",
  "Khambhat",
  "Khammam",
  "Khanna",
  "Kharagpur",
  "Kharar",
  "Khowai",
  "Kishanganj",
  "Kochi",
  "Kodungallur",
  "Kohima",
  "Kolar",
  "Kolkata",
  "Kollam",
  "Koratla",
  "Korba",
  "Kot Kapura",
  "Kota",
  "Kothagudem",
  "Kottayam",
  "Kovvur",
  "Koyilandy",
  "Kozhikode",
  "Kunnamkulam",
  "Kurnool",
  "Kyathampalle",
  "Lachhmangarh",
  "Ladnu",
  "Ladwa",
  "Lahar",
  "Laharpur",
  "Lakheri",
  "Lakhimpur",
  "Lakhisarai",
  "Lakshmeshwar",
  "Lal Gopalganj Nindaura",
  "Lalganj",
  "Lalganj",
  "Lalgudi",
  "Lalitpur",
  "Lalsot",
  "Lanka",
  "Lar",
  "Lathi",
  "Latur",
  "Lilong",
  "Limbdi",
  "Lingsugur",
  "Loha",
  "Lohardaga",
  "Lonar",
  "Lonavla",
  "Longowal",
  "Loni",
  "Losal",
  "Lucknow",
  "Ludhiana",
  "Lumding",
  "Lunawada",
  "Lunglei",
  "Macherla",
  "Machilipatnam",
  "Madanapalle",
  "Maddur",
  "Madhepura",
  "Madhubani",
  "Madhugiri",
  "Madhupur",
  "Madikeri",
  "Madurai",
  "Magadi",
  "Mahad",
  "Mahalingapura",
  "Maharajganj",
  "Maharajpur",
  "Mahasamund",
  "Mahbubnagar",
  "Mahe",
  "Mahemdabad",
  "Mahendragarh",
  "Mahesana",
  "Mahidpur",
  "Mahnar Bazar",
  "Mahuva",
  "Maihar",
  "Mainaguri",
  "Makhdumpur",
  "Makrana",
  "Malaj Khand",
  "Malappuram",
  "Malavalli",
  "Malda",
  "Malegaon",
  "Malerkotla",
  "Malkangiri",
  "Malkapur",
  "Malout",
  "Malpura",
  "Malur",
  "Manachanallur",
  "Manasa",
  "Manavadar",
  "Manawar",
  "Mancherial",
  "Mandalgarh",
  "Mandamarri",
  "Mandapeta",
  "Mandawa",
  "Mandi Dabwali",
  "Mandi",
  "Mandideep",
  "Mandla",
  "Mandsaur",
  "Mandvi",
  "Mandya",
  "Manendragarh",
  "Maner",
  "Mangaldoi",
  "Mangaluru",
  "Mangalvedhe",
  "Manglaur",
  "Mangrol",
  "Mangrol",
  "Mangrulpir",
  "Manihari",
  "Manjlegaon",
  "Mankachar",
  "Manmad",
  "Mansa",
  "Mansa",
  "Manuguru",
  "Manvi",
  "Manwath",
  "Mapusa",
  "Margao",
  "Margherita",
  "Marhaura",
  "Mariani",
  "Marigaon",
  "Markapur",
  "Marmagao",
  "Masaurhi",
  "Mathabhanga",
  "Mathura",
  "Mattannur",
  "Mauganj",
  "Mavelikkara",
  "Mavoor",
  "Mayang Imphal",
  "Medak",
  "Medininagar (Daltonganj)",
  "Medinipur",
  "Meerut",
  "Mehkar",
  "Memari",
  "Merta City",
  "Mhaswad",
  "Mhow Cantonment",
  "Mhowgaon",
  "Mihijam",
  "Mira-Bhayandar",
  "Mirganj",
  "Miryalaguda",
  "Modasa",
  "Modinagar",
  "Moga",
  "Mohali",
  "Mokameh",
  "Mokokchung",
  "Monoharpur",
  "Moradabad",
  "Morena",
  "Morinda, India",
  "Morshi",
  "Morvi",
  "Motihari",
  "Motipur",
  "Mount Abu",
  "Mudabidri",
  "Mudalagi",
  "Muddebihal",
  "Mudhol",
  "Mukerian",
  "Mukhed",
  "Muktsar",
  "Mul",
  "Mulbagal",
  "Multai",
  "Mumbai",
  "Mundargi",
  "Mundi",
  "Mungeli",
  "Munger",
  "Murliganj",
  "Murshidabad",
  "Murtijapur",
  "Murwara (Katni)",
  "Musabani",
  "Mussoorie",
  "Muvattupuzha",
  "Muzaffarpur",
  "Mysore",
  "Nabadwip",
  "Nabarangapur",
  "Nabha",
  "Nadbai",
  "Nadiad",
  "Nagaon",
  "Nagapattinam",
  "Nagar",
  "Nagari",
  "Nagarkurnool",
  "Nagaur",
  "Nagda",
  "Nagercoil",
  "Nagina",
  "Nagla",
  "Nagpur",
  "Nahan",
  "Naharlagun",
  "Naidupet",
  "Naihati",
  "Naila Janjgir",
  "Nainital",
  "Nainpur",
  "Najibabad",
  "Nakodar",
  "Nakur",
  "Nalbari",
  "Namagiripettai",
  "Namakkal",
  "Nanded-Waghala",
  "Nandgaon",
  "Nandivaram-Guduvancheri",
  "Nandura",
  "Nandurbar",
  "Nandyal",
  "Nangal",
  "Nanjangud",
  "Nanjikottai",
  "Nanpara",
  "Narasapuram",
  "Narasaraopet",
  "Naraura",
  "Narayanpet",
  "Nargund",
  "Narkatiaganj",
  "Narkhed",
  "Narnaul",
  "Narsinghgarh",
  "Narsinghgarh",
  "Narsipatnam",
  "Narwana",
  "Nashik",
  "Nasirabad",
  "Natham",
  "Nathdwara",
  "Naugachhia",
  "Naugawan Sadat",
  "Nautanwa",
  "Navalgund",
  "Navsari",
  "Nawabganj",
  "Nawada",
  "Nawanshahr",
  "Nawapur",
  "Nedumangad",
  "Neem-Ka-Thana",
  "Neemuch",
  "Nehtaur",
  "Nelamangala",
  "Nellikuppam",
  "Nellore",
  "Nepanagar",
  "New Delhi",
  "Neyveli (TS)",
  "Neyyattinkara",
  "Nidadavole",
  "Nilambur",
  "Nilanga",
  "Nimbahera",
  "Nirmal",
  "Niwai",
  "Niwari",
  "Nizamabad",
  "Nohar",
  "Noida",
  "Nokha",
  "Nokha",
  "Nongstoin",
  "Noorpur",
  "North Lakhimpur",
  "Nowgong",
  "Nowrozabad (Khodargama)",
  "Nuzvid",
  "O' Valley",
  "Obra",
  "Oddanchatram",
  "Ongole",
  "Orai",
  "Osmanabad",
  "Ottappalam",
  "Ozar",
  "P.N.Patti",
  "Pachora",
  "Pachore",
  "Pacode",
  "Padmanabhapuram",
  "Padra",
  "Padrauna",
  "Paithan",
  "Pakaur",
  "Palacole",
  "Palai",
  "Palakkad",
  "Palampur",
  "Palani",
  "Palanpur",
  "Palasa Kasibugga",
  "Palghar",
  "Pali",
  "Pali",
  "Palia Kalan",
  "Palitana",
  "Palladam",
  "Pallapatti",
  "Pallikonda",
  "Palwal",
  "Palwancha",
  "Panagar",
  "Panagudi",
  "Panaji",
  "Panamattom",
  "Panchkula",
  "Panchla",
  "Pandharkaoda",
  "Pandharpur",
  "Pandhurna",
  "PandUrban Agglomeration",
  "Panipat",
  "Panna",
  "Panniyannur",
  "Panruti",
  "Panvel",
  "Pappinisseri",
  "Paradip",
  "Paramakudi",
  "Parangipettai",
  "Parasi",
  "Paravoor",
  "Parbhani",
  "Pardi",
  "Parlakhemundi",
  "Parli",
  "Partur",
  "Parvathipuram",
  "Pasan",
  "Paschim Punropara",
  "Pasighat",
  "Patan",
  "Pathanamthitta",
  "Pathankot",
  "Pathardi",
  "Pathri",
  "Patiala",
  "Patna",
  "Patratu",
  "Pattamundai",
  "Patti",
  "Pattran",
  "Pattukkottai",
  "Patur",
  "Pauni",
  "Pauri",
  "Pavagada",
  "Pedana",
  "Peddapuram",
  "Pehowa",
  "Pen",
  "Perambalur",
  "Peravurani",
  "Peringathur",
  "Perinthalmanna",
  "Periyakulam",
  "Periyasemur",
  "Pernampattu",
  "Perumbavoor",
  "Petlad",
  "Phagwara",
  "Phalodi",
  "Phaltan",
  "Phillaur",
  "Phulabani",
  "Phulera",
  "Phulpur",
  "Phusro",
  "Pihani",
  "Pilani",
  "Pilibanga",
  "Pilibhit",
  "Pilkhuwa",
  "Pindwara",
  "Pinjore",
  "Pipar City",
  "Pipariya",
  "Piriyapatna",
  "Piro",
  "Pithampur",
  "Pithapuram",
  "Pithoragarh",
  "Pollachi",
  "Polur",
  "Pondicherry",
  "Ponnani",
  "Ponneri",
  "Ponnur",
  "Porbandar",
  "Porsa",
  "Port Blair",
  "Powayan",
  "Prantij",
  "Pratapgarh",
  "Pratapgarh",
  "Prithvipur",
  "Proddatur",
  "Pudukkottai",
  "Pudupattinam",
  "Pukhrayan",
  "Pulgaon",
  "Puliyankudi",
  "Punalur",
  "Punch",
  "Pune",
  "Punganur",
  "Punjaipugalur",
  "Puranpur",
  "Puri",
  "Purna",
  "Purnia",
  "PurqUrban Agglomerationzi",
  "Purulia",
  "Purwa",
  "Pusad",
  "Puthuppally",
  "Puttur",
  "Puttur",
  "Qadian",
  "Raayachuru",
  "Rabkavi Banhatti",
  "Radhanpur",
  "Rae Bareli",
  "Rafiganj",
  "Raghogarh-Vijaypur",
  "Raghunathganj",
  "Raghunathpur",
  "Rahatgarh",
  "Rahuri",
  "Raiganj",
  "Raigarh",
  "Raikot",
  "Raipur",
  "Rairangpur",
  "Raisen",
  "Raisinghnagar",
  "Rajagangapur",
  "Rajahmundry",
  "Rajakhera",
  "Rajaldesar",
  "Rajam",
  "Rajampet",
  "Rajapalayam",
  "Rajauri",
  "Rajgarh (Alwar)",
  "Rajgarh (Churu)",
  "Rajgarh",
  "Rajgir",
  "Rajkot",
  "Rajnandgaon",
  "Rajpipla",
  "Rajpura",
  "Rajsamand",
  "Rajula",
  "Rajura",
  "Ramachandrapuram",
  "Ramagundam",
  "Ramanagaram",
  "Ramanathapuram",
  "Ramdurg",
  "Rameshwaram",
  "Ramganj Mandi",
  "Ramgarh",
  "Ramnagar",
  "Ramnagar",
  "Ramngarh",
  "Rampur Maniharan",
  "Rampur",
  "Rampura Phul",
  "Rampurhat",
  "Ramtek",
  "Ranaghat",
  "Ranavav",
  "Ranchi",
  "Ranebennuru",
  "Rangia",
  "Rania",
  "Ranibennur",
  "Ranipet",
  "Rapar",
  "Rasipuram",
  "Rasra",
  "Ratangarh",
  "Rath",
  "Ratia",
  "Ratlam",
  "Ratnagiri",
  "Rau",
  "Raurkela",
  "Raver",
  "Rawatbhata",
  "Rawatsar",
  "Raxaul Bazar",
  "Rayachoti",
  "Rayadurg",
  "Rayagada",
  "Reengus",
  "Rehli",
  "Renigunta",
  "Renukoot",
  "Reoti",
  "Repalle",
  "Revelganj",
  "Rewa",
  "Rewari",
  "Rishikesh",
  "Risod",
  "Robertsganj",
  "Robertson Pet",
  "Rohtak",
  "Ron",
  "Roorkee",
  "Rosera",
  "Rudauli",
  "Rudrapur",
  "Rudrapur",
  "Rupnagar",
  "Sabalgarh",
  "Sadabad",
  "Sadalagi",
  "Sadasivpet",
  "Sadri",
  "Sadulpur",
  "Sadulshahar",
  "Safidon",
  "Safipur",
  "Sagar",
  "Sagara",
  "Sagwara",
  "Saharanpur",
  "Saharsa",
  "Sahaspur",
  "Sahaswan",
  "Sahawar",
  "Sahibganj",
  "Sahjanwa",
  "Saidpur",
  "Saiha",
  "Sailu",
  "Sainthia",
  "Sakaleshapura",
  "Sakti",
  "Salaya",
  "Salem",
  "Salur",
  "Samalkha",
  "Samalkot",
  "Samana",
  "Samastipur",
  "Sambalpur",
  "Sambhal",
  "Sambhar",
  "Samdhan",
  "Samthar",
  "Sanand",
  "Sanawad",
  "Sanchore",
  "Sandi",
  "Sandila",
  "Sanduru",
  "Sangamner",
  "Sangareddy",
  "Sangaria",
  "Sangli",
  "Sangole",
  "Sangrur",
  "Sankarankovil",
  "Sankari",
  "Sankeshwara",
  "Santipur",
  "Sarangpur",
  "Sardarshahar",
  "Sardhana",
  "Sarni",
  "Sarsod",
  "Sasaram",
  "Sasvad",
  "Satana",
  "Satara",
  "Sathyamangalam",
  "Satna",
  "Sattenapalle",
  "Sattur",
  "Saunda",
  "Saundatti-Yellamma",
  "Sausar",
  "Savanur",
  "Savarkundla",
  "Savner",
  "Sawai Madhopur",
  "Sawantwadi",
  "Sedam",
  "Sehore",
  "Sendhwa",
  "Seohara",
  "Seoni",
  "Seoni-Malwa",
  "Shahabad",
  "Shahabad, Hardoi",
  "Shahabad, Rampur",
  "Shahade",
  "Shahbad",
  "Shahdol",
  "Shahganj",
  "Shahjahanpur",
  "Shahpur",
  "Shahpura",
  "Shahpura",
  "Shajapur",
  "Shamgarh",
  "Shamli",
  "Shamsabad, Agra",
  "Shamsabad, Farrukhabad",
  "Shegaon",
  "Sheikhpura",
  "Shendurjana",
  "Shenkottai",
  "Sheoganj",
  "Sheohar",
  "Sheopur",
  "Sherghati",
  "Sherkot",
  "Shiggaon",
  "Shikaripur",
  "Shikarpur, Bulandshahr",
  "Shikohabad",
  "Shillong",
  "Shimla",
  "Shirdi",
  "Shirpur-Warwade",
  "Shirur",
  "Shishgarh",
  "Shivamogga",
  "Shivpuri",
  "Sholavandan",
  "Sholingur",
  "Shoranur",
  "Shrigonda",
  "Shrirampur",
  "Shrirangapattana",
  "Shujalpur",
  "Siana",
  "Sibsagar",
  "Siddipet",
  "Sidhi",
  "Sidhpur",
  "Sidlaghatta",
  "Sihor",
  "Sihora",
  "Sikanderpur",
  "Sikandra Rao",
  "Sikandrabad",
  "Sikar",
  "Silao",
  "Silapathar",
  "Silchar",
  "Siliguri",
  "Sillod",
  "Silvassa",
  "Simdega",
  "Sindagi",
  "Sindhagi",
  "Sindhnur",
  "Singrauli",
  "Sinnar",
  "Sira",
  "Sircilla",
  "Sirhind Fatehgarh Sahib",
  "Sirkali",
  "Sirohi",
  "Sironj",
  "Sirsa",
  "Sirsaganj",
  "Sirsi",
  "Sirsi",
  "Siruguppa",
  "Sitamarhi",
  "Sitapur",
  "Sitarganj",
  "Sivaganga",
  "Sivagiri",
  "Sivakasi",
  "Siwan",
  "Sohagpur",
  "Sohna",
  "Sojat",
  "Solan",
  "Solapur",
  "Sonamukhi",
  "Sonepur",
  "Songadh",
  "Sonipat",
  "Sopore",
  "Soro",
  "Soron",
  "Soyagaon",
  "Sri Madhopur",
  "Srikakulam",
  "Srikalahasti",
  "Srinagar",
  "Srinagar",
  "Srinivaspur",
  "Srirampore",
  "Srisailam Project (Right Flank Colony) Township",
  "Srivilliputhur",
  "Sugauli",
  "Sujangarh",
  "Sujanpur",
  "Sullurpeta",
  "Sultanganj",
  "Sultanpur",
  "Sumerpur",
  "Sumerpur",
  "Sunabeda",
  "Sunam",
  "Sundargarh",
  "Sundarnagar",
  "Supaul",
  "Surandai",
  "Surapura",
  "Surat",
  "Suratgarh",
  "SUrban Agglomerationr",
  "Suri",
  "Suriyampalayam",
  "Suryapet",
  "Tadepalligudem",
  "Tadpatri",
  "Takhatgarh",
  "Taki",
  "Talaja",
  "Talcher",
  "Talegaon Dabhade",
  "Talikota",
  "Taliparamba",
  "Talode",
  "Talwara",
  "Tamluk",
  "Tanda",
  "Tandur",
  "Tanuku",
  "Tarakeswar",
  "Tarana",
  "Taranagar",
  "Taraori",
  "Tarbha",
  "Tarikere",
  "Tarn Taran",
  "Tasgaon",
  "Tehri",
  "Tekkalakote",
  "Tenali",
  "Tenkasi",
  "Tenu dam-cum-Kathhara",
  "Terdal",
  "Tezpur",
  "Thakurdwara",
  "Thammampatti",
  "Thana Bhawan",
  "Thane",
  "Thanesar",
  "Thangadh",
  "Thanjavur",
  "Tharad",
  "Tharamangalam",
  "Tharangambadi",
  "Theni Allinagaram",
  "Thirumangalam",
  "Thirupuvanam",
  "Thiruthuraipoondi",
  "Thiruvalla",
  "Thiruvallur",
  "Thiruvananthapuram",
  "Thiruvarur",
  "Thodupuzha",
  "Thoubal",
  "Thrissur",
  "Thuraiyur",
  "Tikamgarh",
  "Tilda Newra",
  "Tilhar",
  "Tindivanam",
  "Tinsukia",
  "Tiptur",
  "Tirora",
  "Tiruchendur",
  "Tiruchengode",
  "Tiruchirappalli",
  "Tirukalukundram",
  "Tirukkoyilur",
  "Tirunelveli",
  "Tirupathur",
  "Tirupathur",
  "Tirupati",
  "Tiruppur",
  "Tirur",
  "Tiruttani",
  "Tiruvannamalai",
  "Tiruvethipuram",
  "Tiruvuru",
  "Tirwaganj",
  "Titlagarh",
  "Tittakudi",
  "Todabhim",
  "Todaraisingh",
  "Tohana",
  "Tonk",
  "Tuensang",
  "Tuljapur",
  "Tulsipur",
  "Tumkur",
  "Tumsar",
  "Tundla",
  "Tuni",
  "Tura",
  "Uchgaon",
  "Udaipur",
  "Udaipur",
  "Udaipurwati",
  "Udgir",
  "Udhagamandalam",
  "Udhampur",
  "Udumalaipettai",
  "Udupi",
  "Ujhani",
  "Ujjain",
  "Umarga",
  "Umaria",
  "Umarkhed",
  "Umbergaon",
  "Umred",
  "Umreth",
  "Una",
  "Unjha",
  "Unnamalaikadai",
  "Unnao",
  "Upleta",
  "Uran Islampur",
  "Uran",
  "Uravakonda",
  "Urmar Tanda",
  "Usilampatti",
  "Uthamapalayam",
  "Uthiramerur",
  "Utraula",
  "Vadakkuvalliyur",
  "Vadalur",
  "Vadgaon Kasba",
  "Vadipatti",
  "Vadnagar",
  "Vadodara",
  "Vaijapur",
  "Vaikom",
  "Valparai",
  "Valsad",
  "Vandavasi",
  "Vaniyambadi",
  "Vapi",
  "Vapi",
  "Varanasi",
  "Varkala",
  "Vasai-Virar",
  "Vatakara",
  "Vedaranyam",
  "Vellakoil",
  "Vellore",
  "Venkatagiri",
  "Veraval",
  "Vidisha",
  "Vijainagar, Ajmer",
  "Vijapur",
  "Vijayapura",
  "Vijayawada",
  "Vijaypur",
  "Vikarabad",
  "Vikramasingapuram",
  "Viluppuram",
  "Vinukonda",
  "Viramgam",
  "Virudhachalam",
  "Virudhunagar",
  "Visakhapatnam",
  "Visnagar",
  "Viswanatham",
  "Vita",
  "Vizianagaram",
  "Vrindavan",
  "Vyara",
  "Wadgaon Road",
  "Wadhwan",
  "Wadi",
  "Wai",
  "Wanaparthy",
  "Wani",
  "Wankaner",
  "Wara Seoni",
  "Warangal",
  "Wardha",
  "Warhapur",
  "Warisaliganj",
  "Warora",
  "Warud",
  "Washim",
  "Wokha",
  "Yadgir",
  "Yamunanagar",
  "Yanam",
  "Yavatmal",
  "Yawal",
  "Yellandu",
  "Yemmiganur",
  "Yerraguntla",
  "Yevla",
  "Zaidpur",
  "Zamania",
  "Zira",
  "Zirakpur",
  "Zunheboto",
      ],   
         
     
     
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

    var d = new Date(1920, 1, 1);
    var dd = d.getDate();
    var mm = d.getMonth() + 1; //January is 0!
    var yyyy = d.getFullYear();
    if (dd < 10) {
      dd = "0" + dd;
    }
    if (mm < 10) {
      mm = "0" + mm;
    }

    this.limitdate = yyyy + "-" + mm + "-" + dd;
    if (this.userlanguages != null && this.userlanguages.length > 0) {
      this.userlanguages = this.userlanguages.split(",");
    } else {
      this.userlanguages = [];
    }

    if (this.userintrests != null && this.userintrests.length > 0) {
      this.userintrests = this.userintrests.split(",");
    } else {
      this.userintrests = [];
    }

    document.getElementById("dob").setAttribute("max", this.today);


    // var ff = this.instagram.ifollowers;
    // var pp = this.instagram.iposts;

    //  for(num=ff; num>1; num--) {
    //     if((pp % num) == 0 && (ff % num) == 0) {
    //         pp=pp/num;
    //         ff=ff/num;
    //     }
        
    // }
    // this.instagram.ipfr = this.ff + ":" + this.pp;

    // this.payoption = this.paytx.type;
    // this.paytype = this.paytx.type;
    // this.payval = JSON.parse(this.paytx.value);
    // this.paymentform = this.paytx.value;
  

  },
  methods: {
    saveChanges() {
      axios
        .post("admin/influencer/update/" + this.id, {
          value: this.value,
        })
        .then((response) => {
          if (response.data) {
            if (response) {
              this.phone = response.data.phone;
              this.dob = response.data.dob;
              this.email = response.data.email;
              this.gender = response.data.gender;
               this.pincode = response.data.pincode;
              this.dcity = response.data.cdity;
              this.state = response.data.state;
              this.country = response.data.country;
              this.emailstatus = response.data.emailstatus;
              this.phonestatus = response.data.phonestatus;
                this.verified = response.data.verified;
              
            } else {
              this.phone = null;
              this.dob = null;
               this.pincode = null;
              this.email = null;
              this.gender = null;
              this.dcity = null;
              this.state = null;
              this.country = null;
              this.emailstatus = null;
              this.phonestatus = null;
               this.verified = null;
           
            }
          }
        });
    },
    calcage() {
      if (this.today >= this.dob && this.dob >= this.limitdate) {
        var dob = new Date(this.dob);
        var month_diff = Date.now() - dob.getTime();
        var age_dt = new Date(month_diff);
        var year = age_dt.getUTCFullYear();
        var age = Math.abs(year - 1970);
        this.age = age;
      } else {
        this.$swal({
          title: "Error!",
          text: "Please Check the DOB!",
          icon: "error",
        });
      }
    },
    changePage(val) {
      this.page = val;
    },

   languagecheck(val){
            if(this.userlanguages.includes(val)){
                this.userlanguages.splice(this.userlanguages.indexOf(val),1)
            }
            else{
              
                    this.userlanguages.push(val)
                
            }
        },
    intrestcheck(val) {
      if (this.userintrests.includes(val)) {
        this.userintrests.splice(this.userintrests.indexOf(val), 1);
      } else {
        if (this.userintrests.length >= 3) {
          this.$swal({
            title: "Error!",
            text: "Only 3 Intrest are allowed!",
            icon: "error",
          });
        } else {
          this.userintrests.push(val);
        }
      }
    },
    // changepayopt(e) {
    //   if (this.payoption == this.paytx.type) {
    //     this.paytype = this.payoption;
    //     this.payval = JSON.parse(this.paytx.value);
    //     this.paymentform = this.paytx.value;
    //   } else {
    //     if (this.payoption == "Net Banking") {
    //       var x = {
    //         accname: "",
    //         accno: "",
    //         ifsc: "",
    //         status: 0,
    //       };
    //       this.paytype = this.payoption;
    //       this.payval = x;
    //     } else if (this.payoption == "Google Pay") {
    //       var x = {
    //         fullname: "",
    //         gpaynumber: "",
    //         status: 0,
    //       };
    //       this.paytype = this.payoption;
    //       this.payval = x;
    //     } else if (this.payoption == "UPI") {
    //       var x = {
    //         fullname: "",
    //         upiid: "",
    //         status: 0,
    //       };
    //       this.paytype = this.payoption;
    //       this.payval = x;
    //     } else {
    //       var x = {
    //         fullname: "",
    //         paytmnumber: "",
    //         status: 0,
    //       };
    //       this.paytype = this.payoption;
    //       this.payval = x;
    //     }
    //   }
    // },
       changeaccstatus(profile)
            {
              axios.post('/admin/influencer/accountstatus/'+profile.id,{
                accountstatus:this.profile.accountstatus
              })
              .then(res => {
            
                console.log(res);
                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
             
            },
              changeprofstatus(profile)
            {
              axios.post('/admin/influencer/pendinglist/'+profile.id,{
                profilestatus:this.profile.profilestatus
              })
              .then(res => {
            
                console.log(res);
                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
             
            },
    savebutton(event) {
      event.preventDefault();
      if (this.today >= this.dob) {
        // this.paymentform = JSON.stringify(this.payval);
        // document.getElementById("payval").value = this.paymentform;
        document.getElementById("myform").submit();
        return true;
      } else {
        this.$swal({
          title: "Error!",
          text: "Please Check the DOB!",
          icon: "error",
        });
        return false;
      }
    },
   
            //      verifyemailstatus(influencers){
            //     var self=this
            //     self.emailstatus = 2;
            //     if(influencers.emailstatus==0){
            //         axios.post('/admin/influencer/emailstatus/'+influencers.id,{     
            //             emailstatus:this.emailstatus
            //         })
            //         .then(response => {
            //             if(response.data==1){
            //                 self.name=self.emailstatus;
            //                 self.emailstatus=''
            //             }
            //             else{
            //              console.log("Error");
            //             }
            //         });
            //     }
            // },
            //   rejectemailstatus(influencers){
            //     var self=this
            //     self.emailstatus = 1;
            //     if(influencers.emailstatus==0){
            //         axios.post('/admin/influencer/emailstatus/'+influencers.id,{     
            //             emailstatus:this.emailstatus
            //         })
            //         .then(response => {
            //             if(response.data==1){
            //                 self.name=self.emailstatus;
            //                 self.emailstatus=''
            //             }
            //             else{
            //              console.log("Error");
            //             }
            //         });
            //     }
            // },
            //    verifyphonestatus(influencers){
            //     var self=this
            //     self.phonestatus = 2;
            //     if(influencers.phonestatus==0){
            //         axios.post('/admin/influencer/phonestatus/'+influencers.id,{     
            //             phonestatus:this.phonestatus
            //         })
            //         .then(response => {
            //             if(response.data==1){
            //                 self.name=self.phonestatus;
            //                 self.phonestatus=''
            //             }
            //             else{
            //              console.log("Error");
            //             }
            //         });
            //     }
            // },
            //   rejectphonestatus(influencers){
            //     var self=this
            //     self.phonestatus = 1;
            //     if(influencers.phonestatus==0){
            //         axios.post('/admin/influencer/phonestatus/'+influencers.id,{     
            //             phonestatus:this.phonestatus
            //         })
            //         .then(response => {
            //             if(response.data==1){
            //                 self.name=self.phonestatus;
            //                 self.phonestatus=''
            //             }
            //             else{
            //              console.log("Error");
            //             }
            //         });
            //     }
            // },
                
             verifycatstatus(influencers){
                var self=this
                self.categorystatus = 1;
                if(influencers.categorystatus==0){
                    axios.post('/admin/influencer/categorystatus/'+influencers.iid,{     
                        categorystatus:this.categorystatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.categorystatus;
                            self.categorystatus='';
                             
                        }
                        else{
                         console.log("Error");
                        }
                    });
                 
                }
            },
              rejectcatstatus(influencers){
                var self=this
                self.categorystatus = 1;
                if(influencers.categorystatus==0){
                    axios.post('/admin/influencer/categorystatus/'+influencers.iid,{     
                        categorystatus:this.categorystatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.categorystatus;
                            self.categorystatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
             verifyiuserstatus(instagram){
                var self=this
                self.iusernamesstatus = 2;
                if(instagram.iusernamesstatus==0){
                    axios.post('/admin/influencer/iusernamesstatus/'+instagram.iid,{     
                        iusernamesstatus:this.iusernamesstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.iusernamesstatus;
                            self.iusernamesstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
              rejectiuserstatus(instagram){
                var self=this
                self.iusernamesstatus = 1;
                if(instagram.iusernamesstatus==0){
                    axios.post('/admin/influencer/iusernamesstatus/'+instagram.iid,{     
                        iusernamesstatus:this.iusernamesstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.iusernamesstatus;
                            self.iusernamesstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
             verifyifolstatus(instagram){
                var self=this
                self.ifollowersstatus = 2;
                if(instagram.ifollowersstatus==0){
                    axios.post('/admin/influencer/ifollowersstatus/'+instagram.iid,{     
                        ifollowersstatus:this.ifollowersstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.ifollowersstatus;
                            self.ifollowersstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            
            },
              rejectifolstatus(instagram){
                var self=this
                self.ifollowersstatus = 1;
                if(instagram.ifollowersstatus==0){
                    axios.post('/admin/influencer/ifollowersstatus/'+instagram.iid,{     
                        ifollowersstatus:this.ifollowersstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.ifollowersstatus;
                            self.ifollowersstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
               verifyipoststatus(instagram){
                var self=this
                self.ipostsstatus = 2;
                if(instagram.ipostsstatus==0){
                    axios.post('/admin/influencer/ipostsstatus/'+instagram.iid,{     
                        ipostsstatus:this.ipostsstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.ipostsstatus;
                            self.ipostsstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
              rejectipoststatus(instagram){
                var self=this
                self.ipostsstatus = 1;
                if(instagram.ipostsstatus==0){
                    axios.post('/admin/influencer/ipostsstatus/'+instagram.iid,{     
                        ipostsstatus:this.ipostsstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.ipostsstatus;
                            self.ipostsstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
                   verifyilikestatus(instagram){
                var self=this
                self.iavglikestatus = 2;
                if(instagram.iavglikestatus==0){
                    axios.post('/admin/influencer/iavglikestatus/'+instagram.iid,{     
                        iavglikestatus:this.iavglikestatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.iavglikestatus;
                            self.iavglikestatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
              rejectilikestatus(instagram){
                var self=this
                self.iavglikestatus = 1;
                if(instagram.iusernamesstatus==0){
                    axios.post('/admin/influencer/iavglikestatus/'+instagram.iid,{     
                        iavglikestatus:this.iavglikestatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.iavglikestatus;
                            self.iavglikestatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
                   verifyicmtstatus(instagram){
                var self=this
                self.iavgcmtstatus = 2;
                if(instagram.iavgcmtstatus==0){
                    axios.post('/admin/influencer/iavgcmtstatus/'+instagram.iid,{     
                        iavgcmtstatus:this.iavgcmtstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.iavgcmtstatus;
                            self.iavgcmtstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
              rejecticmtstatus(instagram){
                var self=this
                self.iavgcmtstatus = 1;
                if(instagram.iavgcmtstatus==0){
                    axios.post('/admin/influencer/iavgcmtstatus/'+instagram.iid,{     
                        iavgcmtstatus:this.iavgcmtstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.iavgcmtstatus;
                            self.iavgcmtstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
                 verifyiagestatus(instagram){
                var self=this
                self.iaudagestatus = 2;
                if(instagram.iaudagestatus==0){
                    axios.post('/admin/influencer/iaudagestatus/'+instagram.iid,{     
                        iaudagestatus:this.iaudagestatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.iaudagestatus;
                            self.iaudagestatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
              rejectiagestatus(instagram){
                var self=this
                self.iaudagestatus = 1;
                if(instagram.iaudagestatus==0){
                    axios.post('/admin/influencer/iaudagestatus/'+instagram.iid,{     
                        iaudagestatus:this.iaudagestatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.iaudagestatus;
                            self.iaudagestatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
              verifyilocstatus(instagram){
                var self=this
                self.iaudlocstatus = 2;
                if(instagram.iaudlocstatus==0){
                    axios.post('/admin/influencer/iaudlocstatus/'+instagram.iid,{     
                        iaudlocstatus:this.iaudlocstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.iaudlocstatus;
                            self.iaudlocstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
              rejectilocstatus(instagram){
                var self=this
                self.iaudlocstatus = 1;
                if(instagram.iaudlocstatus==0){
                    axios.post('/admin/influencer/iaudlocstatus/'+instagram.iid,{     
                        iaudlocstatus:this.iaudlocstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.iaudlocstatus;
                            self.iaudlocstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
            verifyigenstatus(instagram){
                var self=this
                self.iaudgenestatus = 2;
                if(instagram.iaudgenestatus==0){
                    axios.post('/admin/influencer/iaudgenestatus/'+instagram.iid,{     
                        iaudgenestatus:this.iaudgenestatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.iaudgenestatus;
                            self.iaudgenestatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
              rejectigenstatus(instagram){
                var self=this
                self.iaudgenestatus = 1;
                if(instagram.iaudgenestatus==0){
                    axios.post('/admin/influencer/iaudgenestatus/'+instagram.iid,{     
                        iaudgenestatus:this.iaudgenestatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.iaudgenestatus;
                            self.iaudgenestatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
            vyurl(yftsocial){
                var self=this
                self.yurlstatus = 2;
                if(yftsocial.yurlstatus == 0){
                    axios.post('/admin/influencer/yurlstatus/'+yftsocial.iid,{     
                        yurlstatus:this.yurlstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.yurlstatus;
                            self.yurlstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
             ryurl(yftsocial){
                var self=this
                self.yurlstatus = 1;
                if(yftsocial.yurlstatus == 0){
                    axios.post('/admin/influencer/yurlstatus/'+yftsocial.iid,{     
                        yurlstatus:this.yurlstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.yurlstatus;
                            self.yurlstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
             vfurl(yftsocial){
                var self=this
                self.furlstatus = 2;
                if(yftsocial.furlstatus==0){
                    axios.post('/admin/influencer/furlstatus/'+yftsocial.iid,{     
                        furlstatus:this.furlstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.furlstatus;
                            self.furlstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
             rfurl(yftsocial){
                var self=this
                self.furlstatus = 1;
                if(yftsocial.furlstatus==0){
                    axios.post('/admin/influencer/furlstatus/'+yftsocial.iid,{     
                        furlstatus:this.furlstatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.furlstatus;
                            self.furlstatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
            vtuser(yftsocial){
                var self=this
                self.tusernamestatus = 2;
                if(yftsocial.tusernamestatus==0){
                    axios.post('/admin/influencer/tusernamestatus/'+yftsocial.iid,{     
                        tusernamestatus:this.tusernamestatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.tusernamestatus;
                            self.tusernamestatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
             rtuser(yftsocial){
                var self=this
                self.tusernamestatus = 1;
                if(yftsocial.tusernamestatus==0){
                    axios.post('/admin/influencer/tusernamestatus/'+yftsocial.iid,{     
                        tusernamestatus:this.tusernamestatus
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.tusernamestatus;
                            self.tusernamestatus=''
                        }
                        else{
                         console.log("Error");
                        }
                    });
                }
            },
          
          


  },
};
</script>
