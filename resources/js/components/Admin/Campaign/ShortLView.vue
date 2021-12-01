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

          
              <th>Creator's Status</th>

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
        <p>Not Approved</p>  
          </span>
             <span v-if="row.profilestatus ==1">
        <p>Approved</p>  
          </span>
               <span v-if="row.profilestatus ==2">
         <p>Rejected</p> 
          </span>

       </td>
         <td
         class="align-middle" v-for="row in item.user">
         <span v-if="row.profilestatus ==0">
           <p>No</p>
          </span>
             <span v-else>
           <p >Yes</p>
          </span>
             

       </td>
     
           <td class="align-middle">
                <span v-if="item.status == 3 || item.status > 6">
                    <p>Accepted</p>
               </span>
                <span v-if="item.status == 4">
                    <p>Declined</p>
               </span>
                <span v-if="item.status == 1 || item.status == 5">
                    <p>Pending</p>
               </span>
                
                 <span v-if="item.status == 6">
                    <p>-</p>
               </span>
           </td>
           <td class="align-middle">
              <span v-if="item.status == 1 || item.status == 5">
           <button class="btn-sm btn-dark" disabled>Finalize</button>

          <button class="btn-sm btn-dark" disabled>Reject</button>
               </span>
   
      <span v-if="item.status == 3">

          <button class="btn-sm btn-success" v-on:click="finalize(item)">Finalize</button>

          <button class="btn-sm btn-danger" v-on:click="reject(item)" >Reject</button>
      </span>
           <span v-if="item.status == 4">

          <button class="btn-sm btn-primary" v-on:click="openeditmodal(item,ind)">Send Revised Offer</button>

      </span>
      <span v-if="item.status > 6">
           <button class="btn-sm btn-success" disabled>Finalized</button>
      </span>
          <span v-if="item.status == 6">
           <button class="btn-sm btn-danger" disabled>Rejected</button>
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
                   <multiselect class="col-6"  v-model="conty" :options="ctoptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Content Type" :preselect-first="false">
                
                        </multiselect>
               
              </div>
            
            </div>
              <div class="form-group">
                  <label for="otherdetails">Other Details</label>
                  <textarea  class="form-control col-11" placeholder="1000 characters allowed" v-model="otherdetails" id="otherdetails"></textarea>
              </div>
              <div class="form-group">
                  <label for="commercial">Enter the commercial that the creator will recieve on suuccessful completion of the campaign <span style="color:red">*</span> </label>
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
            'datax'
        
        
        ],
        data(){
              return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                page:1,
                ind:null,
                status:0,
                item:'',
                commercial:'',
                // contenttype:[],
           conty: this.contenttype
        ? this.contenttype
        : [],
                otherdetails:'',
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
             changePage(val) {

                  this.page = val;
     
             },
              finalize(item){
                      if(confirm("Do you really want to change status?")){
                
                var self=this
                self.status = 7;
                if(this.status!=''){
                    axios.post('/admin/campaign/finalstatus/'+item.id,{
                        
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
                      }
            },
              reject(item){
                
                      if(confirm("Do you really want to change status?")){
                
                    axios.post('/admin/campaign/adminreject/'+item.id,{
                        
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
             openeditmodal(item,ind){
              

                this.ind=ind
           
                this.commercial=item.commercial;
                this.conty= item.contenttype.replace(/[\[\]"]+/g,"").split(",");

                this.otherdetails=item.otherdetails;
               this.catid=item.id;
               
                $('#addcat').modal('show')
            },
              addcatname(){
             
                var self=this
                self.status = 5;
             
                if(this.conty !='' && this.commercial != '' && /^\d+$/.test(this.commercial)){
                   
               
                   axios.post('/admin/campaign/revisedoffer/'+this.catid,{
                         status:this.status,
                         contenttype:this.conty,
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
  

        }

    }
</script>
