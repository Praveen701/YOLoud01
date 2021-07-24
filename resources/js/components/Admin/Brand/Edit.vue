<template>
     <div class="card bg-white text-right p-2">
    <div class="card-body">

      
<form :action=" '/admin/brand/edit/' + brand.id" method="POST" id="editbrand">
 <input type="hidden" name="_token" :value="csrf" />
  <input type="hidden" name="name" v-model="brand.name" />

        <input type="hidden" name="email" v-model="brand.email" />
           
        <input type="hidden" name="companyname" v-model="brand.companyname" />
  <input type="hidden" name="designation" v-model="brand.designation" />

        <input type="hidden" name="phonenumber" v-model="brand.phonenumber" />
           
        <input type="hidden" name="city" v-model="brand.city"  />

  <input type="hidden" name="offering" v-model="brand.offering" />

        <input type="hidden" name="state" v-model="brand.state" />
            <input type="hidden" name="country" v-model="brand.country" />
        <input type="hidden" name="pincode" v-model="brand.pincode"  />
        <input type="hidden" name="phonestatus" v-model="brand.phonestatus" />
        <input type="hidden" name="emailstatus" v-model="brand.emailstatus"  />

  </form>








                    <div class="float-right">
                        <a href="/admin/brand" class="btn btn-primary"
                            ><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a
                        >
                    </div>
                     <h1 class="mt-2 mb-3 text-left">Edit Brand</h1>



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
                <h4>Campaign Created</h4></a
              >
            </li>
           
          </ul>
          <div class="container-fluid text-left">
            <span v-if="page == 0" >
            
              <div class="container">
                 <div class="col-12 col-md-12 mt-2">
                <div class="row">
                  <div class="col-12 grid-margin">
                    <div class="card">
                      <div class="faq-block card-body">
                       
                          <h2 class="mb-4">Brand Details</h2>
                    

             
                        <div class="row mt-3 ">
                            <div class="col-12 col-sm-6 "><h5> <b>Name :</b> {{this.brand.name}} </h5></div>
                            <div class="col-12 col-sm-6 "><h5><b>Email :</b>{{this.brand.email}}   </h5></div>
                            
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 "><h5><b>Company Name : </b>{{this.brand.companyname}} </h5></div>
                            <div class="col-12 col-sm-6 "><h5><b>Designation :</b>{{this.brand.designation}}  </h5></div>        
                        </div>
                        
                        <div class="row mt-3">
                            
                            <div class="col-12 col-sm-6 "><h5><b>Phone Number : </b>{{this.brand.name}} </h5></div>
                            <div class="col-12 col-sm-6 "><h5><b>Pincode : </b>{{this.brand.pincode}} </h5></div> 
                        </div>
                             
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 "><h5><b>City : </b>{{this.brand.city}} </h5></div> 
                            <div class="col-12 col-sm-6 "><h5><b>State : </b>{{this.brand.state}} </h5></div>
                           
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 "><h5><b>Country : </b>{{this.brand.country}} </h5></div> 
                            <div class="col-12 col-sm-6 "><h5><b>Offering :</b>{{this.brand.offering}}  </h5></div> 
                           
                            
                        </div>



                      </div>
                    </div>
                  </div>
                </div>
              </div>

        </div>
                <!-- parent row -->
                 </span>
          
           
             <span v-if="page == 1">
             
           
                
              <div class=" mt-2 card">
                <div  class="card-body text-dark">
                    <div class="row mt-2">
                                <div class="col-sm-12 mt-2 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input   type="text" v-model="brand.name"  class="form-control" name="name"  placeholder="Enter Name">
                                        <small class="text-danger" v-if="this.brand.name == ''">Name is a required field</small>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2 col-md-6">
                                  <div class="form-group">

                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" v-model="brand.email"  name="email"  placeholder="Enter Email" >
                                  <small class="text-danger" v-if="this.brand.email == ''">Email is a required field</small>
                                  </div>
                              </div>
                                <div class="col-sm-12 mt-2 col-md-6">
                                  <div class="form-group">
                                    <label for="companyname" class="form-label">Company Name</label>
                                  <input type="text" class="form-control"  v-model="brand.companyname" name="companyname" placeholder="Enter Company Name">
                                    <small class="text-danger" v-if="this.brand.companyname == ''">Company Name is arequired field</small>
                                  </div>
                              </div>
                              <div class="col-sm-12 mt-2 col-md-6">
                                  <div class="form-group">
                                    <label for="designation" class="form-label">Designation</label>
                                      <select v-model="brand.designation" name="designation" class="form-control">
                                        <option  value="Owner" selected>Owner</option>
                                        <option value="Others" >Others</option>

                                    </select>
                                  <small class="text-danger" v-if="this.brand.designation == ''">Designation is a required field</small>
                                  </div>
                                </div>

                              <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                  <label for="phonenumber" class="form-label">Phone Number</label>
                                  <input type="tel" class="form-control" name="phonenumber" v-model="brand.phonenumber"  placeholder="Enter Phone Number">
                                  <small class="text-danger" v-if="this.brand.phonenumber == ''">Phone Number is a required field</small>
                                
                                </div>
                            </div>
                        <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group">
                            <label for="pincode" class="form-label">Pincode</label>
                          
                            
                                 <input type="tel" class="form-control" name="pincode" v-model="brand.pincode"  placeholder="Enter Phone Number">

                                  <!-- <small class="text-danger" v-if="this.brand.pinres == ''">Pincode is a required field</small> -->
                          
                          </div>
                      </div>
                        
                        <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group">
                            <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" v-model="brand.city" > 

                        
                        
                        
                          </div>
                      </div>
                        <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control" name="state"  v-model="brand.state"  >

                          </div>
                      </div>
                        <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group">
                            <label for="country" class="form-label">Country</label>
                              <input type="text"  class="form-control" name="country" v-model="brand.country" value="INDIA" >
                        
                        
                          </div>
                      </div>


                      <div class="col-sm-12 mt-2 col-md-6">
                      <div class="form-group">
                      <label for="offering" class="form-label">Offering</label>
                        <select v-model="brand.offering"  name="offering" class="form-control">
                          <option value="Product" selected>Product</option>
                          <option value="Service" >Service</option>

                      </select>
                        <small class="text-danger" v-if="this.brand.offering == ''">Offering is a required field</small>
                      </div>
                      </div>




                    </div>
                </div>
              </div>     
         
         
            </span>
  
            <span v-if="page == 2">

           


              <div class=" mt-2 card">
                <div  class="card-body text-dark">
                    <div class="row mt-2">
                        <div class="col-sm-12 mt-2 col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                             <h5>{{this.brand.name}}</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2 col-md-6">
                            <div class="form-group">
                              <label for="companyname" class="form-label">Company Name</label>
                              <h5>{{this.brand.companyname}}</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group">
              
                            <label for="email" class="form-label">Email</label>
                            <h5>{{this.brand.email}}</h5>
                          </div>
                      </div>
                      <div class="form-group col-sm-12 col-md-6 mt-2">
                        <label for="emailstatus"><b>Email Status</b></label>
                        <select
                        v-model="brand.emailstatus"
                  
                          id="emailstatus"
                          class="form-control"
                        >
                        <option value="0" selected>Pending</option>
                        <option  value="1">Verified</option>
                        <option  value="2">Rejected</option>
                        </select>
                      </div>
                      

               
                      <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group">
                            <label for="designation" class="form-label">Designation</label>
                            
                            <h5>{{this.brand.designation}}</h5>
                          </div>
                        </div>
                        <div class="col-sm-12 mt-2 col-md-6">
                            <div class="form-group">
                            <label for="offering" class="form-label">Offering</label>
                            <h5>{{this.brand.offering}}</h5>
                            </div>
                            </div>
              
                      <div class="col-sm-12 mt-2 col-md-6">
                        <div class="form-group">
                          <label for="phonenumber" class="form-label">Phone Number</label>
                          <h5>{{this.brand.phonenumber}}</h5>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 col-md-6 mt-2">
                        <label for=""><b>Phone Number Status</b></label>
                        <select
                         v-model="brand.phonestatus"
                          id="phonestatus"
                       
                          class="form-control"
                        >
                          <option value="0" selected>Pending</option>
                          <option  value="1">Verified</option>
                          <option  value="2">Rejected</option>
                        </select>
                      </div>
                 
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="city" class="form-label">City</label>
                    <h5>{{this.brand.city}}</h5>
                  </div>
              </div>
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="city" class="form-label">State</label>
                    <h5>{{this.brand.state}}</h5>
                  </div>
              </div>
                <div class="col-sm-12 mt-2 col-md-6">
                  <div class="form-group">
                    <label for="city" class="form-label">Country</label>
                    <h5>{{this.brand.country}}</h5>
                  </div>
              </div>
                          
              
                    </div>
                </div>
              
              
              </div>
              


            </span>


              
              <span v-if="page == 3" >
            
              <div class="container">
                 <div class="col-12 col-md-12 mt-2">
                <div class="row">
                  <div class="col-12 grid-margin">
                    <div class="card">
                      <div class="faq-block card-body">
                       
                          <h2 class="mb-4">Campaign Created</h2>
                    

            
                        
                        <div class="row mt-3" v-for="row in campaign">
                            <div class="col-12 col-sm-6 "><h5><b>Campaign Title : </b>{{row.campaigntitle}} </h5></div>
                            <div class="col-12 col-sm-6 "><h5><b>Description :</b>{{row.campaigndes}}  </h5></div>        
                        </div>
                        
                      
                     



                      </div>
                    </div>
                  </div>
                </div>
              </div>

        </div>
                <!-- parent row -->
                 </span>












  </div>
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
            class="btn btn-primary p-2"
          v-on:click="savebutton"
          >
            <i class="fas fa-save"></i> Save
          </button>
        </div>












    </div>
   
</template>

<script>
export default {
  props: [
  'brand','campaign'
  
  ],
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
        page:0,
            name:'',
            country:'INDIA',
            companyname:'',
            email:'',
            pinres:'',
            id:'',
            errors:{
                name:'',
                email:'',
                phonenumber:'',
                companyname:'',
                designation:'',
                pincode:'',
                offering:''
            },
            
            phonenumber: '',
            designation: '',
            offering: '',
            city:'',
            state: '',
            pincode: '',
               
        
    }
  },
  mounted(){
 this.pinres = this.brand.pincode.split(","); 

  },
  methods:{
      changePage(val) {
      this.page = val;
    },
     savebutton(){
            var self = this;
            this.errors = {
                name:'',
                email:'',
                phonenumber:'',
                companyname:'',
                designation:'',
                pincode:'',
                offering:''
            },
              axios.post('/admin/brand/validatebrand',{
                  name:this.brand.name,
                email:this.brand.email,
                phonenumber:this.brand.phonenumber,
                companyname:this.brand.companyname,
                designation:this.brand.designation,
                 pincode:this.brand.pincode,
                   city:this.brand.city,
                     state:this.brand.state,
                offering:this.brand.offering,
              })   
              .then(response => {
                  console.log(response);
                        if(response.data.isvalid==true){
                       document.getElementById("editbrand").submit();   
                        }
                        else{
                            this.errors=response.data.data;
                        }
                    });

   
        }

  }




}


</script>