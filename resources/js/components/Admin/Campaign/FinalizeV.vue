<template>
  <div>

               <table  class="table mt-3 table-responsive-sm">
     <thead>
       <tr class="text-center">
              <th>UID</th>
        <th>Name</th>
        
         <th>
          City
         
        </th>
 
         <th>
           Email     
         </th>
          
            <th>Phone</th>
            
        
        

               <th>Content Type</th>
                 <th>Comercial</th>
                 
             <th>Current Status</th>
             <th>View Post</th>
             <th>Product </th>
             <th>Update Post Insights</th>
              <th>Rate Creator</th>
              
                       
          
            
     
        
       </tr>
     </thead>
     <tbody>

       <tr class="text-center" v-for="item in datax">
     
          
           
           <td class="align-middle"  >
        <span v-for="row in item.influencers">  <a :href="'/admin/influencer/edit/' + row.iid"> {{row.iid}}</a> </span>

           </td>
         <td class="align-middle">
           <span v-for="row in item.user">{{row.name}} </span>
         </td>
       
         
         <td class="align-middle">
      <span v-for="row in item.influencers">{{row.city}} </span>
       </td>
        <td class="align-middle">
         <span v-for="row in item.user">{{row.email}} </span>
       </td>
        <td class="align-middle">
         <span v-for="row in item.influencers">{{row.phone}} </span>
       </td>
       
       
          
           <td class="align-middle">

        <!-- <multiselect class="col-12"  v-model="item.contenttype" :options="ctoptions" :multiple="true" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Content Type" :preselect-first="false">
                
           </multiselect> -->
           {{item.contenttype.replace(/[\[\]"]+/g,"")}}
                   
        <!-- {{item.contenttype.toString()}} -->
           

         </td>
         <td class="align-middle">
       {{item.commercial}} 
         </td>
         <td class="align-middle">

                
                       <select
                              value=""
                              id="ratecreator"
                              v-model="item.status"
                              v-on:change="changestatus(item)"
                              class="form-control form-control-sm"
                            >
                              <option value="2">Finalized</option>
                              <option value="6">MOU Sent</option>
                              <option value="7">MOU Accepted</option>
                              <option value="8">Campaign Details Sent</option>
                              <option value="14">Product Ordered</option>
                              <option value="15">Product Received</option>
                              <option value="9">Content Received</option>
                              <option value="10">Content Approved</option>
                              <option value="11">Content Posted</option>
                              <option value="12">Post Insights Received</option>
                              <option value="13">Commercials Disbursed</option>
                            </select>
            
            
 

         </td>
         <td class="align-middle">
                <span v-if="item.posturl != null">
               
               <div class="btn-group" role="group" aria-label="Basic example">
                    <a style="cursor:pointer" class="btn-sm btn-primary mr-2" v-on:click="openeditposturl(item,ind)">Update</a>
                    <a :href="'https://' + item.posturl" target="_blank" class="btn-sm btn-secondary">View</a>
                  
                  </div>
           </span>

           <span v-if="item.posturl == null" > 

           <button class="btn-sm btn-secondary" v-on:click="openaddposturl(item,ind)">Add</button>

           </span>
      
            
         </td>
         <td>
            <span v-if="item.status < 8" > 
           <button class="btn-sm btn-dark" v-on:click="openproductorder(item,ind)" disabled>Order</button>
           </span>
           <span v-if="item.status == 8" > 
           <button class="btn-sm btn-dark" v-on:click="openproductorder(item,ind)">Order</button>
           </span>
             <span v-if="item.status > 8" > 
           <button class="btn-sm btn-warning" v-on:click="openproductdel(item,ind)">View Order Details</button>
           </span>
         </td>


         <td class="align-middle">
           <span v-if="item.posturl != null">
             <button class="btn-sm btn-primary" v-on:click="openupdateinmodal(item,ind)">Update</button>
           </span>
            <span v-else>
             <button class="btn-sm btn-dark" disabled>Update</button>
           </span>
           

         </td>
           <td class="align-middle">

        

                            <select
                              value=""
                              id="ratecreator"
                              v-model="item.ratecreator"
                              v-on:change="changestar(item,ind)"
                              class="form-control form-control-sm"
                            >
                              <option value="1">1 Star</option>
                              <option value="2">2 Star</option>
                              <option value="3">3 Star</option>
                              <option value="4">4 Star</option>
                              <option value="5">5 Star</option>
                            </select>
                             

         </td>
            
        
        
         
         
      
  


  </tr>

      
        <tr v-if="datax.length <= 0">
         <th  colspan="12" class="text-center h5 alert alert-danger">
           Oops no data found
         </th>
       </tr>

     </tbody>
   </table>




<div class="modal fade" id="addposturl" tabindex="-1" role="dialog" aria-labelledby="addposturl" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-left" role="document">
        <div class="modal-content">
        <div class="modal-header">      
                  <h5 class="modal-title" id="addcast">Enter POST URL</h5>   
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">      
              <div class="form-group">
                  <label for="posturl">Enter Post URL</label>
                  <input  class="form-control col-11" placeholder="Enter your post URL" v-model="posturl" id="posturl">
              </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" v-on:click="addposturl()" class="btn btn-primary">Add</button>     
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editposturl" tabindex="-1" role="dialog" aria-labelledby="editposturl" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-left" role="document">
        <div class="modal-content">
        <div class="modal-header">      
                  <h5 class="modal-title" id="addcast">Update POST URL</h5>   
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">      
              <div class="form-group">
                  <label for="posturl">Enter Post URL</label>
                  <input  class="form-control col-11" placeholder="Enter your post URL" v-model="posturl" id="posturl">
              </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" v-on:click="editposturl()" class="btn btn-primary">Update</button>     
        </div>
        </div>
    </div>
</div>




          <div class="modal fade" id="updatein" tabindex="-1" role="dialog" aria-labelledby="updatein" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" style="text-align:-moz-center" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                
                    
                            <h5 class="modal-title" id="addcast">Update Post Insights</h5>
                    
                    
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="row">
                  <div class="modal-body">
                        <div class="form-group">
                            <label for="posturl"><b>Views</b></label>
                            <input  class="form-control col-9"  v-model="views" id="views">
                        </div>
                  </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="posturl"><b>Likes</b></label>
                            <input  class="form-control col-9"  v-model="likes" id="likes">
                        </div>
                  </div>
                    <div class="modal-body">
                        <div class="form-group">
                          <label for="posturl"><b>Comments</b></label>
                            <input  class="form-control col-9" v-model="comments" id="comments">
                        </div>
                  </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="posturl"><b>Save</b></label>
                            <input  class="form-control col-9" v-model="save" id="save">
                        </div>
                  </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="posturl"><b>Share</b></label>
                            <input  class="form-control col-9"  v-model="share" id="share">
                        </div>
                  </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="posturl"><b>Reach</b></label>
                            <input  class="form-control col-9" v-model="reach" id="reach">
                        </div>
                  </div>
                    <div class="modal-body">
                        <div class="form-group">
                           <label for="posturl"><b>Impressions</b></label>
                            <input  class="form-control col-9"  v-model="impressions" id="impressions">
                        </div>
                  </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="ctr"><b>CTR</b></label>
                            <input  class="form-control col-9" v-model="ctr" id="ctr">
                        </div>
                  </div>
                   <div class="modal-body">
                        <div class="form-group">
                           <label for="posturl"><b>Upload Insights</b></label><br>
                           <span v-if="insphoto == null">
                              <p>No photo found</p>
                           </span>
                           <span>
                             <img :src="'/storage/uploadinsights/' + insphoto" alt="" width="100" height="100">

                             </span>
                        </div>
                        <a :href="'/admin/campaign/view/download/' + updateid">Download Insights</a>
                  </div>
                  </div>
                  
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                          <button type="button" v-on:click="updatein()" class="btn btn-primary">Update</button>
               
                    
                  </div>
                  </div>
              </div>
          </div>

          
                         <!--MArk product as ordered -->
                        <div class="modal fade" id="productorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Enter Product Order Details </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" >
                                      <div class="form-group">
                                          <label for="orderid"><b>Order ID</b></label>
                                          <input type="text"  class="form-control col-10" v-model="orderid" id="orderid">
                                      </div>
                                      <div class="form-group">
                                          <label for="pdeldate"><b>Estimated Delivery Date</b></label>
                                          <input type="date"  class="form-control col-10" v-model="pdeldate" id="pdeldate">
                                      </div>
                                </div>
                                  
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   
                                       <button type="button" class="btn btn-primary" v-on:click="proorder()">Submit</button>
                          
                                   
                                </div>
                                </div>
                            </div>
                         </div>


                             <div class="modal fade" id="productdel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Product Order Details </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" >
                                      <div class="form-group">
                                          <label for="orderid"><b>Order ID</b></label>
                                          <input type="text"  class="form-control col-10" v-model="orderid" id="orderid" >
                                      </div>
                                      <div class="form-group">
                                          <label for="pdeldate"><b>Estimated Delivery Date</b></label>
                                          <input type="date"  class="form-control col-10" v-model="pdeldate" id="pdeldate">
                                      </div>
                                         <div class="form-group">
                                          <label for="pdeldate"><b>Actual Delivery Date</b></label>
                                          <input type="date"  class="form-control col-10" v-model="precdate" id="pdeldate">
                                      </div>
                                </div>
                                  
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   
                                      
                          
                                   
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
                item:'',
                posturl:null,
                views:0,
                likes:0,
                insphoto:'',
                updateid:'',
                precdate:'',
                impressions:0,
                comments:0,
                save:0,
                share:0,
                reach:0,
                ctr:0,
                status:0,
                ratecreator:0,
                orderid:null,
                pdeldate:null,
              

            
              // conty:this.contenttype.replace(/[\[\]"]+/g,"").split(","), 
                // contenttype: this.contenttype != null ? 
                // this.contenttype.replace(/[\[\]"]+/g,"").split(",")
                // :[],
                
              otherdetails:'',
                 ctoptions: [
                  'Picture'  ,
                  'Reel' ,
                'Vedio' ,
                  'Story'  ,
                    
                  ],
                
               

           
           
              }
            },
        mounted() {
           
          //  if(this.datax != null)
          //  {
          // this.conty= this.item.contenttype.replace(/[\[\]"]+/g,"").split(",");            

          //  }
           
        },
        methods:{
             openaddposturl(item,ind){
                this.ind=ind
                this.posturl=null;
               this.catid=item.id
                $('#addposturl').modal('show')
            },
            openproductorder(item,ind){
                    this.ind=ind
                this.orderid=null;
                 this.pdeldate=null;
               this.catid=item.id
                $('#productorder').modal('show')
            },
             openeditposturl(item,ind){
               
                this.ind=ind
                this.posturl=item.posturl;
                 this.ratecreator=item.posturl;
               this.catid=item.id
                $('#editposturl').modal('show')
            },
              openupdateinmodal(item,ind){
              
                   this.ind=ind
                this.views=item.views;
                 this.likes=item.likes;
                 this.impressions=item.impressions;
                 this.comments=item.comments;
                 this.save=item.save;
                 this.share=item.share;
                 this.reach=item.reach;
                 this.ctr=item.ctr;   
                  this.cpm=item.cpm;   
                      this.insphoto=item.insphoto;   
                    this.engratew=item.engratew;   
                  this.engratewout=item.engratewout;      
               this.updateid=item.id
                $('#updatein').modal('show')
                 
            },
             openproductdel(item,ind){
              
                
                 this.orderid=item.orderid;
                 this.pdeldate=item.pdeldate;
                  this.precdate=item.precdate;                 
                $('#productdel').modal('show')
                 
            },
              addposturl(){
             
                var self=this
              
                if(this.posturl!=''){
                   axios.post('/admin/campaign/posturl/'+this.catid,{
                         posturl:this.posturl,
                      
                        
                    })
                    .then(response => {
                        if(response.data.type==1){
                            self.name=self.posturl;    
                        
                        }
                         window.location.reload();
                    });
                    
                }
               
                $('#addposturl').modal('hide')
            },
            editposturl(){
             
                var self=this
              
                if(this.posturl!=''){
                   axios.post('/admin/campaign/posturl/'+this.catid,{
                         posturl:this.posturl,
                      
                        
                    })
                    .then(response => {
                        if(response.data.type==1){
                            self.name=self.posturl;    
                        
                        }
                         window.location.reload();
                    });
                    
                }
               
                $('#editposturl').modal('hide')
            },
               proorder(){
             
                var self=this
              
               
                   axios.post('/admin/campaign/proorder/'+this.catid,{
                         orderid:this.orderid,
                         pdeldate:this.pdeldate,
                         status:this.status,
                      
                        
                    })
                    .then(response => {
                        if(response.data.type==1){
                            self.name=self.pdeldate; 
                              self.name=self.orderid;  
                              self.name=self.status;      
                        
                        }
                         window.location.reload();
                    });
                    
                
               
                $('#productorder').modal('hide')
            },
              updatein(){
             
                var self=this  
                if(this.posturl!=''){
                   axios.post('/admin/campaign/updatein/'+this.updateid,{
                         views:this.views,
                         likes:this.likes,
                         impressions:this.impressions,
                         comments:this.comments,
                         save:this.save,
                         share:this.share,
                         reach:this.reach,
                         ctr:this.ctr,
                         cpm:this.cpm,
                        engratew:this.engratew,
                         engratewout:this.engratewout,
                      
                        
                    })
                    .then(response => {
                        if(response.data.type==1){
                            self.name=self.views;
                            self.name=self.likes; 
                            self.name=self.impressions; 
                            self.name=self.save;     
                            self.name=self.share; 
                            self.name=self.reach; 
                            self.name=self.ctr; 
                            self.name=self.cpm; 
                            self.name=self.engratew; 
                            self.name=self.engratewout; 
                           
                        
                        }
                         window.location.reload();
                    });
                    
                }
               
                $('#updatein').modal('hide')
            },
            changestar(item)
            {
              axios.post('/admin/campaign/ratecreator/'+item.id,{
                ratecreator:item.ratecreator
              })
              .then(res => {
            
                console.log(res);
                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
             
            },
            //    changecontent(item)
            // {  
            //   axios.post('/admin/campaign/contenttype/'+item.id,{
            //     contenttype:item.contenttype
            //   })
            //   .then(res => {
            
            //     console.log(res);
            //         window.location.reload();
            //   })
            //   .catch(err => {
            //     console.error(err); 
            //   })
             
            // },
             changestatus(item)
            {
              axios.post('/admin/campaign/changestatus/'+item.id,{
                status:item.status
              })
              .then(res => {
            
                console.log(res);

                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
             
            },
       

          
   

        }

    }
</script>