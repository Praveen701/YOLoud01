<template>
    <div class="card bg-white text-right p-2 mt-4">
        <div class="card-body">
            <form action="/admin/influencer/add" method="post" id="myform">
                <input type="hidden" name="_token" :value="csrf" />
                <input type="hidden" name="intrest" v-model="userintrests">
                <input type="hidden" name="paytype" v-model="paytype">
                <input type="hidden" name="payval" id="payval"  v-model="paymentform">
                  <input type="hidden" name="occtype" v-model="occtype" />
         <input type="hidden" name="occval" id="occval" v-model="occupationform" />

                <input type="hidden" name="name"    v-model="name"/>
                <input type="hidden" name="email"    v-model="email"/>
                <input type="hidden" name="password" value="YOLOUD001" v-model="password"/>
                <input type="hidden" name="phone" v-model="phone"/>
                <input type="hidden" name="gender" v-model="gender"/>
                 <input type="hidden" name="pincode" v-model="pincode"/>
                <input type="hidden" name="city" v-model="city"/>
                <input type="hidden" name="state" v-model="state"/>
                <input type="hidden" name="dob" v-model="dob"/>
                <input type="hidden" name="languages" v-model="userlanguages">
                <input type="hidden" name="country" v-model="country"/>
             
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
    <input type="hidden" name="iposts" v-model="instagram.iposts" id="" />
         <input type="hidden" name="istatus" v-model="instagram.istatus" id="" />

          <input type="hidden" name="iavglike" v-model="instagram.iavglike" id="" />
           <input type="hidden" name="iavgcmt" v-model="instagram.iavgcmt" id="" />
      
      
              <input type="hidden" name="iusernamesstatus" v-model="instagram.iusernamesstatus" id="" />
         <input type="hidden" name="ifollowersstatus" v-model="instagram.ifollowersstatus" id="" />
          <input type="hidden" name="ipostsstatus" v-model="instagram.ipostsstatus" id="" />
           <input type="hidden" name="iavglikestatus" v-model="instagram.iavglikestatus" id="" />
                   <input type="hidden" name="iaudagestatus" v-model="instagram.iaudagestatus" id="" />
         <input type="hidden" name="iaudlocstatus" v-model="instagram.iaudlocstatus" id="" />
          <input type="hidden" name="iaudgenestatus" v-model="instagram.iaudgenestatus" id="" />
        <input type="hidden" name="iavgcmtstatus" v-model="instagram.iavgcmtstatus" id="" />
          <input type="hidden" name="ipfrstatus" v-model="instagram.ipfrstatus" id="" />     
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




                <div class="float-right">
                        <a href="/admin/influencer" class="btn btn-primary"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
                    </div>
       

                <h3 class="mt-2 mb-3 text-left">New Influencer</h3>
                <div class="text-right">
                    <ul class="nav text-left">
                        <li class="nav-item">
                            <a
                                class="nav-link btn"
                                v-on:click="changePage(0)"
                                v-bind:style="
                                    page == 0 ? 'color:#DDA05D;' : 'color:#01AFBA;'
                                "
                            >
                                <h4>General Profile</h4></a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link btn"
                                v-on:click="changePage(1)"
                                v-bind:style="
                                    page == 1 ? 'color:#DDA05D;' : 'color:#01AFBA;'
                                "
                            >
                                <h4>Social Profile</h4></a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link btn"
                                v-on:click="changePage(2)"
                                v-bind:style="
                                    page == 2 ? 'color:#DDA05D;' : 'color:#01AFBA;'
                                "
                            >
                                <h4>Interest</h4></a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link btn"
                                v-on:click="changePage(3)"
                                v-bind:style="
                                    page == 3 ? 'color:#DDA05D;' : 'color:#01AFBA;'
                                "
                            >
                                <h4>Payments</h4></a
                            >
                        </li>
                     
                    </ul>
                    <div class="container-fluid text-left">
                        <span v-if="page == 0" class="row">
                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span> </label>
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
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label
                                    ><br />
                                    <input
                                        type="email"
                                        class="form-control"
                                        value=""
                                        required
                                        v-model="email"
                                        id="email"
                                        placeholder="Enter Email"
                                    />
                                </div>
                            </div>
                      
                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label"
                                        >Phone Number</label
                                    >
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
                                    <label for="gender" class="form-label"
                                        >Gender</label
                                    >
                                    <select
                                        id="gender"
                                        v-model="gender"
                                        class="form-control"
                                    >
                                        <option value="Male" selected>Male</option>
                                        <option value="Female">Female</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="dob" class="form-label"
                                        >Date of Birth <span style="color:red">*</span></label
                                    >
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
                             
                          <multiselect  v-model="city"  :options="ccoptions"  :multiple="false" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select City" :preselect-first="false">
                          
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
                                    <label for="country" class="form-label"
                                        >Country</label
                                    >
                                    <select
                                        v-model="country"
                                        id="country"
                                        class="form-control"
                                    >
                                        <option value="Afganistan">Afghanistan</option>
                                        <option selected>India</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Saudi Arabia"
                                            >Saudi Arabia</option
                                        >
                                        <option value="Singapore">Singapore</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="United Kingdom"
                                            >United Kingdom</option
                                        >
                                        <option value="United Arab Erimates">
                                            United Arab Emirates
                                        </option>
                                        <option value="United States of America">
                                            United States of America
                                        </option>
                                    </select>
                                </div>
                            </div>
                        

                            <div class="col-sm-12 mt-2 col-md-6">
                <div class="form-group">
                  <label for="country" class="form-label">Occupation</label>
                <select
                        @change="changeoccopt($event)"
                        v-model="occoption"
                        class="form-control"
                      >
                        <option v-for="occupation in occupations">
                          {{ occupation }}
                        </option>
                      </select>
                </div>
              </div>

              
              <div class="col-sm-12 mt-2 col-md-6" v-if="occoption == 'Working Professional'">
                <div class="form-group">
                  <label for="phone" class="form-label">Company Name</label>
                  <input
                    type="text"
                    class="form-control"                 
                    v-model="occval.compname"
                     :disabled="occval.status == 1"
                    id="phone"
                    placeholder="Enter Company Name"
                  />
                      
                </div>
              </div>

                <div class="col-sm-12 mt-2 col-md-6" v-if="occoption == 'Working Professional'">
                <div class="form-group">
                  <label for="phone" class="form-label">Designation</label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="occval.designation"
                      :disabled="occval.status == 1"
                    id="phone"
                    placeholder="Enter Designation"
                  />
                      
                </div>
              </div>


              
               <div class="col-sm-12 mt-2 col-md-6" v-if="occoption == 'Student'">
               
                <div class="form-group row mt-3">
                  <label for="agender" class="form-label mt-2 col-6">
                      Do you want to be a part of our campus ambassador program ?
                 <a  data-toggle="tooltip" data-placement="bottom" title="Creators studying in college can represent their college by become a campus ambassador of their college">
                      <i class="fa fa-info-circle"></i>
                    </a>
                                   
                       </label>
                 
                  <div class="mt-2 col-6">
                   <div class="form-check form-check-inline mt-2">
                          <input class="form-check-input" type="radio" name="campuspro"  v-model="occval.campuspro" value="1">
                          <label class="form-check-label" for="alocation">Yes</label>
                        </div>
                     <div class="form-check form-check-inline mt-2">
                          <input class="form-check-input" type="radio" name="campuspro" v-model="occval.campuspro" value="0">
                          <label class="form-check-label" for="agender">No</label>
                     </div>
                  </div>  
                </div>
              </div>


              <div class="col-sm-12 mt-2 col-md-6" v-if="occoption == 'Student' && occval.campuspro == 1">
                <div class="form-group">
                  <label for="phone" class="form-label">College Name</label>
                  <input
                  required
                    type="text"
                    class="form-control"
                    v-model="occval.colgname"
                        :disabled="occval.status == 1"
                    id="designation"
                    placeholder="Enter College Name"
                  />
                      
                </div>
              </div>

              
               <div class="col-sm-12 mt-2 col-md-6" v-if="occoption == 'Student' && occval.campuspro == 1">
                <div class="form-group">
                  <label for="phone" class="form-label">Course Name</label>
                  <input
                  required
                    type="text"
                    class="form-control"
                    v-model="occval.coursename"
                        :disabled="occval.status == 1"
                    id="phone"
                    placeholder="Enter Course Name"
                  />
                      
                </div>
              </div>
               <div class="col-sm-12 mt-2 col-md-6" v-if="occoption == 'Student' && occval.campuspro == 1">
                <div class="form-group">
                  <label for="phone" class="form-label">Year of Joining</label>
                  <input
                    type="date"
                    class="form-control"
                    v-model="occval.yrofjoin"
                        :disabled="occval.status == 1"
                    id="phone"
                    placeholder="Enter Year of Joining"
                  />
                      
                </div>
              </div>
      

                        </span>
                         <span v-else-if="page == 1" class="row">


              <div class="col-sm-12 col-md-12 mt-2">
            
              
                   
                      <h2 class="mb-0">
                      Instagram
                      </h2>
                 

                      <div class="card-body">
                        <div class="row">
                          <div class="form-group col-sm-12 col-md-6">
                            <label for="">Instagram Username</label>
                            <input
                              type="text"
                              class="form-control"
                              v-model="instagram.iusername"
                              placeholder="Enter Instagram Id"
                            />
                          
                          </div>
                          <div class="form-group col-sm-12 col-md-6">
                            <label for="">Total Followers </label>
                            <input
                              type="text"
                              
                              class="form-control"
                              v-model="instagram.ifollowers"
                              placeholder="Enter Total Followers"
                            />
                        
                          </div>
                          <div class="form-group col-sm-12 col-md-6">
                            <label for="">Total Posts</label>
                            <input
                              type="text"
                           
                              class="form-control"
                              v-model="instagram.iposts"
                              placeholder="Enter Total Posts"
                            />
                           
                          </div>
                          <div class="form-group col-sm-12 col-md-6">
                            <label for="">Average Likes</label>
                            <input
                              type="text"
                              class="form-control"
                              
                             v-model="instagram.iavglike" 
                              placeholder="Enter Average Likes"
                            />
                              
                          </div>
                            
                              <div class="form-group col-sm-12 col-md-6">
                            <label for="">Average Comments</label>
                            <input
                              type="text"
                              class="form-control"
                              value="0"
                            v-model="instagram.iavgcmt" 
                              placeholder="Enter Average Comments"
                            />
                               
                          </div>
                              
                          <div class="form-group col-sm-12 col-md-6">
                            <label for="">Top 3 Audience Location</label>
                                       <multiselect  v-model="audcity" v-on:input="limiter" :options="ccoptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Audience Location" :preselect-first="false">
                          
                                  </multiselect>
                           
                          </div>
                          <div class="form-group col-sm-12 col-md-6">
                            <label for="audienceage">Top 3 Audience Age</label>
                      
                         <multiselect  v-model="audage" :options="aaoptions" v-on:input="limiter" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Audience Age Location" :preselect-first="false">
                          
                                  </multiselect>
                            
                          </div>
                          <div class="form-group col-sm-12 col-md-6">
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


                          <div class="row">
                          <div class="col-6">
                             <h2 class="mt-2">Youtube</h2>    
                      
                                <div class="form-group">
                                      <label for="">Channel URL</label>
                                      <input
                                        type="text"
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
                              class="form-control"
                              v-model="yftsocial.tusername"
                              placeholder="Enter Username"
                            />
                           
                            
                      </div>
                    </div>



                        

                        
                     
                      </div>
                
               
                
           
              </div>
            </span>
                        <span v-else-if="page == 2" class="containerr-fluid">
                            <h5 class="mb-3  mt-2">
                                Choose Your Intrested Areas(Select max.3)
                            </h5>
                            <div class="row mt-2">
                                <button type="button" v-on:click="intrestcheck(item.name)" :class="[userintrests.includes(item.name)? 'col-sm-12 p-2 m-1 mt-2 col-md-2 btn btn-primary' : 'col-sm-12 mt-2 m-1 p-2 col-md-2 btn btn-outline-primary' ]"  v-for="item,index in intrest">
                                        {{ item.name }}
                                </button>
                            </div>

                               <h5 class="mt-4">
                                Choose Languages You Know
                            </h5>
                        

                                   <div class="row mt-2">
                                <button type="button" v-on:click="languagecheck(item.name)" :class="[userlanguages.includes(item.name)? 'col-sm-12 p-2 m-1 mt-2 col-md-2 btn btn-primary' : 'col-sm-12 mt-2 m-1 p-2 col-md-2 btn btn-outline-primary' ]"  v-for="item,index in language">
                                        {{ item.name }}
                                </button>
                            </div>


                        </span>
                        <span v-else-if="page == 3" >
                            <h2 class="col-12">
                                How you want your Payment to be done ?
                            </h2>
                            <div class="row mt-2">
                                <div class="col-12 mt-2">
                                    <div class="col-12">
                                        <div class="form-group w-50">
                                            <select
                                            @change="changepayopt($event)"
                                                v-model="payoption"
                                                class="form-control"
                                            >
                                                <option
                                                    v-for="payment in payments"
                                                >
                                                    {{ payment }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-2" v-if="payoption == 'Google Pay'">
                                        <h4 class="col-12 mt-4">
                                            Google Pay Details
                                        </h4>
                                        <div class="col-sm-12 mt-2 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    for="fullname"
                                                    class="form-label"
                                                    >Full name</label
                                                >
                                                <input
                                                    v-model="payval.fullname"
                                                    type="text"
                                                    class="form-control"
                                                    id="fullname"
                                                    placeholder="Enter Full name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-2 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    for="gpaynumber"
                                                    class="form-label"
                                                    >Google Pay Number</label
                                                >
                                                <input
                                                    v-model="payval.gpaynumber  "
                                                    type="text"
                                                    class="form-control"
                                                    id="gpaynumber"
                                                    placeholder="Enter Google Pay Number"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" v-else-if="payoption == 'UPI'">
                                        <h4 class="col-12 mt-4">UPI Details</h4>
                                        <div class="col-sm-12 mt-2 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    for="fullname"
                                                    class="form-label"
                                                    >Full name</label
                                                >
                                                <input
                                                    type="text"
                                                    v-model="payval.fullname"
                                                    class="form-control"
                                                    id="fullname"
                                                    placeholder="Enter Full name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-2 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    for="upiid"
                                                    class="form-label"
                                                    >UPI Id</label
                                                >
                                                <input
                                                    type="text"
                                                    v-model="payval.upiid"
                                                    class="form-control"
                                                    id="upiid"
                                                    placeholder="Enter UPI Id"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" v-else-if="payoption == 'Bank Account Transfer'">
                                        <h4 class="col-12 mt-4">
                                            Enter Bank Details
                                        </h4>
                                        <div class="col-sm-12 mt-2 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    for="accname"
                                                    class="form-label"
                                                    >Account Holder name</label
                                                >
                                                <input
                                                    type="text"
                                                    v-model="payval.accname"
                                                    class="form-control"
                                                    id="accname"
                                                    placeholder="Enter Account holder Name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-2 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    for="accnumber"
                                                    class="form-label"
                                                    >Account Number</label
                                                >
                                                <input
                                                    type="text"
                                                    v-model="payval.accno"
                                                    class="form-control"
                                                    id="accnumber"
                                                    placeholder="Enter Account Number"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-2 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    for="ifsc"
                                                    class="form-label"
                                                    >IFSC Code</label
                                                >
                                                <input
                                                    v-model="payval.ifsc"
                                                    type="text"
                                                    class="form-control"
                                                    id="ifsc"
                                                    placeholder="Enter IFSC Code"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" v-else>
                                        <h4 class="col-12 mt-4">
                                            Paytm Details
                                        </h4>
                                        <div class="col-sm-12 mt-2 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    for="fullname"
                                                    v-model="payval.fullname"
                                                    class="form-label"
                                                    >Full name</label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="fullname"
                                                    v-model="payval.fullname"
                                                    placeholder="Enter Full name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-2 col-md-6">
                                            <div class="form-group">
                                                <label
                                                    for="paytmnumber"
                                                    class="form-label"
                                                    >Paytm Number</label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="paytmnumber"
                                                    v-model="payval.paytmnumber"
                                                    placeholder="Enter Paytm Number"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-2 col-md-8">
                                            <div class="form-group">
                                                <b
                                                    >*KYC-verified Paytm
                                                    accounts only</b
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="card-body text-dark">

                                </div>
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
                <button type="button" class="btn btn-success mt-3 p-2" v-on:click="savebutton"><i class="fas fa-save"></i> Active Account</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    props: ['intrest','instagram','language','yftsocial'],
    data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
            page: 0,
            payments: ["Bank Account Transfer", "Paytm", "UPI"],
            payoption: "Bank Account Transfer",
            occupations: ["Working Professional", "Student","Full Time Social Media Influencer"],
            occoption: "Working Professional",
            name:'',
            password:'',
            email:'',
            phone: '',
            age: '',
            gender: '',
            dob: '',
            languages:[],
            paytx:[],
            paytype:'',
            paymentform:'',
            payval:'',
             occtx: [],
            occtype:'',
            occupationform: '',
            occval: '',
            social:'',
            city:'',
            state:'',
            country:'',
            id: null,
            limitdate:'',
            value: null,
            insta: this.instagram,
            payopt:{},
            occopt:{},
            audage:this.instagram.iaudienceage
            ? this.instagram.iaudienceage.split(",")
                : []
            ,
            audcity:this.instagram.iaudienceloc
            ? this.instagram.iaudienceloc.split(",")
                : []
            ,
            userintrests:[],
            userlanguages:[],
            today:0,
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

    mounted(){
        $("[data-toggle=popover]").popover();
        this.today = new Date();
        var dd = this.today.getDate();
        var mm = this.today.getMonth()+1; //January is 0!
        var yyyy = this.today.getFullYear();
        if(dd<10){
                dd='0'+dd
            }
            if(mm<10){
                mm='0'+mm
            }

        this.today = yyyy+'-'+mm+'-'+dd;

        var d = new Date(1920,1,1);
        var dd = d.getDate();
        var mm = d.getMonth()+1;
        var yyyy = d.getFullYear();
        if(dd<10){
                dd='0'+dd
            }
            if(mm<10){
                mm='0'+mm
            }

        this.limitdate = yyyy+'-'+mm+'-'+dd;


        document.getElementById("dob").setAttribute("max", this.today);
        this.changepayopt()
        this.changeoccopt()
    },
    methods: {
        saveChanges() {
            axios
                .post("/settings/update/" + this.id, {
                    value: this.value
                })
                .then(response => {
                    if (response.data) {
                        if (response) {
                            this.phone = response.data.phone;
                            this.dob = response.data.dob;
                            this.age = response.data.age;
                            this.gender = response.data.gender;
                            this.city = response.data.city;
                            this.state = response.data.state;
                            this.pincode = response.data.pincode;
                            this.country = response.data.country;
                        } else {
                            this.phone = null;
                            this.dob = null;
                            this.age = null;
                             this.pincode = null;
                            this.gender = null;
                            this.city = null;
                            this.state = null;
                            this.country = null;
                        }
                    }
                });
        },
               limiter(e) {
      if(e.length > 3) {
         this.$swal({
            title: "Error!",
            text: "You can select maximum 3 options",
            icon: "error",
          });
        e.pop()
      }
    },
        calcage(){
            if(this.today>=this.dob && this.dob>= this.limitdate){
                var dob = new Date(this.dob);
                var month_diff = Date.now() - dob.getTime();
                var age_dt = new Date(month_diff);
                var year = age_dt.getUTCFullYear();
                var age = Math.abs(year - 1970);
                this.age=age
            }
            else{
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
                if(this.userlanguages.length>=5){
                    this.$swal({
                        title: "Error!",
                        text: "Only 5 Languages are allowed!",
                        icon: "error",
                    });
                }
                else{
                    this.userlanguages.push(val)
                }
            }
        },
        

        intrestcheck(val){
            if(this.userintrests.includes(val)){
                this.userintrests.splice(this.userintrests.indexOf(val),1)
            }
            else{
                if(this.userintrests.length>=3){
                    this.$swal({
                        title: "Error!",
                        text: "Only 3 Intrest are allowed!",
                        icon: "error",
                    });
                }
                else{
                    this.userintrests.push(val)
                }
            }
        },
        changepayopt(e){
            if(this.payoption == this.paytx.type){
                this.paytype=this.payoption
                this.payval=JSON.parse(this.paytx.value)
                this.paymentform=this.paytx.value
            }
            else{
                if(this.payoption=='Bank Account Transfer'){
                    var x={
                        accname:'',
                        accno:'',
                        ifsc:''
                    };
                    this.paytype=this.payoption
                    this.payval=x
                }
                else if(this.payoption=='Google Pay'){
                    var x={
                        fullname:'',
                        gpaynumber:'',
                    };
                    this.paytype=this.payoption
                    this.payval=x
                }
                else if(this.payoption=='UPI'){
                    var x={
                        fullname:'',
                        upiid:'',
                    };
                    this.paytype=this.payoption
                    this.payval=x
                }
                else{
                    var x={
                        fullname:'',
                        paytmnumber:'',
                    };
                    this.paytype=this.payoption
                    this.payval=x
                }
            }
        },
         changeoccopt(e) {
      if (this.occoption == this.occtx.type) {
        this.occtype = this.occoption;
        this.occval = JSON.parse(this.occtx.value);
        this.occupationform = this.occtx.value;
      } else {
        if (this.occoption == "Working Professional") {
          var x = {
            compname: "",
            designation: "",
            status: 0,
           
          };
          this.occtype = this.occoption;
          this.occval = x;
        }
        else if  (this.occoption == "Full Time Social Media Influencer") {
            this.occtype = this.occoption;
        }
         else {
          var x = {
            colgname: "",
            coursename: "",
            yrofjoin: "",
            campuspro: null,
            status: 0,
          };
          this.occtype = this.occoption;
          this.occval = x;
        }
      }
    },
        savebutton(event){

            event.preventDefault();
            if(this.today>=this.dob){
                this.paymentform=JSON.stringify(this.payval)
                document.getElementById("payval").value=this.paymentform;
                this.occupationform = JSON.stringify(this.occval);
                 document.getElementById("occval").value = this.occupationform;
                document.getElementById("myform").submit();
                return true;
            }
            else{
                this.$swal({
                        title: "Error!",
                        text: "Please Check the DOB!",
                        icon: "error",
                    });
                return false;
            }
        }
    }
};
</script>
