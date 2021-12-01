<template>
  <div class="container-fluid px-1 align-middle">
     <!-- <h2 class="mt-2">Pending Influencers List </h2>

      <div class="float-right mt-2">
          <a href="/admin/influencer/add" class="btn btn-success"
            ><i class="fa fa-plus" aria-hidden="true"></i> Add New Influencer</a
          >
        </div>

      <div class="row mt-3">
    <div class="col-8">
       <div class="row row-cols-3">
    <div class="col">

        <div class="form-group has-search">
   
    <input type="text"   v-model="fil.id"  class="form-control" placeholder="Search by Id">
  </div>

    </div>
    <div class="col">
             <div class="form-group has-search">
  
    <input type="text"     v-model="fil.email"  class="form-control" placeholder="Search by Email">
  </div>

    </div>
    <div class="col">
             <div class="form-group has-search">
    
    <input type="text"     v-model="fil.name"   class="form-control" placeholder="Search by Name">
  </div>

    </div>
    
  </div>
      </div>

    <div class="col-4">
        <div class="row">
    <div class="col-3">
          <button type="submit" v-on:click="getResults(1)" class="btn btn-secondary">Search</button>
    </div>
    <div class="col-2">
          <button type="submit" v-on:click="clearfilter(1)"  class="btn btn-outline-dark float-right">Reset</button>
    </div>
    <div class="col">


   
    </div>

  </div>
 
      
      </div>
  </div> -->



    <!-- <button
      type="button"
      class="btn btn-outline-dark float-right"
      data-toggle="modal"
      data-target="#filterinfluencer"
    >
      <i class="fa fa-filter fa-fw" aria-hidden="true"></i> Filter
    </button> -->

   

   
 
   <table class="table mt-4 table-responsive">
      <thead>
        <tr class="text-center" >
            <th >
            Date of Joining
          
          </th>
          <th >
            UID

          </th>
       
       
          <th >
            Name
          
          </th>
           <th >
            Category
          </th >
          <th>
            City
          </th>
            <th>
            Email
           
          </th>
        <th>
          Phone
        </th>
      
         

          <th>
            Status
        
          </th>
          <th>
            Verified
          </th>
            <th>
            Instagram Followers
          </th>
           <th >
            Audience Location
          </th>
          <th >
            Audience Age
          </th>
          <th>
            Audience Gender
          </th>
           <th >
            Action
          </th>
        
        
        </tr>
      </thead>
      <tbody>
        <tr
          v-if="user.data.length > 0"
          v-for="item, index in user.data"
          class="text-center align-middle " :key="index+'124'"
        >
            <td class="align-middle ">
           {{ item.created_at | moment('MMMM Do YYYY, h:mm a') }}
          </td>
          <td class="align-middle">
            <a :href="'/admin/influencer/edit/' + item.id">{{ item.id }}</a>
            </td>
     
          <td class="align-middle">
           {{ item.name }}
          </td>
           <td class="align-middle" v-for="row in item.influencers">
           {{JSON.parse(row.intrest)}} 
          </td>
            <td class="align-middle" v-for="row in item.influencers">
           {{row.city}} 
          </td>

           <td class="align-middle">
             {{ item.email }}
             </td>
           <td class="align-middle" v-for="row in item.influencers">
          {{row.phone}} 
          </td>
         
  

          <td class="align-middle text-middle">
            <span v-if="item.profilestatus == 0">Pending Approval</span>
            <span v-if="item.profilestatus == 1">Approved</span>
            <span v-if="item.profilestatus == 2">Rejected</span>
          </td>
               <td class="align-middle text-middle">
            <span v-if="item.verified == 0">No</span>
            <span v-if="item.verified == 1">Yes</span>
        
          </td>
           <td class="align-middle" v-for="row in item.instagrams">
           {{row.ifollowers}} 
          </td>
           <td class="align-middle" v-for="row in item.instagrams">
           {{row.iaudienceloc}} 
          </td>
           <td class="align-middle" v-for="row in item.instagrams">
           {{row.iaudienceage}} 
          </td>
           <td class="align-middle" v-for="row in item.instagrams">
           {{row.iaudiencegen}} 
          </td>
          <td  class="align-middle" >
              <select
                  value=""
                  id="ratecreator"
                  v-model="item.profilestatus"
                  v-on:change="profilestatus(item)"
                  class="form-control form-control-sm"
              >
                      <option value="0">Pending Approval</option>
                      <option value="1">Approved</option>
                      <option value="2">Reject</option>
                             
                 </select>
            </td>


       
      
        </tr>
        <tr v-if="user.data.length <= 0">
          <th colspan="14" class="text-center h5 alert alert-danger">
            Oops no data found
          </th>
        </tr>
      </tbody>
    </table>

    
    <div
      class="modal fade"
      id="filterinfluencer"
      tabindex="-1"
      role="dialog"
      aria-labelledby="filterinfluencer"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="filterinfluencer">
              Filter Influencers
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-right">
            <div class="row text-left">
              <div class="col-sm-12 mt-2 col-md-6">
                <div class="form-group">
                  <label for="">Id</label>
                  <input
                    type="text"
                    v-model="fil.id"
                    class="form-control"
                    name=""
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                  />
                </div>
              </div>
              <div class="col-sm-12 mt-2 col-md-6">
                <div class="form-group">
                  <label for="">Name</label>
                  <input
                    type="text"
                    v-model="fil.name"
                    class="form-control"
                    name=""
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                  />
                </div>
              </div>
              <div class="col-sm-12 mt-2 col-md-6">
                <div class="form-group">
                  <label for="">Email</label>
                  <input
                    type="text"
                    v-model="fil.email"
                    class="form-control"
                    name=""
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                  />
                </div>
              </div>
            </div>

            <button
              type="button"
              class="btn btn-outline-dark"
              v-on:click="clearfilter(1)"
            >
              Clear Filter
            </button>
            <button
              type="button"
              class="btn btn-dark"
              v-on:click="getResults(1)"
            >
              Filter
            </button>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="importdata"
      tabindex="-1"
      role="dialog"
      aria-labelledby="importdata"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="importdata">Import Files</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form
              action="/admin/influencer/importfiles"
              method="post"
              enctype="multipart/form-data"
            >
           
              <div class="form-group col-sm-12 col-md-12">
                <input type="hidden" name="_token" :value="csrf" />
                <label for="file">Upload the file</label>
                <input type="file" name="file" class="form-control" />
              </div>

              <button type="submit" class="btn btn-dark float-right">
                Import
              </button>
            </form>
          </div>
        </div>
      </div>
    </div> 

    
  </div>
</template>

<script>
export default {
  props: ['user'],
  data() {
    return {
      loading: 1,
    
     
      ord: {
        id: 1,
        name: 0,
        email: 0,
        created: 0,
        update: 0,
        city: 0,
        profilestatus: 0,
     
      },

      file: "",
      fil: {
        name: null,
        id: null,
        email: "",
        city: null,
        profilestatus: null,
      },
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      catname: null,
      filname: "id",
      filid: 1,
    };
  },
  mounted() {
  
  },
  methods: {
      profilestatus(item)
            {
              axios.post('/admin/influencer/pendinglist/'+item.id,{
                profilestatus:item.profilestatus
              })
              .then(res => {
            
                console.log(res);
                    window.location.reload();
              })
              .catch(err => {
                console.error(err); 
              })
             
            },
    

    importfile() {
      axios
        .post("/admin/influencer/importfiles", {
          file: this.file,
        })
        .then((response) => {
          console.log(response);
          this.file = null;
        });
    },
   
  },
};
</script>
<style>
.fa-stack {
  text-align: center;
}
 

.fa-stack .fa-caret-down {
  position: absolute;
  bottom: 0;
}

.fa-stack .fa-caret-up {
  position: absolute;
  top: 0;
}
</style>