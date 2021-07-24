<template>
    <div>
                 
      <section class="py-5">

    <div class="container">
                <form :action="'/admin/campaign/newcreator/' + data.id " method="post" id="myform">
                <input type="hidden" name="_token" :value="csrf" />
                <input type="hidden" name="id" v-model="id">
                </form>
                 <div class="float-right">
                        <a :href="'/admin/campaign/view/' + data.id" class="btn btn-primary"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
                    </div>

        <!-- FOR DEMO PURPOSE -->
        <div class="row mt-2">
            <div class="col-lg-6 mx-auto">
                <header class="text-center pb-5">
                    <h1 class="h2">Add A New Creator</h1>
                    <p>Campaign Name : {{data.campaigntitle}}</p>
                </header>
            </div>
        </div><!-- END -->


        <div class="row">
            <div class="col-lg-6 mx-auto">

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded mt-4">
                    <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-plus text-white"></i></div>
                    <p class="mb-0 mt-2">

                              <div class="row mt-2">
                   <div class="col-sm-12">
                    
                           <label for="id">Enter the UID of the creator that you want to add for this campaign</label>
               
                        <v-select
                                    name="id"
                                    label="id"
                                    v-model = id
                                    :options="fin"
                                   
                                >
                                    <template #search="{attributes, events}">
                                        <input
                                            class="vs__search" 
                                            v-bind="attributes"
                                            v-on="events"
                                        />
                                    </template>
                                </v-select>
                        

                             
                   </div>
                   </div>

                       </p>
                    <footer class=" pt-4 mt-4">
                <div class="float-right">
                        <button class="btn btn-success" v-on:click="addnewc">Submit</button>
                    </div>
                    </footer>
                </blockquote><!-- END -->

            </div>
        </div>
    </div>
</section>


    </div>
</template>



<script>
    export default {
        props:[
          'data',
          'fin'
          ],
          
        data(){
              return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                page:1,
                id:''
            
           
           
              }
            },
        mounted() {
        },
        methods:{
               addnewc(){
          
                       document.getElementById("myform").submit();
           
            },
        }
    }
</script>    









<style scoped>
.blockquote-custom {
  position: relative;
  font-size: 1.1rem;
}

.blockquote-custom-icon {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: -25px;
  left: 50px;
}
</style>