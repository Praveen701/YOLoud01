<template>
  <div class="container-fluid px-5 align-middle">
     <h2 class="mt-2">Brands</h2>

     
          
     
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

  <button
      type="button"
      class="btn btn-success float-right"
      data-toggle="modal"
      data-target="#importdata"
    >
      <i class="fas fa-file-import fa-fw"></i> Bulk Upload Influencers
    </button>
    </div>

  </div>
 
      
      </div>
  </div>

<!-- 

    <a href="/admin/brand/brandexport"
 
      class="btn btn-outline-dark float-right"

    >
      <i class="fa fa-export fa-fw" aria-hidden="true"></i> Export Brand
    </a> -->


   
    <div v-if="loading" class="text-center mt-5 align-middle">
      <div
        class="spinner-border"
        style="width: 6rem; height: 6rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <table v-else class="table mt-3 table-responsive-sm">
      <thead>
        <tr class="text-center">
          <th>
            Id
           
          </th>
          <th>Date</th>
          <th>
            Name
           
          </th>
            <th>Email</th>
<!-- 
          <th>Company Name</th>

 

          <th>Designation</th>

          <th>City</th>

       

          <th>Phone Number</th>
          <th>Offering </th> -->
      


         
        </tr>
      </thead>
      <tbody>
        <tr
          v-if="datax.data.length > 0"
          v-for="(item, index) in datax.data"
          class="text-center align-middle"
        >
          <td class="align-middle">
              <a :href="'/admin/brand/edit/' + item.id">{{ item.id }}</a>
            </td>

          <td class="align-middle">
            {{ item.created_at | moment("from", "now") }}
          </td>

          <td class="align-middle">
            <a>{{ item.name }}</a>
          </td>
            <td
            class="align-middle"
        
          >
            <h6>{{ item.email }}</h6>
          </td>
 
  
   </tr>
       
        <tr v-if="datax.data.length <= 0">
          <th colspan="6" class="text-center h5 alert alert-danger">
            Oops no data found
          </th>
        </tr>
      </tbody>
    </table>
    <nav v-if="datax.last_page > 1" aria-label="Page navigation example">
      <ul class="pagination justify-content-end">
        <li class="page-item">
          <a
            class="page-link"
            v-on:click="getResults(datax.current_page - 1)"
            v-if="datax.prev_page_url"
            href="#"
            aria-label="Previous"
          >
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li
          :class="[
            datax.current_page == index ? ' active page-item' : 'page-item',
          ]"
          class="page-item"
          v-for="index in datax.last_page"
        >
          <a
            href="#"
            :class="[
              datax.current_page == index ? 'disabled page-link' : 'page-link',
            ]"
            v-on:click="getResults(index)"
            >{{ index }}</a
          >
        </li>
        <li class="page-item">
          <a
            class="page-link"
            href="#"
            v-on:click="getResults(datax.current_page + 1)"
            v-if="datax.next_page_url"
            aria-label="Next"
          >
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
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
              action="/admin/brand/importfiles"
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
  props: [],
  data() {
    return {
      loading: 1,
      datax: [],
  

      file: "",
      fil: {
        name: null,
        id: null,
        email: "",
        city:''
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
    this.getResults();
  },
  methods: {
    clearfilter() {
      this.fil = {
        name: null,
        id: null,
        email: "",
      };
      this.getResults();
    },
    
    getResults(page = 1) {
      this.loading = 1;
      axios
        .post("/admin/brand/paginate?page=" + page, {
          ord: this.filname,
          by: this.filid,
          filtername: this.fil.name,
          filterid: this.fil.id,
          filteremail: this.fil.email,
        })
        .then((response) => {
          console.log(response);
          this.datax = response.data;
          this.loading = 0;
         
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
