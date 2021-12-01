<template>
<div>

  <p class="mt-5 text-left" style="font-size:22px;"><b>Payment Preferences</b> </p>


  <div class="card bg-white p-2 mt-2 " style="border-radius: 20px;margin-bottom:3rem">
    <div class="card-body">
      <form action="/payment" method="post" id="myform">
        <input type="hidden" name="_token" :value="csrf" />
        <!-- <input type="hidden" name="intrest" v-model="userintrests" /> -->
        <input type="hidden" name="paytype" v-model="paytype" />
        <input type="hidden" name="payval" id="payval" v-model="paymentform" />

  
      
 
        <div class="container">
       
        
         <h5 class="mt-1" style="color:#7e7979"><b>How do you want to receive the commercials?</b></h5>

       <div class="form-group">
                  <!-- <label for="dob" class="form-label">Date of Birth <span style="color:red">*</span></label> -->
                  <input
                    type="hidden"
                    class="form-control"
                    id="dob"
                    @input="calcage"
                    v-model="dob"
                    placeholder="Enter Date of Birth"
                  />
                </div>

                <div class="mt-4">
                 <div class="form-check form-check-inline" v-for="payment in payments">
              <input class="form-check-input mt-1" type="radio" name="payment"   @change="changepayopt($event)" id="inlineRadio4" v-model="payoption" :value="payment">
              <label class="form-check-label campfs" for="inlineRadio4" style="color:#7e7979"><b>  {{ payment }}</b></label>
            </div>
                </div>
             
               <!-- <select
                        @change="changepayopt($event)"
                        v-model="payoption"
                        class="form-control"
                      >
                        <option v-for="payment in payments">
                          {{ payment }}
                        </option>
                      </select> -->
       

          



            <div class="row mt-4"  v-if="payoption == 'UPI'">

                <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group" >
                                    

                              <div class="form-floating" >
                                         

                                     <input
                          type="text"
                          v-model="payval.fullname"
                          class="form-control"
                          :style=" payval.fullname != '' ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' "
                           style="border-radius:10px;" 
                            id="floatingInput"
                          :disabled="payval.status == 1"
                          placeholder=" "
                        />
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>Full Name</b></label>
                           </div>
                                      
                                            
                         </div>
                   </div>

                    <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group" >
                                    

                              <div class="form-floating" >
                                         

                                     <input
                          type="text"
                          v-model="payval.upiid"
                          class="form-control"
                          :style=" payval.upiid != '' ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' "
                           style="border-radius:10px;" 
                            id="floatingInput"
                          :disabled="payval.status == 1"
                          placeholder=" "
                        />
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>UPI ID</b></label>
                           </div>
                                      
                                            
                         </div>
                   </div>

      



            </div>

            <div class="row mt-3" v-else-if="payoption == 'Bank Account Transfer'">
 
                  <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group" >
                                    

                              <div class="form-floating" >
                                         

                                     <input
                          type="text"
                          v-model="payval.accname"
                          class="form-control"
                          :style=" payval.accname != '' ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' "
                           style="border-radius:10px;" 
                            id="floatingInput"
                          :disabled="payval.status == 1"
                          placeholder=" "
                        />
                                                <label for="floatingInput" style="color:#6aa3d8"> <b> Account Holder Name</b></label>
                           </div>
                                      
                                            
                         </div>
                   </div>
                       <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group" >
                                    

                              <div class="form-floating" >
                                         

                                     <input
                          type="text"
                          v-model="payval.accno"
                          class="form-control"
                          :style=" payval.accno != '' ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' "
                           style="border-radius:10px;" 
                            id="floatingInput"
                          :disabled="payval.status == 1"
                          placeholder=" "
                        />
                                                <label for="floatingInput" style="color:#6aa3d8"> <b> Account Number</b></label>
                           </div>
                                      
                                            
                         </div>
                   </div>
                       <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group" >
                                    

                              <div class="form-floating" >
                                         

                                     <input
                          type="text"
                          v-model="payval.ifsc"
                          class="form-control"
                          :style=" payval.ifsc != '' ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' "
                           style="border-radius:10px;" 
                            id="floatingInput"
                          :disabled="payval.status == 1"
                          placeholder=" "
                        />
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>IFSC Code</b></label>
                           </div>
                                      
                                            
                         </div>
                   </div>

            </div>

            <div class="row mt-3" v-else>
                 <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group" >
                                    

                              <div class="form-floating" >
                                         

                                     <input
                          type="text"
                          v-model="payval.fullname"
                          class="form-control"
                          :style=" payval.fullname != '' ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' "
                           style="border-radius:10px;" 
                            id="floatingInput"
                          :disabled="payval.status == 1"
                          placeholder=" "
                        />
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>Full Name</b></label>
                           </div>
                                      
                                            
                         </div>
                   </div>
                                    <div class="col-sm-12 mt-2 col-md-6">
                          <div class="form-group" >
                                    

                              <div class="form-floating" >
                                         

                                     <input
                          type="text"
                          v-model="payval.paytmnumber"
                          class="form-control"
                          :style=" payval.paytmnumber != '' ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' "
                           style="border-radius:10px;" 
                            id="floatingInput"
                          :disabled="payval.status == 1"
                          placeholder=" "
                        />
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>Paytm Number</b></label>
                           </div>
                                      
                                            
                         </div>
                   </div>
                      <div class="col-sm-12 mt-2 col-md-8">
                      <div class="form-group">
                       
                      </div>
                    </div>
            

            </div>

            
 <button
            type="button"
            class="btn  mt-4"
            v-on:click="savebutton"
         style="border-radius:14px;width:7rem;background-color:#6aa3d8;color:White;"

          >
            <b>Save</b> 
          </button>





















      
        </div>
      </form>
    </div>



  </div>

</div>

</template>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
export default {
  props: [

    "intrest",
    "influencers",
     "languages",
    "profile",
    "instagram",
    "yftsocial"
  ],
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      page: 0,
      payments: ["Bank Account Transfer", "UPI", "Paytm"],
      payoption: "Bank Account Transfer",
       occupations: [ "Full-Time Social Media Influencer", "Student","Working Professional","Any Other"],
      occoption: "Working Professional",
      name: this.profile.name,
       email: this.profile.email,
           contentphoto: this.influencers.contentphoto,
      phone: this.influencers.phone,
      age: this.influencers.age,
      gender: this.influencers.gender,
      dob: this.influencers.dob,
      inftype:this.influencers.inftype,
      getd:'',

      pat1:'',

      paytx: JSON.parse(this.influencers.payment),
      paytype: "",
      paymentform: "",
      payval: "",
         dcity:this.influencers.city
       ? this.influencers.city.split(",")
        : []
       ,
      // city: this.influencers.city,
      state: this.influencers.state,
        pincode: this.influencers.pincode,
      country: this.influencers.country,
     emailstatus:this.influencers.emailstatus,
      phonestatus:this.influencers.phonestatus,
      categorystatus:this.influencers.categorystatus,
       selcity:[],
     
        editcity:'',

      insta: this.instagram,
      
         
 

      id: null,
      limitdate: "",
      value: null,
 
      payopt: {},
      occopt: {},
      audage:this.instagram.iaudienceage
       ? this.instagram.iaudienceage.split(",")
        : []
       ,
       audcity:this.instagram.iaudienceloc
       ? this.instagram.iaudienceloc.split(",")
        : []
       ,
      userintrests: this.influencers.intrest
        ? JSON.parse(this.influencers.intrest)
        : [],
           userlanguages: this.influencers.languages
        ? JSON.parse(this.influencers.languages)
        : [],
      today: 0,
    };
  },

  mounted() {
      
  

    this.today = new Date();
    var dd = this.today.getDate();
    var mm = this.today.getMonth() + 1; //January is 0!
    var yyyy = this.today.getFullYear();
    if (dd < 10) {
      dd = "0" + dd;
    }
    if (mm < 10) {
      mm = "0" + mm;
    }

    this.today = yyyy + "-" + mm + "-" + dd;

    var d = new Date(1920, 1, 1);
    var dd = d.getDate();
    var mm = d.getMonth() + 1; //January is 0!
    var yyyy = d.getFullYear();
    if (dd < 10) {
      dd = "0" + dd;
    }
    if (mm < 10) {
      mm = "0" + mm;
    }

    this.limitdate = yyyy + "-" + mm + "-" + dd;

    if (this.userlanguages != null && this.userlanguages.length > 0) {
      this.userlanguages = this.userlanguages.split(",");
   
    } else {
      this.userlanguages = [];
    }
   

    if (this.userintrests != null && this.userintrests.length > 0) {
      this.userintrests = this.userintrests.split(",");
    } else {
      this.userintrests = [];
    }
    document.getElementById("dob").setAttribute("max", this.today);
    this.payoption = this.paytx.type;
    this.paytype = this.paytx.type;
    this.payval = JSON.parse(this.paytx.value);
    this.paymentform = this.paytx.value;


     

   
  },
  methods: {
    saveChanges() {
      axios
        .post("/settings/update/" + this.id, {
          value: this.value,
        })
        .then((response) => {
          if (response.data) {
            if (response) {
              this.phone = response.data.phone;
              this.dob = response.data.dob;
              this.age = response.data.age;
              this.gender = response.data.gender;
                this.dcity = response.data.dcity;
              this.pincode = response.data.pincode;
              this.state = response.data.state;
              this.country = response.data.id;
            } else {
              this.phone = null;
              this.dcity =null;
              this.dob = null;
              this.pincode = null;
              this.age = null;
              this.gender = null;
              this.state = null;
              this.country = null;
            }
          }
        });
    },
    calcage() {
        

      if (this.today >= this.dob && this.dob >= this.limitdate) {
        var dob = new Date(this.dob);
        var month_diff = Date.now() - dob.getTime();
        var age_dt = new Date(month_diff);
        var year = age_dt.getUTCFullYear();
        var age = Math.abs(year - 1970);
        this.age = age;
      } else {
        this.$swal({
          title: "Error!",
          text: "Please Check the DOB!",
          icon: "error",
        });
      }
    },
    changePage(val) {      
                   
     this.page = val;      
    },
    

         async getdetails(){   
                       
               if(this.pincode != '')
               {
           
            const pin = this.pincode;
           const string = `https://api.postalpincode.in/pincode/${pin}/`
            const response = await axios.get(string); 
              if(response.data[0].PostOffice == null){
                    this.$swal({
                title: "Error!",
                text: "Invaild Pincode!",
                icon: "error",
              });
              }
              else{   
              this.city = response.data[0].PostOffice[0].Division;
              this.country = response.data[0].PostOffice[0].Country;
              this.state = response.data[0].PostOffice[0].State;
                  
              }                
              }
              else{
                      this.$swal({
                title: "Error!",
                text: "Invaild Pincode!",
                icon: "error",
              });
              }
        },
    

   languagecheck(val){
            if(this.userlanguages.includes(val)){
                this.userlanguages.splice(this.userlanguages.indexOf(val),1)
            }
            else{     
                    this.userlanguages.push(val)
                
            }
                 
        },
         limiter(e) {
      if(e.length > 3) {
         this.$swal({
            title: "Error!",
            text: "You can select maximum 3 options",
            icon: "error",
          });
        e.pop()
      }
    },

   

        
           
       
    intrestcheck(val) {
      if (this.userintrests.includes(val)) {
        this.userintrests.splice(this.userintrests.indexOf(val), 1);
      } else {
        if (this.userintrests.length >= 3) {
          this.$swal({
            title: "Error!",
            text: "Only 3 Intrest are allowed!",
            icon: "error",
          });
        } else {
          this.userintrests.push(val);
        }
      }
    },
    changepayopt(e) {
      if (this.payoption == this.paytx.type) {
        this.paytype = this.payoption;
        this.payval = JSON.parse(this.paytx.value);
        this.paymentform = this.paytx.value;
      } else {
        if (this.payoption == "Bank Account Transfer") {
          var x = {
            accname: "",
            accno: "",
            ifsc: "",
            status: 0,
          };
          this.paytype = this.payoption;
          this.payval = x;
        } else if (this.payoption == "Google Pay") {
          var x = {
            fullname: "",
            gpaynumber: "",
            status: 0,
          };
          this.paytype = this.payoption;
          this.payval = x;
        } else if (this.payoption == "UPI") {
          var x = {
            fullname: "",
            upiid: "",
            status: 0,
          };
          this.paytype = this.payoption;
          this.payval = x;
        } else {
          var x = {
            fullname: "",
            paytmnumber: "",
            status: 0,
          };
          this.paytype = this.payoption;
          this.payval = x;
        }
      }
    },
     changeoccopt(e) {
      if (this.occoption == this.occtx.type) {
        this.occtype = this.occoption;
        this.occval = JSON.parse(this.occtx.value);
        this.occupationform = this.occtx.value;
      } else {
        if (this.occoption == "Working Professional") {
          var x = {
            compname: "",
            designation: "",
            status: 0,
           
          };
          this.occtype = this.occoption;
          this.occval = x;
        } 
        else if (this.occoption == "Student") {
         
           var x = {
            colgname: "",
            coursename: "",
            yrofjoin: "",
            campuspro: null,
            status: 0,
          };
          this.occtype = this.occoption;
          this.occval = x;
        
        }
        else if (this.occoption == "Full-Time Social Media Influencer") {
          var x = {
         
          };
          this.occtype = this.occoption;
          this.occval = x;
        }
        else
        {
            var x = {
         
          };
          this.occtype = this.occoption;
          this.occval = x;

        }
      }
    },

    savebutton(event) {
   
      event.preventDefault();
        
     
      
       
        this.paymentform = JSON.stringify(this.payval);
  
        //  this.occupationform = JSON.stringify(this.occval);
          this.$swal({
              title: "Success!",
              timer:99999,
              text: "",
              icon: "success",
          });  
         document.getElementById("payval").value = this.paymentform;
        // document.getElementById("occval").value = this.occupationform;
        document.getElementById("myform").submit();
          
         document.getElementById("myInputFileID").submit();

     
        return true;      
   
        
    },
  },
};
</script>
