<template>
    <div>
        <div class="">
               <p style="font-size: 22px;font-size:22px;" class="mt-5"> <b>Other Opportunities</b> </p>

               <div class="card" style="border-radius:20px">

                 

              <span v-if="offers.length > 0">

         

                     <div class="" id="accordionExample">
                             
                                <div class="container p-3 mb-4">
                                      <span v-for="off in offers">
                                            <div class="card-header mt-4" style="background-color:#f5f5f5" id="headingTwo">
                                               <div class="row ">
                                                    <div class="col-md-8 col-sm-5 col-5">
                                                       <h5 class="mt-1 dshead"><b>{{off.otitle}}</b></h5>
                                                    <p  style="color:grey;font-size:12px;"> <b class="toosm">Published on: {{off.created_at | moment('DD / MM / YYYY')}}</b></p>
                                               
                                                    </div>
                                                    <div class="col-md-3 mt-3 col-sm-4 col-5">
                                                            <a style="color:#7e7979" target="_blank" :href="'https://' +off.ocontactus">
                                                     <p class="cdes">View Opportunity <i class="fas fa-external-link-alt"></i></p> 
                                                      </a>
                                                       </div>

                                                       <div class="col-md-1 mt-2 col-2">
                                                                 <a class="btn btn-link collapsed " type="button" data-toggle="collapse" :data-target="'#F'+ off.orandom" aria-expanded="true" :aria-controls=" 'F'+off.orandom">
                                                    <i class="fas fa-chevron-down instaii" ></i>
                                                    </a>

                                                       </div>

                                                    
                                                 
                                                   
                                                   
                                                </div>
                                      

                                    </div>
                                    <div :id=" 'F'+off.orandom" class="collapse"  aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body" style="background-color:#f5f5f5">


                                        <div class="mt-2">

                                            <p class="dshead" style="color:grey;"><b>{{off.odes}}</b></p>
                                          

                                        </div>
                                      
                                      



                                    </div>
                                    </div>


                                      </span> 
                                </div>
                               
                                </div>

            
             </span>

             <span v-else>
                  <div class="mt-4 mb-5" style="text-align:center">
                      
                  
                            <img class="nodata" src="/img/nodata.PNG" alt="Responsive image" >
                  
                      

                      

                          <h1 class="display-7"></h1>
                          <p class="mt-2" style="color:#7e7979;font-size:18px;">
                         <b>Sorry, we could not find any opportunity at this moment  </b>     
                                        
                          
                          </p>
                      </div>

             </span>







               </div>

        </div>

     






    </div>
</template>

<script>
    export default {
        props:['offers'],
        data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
                collapseStates: [false]
        }
    },
  }

</script>