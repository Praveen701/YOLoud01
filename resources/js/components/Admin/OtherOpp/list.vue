<template>
   
<div class="container-fluid px-2 align-middle">
       
     <!-- <h2 class="mb-4">Other Opportunities</h2>

        <div class="row mt-2">
      <div class="col-sm-3">
          <div class="">
              <h6 class="text-muted text-uppercase mt-0">Total Opportunities Created</h6>
              <h2 class="" data-plugin="counterup"> {{otheropp.length}} </h2></div>
      </div>
   
      <div class="col-sm-3">
          <div class="card-box tilebox-one">
              <h6 class="text-muted text-uppercase mt-0">Opportunities in Active</h6>
              <h2 class="" data-plugin="counterup">{{act.length}}</h2></div>
      </div>
    
      <div class="col-sm-3">
          <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
              <h6 class="text-muted text-uppercase mt-0">Opportunities in Inactive</h6>
              <h2 class="" data-plugin="counterup">{{inact.length}}</h2>
              </div>
      </div>
      
     
  </div>

      <div class="float-right mt-2">
          <a href="/admin/otheropp/add" class="btn btn-success">
          <i class="fa fa-plus" aria-hidden="true"></i> Create New Opportunities</a>
        </div>
        

      <div class="row mt-3">
            <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search By Title" aria-label="Search">
      <button class="btn btn-outline-primary my-2 mr-3 my-sm-0" type="submit">Search</button>
      <button class="btn btn-outline-secondary my-2  my-sm-0" type="submit">Reset</button>
    </form>

                 </div>

 -->

 

   

  
    <table  class="table mt-3 table-responsive-sm">
      <thead>
        <tr class="text-center">
          
           <th>
            Created At
          </th>
        
          <th>
            Id
          </th>
       
          <th>
            Title
          
     
          </th>
           <th>
            Description
          </th>
          <th>
            Status
          </th>
           <th>
            Action
          </th>
           
    
        
        
        </tr>
      </thead>
      <tbody>
        <tr
          v-if="otheropp.data.length > 0"
          v-for="(item, index) in otheropp.data"
          class="text-center align-middle"
        >
            <td class="align-middle">
            {{ item.created_at | moment('MMMM Do YYYY, h:mm a') }}
          </td>
         
         
          <td class="align-middle">
            {{ item.id }}
          </td>
          
          

           <td class="align-middle">
             {{ item.otitle }}
             </td>
           <td class="align-middle" >
           {{item.odes}} 
          </td>
         
  

          <td class="align-middle text-middle">
              <span v-if="item.oppstatus == 0">
                 <toggle-button  v-on:change="changes(item)" 
             :value="false"
               :sync="false"
               :width="70"
               :height="25"
                 :labels="{checked: 'Active', unchecked: 'Inctive'}"
             color="green"
              />
              </span>
                <span v-if="item.oppstatus == 1">
                 <toggle-button  v-on:change="changein(item)" 
             :value="true"
               :sync="false"
                :width="70"
                :height="25"
             color="green"
             :labels="{checked: 'Active', unchecked: 'Inctive'}"
              />
              </span>
            

          </td>
     

           <td class="align-middle text-middle">
              <a :href="'/admin/otheropp/view/' + item.id" type="button"
               class="btn text-dark btn-outline-success"><i class="fa fa-eye"
                 aria-hidden="true fa-fw"></i></a>
              <a :href="'/admin/otheropp/edit/' + item.id" type="button"
                   class="btn text-dark btn-outline-primary"><i class="fa fa-edit"
                       aria-hidden="true fa-fw"></i></a>
               <a :href="'/admin/otheropp/deleteopp/'+item.id" type="button" class="btn text-dark btn-outline-danger">
                     <i class="fa fa-trash" aria-hidden="true fa-fw"></i></a>
          </td>
       
        

       
      
        </tr>
        <tr v-if="otheropp.data.length <= 0">
          <th colspan="6" class="text-center h5 alert alert-danger">
            Oops no data found
          </th>
        </tr>
      </tbody>
    </table>
    <!-- <nav v-if="otheropp.last_page > 1" aria-label="Page navigation example">
      <ul class="pagination justify-content-end">
        <li class="page-item">
          <a
            class="page-link"
            v-on:click="getResults(user.current_page - 1)"
            v-if="user.prev_page_url"
            href="#"
            aria-label="Previous"
          >
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li
          :class="[
            user.current_page == index ? ' active page-item' : 'page-item',
          ]"
          class="page-item"
          v-for="index in user.last_page"
        >
          <a
            href="#"
            :class="[
              user.current_page == index ? 'disabled page-link' : 'page-link',
            ]"
            v-on:click="getResults(index)"
            >{{ index }}</a
          >
        </li>
        <li class="page-item">
          <a
            class="page-link"
            href="#"
            v-on:click="getResults(user.current_page + 1)"
            v-if="user.next_page_url"
            aria-label="Next"
          >
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav> -->

 




 </div>
 
   
</template>

<script>
    export default {
        props:['otheropp','inact','act'],
        data(){
              return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                  
              
              }
            },
        mounted() {
        },
        methods:{
        changes(item)
        {
           if(item.oppstatus == 0)
          {
          axios.post('/admin/otheropp/changes/'+item.id)
          .then(res => {
            console.log(res);
            window.location.reload();
          })
          .catch(err => {
            console.error(err); 
          })
          }
        },
         changein(item)
        {
          if(item.oppstatus == 1)
          {
            axios.post('/admin/otheropp/changein/'+item.id)
          .then(res => {
            console.log(res);
            window.location.reload();
          })
          .catch(err => {
            console.error(err); 
          })
          }
          
        },

        }
    }

</script>