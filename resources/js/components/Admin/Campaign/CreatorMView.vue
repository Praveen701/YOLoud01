<template>
  <div>
             <div class="float-right mb-2">
              <a :href="'/admin/campaign/newcreator/' + data.id" class="btn btn-link"  ><i class="fa fa-caret-left" aria-hidden="true"></i> Add new creator</a>
          </div>
           <table  class="table mt-3 table-responsive-sm">
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
 
       <tr class="text-center" v-for="item in influencers">
        
           <td class="align-middle">
          
              <a :href="'/admin/influencer/edit/' + item.iid"> {{item.iid}}</a>
           </td>
         <td class="align-middle">
            {{item.name}}
           </td>
            <td class="align-middle">
            {{item.gender}}
           </td>
         <td class="align-middle">
         {{JSON.parse(item.intrest)}}
         </td>
          <td class="align-middle">
         {{item.inftype}}
         </td>
         
         <td class="align-middle">
       {{item.city}}  
       </td>
        <td class="align-middle">
          {{item.email}}
       </td>
        <td class="align-middle">
          {{item.phone}}
       </td>
       
        <td class="align-middle">
          <span v-if="item.profilestatus ==0">
          Not Approved
          </span>
             <span v-if="item.profilestatus ==1">
          Approved
          </span>
               <span v-if="item.profilestatus ==2">
          Rejected
          </span>

       </td>
         <td
         class="align-middle">
         <span v-if="item.verified == 0">
           No
          </span>
          <span v-else>
            Yes
          </span>

       </td>
           <td class="align-middle">
             {{item.iaudienceloc}}
         </td>
          <td class="align-middle">
          {{item.iaudienceage}}
         </td>
           <td class="align-middle">
         {{item.iaudiencegen}}
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