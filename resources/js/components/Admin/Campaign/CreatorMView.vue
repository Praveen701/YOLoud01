<template>
  <div>
             <div class="float-right mb-2">
              <a :href="'/admin/campaign/newcreator/' + data.id" class="btn btn-link"  ><i class="fa fa-caret-left" aria-hidden="true"></i> Add new creator</a>
          </div>
                 
      <!-- <form :action="'/admin/campaign/view/savecm/' + data.id" method="POST">
          <input type="hidden" name="_token" :value="csrf" />
         <div class="float-right mb-2">
           <button type="submit" class="btn btn-success">Save Creators</button>
          </div>

      </form> -->
           <table  class="table mt-3 table-responsive">
     <thead>
       <tr class="text-center">
              <th>UID</th>
        <th>Name</th>
        <th>Gender</th>
         <th>
           Category
          
         </th>
          <th>
           Type
          
         </th>
         <th>
          City
         
        </th>
        
 
         <th>
           Email     
         </th>
          
            <th>Phone</th>
            
        
          <th>Status</th>

          <th>Verified</th>

            <th>Audience Location</th>
        <th>Audience Age</th>
             <th>Audience Gender</th>
          
            
     
        
       </tr>
     </thead>
     <tbody>  
 
       <tr class="text-center" v-for="item in influencer">

       
        
           <td class="align-middle" v-for="row in item.inf">
          
              <a :href="'/admin/influencer/edit/' + row.iid"> {{row.iid}}</a>
           </td>
         <td class="align-middle" v-for="row in item.user">
            {{row.name}}
           </td>
            <td class="align-middle" v-for="row in item.inf">
            {{row.gender}}
           </td>
         <td class="align-middle" v-for="row in item.inf">
         {{JSON.parse(row.intrest)}}
         </td>
          <td class="align-middle" v-for="row in item.inf">
         {{row.inftype}}
         </td>
         
         <td class="align-middle" v-for="row in item.inf">
       {{row.city}}  
       </td>
        <td class="align-middle" v-for="row in item.user">
          {{row.email}}
       </td>
        <td class="align-middle" v-for="row in item.inf">
          {{row.phone}}
       </td>
       
        <td class="align-middle" v-for="row in item.user">
          <span v-if="row.profilestatus ==0">
          Not Approved
          </span>
             <span v-if="row.profilestatus ==1">
          Approved
          </span>
               <span v-if="row.profilestatus ==2">
          Rejected
          </span>

       </td>
         <td
         class="align-middle" v-for="row in item.user">
         <span v-if="row.verified == 0">
           No
          </span>
          <span v-else>
            Yes
          </span>

       </td>
           <td class="align-middle" v-for="row in item.insta">
             {{row.iaudienceloc}}
         </td>
          <td class="align-middle" v-for="row in item.insta">
          {{row.iaudienceage}}
         </td>
           <td class="align-middle" v-for="row in item.insta">
         {{row.iaudiencegen}}
         </td>
      
  


  </tr>

      
        <tr v-if="influencers.length <= 0">
         <th  colspan="13" class="text-center h5 alert alert-danger">
           Oops no data found
         </th>
       </tr>

     </tbody>
   </table>


        





  </div>
</template>
<script>
    export default {
        props:[
          'data',
          'influencer',
        
        ],
        data(){
              return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              datax:[],
              datas:this.data,
                influencers:this.influencer,
              
              }
            },
        mounted() {
        },
        methods:{
           
        
        }

    }
</script>