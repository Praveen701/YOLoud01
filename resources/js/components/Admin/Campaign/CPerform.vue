<template>
    <div>
        <div class=" float-right mb-2">
        <a
        :href="'/admin/campaign/view/'+ data.id + '/exportinsights'"
      >
        <i class="fas fa-file-export fa-fw"></i> Export Insights
      </a>
      </div>
         <table  class="table mt-3 table-responsive">
     <thead>
       <tr class="text-center">
              <th>UID</th>
        <th>Name</th>
         
      
 
         <th>
           Email     
         </th>
          
            <th>Phone</th>
             <th>Audience Age </th>
              <th>Audience Gender</th>
               <th>Audience Location</th>
            


               <th>Content Type</th>
                 <th>Views</th>
                 
             <th>Likes</th>
             <th>Comments</th>
               
             <th>Save</th>
              <th>Share</th>
               <th>Reach</th>
                      
             <th>Impression</th>
              <th>CTR</th>
               <th>Engagement Rate With Views</th>
               <th>Engagement Rate Without Views</th>
                 <th>CPM</th>     
                  
          
            
     
        
       </tr>
     </thead>
     <tbody>

       <tr class="text-center" v-for="item in datax">
     
            
           
           <td class="align-middle">
           <span v-for="row in item.influencers">  <a :href="'/admin/influencer/edit/' + row.iid"> {{row.iid}}</a> </span>

           </td>
         <td class="align-middle">
           <span v-for="row in item.user">{{row.name}} </span>
        
        <td class="align-middle">
         <span v-for="row in item.user">{{row.email}} </span>
       </td>
        <td class="align-middle">
         <span v-for="row in item.influencers">{{row.phone}} </span>
       </td>
         <td class="align-middle">
         <span v-for="row in item.instagramusers">{{row.iaudienceage}} </span>
       </td>
         <td class="align-middle">
         <span v-for="row in item.instagramusers">{{row.iaudiencegen}} </span>
       </td>
         <td class="align-middle">
         <span v-for="row in item.instagramusers">{{row.iaudienceloc}} </span>
       </td>
          
           <td class="align-middle">
   
   
              {{item.contenttype.replace(/[\[\]"]+/g,"")}}

         </td>
         <td class="align-middle">
       {{item.views}} 
         </td>
         <td class="align-middle">

            {{item.likes}} 
         </td>
         <td class="align-middle">
            
               {{item.comments}}     
            
         </td>


         <td class="align-middle">
            {{item.save}} 
         </td>
           <td class="align-middle">

         {{item.share}} 

         </td>
              <td class="align-middle">

               {{item.reach}} 
         </td>
           <td class="align-middle">

               {{item.impressions}} 
         </td>
           <td class="align-middle">

               {{item.ctr}} 
         </td>
           <td class="align-middle" >
               {{item.engratew.toFixed(0)}}%
         </td>
            <td class="align-middle" >
               {{(item.engratewout.toFixed(0))}}%
         </td>
           <td class="align-middle">

                        {{ (parseInt(item.cpm).toFixed(0) )}} 
         </td>
        
        
        
         
         
      
  


  </tr>

      
        <tr v-if="datax.length <= 0">
         <th  colspan="19" class="text-center h5 alert alert-danger">
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
          'datax',
          'data'
              
        ],
        data(){
              return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                page:1,
                  ind:null,
                  engratew:'',

           
           
              }
            },
            methods:{
              changecontent(item)
            {
              axios.post('/admin/campaign/contenttype/'+item.id,{
                contenttype:item.contenttype
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