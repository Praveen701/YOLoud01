<template>
  <div class="container-fluid px-2 align-middle">
 

    <table class="table mt-4 table-responsive">
      <thead>
        <tr class="text-center">
           <th >
             Date of Joining
           </th>
           <th>
             UID
           </th>
           <th >
             Name
           </th>
           <th>
             Email
           </th>
             <th>
             Category
           </th>
            <th>
             Type
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
           <th>
             Audience Location
           </th>
              <th>
             Audience Age
           </th>
              <th>
             Audience Gender
           </th>
        </tr>
      </thead>
      <tbody>
        <tr   class="text-center align-middle" v-for="item,index in user.data" :key="index+'124'">
          <td >  {{item.created_at | moment('MMMM Do YYYY, h:mm a')}} </td>
          <td> 
          <a :href="'/admin/influencer/edit/' + item.id">{{item.id}} </a>
              </td>
         <td> {{item.name}}     </td>
         <td> {{item.email}}     </td>
       <td v-for="row in item.influencers"> {{JSON.parse(row.intrest)}}     </td>

        <td v-for="row in item.influencers"> {{row.inftype}}     </td>

          <td v-for="row in item.influencers"> {{row.phone}}     </td>
            <td> 
              <span v-if="item.profilestatus == 1" style="color:green">
                Approved
              </span>
                 <span v-if="item.profilestatus == 2" style="color:red">
                Rejected
              </span>
              <span v-if="item.profilestatus == 0">
                Pending Approval
              </span>
           
                </td>
            <td>  
               <span v-if="item.verified == 1">
                Yes
              </span>
              <span v-if="item.verified == 0">
                No
              </span>
                </td>
                <td v-for="row in item.instagrams"> {{row.ifollowers}}</td>
            <td v-for="row in item.instagrams"> {{row.iaudienceloc}}</td>
              <td v-for="row in item.instagrams"> {{row.iaudienceage}}</td>
                  <td v-for="row in item.instagrams"> {{row.iaudiencegen}}</td>
       
       
        </tr>
         <tr v-if="user.data.length <= 0">
          <th colspan="13" class="text-center h5 alert alert-danger">
            Oops no data found
          </th>
        </tr>
      </tbody>
    </table>



   
  </div>
</template>

<script>
export default {
  props: ["user"],
  data() {
    return {
      loading: 1,
      item:'',

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
    // this.getResults();
  },
  methods: {
    // clearfilter() {
    //   this.fil = {
    //     name: null,
    //     id: null,
    //     email: "",
    //   };
    //   this.getResults();
    // },
    // orderBy(type = "id", by = 1) {
    //   this.ord = {
    //     id: 0,
    //     name: 0,
    //     email: 0,
    //     created: 0,
    //     update: 0,
    //   };
    //   if (type == "id") {
    //     this.ord.id = by;
    //   } else if (type == "name") {
    //     this.ord.name = by;
    //   } else if (type == "email") {
    //     this.ord.email = by;
    //   } else if (type == "city") {
    //     this.ord.city = by;
    //   } else if (type == "profilestatus") {
    //     this.ord.profilestatus = by;
    //   } else if (type == "created") {
    //     this.ord.created = by;
    //   } else if (type == "update") {
    //     this.ord.update = by;
    //   }
    //   this.filname = type;
    //   this.filid = by;
    //   this.getResults(1);
    // },
    //  searchdata(){
    //             var self=this
    //             this.loading=1
    //             axios.get('/admin/influencer/search', {
    //                 params: {
    //                     searchname: this.searchname,
    //                     searchid: this.searchid,
    //                     searchemail: this.searchemail
    //                 }
    //             })
    //             .then(res => {
    //                 console.log(res.data)
    //                 self.data=res.data
    //             })
    //             this.loading=0
    //         },

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
    // getResults(page = 1) {
    //   this.loading = 1;
    //   axios
    //     .post("/admin/influencer/paginate?page=" + page, {
    //       ord: this.filname,
    //       by: this.filid,
    //       filtername: this.fil.name,
    //       filterid: this.fil.id,
    //       filteremail: this.fil.email,
    //     })
    //     .then((response) => {
    //       console.log(response);
    //       this.datax = response.data;
    //       this.loading = 0;
    //     });
    // },
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
