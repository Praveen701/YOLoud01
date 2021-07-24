<template>
<div>
  <div class="container-fluid px-5 align-middle">

    <h2 class="mt-2 mb-4">{{this.datas.campaigntitle}}</h2>


    <div class="row mt-2">
      
    <li v-for="item in inflists.influencers">{{item}}</li>
    
      
    
     
      <!-- end col -->
      <div class="col-sm-3">
          <div class="card-box tilebox-one">
              <h6 class="text-muted text-uppercase mt-0">Application Received</h6>
              <!-- <h2 class="" data-plugin="counterup">{{this.datas.influencerlinked.length}}</h2> -->
              </div>
      </div>
      <!-- end col -->
      <div class="col-sm-3">
          <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
              <h6 class="text-muted text-uppercase mt-0">Shortlist Creators</h6>
              <h2 class="" data-plugin="counterup">0</h2></div>
      </div>
      <div class="col-sm-3">
        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
            <h6 class="text-muted text-uppercase mt-0">Finalized Creators</h6>
            <h2 class="" data-plugin="counterup">0</h2></div>
    </div>
      <!-- end col -->
  </div>

     

    <div class=" mt-4 card">
         <div  class="card-body text-dark">
   
      




        <div class="text-right">
          <ul class="nav text-left">
         
            <li class="nav-item">
              <a
                class="nav-link btn"
                v-on:click="changePage(1)"
                v-bind:style="page == 1 ? 'color:#DDA05D;' : 'color:#01AFBA;'"
              >
                <h4>Application Received</h4></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link btn"
                v-on:click="changePage(2)"
                v-bind:style="page == 2 ? 'color:#DDA05D;' : 'color:#01AFBA;'"
              >
                <h4>Shortlist Creators</h4></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link btn"
                v-on:click="changePage(3)"
                v-bind:style="page == 3 ? 'color:#DDA05D;' : 'color:#01AFBA;'"
              >
                <h4>Finalized Creators</h4></a
              >
            </li>
             <li class="nav-item">
              <a
                class="nav-link btn"
                v-on:click="changePage(4)"
                v-bind:style="page == 4 ? 'color:#DDA05D;' : 'color:#01AFBA;'"
              >
                <h4>Campaign Performance</h4></a
              >
            </li>
         
       
      
       
          </ul>
    
          <div class="container-fluid text-left">
            <span v-if="page == 1">
                   <table  class="table mt-3 table-responsive-sm">
     <thead>
       <tr class="text-center">
        <th>Name</th>
         <th>
           Category
          
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

           <th>Audience Age</th>

            <th>Audience Location</th>

             <th>Audience Gender</th>
             <th>Action</th>
            
     
        
       </tr>
     </thead>
     <tbody>
 
       <tr class="text-center">
         <td class="align-middle">
 
           </td>
         <td class="align-middle">
         
         </td>
         
         <td class="align-middle">
       
       </td>
        <td class="align-middle">
       
       </td>
        <td class="align-middle">
       
       </td>
        <td class="align-middle">
       
       </td>
        <td class="align-middle">
       
       </td>
         <td
         class="align-middle">

       </td>
           <td class="align-middle">
        
         </td>
          <td class="align-middle">
        
         </td>
           <td class="align-middle">
        <a href="" >Accept</a> <a href="">Reject</a>
         </td>
      
  


  </tr>

      
       <tr >
         <th colspan="11" class="text-center h5 alert alert-danger">
           Oops no data found
         </th>
       </tr>

     </tbody>
   </table>

                </span>
                <span v-if="page == 2">
                </span>
                <span v-if="page == 3">
                </span>
                <span v-if="page == 4">
                </span>
                 <span v-if="page == 5">
                </span>
        </div>

        </div>
     </div>
 </div>
 </div>


    </div>

</template>



<script>
    export default {
        props:[
          'data',
         'inflist'
        
        ],
        data(){
              return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                page:1,
                datas:this.data,
                inflists:this.inflist
              }
            },
        mounted() {
        },
        methods:{
             changePage(val) {

                  this.page = val;
     
             },
        }

    }
</script>