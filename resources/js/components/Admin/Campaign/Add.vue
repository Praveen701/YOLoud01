<template>
<div>

     <div class="float-right">
        <a href="/admin/campaign" class="btn btn-primary"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
    </div>
    <h3 class="mt-4">Create Campaign  </h3>
       <div class="card mt-4 text-dark">
           <div class="card-body">


                <!-- <form action="/admin/campaign/add" method="post" id="myform"> -->
        <!-- <input type="hidden" name="_token" :value="csrf" />
        <input type="hidden" name="id" v-model="id" />
        <input type="hidden" name="campaigntitle" v-model="campaigntitle" />
      <input type="hidden" name="campaignobj" v-model="campaignobj" />
        <input type="hidden" name="campaigndes" v-model="campaigndes" />

        <input type="hidden" name="startdate" v-model="startdate" />
           
        <input type="hidden" name="enddate" v-model="enddate" />
           
        <input type="hidden" name="scategory" v-model="scategory" />
        <input type="hidden" name="stype" v-model="stype" />
           
        <input type="hidden" name="sage" v-model="sage" />
        <input type="hidden" name="sgender" v-model="sgender" />
           
        <input type="hidden" name="slocation" v-model="slocation" />
        <input type="hidden" name="saage" v-model="saage" />
           
        <input type="hidden" name="sagender" v-model="sagender" />
           
        <input type="hidden" name="salocation" v-model="salocation" />
           
        <input type="hidden" name="pproduct" v-model="pproduct" />
                 
        <input type="hidden" name="orderedby" v-model="orderedby" />
           
        <input type="hidden" name="pprice" v-model="pprice" />
         <input type="hidden" name="crange" v-model="crange" />
           
        <input type="hidden" name="cexpense" v-model="cexpense" />
                
        <input type="hidden" name="otherinfo" v-model="otherinfo" />
           
           
                </form>
              -->
               
               <div class="row mt-2">
                   <div class="col-sm-12 mt-2 col-md-3">
                    
                           <label for="id">UID</label>
               
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
                                <input
                                    type="hidden"
                                    class="form-control"
                                    v-model="id"
                                    name="id"
                                  
                                />
                   </div>
                   <div class="col-sm-12 mt-2 col-md-3">
                  
                           <label for="companyname">Company Name</label>
                        
                    
                  
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
                           <label for="campaigntitle">Campaign Title</label>
                           <input  type="text" class="form-control" v-model="campaigntitle" placeholder="Enter Campaign Title">
                        
                      
                       </div>
                   </div>
                 
               </div>
               <div class="d-flex justify-content-end mt-2 ">
                  
                  
                    <!-- <button type="submit"  class="btn btn-success"> Create Campaign</button> -->
               </div>
    
           </div>
       </div>



</div>
</template>

<script>
export default {
    props: ["data"],
    data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
          
            companyname: '',
            id: '',
            campaigntitle:''
           
         
        };
    },
    mounted() {},
    methods: {
        //     this.selcampobj=[]
        // for(var i=0;i<this.campaignobj.length;i++){
        //   this.selcampobj.push(this.campaignobj[i].name)
        // }
        setcampaign(code) {
            if (code) {
                this.id = code.id;
                this.companyname = code.companyname;
      

            } else {
                this.id = null;
                this.companyname = null;
          
            }
        },
       savebutton() {
         var camapignobjassd=[];
        for(var i=0;i<this.campaignobj.length;i++){
          camapignobjassd.push(this.campaignobj[i].name)
        }
      console.log(camapignobjassd);
        document.getElementById("myform").submit();
      
       },
     
    }
};
</script>
