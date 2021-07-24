<template>
<div>
   <form :action="'/admin/campaign/edit/' + datas.id " method="post" id="campaignform">
       <input type="hidden" name="_token" :value="csrf" />
        <input type="hidden" name="id" v-model="id" />
        <input type="hidden" name="campaigntitle" v-model="datas.campaigntitle" />
      <input type="hidden" name="campaignobj" v-model="result1" />
        <input type="hidden" name="campaigndes" v-model="datas.campaigndes" />

        <input type="hidden" name="startdate" v-model="datas.startdate" />
           
        <input type="hidden" name="enddate" v-model="datas.enddate" />
           
             <input type="hidden" name="picked1" v-model="datas.picked1" />
      
            <input type="hidden" name="picked2" v-model="datas.picked2" />
      
            <input type="hidden" name="picked3" v-model="datas.picked3" />
           
       
            <input type="hidden" name="picked4" v-model="datas.picked4" />
       
            <input type="hidden" name="picked5" v-model="datas.picked5" />
           
      
            <input type="hidden" name="picked6" v-model="datas.picked6" />
      
            <input type="hidden" name="picked7" v-model="datas.picked7" />
           
     
            <input type="hidden" name="picked8" v-model="datas.picked8" />
           

        <input type="hidden" name="scategory" v-model="result2" />
        <input type="hidden" name="stype" v-model="result3" />
           
        <input type="hidden" name="sage" v-model="result4" />
        <input type="hidden" name="smgender" v-model="datas.smgender" />
         <input type="hidden" name="sfgender" v-model="datas.sfgender" />
           
        <input type="hidden" name="slocation" v-model="result6" />
              <input type="hidden" name="salocation" v-model="result7" />
        <input type="hidden" name="saage" v-model="result8" />
           
        <input type="hidden" name="samgender" v-model="datas.samgender" />
         <input type="hidden" name="safgender" v-model="datas.safgender" />
           

           
         <input type="hidden" name="pproduct" v-model="datas.pproduct" />
                 
        <input type="hidden" name="orderedby" v-model="datas.orderedby" />
           
        <input type="hidden" name="pprice" v-model="datas.pprice" />
         <input type="hidden" name="crange" v-model="crangeres" />
           
        <input type="hidden" name="cexpense" v-model="datas.cexpense" /> 
                
        <input type="hidden" name="otherinfo" v-model="datas.otherinfo" />
           
           
                </form>
  <div v-if="typepage == 0">
<div>

     <div class="float-right">
        <a href="/admin/campaign" class="btn btn-primary"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
    </div>
    <h3 class="mt-4">Edit Campaign  </h3>
       <div class="card mt-4 text-dark">
           <div class="card-body">


                
              
               
               <div class="row mt-2">
                   <div class="col-sm-12 mt-2 col-md-3">
                    
                           <label for="id">UID</label>
               
                        <v-select
                                    name="id"
                                    label="id"
                                    v-model="brands.id"
                                  
                                   
                                disabled>
                                  
                                </v-select>
                               
                             
                   </div>
                   <div class="col-sm-12 mt-2 col-md-3">
                  
                           <label for="companyname">Company Name</label>
                        
                    
                  
                               <v-select
                                    label="companyname"
                                    v-model="brands.companyname"
                           
                                    @input="code => setcampaign(code)"
                                disabled>
                                    <template #search="{attributes, events}">
                                        <input
                                            class="vs__search"
                                            :required="!companyname"
                                            v-bind="attributes"
                                            v-on="events"
                                               
                                        />
                                    </template>
                                </v-select>
                                 <small class="text-danger" v-if="this.brands.companyname == null">Select Company Name</small>

                   </div>

                   <div class="col-sm-12 mt-2 col-md-3">
                       <div class="form-group">
                           <label for="campaigntitle">Campaign Title <span style="color:red">*</span></label>
                           <input  type="text" class="form-control" v-model="datas.campaigntitle" placeholder="Enter Campaign Title" required>
                          <small class="text-danger" v-if="this.datas.campaigntitle == ''">Enter the Campaign Title</small>

                      
                       </div>
                     
                   </div>
                 
               </div>
            
               <div class="d-flex justify-content-end mt-2 ">
                  
                  
                    <button type="submit"  class="btn btn-success" v-on:click="typepagechange(1)"> Update Campaign</button>
               </div>
    
           </div>
       </div>



</div>



  </div>

   <div v-if="typepage == 1">



      
 <div class="float-right">
    <button v-on:click="typepagechangep(0)" class="btn btn-secondary"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</button>
</div>
<h2 class="mt-3 mb-4">Edit Campaign</h2> 


        <div class=" mt-2 card">
  <div  class="card-body text-dark">
   
<h4 class="mb-4">Campaign : {{datas.campaigntitle}}</h4> 
      




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
           
               <multiselect v-model="result1"  :options="options"   :multiple="true"  :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Campaign Objective"  :preselect-first="false">
               <!-- <template slot="selection" slot-scope="{ values, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} options selected</span></template> -->
               </multiselect>   
               <small class="text-danger" v-if="this.result1 == ''">Select Campaign Objective</small>
              
               
            </div>
          </div>
    
            <div class="form-group row mt-2">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Campaign Description<span style="color:red">*</span></label>
    <div class="col-sm-5">
      <textarea class="form-control" id="exampleFormControlTextarea1" v-model="datas.campaigndes" placeholder="Enter Campaign Description" rows="3"></textarea>
       <small class="text-danger" v-if="this.datas.campaigndes == ''">Enter the Campaign Description</small>
    </div>
  
  </div>
 
  
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Application Start Date<span style="color:red">*</span></label>
    <div class="col-sm-5">
      <input type="date" class="form-control" v-model="datas.startdate" id="inputEmail3">
        <small class="text-danger" v-if="this.datas.startdate == ''">Select the Application Start Date </small>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Application End Date<span style="color:red">*</span></label>
    <div class="col-sm-5">
      <input type="date" class="form-control" v-model="datas.enddate" id="inputEmail3">
         <small class="text-danger" v-if="this.datas.enddate == ''">Select the Application End Date </small>
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
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" v-model="datas.picked1" value="true">
                          <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                     
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions"   v-model="datas.picked1"  value="false">
                          <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                       
              </div>
          
               <div v-if="datas.picked1 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Category<span style="color:red">*</span></label>
                              <div class="col-sm-5"> 
                                <multiselect v-model="result2" :options="catoptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Category"  :preselect-first="false">
                          
                                  </multiselect>
                            

                           </div>
                        </div>
                 </div>
                <div class="form-group row">
                      <label for="type" class="col-sm-4 col-form-label">Do you have any preference for Creator Type ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked2" v-model="datas.picked2" value="true">
                          <label class="form-check-label" for="type">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked2" v-model="datas.picked2" value="false">
                          <label class="form-check-label" for="type">No</label>
                        </div>
                       
              </div>
                <div v-if="datas.picked2 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Creator Type<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                    <multiselect v-model="result3" :options="toptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Creator Type"  :preselect-first="false">
                          
                                  </multiselect>
                           </div>
                        </div>
                 </div>

                 <div class="form-group row">
                      <label for="age" class="col-sm-4 col-form-label">Do you have any preference for Creator Age ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked3" v-model="datas.picked3" value="true">
                          <label class="form-check-label" for="age">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked3" v-model="datas.picked3" value="false">
                          <label class="form-check-label" for="age">No</label>
                        </div>
                       
              </div>
                <div v-if="datas.picked3 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Creator Age<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                        <multiselect v-model="result4" :options="aoptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Creator Age"  :preselect-first="false">
                          
                                  </multiselect>
                           </div>
                        </div>
                 </div>

                 
                 <div class="form-group row">
                      <label for="gender" class="col-sm-4 col-form-label">Do you have any preference for Creator Gender ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked4" v-model="datas.picked4" value="true">
                          <label class="form-check-label" for="gender">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked4" v-model="datas.picked4" value="false">
                          <label class="form-check-label" for="gender">No</label>
                        </div>
                       
              </div>
                <div v-if="datas.picked4 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Creator Gender<span style="color:red">*</span></label>
                       <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="smgender" id="smgender" v-model="datas.smgender" value="Male">
                          <label class="form-check-label" for="smgender">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="safgender" id="sfgender"  v-model="datas.sfgender" value="Female">
                          <label class="form-check-label" for="sfgender">Female</label>
                        </div>
                             <!-- <div class="col-sm-3 mt-2">
                           <select
                              value=""
                              id="ratecreator"
                              v-model="datas.smgender"
                             
                              class="form-control form-control-sm"
                            >
                            
                              <option value="Male">Male</option>
                            
                            </select>
                           </div>
                             <div class="col-sm-3 mt-2">
                           <select
                              value=""
                              id="ratecreator"
                              v-model="datas.sfgender"
                             
                              class="form-control form-control-sm"
                            >
                            
                              <option value="Female">Female</option>
                            
                            </select>
                           </div>
                           <small class="ml-3 mt-2">Note : If you want both the male and female to participate in the campaign select male and female.</small> -->

                        </div>
                 </div>

                   <div class="form-group row">
                      <label for="location" class="col-sm-4 col-form-label">Do you have any preference for Creator Location ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked5" v-model="datas.picked5" value="true">
                          <label class="form-check-label" for="location">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="picked5" v-model="datas.picked5" value="false">
                          <label class="form-check-label" for="location">No</label>
                        </div>
                       
              </div>
                <div v-if="datas.picked5 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Creator Location<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                         <multiselect v-model="result6" :options="coptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Creator Location"  :preselect-first="false">
                          
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
                          <input class="form-check-input" type="radio" name="alocation" v-model="datas.picked6" value="true">
                          <label class="form-check-label" for="alocation">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="alocation" v-model="datas.picked6" value="false">
                          <label class="form-check-label" for="alocation">No</label>
                        </div>
                       
              </div>
               <div v-if="datas.picked6 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Location<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                      <multiselect v-model="result7" :options="coptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Location"  :preselect-first="false">
                          
                                  </multiselect>
                           </div>
                        </div>
                 </div>

                 <div class="form-group row">
                      <label for="aage" class="col-sm-5 col-form-label">Do you have any preference for Audience's Age ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="aage" v-model="datas.picked7" value="true">
                          <label class="form-check-label" for="aage">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="aage" v-model="datas.picked7" value="false">
                          <label class="form-check-label" for="aage">No</label>
                        </div>
                       
              </div>
               <div v-if="datas.picked7 == 'true'">
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Select Age<span style="color:red">*</span></label>
                            <div class="col-sm-5">
         <multiselect v-model="result8" :options="aoptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Age" :preselect-first="false">
                          
                                  </multiselect>
                           </div>
                        </div>
                 </div>

                    <div class="form-group row">
                      <label for="agender" class="col-sm-5 col-form-label">Do you have any preference for Audience's Gender ?</label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="agender" v-model="datas.picked8" value="true">
                          <label class="form-check-label" for="alocation">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="agender" v-model="datas.picked8" value="false">
                          <label class="form-check-label" for="agender">No</label>
                        </div>
                       
              </div>
               <div v-if="datas.picked8 == 'true'">
                         <div class="form-group row">
                            <label for="agender" class="col-sm-2 col-form-label">Select Gender<span style="color:red">*</span></label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="samgender" id="samgender" v-model="datas.samgender" value="Male">
                          <label class="form-check-label" for="samgender">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="safgender" id="safgender"  v-model="datas.safgender" value="Female">
                          <label class="form-check-label" for="safgender">Female</label>
                        </div>
                            <!-- <div class="col-sm-3 mt-2">
                           <select
                              value=""
                              id="ratecreator"
                              v-model="datas.samgender"
                             
                              class="form-control form-control-sm"
                            >
                            
                              <option value="Male">Male</option>
                            
                            </select>
                           </div>
                             <div class="col-sm-3 mt-2">
                           <select
                              value=""
                              id="ratecreator"
                              v-model="datas.safgender"
                             
                              class="form-control form-control-sm"
                            >
                            
                              <option value="Female">Female</option>
                            
                            </select>
                           </div>
                           <small class="ml-3 mt-2">Note : If you want both the male and female to participate in the campaign select male and female.</small> -->

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
                          <input class="form-check-input" type="radio" name="alocation" v-model="datas.pproduct" value="true">
                          <label class="form-check-label" for="alocation">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" v-model="datas.pproduct" value="false">
                          <label class="form-check-label" for="alocation">No</label>
                        </div>
                       
              </div>
               <div v-if="datas.pproduct == 'true'">
                       <div class="form-group row">
                      <label for="ordered" class="col-sm-5 col-form-label">Product will be ordered by ?<span style="color:red">*</span></label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="ordered" v-model="datas.orderedby"  value="creator">
                          <label class="form-check-label" for="alocation">Creator</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="ordered"  v-model="datas.orderedby" value="brand">
                          <label class="form-check-label" for="alocation">Brand</label>
                        </div>
                       
              </div>
                 </div>


                 <div v-if="datas.orderedby == 'creator' && datas.pproduct == 'true'">
              <div class="form-group row">
                      <label for="pprice" class="col-sm-5 col-form-label">Will the product price be reimbursed ?<span style="color:red">*</span></label>
                      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="pprice" v-model="datas.pprice" value="true">
                          <label class="form-check-label" for="pprice">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="pprice" v-model="datas.pprice" value="false">
                          <label class="form-check-label" for="pprice">No</label>
                        </div>
                       
                   </div>
                 </div>
                      <div class="form-group row">
                      <label for="pprice" class="col-sm-5 col-form-label">Commercial Range<span style="color:red">*</span></label>
                      
                        <div class="form-inline">
                          
                    <VueSimpleRangeSlider
                    style="width: 300px"
                    :min="0"
                    :max="1000000"
                    :logarithmic="false"
                    v-model="crangeres"
            />
                        </div>
                   
                        
                   </div>

                     <div class="form-group row">
                      <label for="shipping" class="col-sm-5 col-form-label">Commercial will be exclusive of all other expenses such as reimbusement of Product or shipping charges ? <span style="color:red">*</span></label>
                       
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="shipping" v-model="datas.cexpense" value="1">
                          <label class="form-check-label" for="shipping">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="shipping" v-model="datas.cexpense" value="0">
                          <label class="form-check-label" for="shipping">No</label>
                        </div>
                       
                   </div>
                          <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Any other information that you want to share regarding commercial ?</label>
                    <div class="col-sm-5">
                      <textarea class="form-control" v-model="datas.otherinfo" id="exampleFormControlTextarea1" placeholder="1000 Characters allowed" rows="3"></textarea>
                    </div>
                  </div>             

            </div>
                <div class="float-right">
                     <button
            type="button"
            class="btn btn-primary p-2"
            v-on:click="typepagechangepre(val)"
           
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
                      <button v-on:click="typepagechangep(1)" class="btn btn-primary"><i class="fa fa-pen" aria-hidden="true"></i> Edit</button>
                  </div>
              
            <h2 class="mt-3 mb-4">Preview Campaign</h2>
              
            <div class=" mt-2 card">
            <div  class="card-body text-dark">
                <div class="row mt-2">
                  <div class="col-3"><h5>Campaign Name:</h5></div>
                  <div class="col-9"><h5>{{this.datas.campaigntitle}}</h5></div>
                </div>
                  <div class="row mt-2">
                  <div class="col-3"><h5>Campaign Objective:</h5></div>
                  <div class="col-9"><h5>{{this.result1.toString()}}</h5></div>
                </div>
                    <div class="row mt-2">
                  <div class="col-3"><h5>Campaign Description:</h5></div>
                  <div class="col-9"><h5>{{this.datas.campaigndes}}</h5></div>
                </div>
                  <div class="row mt-2">
                  <div class="col-3"><h5>Application Start Date:</h5></div>
                  <div class="col-9"><h5>{{this.datas.startdate}}</h5></div>
                </div>
                     <div class="row mt-2">
                  <div class="col-3"><h5>Application End Date:</h5></div>
                  <div class="col-9"><h5>{{this.datas.enddate}}</h5></div>
                </div>
                 <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for category?</h5></div>
                     <div class="col-6 col-md-4">
                    <h5 v-if="this.datas.picked1 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.datas.picked1 == 'true'">
                  <div class="col-md-6"><h5>Category</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.result2.toString()}}</h5></div>
                </div>

                  <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Creator Type?</h5></div>
                  <div class="col-6 col-md-4">
                    <h5 v-if="this.datas.picked2 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.datas.picked2 == 'true'">
                  <div class="col-md-6"><h5>Creator Type</h5></div>
                  <div class="col-6 col-md-4"><h5> {{this.result3.toString()}}</h5></div>
                </div>
                  <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Creator Age?</h5></div>
                  <div class="col-6 col-md-4">
                       <h5 v-if="this.datas.picked3 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.datas.picked3 == 'true'">
                  <div class="col-md-6"><h5>Creator Age</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.result4.toString()}}</h5></div>
                </div>
                   <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Creator Gender?</h5></div>
                  <div class="col-6 col-md-4">
                   <h5 v-if="this.datas.picked4 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.datas.picked4 == 'true'">
                  <div class="col-md-6"><h5>Creator Gender</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.datas.smgender}},{{this.datas.sfgender}}</h5></div>
                </div>
                     <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Creator Location?</h5></div>
                  <div class="col-6 col-md-4">
                    <h5 v-if="this.datas.picked5 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.datas.picked5 == 'true'">
                  <div class="col-md-6"><h5>Creator Location</h5></div>
                  <div class="col-6 col-md-4"><h5> {{this.result6.toString()}}</h5></div>
                </div>
                     <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Audience's Location?</h5></div>
                  <div class="col-6 col-md-4">
                     <h5 v-if="this.datas.picked6 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.datas.picked6 == 'true'">
                  <div class="col-md-6"><h5>Audience Location</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.result7.toString()}} </h5></div>
                </div>
                     <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Audience's Age?</h5></div>
                  <div class="col-6 col-md-4">
                    <h5 v-if="this.datas.picked7 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.datas.picked7 == 'true'">
                  <div class="col-md-6"><h5>Audience Age</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.result8.toString()}}</h5></div>
                </div>
                     <div class="row mt-2">
                  <div class="col-md-6"><h5>Do you have any preference for Audience's Gender?</h5></div>
                  <div class="col-6 col-md-4">
                     <h5 v-if="this.datas.picked8 == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                  <div class="row mt-2" v-if="this.datas.picked8 == 'true'">
                  <div class="col-md-6"><h5>Audience Gender</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.datas.samgender}},{{this.datas.safgender}}</h5></div>
                </div>
                    <div class="row mt-2">
                  <div class="col-md-6"><h5>Will the creator require physical product for the content ?</h5></div>
                  <div class="col-6 col-md-4">
                        <h5 v-if="this.datas.pproduct == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
              
               
                     <div class="row mt-2" v-if="this.datas.pproduct == 'true'">
                  <div class="col-md-6"><h5>Products will be ordered by?</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.datas.orderedby}}</h5></div>
                </div>
                    <div class="row mt-2" v-if="this.orderedby == 'creator' && this.datas.pproduct == 'true'">
                  <div class="col-md-6"><h5>Will the product price be reimbursed?</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.datas.pprice}}</h5></div>
                </div>
                  <div class="row mt-2">
                  <div class="col-md-6"><h5>Commercial Range :</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.datas.crange}}</h5></div>
                </div>
                 <div class="row mt-2">
                  <div class="col-md-6"><h5>Commercials will be exclusive of all other expenses such as reimbursement of product or shipping charges ?</h5></div>
                  <div class="col-6 col-md-4">
                     <h5 v-if="this.datas.cexpense == 'true'">Yes</h5>
                    <h5 v-else>No</h5>
                  </div>
                </div>
                    <div class="row mt-2">
                  <div class="col-md-6"><h5>Commercials will be exclusive of all other expenses such as reimbursement of product or shipping charges ?</h5></div>
                  <div class="col-6 col-md-4">
                     <h5>Yes</h5>
                    
                  </div>
                </div>
                   <div class="row mt-2">
                  <div class="col-md-6"><h5>Other Info :</h5></div>
                  <div class="col-6 col-md-4"><h5>{{this.datas.otherinfo}}</h5></div>
                </div>

                      <div class="float-right">
                          <button v-on:click="savebutton2" class="btn btn-success"> Activate</button>
                      </div>


                    
   
                  </div>
            </div>

            </div>
            































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
  props: ['data','brand'],
  data() {
    return {
       csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
      page:0,
      datas:this.data,
      brands:this.brand,
     companyname: '',
      id: '',
      typepage:0,
      number:0,
     crange: this.crange,
        val:'',
      picked1:'',
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
        picked2:'',
          picked3:'',
        picked4:'',
          picked5:'',
           picked6:'',
        picked7:'',
          picked8:'',
             cexpense:'',
             pprice:'',
             orderedby:'',
             pproduct:'',
             campaigntitle:null,
             campaigndes:'',
             campaignobj:[],
 
            result1:'',
            result2:'',
            result3:'',
            result4:'',
            result5:'',
            result6:'',
            result7:'',
            result8:'',
            result9:'',
            crangeres:'',

             startdate:'',
             enddate:'',
             otherinfo:'',
           
        
      
             
        

       options: [
          'Brand Awarness'  ,
         'Increase Traffic' ,
         'Brand Mentions' ,
         'Product Reviews' ,
     'Giveaways'
       ],
      catoptions: [
        'Dance'  ,
       'Music' ,
        'Fashion' ,
         'Food'  ,
        'Travel' ,
       'Art' ,
      ],
       toptions: [
       'Nano'  ,
      'Micro' ,
       'Macro' ,
         'Mega'  ,
      ],
       aoptions: [
         '18-24'  ,
        '25-32' ,
      '33-40' ,
         '40+'  ,
     
      ],
       goptions: [
      'Male'  ,
     'Female' ,
       'Others' ,
      ],
         
        coptions: [
         'Mumbai'  ,
        'Delhi' ,
      'Bangalore' ,
         'Hyderabad'  ,
        'Ahmedabad' ,
        'Chennai' ,
         'Kolkata'  ,
        'Pune' ,
        'Jaipur' ,
        'Luknow'  ,
       'Nagpur' ,
     'Indore' ,
           'Bhopal'  ,
       'Visakhapatnam' ,
        'Ghaziabad' ,
        'Ludhiana'  ,
      'Agra' ,
         'Srinagar' ,
     'Ranchi' ,
         'Coimbatore' ,
      'Madurai'  ,
       'Gurgaon' ,
        'Bhubaneswar' ,
         'Kochi' ,
        'Noida' ,
         'Mangalore'  ,
       'Gaya' ,
         'Udaipur' ,
      ],       

         }
  },
  methods:
  {
      changePage(val) {
          var val;
         if(this.datas.campaigndes != ''  && this.datas.startdate != '' && this.datas.enddate != '')
              {
                       var val;
                     
                      this.page = val; 
                   
                   
               }
           else
           {
            
              if(this.datas.campaigndes == null)
                {
              this.errorsecond.campaigndes = "Enter Campaign Description";
                 }
            
                if(this.datas.startdate == null)
               {
                this.errorsecond.startdate = "Select Application Start Date";
                }
                   if(this.datas.enddate == null)
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
            typepagechangepre(val)
        {   
          if(this.datas.campaigndes != ''  && this.datas.startdate != '' && this.datas.enddate != '' )
           {   var val = 2;
            this.typepage = val; 
        }
        },
     typepagechange(val){  
   
               var val =0
        
          if(this.datas.campaigntitle != '' && this.datas.id != '' && this.brands.companyname != '')
          {   var val = 1
            
          
                 this.result1 = this.datas.campaignobj.split(","); 

                
                 
                       if(this.datas.scategory != null){                    
                   this.result2 = this.datas.scategory.split(","); 
                           }

                      if(this.datas.stype != null  ){
                   this.result3 = this.datas.stype.split(",");  
                    }
                      if(this.datas.sage != null){
                this.result4 = this.datas.sage.split(","); 
                    }
                  //     if(this.datas.sgender != null){
                  //  this.result5 = this.datas.sgender.split(","); 
                  //   }
                     if(this.datas.slocation != null){
                   this.result6 = this.datas.slocation.split(","); 
                    }
                   if(this.datas.salocation != null){
                     this.result7 = this.datas.salocation.split(",");  
                    }
                        if(this.datas.saage != null){
                    this.result8 = this.datas.saage.split(","); 
                    }
                    //     if(this.datas.sagender != null){
                    //  this.result9 = this.datas.sagender.split(","); 
                    // }
                        if(this.datas.crange != null){
                     this.crangeres = this.datas.crange.split(","); 
                    }
                      if(this.datas.orderedby == 'brand')
                         {
                           this.datas.pprice = null;
                         }

                      if(this.datas.cexpense != null)
                     {
                       
                          this.errorlast.cexpense = "Enter Campaign title";
                      }
                     
                this.typepage = val;
          }
               
               else{

                  console.log("error");
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
                  campaigntitle:this.datas.campaigntitle,
                id:this.datas.id,
                cexpense:this.datas.cexpense,
                companyname:this.datas.companyname,
                campaigndes:this.datas.campaigndes,
                campaignobj:this.datas.campaignobj,
                startdate:this.datas.startdate,
                 enddate:this.datas.enddate,
                otherinfo:this.datas.otherinfo,
              })   
              .then(response => {
                  console.log(response);
                        if(response.data.isvalid==true){
                        document.getElementById("campaignform").submit();
                        }
                        else{

                            self.errors=response.data.data;
                            if(self.errors.campaigntitle && self.errors.id && self.errors.companyname)
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