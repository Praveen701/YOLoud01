<template>
<div>
   <!-- <form action="/admin/campaign/create" method="post" id="campaignform">
       <input type="hidden" name="_token" :value="csrf" />
        <input type="hidden" name="id" v-model="id" />
        <input type="hidden" name="campaigntitle" v-model="campaigntitle" />
        <input type="hidden" name="campaignobj" v-model="selcampobj" />
        <input type="hidden" name="campaigndes" v-model="campaigndes" />

        <input type="hidden" name="startdate" v-model="startdate" />
           
        <input type="hidden" name="enddate" v-model="enddate" />
           
        <input type="hidden" name="picked1" v-model="picked1" />
        <input type="hidden" name="scategory" v-model="selcategory" />
            <input type="hidden" name="picked2" v-model="picked2" />
        <input type="hidden" name="stype" v-model="selctype" />
            <input type="hidden" name="picked3" v-model="picked3" />
           
        <input type="hidden" name="sage" v-model="selcage" />
            <input type="hidden" name="picked4" v-model="picked4" />
        <input type="hidden" name="sfgender" v-model="sfgender" />
         <input type="hidden" name="smgender" v-model="smgender" />
            <input type="hidden" name="picked5" v-model="picked5" />
           
        <input type="hidden" name="slocation" v-model="slocation" />
            <input type="hidden" name="picked6" v-model="picked6" />
        <input type="hidden" name="saage" v-model="selaage" />
            <input type="hidden" name="picked7" v-model="picked7" />
              <input type="hidden" name="samgender" v-model="samgender" />
        <input type="hidden" name="safgender" v-model="safgender" />
            <input type="hidden" name="picked8" v-model="picked8" />
           
        <input type="hidden" name="salocation" v-model="salocation" />
           
         <input type="hidden" name="pproduct" v-model="pproduct" />
                 
        <input type="hidden" name="orderedby" v-model="orderedby" />
           
        <input type="hidden" name="pprice" v-model="pprice" />

         <input type="hidden" name="crange" v-model="crange" />
             <input type="hidden" name="campstatus" v-model="campstatus" />
           
        <input type="hidden" name="cexpense" v-model="cexpense" /> 
                
        <input type="hidden" name="otherinfo" v-model="otherinfo" />
           
           
                </form> -->
  <div v-if="typepage == 0">
<div>
  <form action="/admin/campaign/create" method="post" >
   <input type="hidden" name="_token" :value="csrf" />
        <input type="hidden" name="id" v-model="id" />
        <input type="hidden" name="campaigntitle" v-model="campaigntitle" />



     <div class="float-right">
        <a href="/admin/campaign" class="btn btn-primary"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
    </div>
    <h3 class="mt-4">Create Campaign  </h3>
       <div class="card mt-4 text-dark">
           <div class="card-body">


                
              
               
               <div class="row mt-2">
                   <div class="col-sm-12 mt-2 col-md-3">
                    
                           <label for="id">Brand ID</label>
               
                        <v-select
                                    name="id"
                                         label="id"
                                    v-model="id"
                                    :options="data"
                                    @input="code => setcampaign(code)"
                                >
                                    <template #search="{attributes, events}">
                                        <input
                                            class="vs__search"
                                            :required="!id"
                                            v-bind="attributes"
                                            v-on="events"
                                        />
                                    </template>
                                </v-select>
                        <small class="text-danger" v-if="this.id == null">{{errorfirst.id}}</small>

                             
                   </div>
  
 
                   <div class="col-sm-12 mt-2 col-md-3">
                  
                           <label for="">Company Name</label>
                        
                    
                  
                               <v-select
                                    label="companyname"
                                    v-model="companyname"
                                    :options="data"
                                    @input="code => setcampaign(code)"
                                >
                                    <template #search="{attributes, events}">
                                        <input
                                            class="vs__search"
                                            :required="!companyname"
                                            v-bind="attributes"
                                            v-on="events"
                                               
                                        />
                                    </template>
                                </v-select>
                                
                   </div>
                   <div class="col-sm-12 mt-2 col-md-3">
                       <div class="form-group">
                           <label for="campaigntitle">Campaign Title <span style="color:red">*</span></label>
                           <input  type="text" class="form-control" v-model="campaigntitle" placeholder="Enter Campaign Title" required>
                             <small class="text-danger" v-if="this.campaigntitle == null">{{errorfirst.campaigntitle}}</small>
                      
                       </div>
                      
                   </div>
                 
               </div>
               <div class="d-flex justify-content-end mt-2 ">
                  
                  
                    <button type="submit"  class="btn btn-success" > Create Campaign</button>
               </div>
    
           </div>
       </div>


  </form>
</div>



  </div>

      

   <!-- <div v-if="typepage == 1">

 <div class="float-right">
    <button  v-on:click="typepagechangep(0)" class="btn btn-secondary"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</button>
</div>


<h3 class="mt-3 mb-4">Campaign : {{this.campaigntitle}}</h3>

        <div class=" mt-2 card">
         <div  class="card-body text-dark">
   
      




        <div class="text-right">
          <ul class="nav text-left">
            <li class="nav-item">
              <a
                class="nav-link btn"
                v-on:click="changePage(0)"
                v-bind:style="page == 0 ? 'color:#DDA05D;' : 'color:#01AFBA;'"
              >
                <h4>Basic Details</h4></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link btn"
                v-on:click="changePage(1)"
                v-bind:style="page == 1 ? 'color:#DDA05D;' : 'color:#01AFBA;'"
              >
                <h4>Creator Preference</h4></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link btn"
                v-on:click="changePage(2)"
                v-bind:style="page == 2 ? 'color:#DDA05D;' : 'color:#01AFBA;'"
              >
                <h4>Audience Preference</h4></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link btn"
                v-on:click="changePage(3)"
                v-bind:style="page == 3 ? 'color:#DDA05D;' : 'color:#01AFBA;'"
              >
                <h4>Commercial & Other Details</h4></a
              >
            </li>
       
          </ul>
          <div class="container-fluid text-left">
            <span v-if="page == 0">
              <div class="mt-4">
             <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Campaign Objective<span style="color:red">*</span></label>
    <div class="col-sm-5">
           
               <multiselect v-model="campaignobj" :options="options" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Campaign Objective" label="name" track-by="name" :preselect-first="false">
               </multiselect>    
                   <small class="text-danger" v-if="this.campaignobj == ''">{{errorsecond.campaignobj}}</small>
              
            </div>
          </div>
    
            <div class="form-group row mt-2">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Campaign Description<span style="color:red">*</span></label>
    <div class="col-sm-5">
      <textarea class="form-control" id="exampleFormControlTextarea1" :maxlength="max" v-model="campaigndes" placeholder="Enter Campaign Description" rows="3"></textarea>
   
      <small class="text-danger" v-if="this.campaigndes == null">{{errorsecond.campaigndes}}</small>
    </div>
  </div>
 
  
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Application Start Date<span style="color:red">*</span></label>
    <div class="col-sm-5">
      <input type="date" class="form-control" v-model="startdate" id="inputEmail3">
        <small class="text-danger" v-if="this.startdate == null">{{errorsecond.startdate}}</small>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Application End Date<span style="color:red">*</span></label>
    <div class="col-sm-5">
      <input type="date" class="form-control" v-model="enddate" id="inputEmail3">
               <small class="text-danger" v-if="this.enddate == null">{{errorsecond.enddate}}</small>
    </div>
  </div>
  
              </div>
     
           <div class="float-right">
                     <button
            type="button"
            class="btn btn-primary p-2"
            v-on:click="changePage(1)"
           
          >
            <i class="fas fa-save"></i> Save & Continue
          </button>
                      </div>



            </span>

            <span v-else-if="page == 1">
             <div class="mt-4">
             <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-4 col-form-label">Do you have any preference for Category ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" v-model="picked1" value="true">
                          <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" v-model="picked1" value="false">
                          <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                       
              </div>
               <div v-if="picked1 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Category<span style="color:red">*</span></label>
                              <div class="col-sm-5"> 
                                <multiselect v-model="scategory" :options="intrest" :multiple="true" :close-on-select="false"
                                 :clear-on-select="false" :preserve-search="true" placeholder="Select Category" label="name" track-by="name" :preselect-first="false">
                          
                                  </multiselect>
                            

                           </div>
                        </div>
                 </div>
                <div class="form-group row">
                      <label for="type" class="col-sm-4 col-form-label">Do you have any preference for Creator Type ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked2" v-model="picked2" value="true">
                          <label class="form-check-label" for="type">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked2" v-model="picked2" value="false">
                          <label class="form-check-label" for="type">No</label>
                        </div>
                       
              </div>
                <div v-if="picked2 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Creator Type<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                    <multiselect v-model="stype" :options="toptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Creator Type" label="type" track-by="type" :preselect-first="false">
                          
                                  </multiselect>
                           </div>
                        </div>
                 </div>

                 <div class="form-group row">
                      <label for="age" class="col-sm-4 col-form-label">Do you have any preference for Creator Age ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked3" v-model="picked3" value="true">
                          <label class="form-check-label" for="age">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked3" v-model="picked3" value="false">
                          <label class="form-check-label" for="age">No</label>
                        </div>
                       
              </div>
                <div v-if="picked3 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Creator Age<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                        <multiselect v-model="sage" :options="aoptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Creator Age" label="age" track-by="age" :preselect-first="false">
                          
                                  </multiselect>
                           </div>
                        </div>
                 </div>

                 
                 <div class="form-group row">
                      <label for="gender" class="col-sm-4 col-form-label">Do you have any preference for Creator Gender ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked4" v-model="picked4" value="true">
                          <label class="form-check-label" for="gender">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked4" v-model="picked4" value="false">
                          <label class="form-check-label" for="gender">No</label>
                        </div>
                       
              </div>
                <div v-if="picked4 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Creator Gender<span style="color:red">*</span></label>
                           
                       

                            <div class="col-sm-3 mt-2">
                           <select
                              value=""
                              id="ratecreator"
                              v-model="smgender"
                             
                              class="form-control form-control-sm"
                            >
                            
                              <option value="Male">Male</option>
                               <option value="">No Male</option>
                            
                            </select>
                           </div>
                               <div class="col-sm-3 mt-2">
                           <select
                              value=""
                              id="ratecreator"
                              v-model="sfgender"
                             
                              class="form-control form-control-sm"
                            >
                              <option value="Female">Female</option>
                              <option value="">No Female</option>
                            
                            </select>
                           </div>
                           <small class="ml-3">Note : If you want both the male and female to participate in the campaign select male and female.</small>

                        </div>
                 </div>

                   <div class="form-group row">
                      <label for="location" class="col-sm-4 col-form-label">Do you have any preference for Creator Location ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked5" v-model="picked5" value="true">
                          <label class="form-check-label" for="location">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked5" v-model="picked5" value="false">
                          <label class="form-check-label" for="location">No</label>
                        </div>
                       
              </div>
                <div v-if="picked5 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Creator Location<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                         <multiselect v-model="slocation" :options="coptions" :multiple="true" :close-on-select="false"  :clear-on-select="false" :preserve-search="true" placeholder="Select Creator Location"  :preselect-first="false">
                          
                                  </multiselect>
                           </div>
                        </div>
                 </div>

            </div> 

                <div class="float-right">
                                <button
                        type="button"
                        class="btn btn-primary p-2"
                        v-on:click="changePage(2)"
                      
                      >
                        <i class="fas fa-save"></i> Save & Continue
                      </button>
                                  </div>
            </span>
            <span v-else-if="page == 2" class="containerr-fluid">
               <div class="mt-4">
             <div class="form-group row">
                      <label for="alocation" class="col-sm-5 col-form-label">Do you have any preference for Audience's Location ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="alocation" v-model="picked6" value="true">
                          <label class="form-check-label" for="alocation">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="alocation" v-model="picked6" value="false">
                          <label class="form-check-label" for="alocation">No</label>
                        </div>
                       
              </div>
               <div v-if="picked6 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Location<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                      <multiselect v-model="salocation" :options="coptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Location"  :preselect-first="false">
                          
                                  </multiselect>
                           </div>
                        </div>
                 </div>

                 <div class="form-group row">
                      <label for="aage" class="col-sm-5 col-form-label">Do you have any preference for Audience's Age ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="aage" v-model="picked7" value="true">
                          <label class="form-check-label" for="aage">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="aage" v-model="picked7" value="false">
                          <label class="form-check-label" for="aage">No</label>
                        </div>
                       
              </div>
               <div v-if="picked7 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Age<span style="color:red">*</span></label>
                            <div class="col-sm-5">
         <multiselect v-model="saage" :options="aoptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Age" label="age" track-by="age" :preselect-first="false">
                          
                                  </multiselect>
                           </div>
                        </div>
                 </div>

                    <div class="form-group row">
                      <label for="agender" class="col-sm-5 col-form-label">Do you have any preference for Audience's Gender ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="agender" v-model="picked8" value="true">
                          <label class="form-check-label" for="alocation">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="agender" v-model="picked8" value="false">
                          <label class="form-check-label" for="agender">No</label>
                        </div>
                       
              </div>
               <div v-if="picked8 == 'true'">
                         <div class="form-group row">
                            <label for="sagender" class="col-sm-2 col-form-label">Select Gender<span style="color:red">*</span></label>
                          
                            <div class="col-sm-3 mt-2">
                           <select
                              value=""
                              id="ratecreator"
                              v-model="samgender"
                             
                              class="form-control form-control-sm"
                            >
                            
                              <option value="Male">Male</option>
                               <option value="">No Male</option>
                            
                            </select>
                           </div>
                             <div class="col-sm-3 mt-2">
                           <select
                              value=""
                              id="ratecreator"
                              v-model="safgender"
                             
                              class="form-control form-control-sm"
                            >
                            
                              <option value="Female">Female</option>
                               <option value="">No Female</option>
                            
                            </select>
                           </div>
                         
                           <small class="ml-3 mt-2">Note : If you want both the male and female to participate in the campaign select male and female.</small>

                        </div>
                 </div>




             

           </div>
               <div class="float-right">
                     <button
            type="button"
            class="btn btn-primary p-2"
            v-on:click="changePage(3)"
           
          >
            <i class="fas fa-save"></i> Save & Continue
          </button>
                      </div>

            </span>

            <span v-else-if="page == 3">

          <div class="mt-4">
             <div class="form-group row">
                      <label for="alocation" class="col-sm-5 col-form-label">Will the creator require physical product for the content ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="alocation" v-model="pproduct" value="true">
                          <label class="form-check-label" for="alocation">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" v-model="pproduct" value="false">
                          <label class="form-check-label" for="alocation">No</label>
                        </div>
                       
              </div>
               <div v-if="pproduct == 'true'">
                       <div class="form-group row">
                      <label for="ordered" class="col-sm-5 col-form-label">Product will be ordered by ?<span style="color:red">*</span></label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="ordered" v-model="orderedby"  value="creator">
                          <label class="form-check-label" for="alocation">Creator</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="ordered"  v-model="orderedby" value="brand">
                          <label class="form-check-label" for="alocation">Brand</label>
                        </div>
                       
              </div>
                 </div>


                 <div v-if="orderedby == 'creator' && pproduct == 'true'">
              <div class="form-group row">
                      <label for="pprice" class="col-sm-5 col-form-label">Will the product price be reimbursed ?<span style="color:red">*</span></label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="pprice" v-model="pprice" value="true">
                          <label class="form-check-label" for="pprice">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="pprice" v-model="pprice" value="false">
                          <label class="form-check-label" for="pprice">No</label>
                        </div>
                       
                   </div>
                 </div>
                      <div class="form-group row">
                      <label for="pprice" class="col-sm-5 col-form-label">Commercial Range<span style="color:red">*</span></label>
                      
                         <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="crange">Minimum Range</label>
                        <input type="number" class="form-control form-control-sm" v-model="crange" name="crange">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="campstatus">Maximum Range</label>
                        <input type="number" class="form-control form-control-sm" v-model="campstatus" name="campstatus" >
                      </div>
                </div>
                     
                   
                        
                   </div>

                     <div class="form-group row">
                      <label for="shipping" class="col-sm-5 col-form-label">Commercial will be exclusive of all other expenses such as reimbusement of Product or shipping charges ? <span style="color:red">*</span>
                      <br>   <small class="text-danger" v-if="this.cexpense == null">{{errorlast.cexpense}}</small>
                      </label>
                    
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="shipping" v-model="cexpense" value="1">
                          <label class="form-check-label" for="shipping">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="shipping" v-model="cexpense" value="0">
                          <label class="form-check-label" for="shipping">No</label>
                        </div>
                        
                   </div>

                          <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Any other information that you want to share regarding commercial ?</label>
                    <div class="col-sm-5">
                      <textarea class="form-control" v-model="otherinfo" id="exampleFormControlTextarea1" placeholder="1000 Characters allowed" rows="3"></textarea>
                    

                    </div>
                  </div>



            </div>
                      <div class="float-right">
                                <button
                          type="button"
                          class="btn btn-primary p-2"
                          v-on:click="typepagechange(2)"
                        
                        >
                          <i class="fas fa-save"></i> Save & Preview
                        </button>
                      </div>

            </span>
          
          </div>
        
        
        </div>









  </div>
        </div>
  
    </div>

          <div v-if="typepage == 2">

               <div class="float-right">
                    <button  v-on:click="typepagechangep(1)" class="btn btn-primary"><i class="fa fa-pen" aria-hidden="true"></i> Edit</button>
                </div>
            <h2 class="mt-3 mb-4">Preview Campaign</h2>
              
            <div class=" mt-2 card">
            <div  class="card-body text-dark">
                <div class="row mt-2">
                  <div class="col-3"><h5>Campaign Name:</h5></div>
                  <div class="col-9"><h5>{{this.campaigntitle}}</h5></div>
                </div>
                  <div class="row mt-2">
                  <div class="col-3"><h5>Campaign Objective:</h5></div>
                  <div class="col-9"><h5><span v-for="item in campaignobj"> {{item.name}} , </span></h5></div>
                </div>
                    <div class="row mt-2">
                  <div class="col-3"><h5>Campaign Description:</h5></div>
                  <div class="col-9"><h5>{{this.campaigndes}}</h5></div>
                </div>
                  <div class="row mt-2">
                  <div class="col-3"><h5>Application Start Date:</h5></div>
                  <div class="col-9"><h5>{{this.startdate}}</h5></div>
                </div>
                     <div class="row mt-2">
                  <div class="col-3"><h5>Application End Date:</h5></div>
                  <div class="col-9"><h5>{{this.enddate}}</h5></div>
                </div>
                 <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for category?</h5></div>
                     <div class="col-6 col-md-4">
                    <h5 v-if="this.picked1 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.picked1 == 'true'">
                  <div class="col-md-6"><h5>Category</h5></div>
                  <div class="col-6 col-md-4"><h5><span v-for="item in scategory"> {{item.category}} , </span></h5></div>
                </div>

                  <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Creator Type?</h5></div>
                  <div class="col-6 col-md-4">
                    <h5 v-if="this.picked2 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.picked2 == 'true'">
                  <div class="col-md-6"><h5>Creator Type</h5></div>
                  <div class="col-6 col-md-4"><h5><span v-for="item in stype"> {{item.type}} , </span></h5></div>
                </div>
                  <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Creator Age?</h5></div>
                  <div class="col-6 col-md-4">
                       <h5 v-if="this.picked3 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.picked3 == 'true'">
                  <div class="col-md-6"><h5>Creator Age</h5></div>
                  <div class="col-6 col-md-4"><h5><span v-for="item in sage"> {{item.age}} , </span></h5></div>
                </div>
                   <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Creator Gender?</h5></div>
                  <div class="col-6 col-md-4">
                   <h5 v-if="this.picked4 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.picked4 == 'true'">
                  <div class="col-md-6"><h5>Creator Gender</h5></div>
                  <div class="col-6 col-md-4"><h5>
                    <span > {{this.smgender}} , {{this.sfgender}}</span>
                    </h5></div>
                </div>
                     <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Creator Location?</h5></div>
                  <div class="col-6 col-md-4">
                    <h5 v-if="this.picked5 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.picked5 == 'true'">
                  <div class="col-md-6"><h5>Creator Location</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.slocation}} </h5></div>
                </div>
                     <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Audience's Location?</h5></div>
                  <div class="col-6 col-md-4">
                     <h5 v-if="this.picked6 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.picked6 == 'true'">
                  <div class="col-md-6"><h5>Audience Location</h5></div>
                  <div class="col-6 col-md-4"><h5> {{this.salocation}}</h5></div>
                </div>
                     <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Audience's Age?</h5></div>
                  <div class="col-6 col-md-4">
                    <h5 v-if="this.picked7 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.picked7 == 'true'">
                  <div class="col-md-6"><h5>Audience Age</h5></div>
                  <div class="col-6 col-md-4"><h5><span v-for="item in saage"> {{item.age}} , </span></h5></div>
                </div>
                     <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Audience's Gender?</h5></div>
                  <div class="col-6 col-md-4">
                     <h5 v-if="this.picked8 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.picked8 == 'true'">
                  <div class="col-md-6"><h5>Audience Gender</h5></div>
                  <div class="col-6 col-md-4"><h5>
                    <span > {{this.samgender}} , {{this.safgender}} </span>
                    </h5></div>
                </div>
                    <div class="row mt-2">
                  <div class="col-md-6"><h5>Will the creator require physical product for the content ?</h5></div>
                  <div class="col-6 col-md-4">
                        <h5 v-if="this.pproduct == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
              
               
                     <div class="row mt-2" v-if="this.pproduct == 'true'">
                  <div class="col-md-6"><h5>Products will be ordered by?</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.orderedby}}</h5></div>
                </div>
                    <div class="row mt-2" v-if="this.orderedby == 'creator'">
                  <div class="col-md-6"><h5>Will the product price be reimbursed?</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.pprice}}</h5></div>
                </div>
                  <div class="row mt-2">
                  <div class="col-md-6"><h5>Commercial Range :</h5></div>
                  <div class="col-6 col-md-4"><h5>Rs.{{this.crange}}  To  Rs.{{this.campstatus}}</h5></div>
                </div>
                 <div class="row mt-2">
                  <div class="col-md-6"><h5>Commercials will be exclusive of all other expenses such as reimbursement of product or shipping charges ?</h5></div>
                  <div class="col-6 col-md-4">
                     <h5 v-if="this.cexpense == '1'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                   
                   <div class="row mt-2">
                  <div class="col-md-6"><h5>Other Info :</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.otherinfo}}</h5></div>
                </div>

                      <div class="float-right">
                          <button v-on:click="savebutton2" class="btn btn-success"> Activate</button>
                      </div>


                    
   
                  </div>
            </div>

            </div> -->
            







         </div>

   
</template>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<script>
import VueSimpleRangeSlider from 'vue-simple-range-slider';
import 'vue-simple-range-slider/dist/vueSimpleRangeSlider.css';
export default {
components: {
    VueSimpleRangeSlider
  },
  props: ['data','intrest'],
  data() {
    return {
       csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
      page:0,
     companyname: null,
      id: null,
      typepage:0,
      number:0,
     crange: 0,
      campstatus: 0,
        val:'',
      picked1:null,
        picked2:null,
          picked3:null,
        picked4:null,
          picked5:null,
           picked6:null,
           max:450,
        picked7:null,
          picked8:null,
             cexpense:null,
             pprice:null,
             orderedby:null,
             pproduct:null,
             campaigntitle:null,
             campaigndes:null,
             campaignobj:[],
             selcampobj:[],
            selcategory:[],  
            safgender:null,
            samgender:null,
            sfgender:null,
            smgender:null,
            errorfirst:{
                companyname:'',
                id:'',
                campaigntitle:'',
            } ,     
            errorsecond:{
                campaigndes:'',
                campaignobj:'',
                startdate:'',
                enddate:'',
            } , 
            errorlast:{
              cexpense:''
            },
            selcage:[],
            selctype:[],
            selcgender:[],
            selclocation:[],
            selaage:[],
            selagender:[],
            selalocation:[],
            
  
             startdate:null,
             enddate:null,
             otherinfo:null,
             value:[],
             scategory:[],
             stype:[],
             sage:[],
             sgender:[],
             slocation:[],
             salocation:[],
             saage:[],
            
             sagender:[],
             errors: {
                companyname:'',
                id:'',
                cexpense:'',
                campaigntitle:'',
                campaigndes:'',
                campaignobj:'',
                startdate:'',
                enddate:'',
                otherinfo:''
            },
        

       options: [
        { name: 'Brand Awarness'  },
        { name: 'Increase Traffic' },
        { name: 'Brand Mentions' },
        { name: 'Product Reviews' },
        { name: 'Giveaways'}
       ],
      catoptions: [
         { category: 'Automobile'  },
         { category: 'Arts' },
        { category: 'Beauty & Make up' },
         { category: 'Business & Startup'  },
        { category: 'Education & Career' },
            { category: 'Entrepreneurship' },
        { category: 'Health & Lifestyle' },
          { category: 'Fitness' },
         { category: 'Fashion' },
         { category: 'Food'  },
         { category: 'Modeling' },
          { category: 'Music & Dance' },
        { category: 'Marketing & Social Media' },
        { category: 'Movies, TV & Entertainment' },
          { category: 'Gaming' },
       { category: 'Parenting' },
        { category: 'Photography & Videography' },
          { category: 'Society & Politics' },
        { category: 'Sports' },
         { category: 'Travel' },
         { category: 'Technology' },
        

      ],
       toptions: [
         { type: 'Nano'  },
        { type: 'Micro' },
        { type: 'Macro' },
         { type: 'Mega'  },
      ],
       aoptions: [
            { age: '0 - 18'  },
         { age: '19 - 24'  },
        { age: '25 - 32' },
        { age: '33 - 40' },
         { age: '40+'  },
 
      ],
       goptions: [
         { gender: 'Male'  },
        { gender: 'Female' },
              
      ],
         
        coptions: [
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
   

         }
  },
  methods:
  {
     changePage(val) {
          var val;
         if(this.campaigndes != null && this.campaignobj != null && this.startdate != null && this.enddate != null  && this.campaignobj != '')
              {
                       var val;
                     
                      this.page = val; 
                   
                   
               }
           else
           {
            
              if(this.campaigndes == null)
                {
              this.errorsecond.campaigndes = "Enter Campaign Description";
                 }
                if(this.campaignobj == '')
               {
              this.errorsecond.campaignobj = "Select Campaign Objective";
              }
                if(this.startdate == null)
               {
                this.errorsecond.startdate = "Select Application Start Date";
                }
                   if(this.enddate == null)
               {
                this.errorsecond.enddate = "Select Application End Date";
                }

         }

         
     
    },
     setcampaign(code) {
            if (code) {
                this.id = code.id;
                this.companyname = code.companyname;
            } else {
                this.id = null;
                this.companyname = null;     
            }
        },
        typepagechangep(val)
        {   var val;
            this.page = 0;
            this.typepage = val; 
        },
    typepagechange(val){
          var val =0
        
          if(this.campaigntitle != null && this.id != null)
          {   var val = 1
            
                                
                        this.selcampobj=[]; this.selcategory=[];
                       this.selcage=[]; this.selctype=[];
                       this.selcgender=[];  this.selclocation=[];
                         this.selaage=[]; this.selagender=[];
                        this.selalocation=[];


                    for(var i=0;i<this.campaignobj.length;i++){
                      this.selcampobj.push(this.campaignobj[i].name)
                    }
                      for(var i=0;i<this.scategory.length;i++){
                      this.selcategory.push(this.scategory[i].name)
                    }
                       for(var i=0;i<this.sage.length;i++){
                      this.selcage.push(this.sage[i].age)
                    }
                       for(var i=0;i<this.stype.length;i++){
                      this.selctype.push(this.stype[i].type)
                    }
                       for(var i=0;i<this.sgender.length;i++){
                      this.selcgender.push(this.sgender[i].gender)
                    }
                    //    for(var i=0;i<this.slocation.length;i++){
                    //   this.selclocation.push(this.slocation[i].city)
                    // }
                       for(var i=0;i<this.saage.length;i++){
                      this.selaage.push(this.saage[i].age)
                    }
                       for(var i=0;i<this.sagender.length;i++){
                      this.selagender.push(this.sagender[i].gender)
                    }
                    //    for(var i=0;i<this.salocation.length;i++){
                    //   this.selalocation.push(this.salocation[i].city)
                    // }
                   

                    if(this.cexpense == null)
                    {
                        this.errorlast.cexpense = "This question should be answered";
                    }
                    else{
                       var val = 2
                       this.typepage = val; 
                    }
                      this.typepage = val; 
                   
                  
                 
          } 
          else{
                if(this.campaigntitle == null)
                {
              this.errorfirst.campaigntitle = "Enter Campaign title";
                 }
                if(this.id == null)
               {
              this.errorfirst.id = "Select Id";
              }
             

          }   
       
         
    
         
    },
     
        savebutton2(){
            var self = this;
            this.errors = {
                companyname:'',
                id:'',
                cexpense:'',
                campaigntitle:'',
                campaigndes:'',
                campaignobj:'',
                startdate:'',
                enddate:'',
                otherinfo:''
            }
              axios.post('/admin/campaign/validatecamp',{
                  campaigntitle:this.campaigntitle,
                id:this.id,
                cexpense:this.cexpense,
           
                campaigndes:this.campaigndes,
                campaignobj:this.campaignobj,
                startdate:this.startdate,
                 enddate:this.enddate,
                otherinfo:this.otherinfo,
              })   
              .then(response => {
                  console.log(response);
                        if(response.data.isvalid==true){
                       document.getElementById("campaignform").submit();   
                        }
                        else{

                            self.errors=response.data.data;
                            if(self.errors.campaigntitle && self.errors.id)
                            {
                              self.typepage = 0;  
                            }
                            if(self.errors.campaigndes && self.errors.campaignobj && self.errors.startdate  && self.errors.enddate)
                            {

                              self.page = 0;
                           
                            }
                             if(self.errors.cexpense)
                            {
                              self.typepage = 1;
                           
                            }
                        }
                        
                    });
        }
  }
}
</script>