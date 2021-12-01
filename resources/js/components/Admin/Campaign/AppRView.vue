<template>
    <div>

               <table  class="table mt-3 table-responsive">
     <thead>
       <tr class="text-center">
              <th>UID</th>
        <th>Name</th>
         <th>
           Category
          
         </th>
         <th>
          City
         
        </th>
           <th>
          Type
         
        </th>
 
         <th>
           Email     
         </th>
          
            <th>Phone</th>
            
        
          <th>Status</th>

          <th>Verified</th>

          
        <th>Audience Age</th>
             <th>Audience Gender</th>
              <th>Action</th>
          
            
     
        
       </tr>
     </thead>
     <tbody>

       <tr class="text-center" v-for="item in datax">
     
            
           
           <td class="align-middle">
            <p v-for="row in item.influencers">  <a :href="'/admin/influencer/edit/' + row.iid"> {{row.iid}}</a></p>
           </td>
         <td class="align-middle">
           <p v-for="row in item.user">{{row.name}} </p>
         <td class="align-middle">
       <p v-for="row in item.influencers">{{JSON.parse(row.intrest)}} </p>
         </td>
         
         <td class="align-middle">
      <p v-for="row in item.influencers">{{row.city}} </p>
       </td>
        <td class="align-middle">
      <p v-for="row in item.influencers">{{row.inftype}} </p>
       </td>
        <td class="align-middle">
         <p v-for="row in item.user">{{row.email}} </p>
       </td>
        <td class="align-middle">
         <p v-for="row in item.influencers">{{row.phone}} </p>
       </td>
       
        <td class="align-middle" v-for="row in item.user">

         <span v-if="row.profilestatus ==0">
       <p>   Not Approved</p>
          </span>
         <span v-if="row.profilestatus ==1">
       <p>  Approved</p>
          </span>
           <span v-if="row.profilestatus ==2">
       <p>   Rejected</p>
          </span>

       </td>
         <td
         class="align-middle" v-for="row in item.user">
         <span v-if="row.verified ==0">
         <p>  No</p>
          </span>
          <span v-else>
         <p>   Yes</p>
          </span>

       </td>
        
          <td class="align-middle">
      
           <p v-for="row in item.instagramusers">{{row.iaudienceage}} </p>
         </td>
           <td class="align-middle">
       
          <p v-for="row in item.instagramusers">{{row.iaudiencegen}} </p>
         </td>
           <td class="align-middle">
   
      <span v-if="item.status == 0">

          <button class="btn-sm btn-success" v-on:click="openeditmodal(item,ind)">Shortlist</button>

          <button class="btn-sm btn-danger" v-on:click="decline(item)" >Decline</button>
      </span>
      

      <span v-if="item.status != 6 && item.status > 0">
           <button class="btn-sm btn-success"  disabled>Shortlisted</button>
      </span>
      
      <span v-if="item.status == 6">
           <button class="btn-sm btn-danger"  disabled>Declined</button>
      </span>





         </td>
      
  


  </tr>

      
        <tr v-if="datax.length <= 0">
         <th  colspan="12" class="text-center h5 alert alert-danger">
           Oops no data found
         </th>
       </tr>

     </tbody>
   </table>

<div class="modal fade" id="addcat" tabindex="-1" role="dialog" aria-labelledby="addcat" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-left" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addcast">Enter Deliverables and Commercial</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <div class="row">
                <label for="contenttype" class="col-4 mt-2">Content Type <span style="color:red">*</span></label>
              
                           <multiselect class="col-6"  v-model="contenttype" :options="ctoptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Content Type" :preselect-first="false">
                
                        </multiselect>
                      
                      

              </div>
            
            </div>
              <div class="form-group">
                  <label for="otherdetails">Other Details</label>
                  <textarea  class="form-control col-11" placeholder="1000 characters allowed" v-model="otherdetails" id="otherdetails"></textarea>
              </div>
              <div class="form-group">
                  <label for="commercial">Enter the commercial that the creator will recieve on suuccessful completion of the campaign <span style="color:red">*</span></label>
                  <input  class="form-control col-11" placeholder="Enter Commercial" v-model="commercial" id="commercial">
              </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">I will do that later</button>
            <button type="button" v-on:click="addcatname(item)" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </div>
</div>




    </div>
</template>

<script>
    export default {
        props:[
          'datax',
          
        
        
        
        ],
        data(){
              return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                page:1,
                  ind:null,
                status:0,
                item:'',
                commercial:'',
                contenttype:[],
                otherdetails:'',
                data:this.datax,
             
           
          
    
                 ctoptions: [
                    'Picture'  ,
                    'Reel' ,
                  'Video' ,
                    'Story'  ,
                      
                    ],
           
           
              }
            },
        mounted() {
        },
        methods:{
             openeditmodal(item,ind){
                
            // this.contenttype = [];
                this.ind=ind
                this.commercial=item.commercial;
                this.contenttype=item.contenttype;
                this.otherdetails=item.otherdetails;
               this.catid=item.id
                $('#addcat').modal('show')
            },
              addcatname(){
             
                var self=this
                self.status = 1;
                if(this.contenttype != null && this.commercial != null && /^\d+$/.test(this.commercial)){
                   axios.post('/admin/campaign/shortlist/'+this.catid,{
                         status:this.status,
                         contenttype:this.contenttype,
                        otherdetails:this.otherdetails,
                        commercial:this.commercial
                    })
                    .then(response => {
                        if(response.data.type==1){
                            self.name=self.status;
                          self.name=self.contenttype;
                          self.name=self.otherdetails;
                            self.name=self.commercial;
                        
                        }
                         window.location.reload();
                    });
                      $('#addcat').modal('hide');
                }
                else{
                         this.$swal({
                title: "Error!",
                icon: "error",
              });
                }
                       
                
            },
             changePage(val) {

                  this.page = val;
     
             },
             
              decline(item){
              
              if(confirm("Do you really want to decline the creator?")){
                    axios.post('/admin/campaign/admindecline/'+item.id,{
                        
                        status:this.status
                    })
                    .then(response => {
                        if(response.data==1){
                            self.name=self.status;
                            self.status=''
                            window.location.reload();
                        }
                        else{
                         console.log("Error");
                        }
                    });
              }
           
            },
  

        }

    }
</script>