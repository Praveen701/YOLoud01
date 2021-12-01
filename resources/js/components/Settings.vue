<template>
<div >

  <p class="mt-5 text-left" style="font-size:22px;"><b>My Profile</b> </p>


  <div class="card bg-white p-1 mt-2 " style="border-radius: 20px;margin-bottom:5rem">
    <div class="card-body">
      <form action="/settings" method="post" id="myform">
        <input type="hidden" name="_token" :value="csrf" />
        <input type="hidden" name="intrest" v-model="userintrests" />


        <input type="hidden" name="occtype" v-model="occtype" />
         <input type="hidden" name="occval" id="occval" v-model="occupationform" />
    
        <input type="hidden" name="name" v-model="name" />
         <input type="hidden" name="email" v-model="email" />
        <input type="hidden" name="phone" v-model="phone" />
        <input type="hidden" name="gender" v-model="gender" />
        <input type="hidden" name="city" v-model="dcity" />
        <input type="hidden" name="pincode" v-model="pincode" />
        <input type="hidden" name="state" v-model="state" />
        <input type="hidden" name="dob" v-model="dob" />
         <input type="hidden" name="status"    v-model="profile.status"/>
           <input type="hidden" name="accountstatus"    v-model="profile.accountstatus"/>
        <input type="hidden" name="languages" v-model="userlanguages" />
        <input type="hidden" name="country" v-model="country" />
        <input type="hidden" name="emailstatus" v-model="emailstatus"/>
         <input type="hidden" name="phonestatus" v-model="phonestatus"/>
        <input type="hidden" name="categorystatus" v-model="categorystatus"/>
        

 
        <div class="container">

        <div class="container-fluid text-left ">
           

               <h5 class="mt-2" style="color:#7e7979"><b>Let us know a little about yourself</b></h5>

                               <div class="row mt-4">

                                   <div class="col-sm-12 mt-2 col-md-6">
                                        <div class="form-group" >
                                    

                                            <div class="form-floating" >
                                              <input type="text" class="form-control" placeholder="  "  style="border-radius:10px;" 
                                            :style=" profile.name != null ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' " v-model="profile.name" id="floatingInput" >
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>Name</b></label>
                                            </div>
                                     
                                            
                                        </div>

                                    </div>

                                    <div class="col-sm-12 mt-2 col-md-6">
                                        <div class="form-group" >
                                    

                                            <div class="form-floating" >
                                              <input type="email" class="form-control" placeholder="  "  style="border-radius:10px;" 
                                            :style=" email != null ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' " v-model="email" id="floatingInput" >
                                              
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>Email</b></label>
                                          

                                            </div>
                                      
                                            
                                        </div>

                                    </div>

                                    <div class="col-sm-12 mt-2 col-md-6">
                                        <div class="form-group" >
                                    

                                            <div class="form-floating" >
                                              <input type="text" class="form-control" placeholder="  "  style="border-radius:10px;" name="phone"
                                            :style=" influencers.phone != null ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' " v-model="phone" id="floatingInput" >
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>Mobile</b></label>
                                            </div>
                                      
                                            
                                        </div>

                                    </div>

                                    <div class="col-sm-12 mt-2 col-md-6">
                                        <div class="form-group" >
                                    

                                            <!-- <div class="form-floating" >
                                              <input type="date" class="form-control"   placeholder="  "   style="border-radius:10px;" 
                                            :style=" influencers.dob != null ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;'"  @input="calcage" v-model="dob" id="floatingInput" >
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>Date of Birth</b></label>
                                            </div> -->
                     <p style="font-size: 0.87rem;color:#6aa3d8"> <b> Date of Birth</b>
                      </p> 
                      <!-- <label for="dob" style="color:#6aa3d8" class="form-label">Date of Birth</label> -->
                  <input
                    type="date"
                    style="margin: -16px 0 0 0;"
                    class="form-control "
                    id="dob"
                    @input="calcage"
                    v-model="dob"
              
                    placeholder="Enter Date of Birth"
                  />


                                      
                                            
                                        </div>

                                    </div>

                  


                               </div>

             
             
             <h5 class="mt-4" style="color:#7e7979"><b>Where do Stay ?</b></h5>



           <div class="row mt-4">

                        <div class="col-sm-12 mt-2 col-md-4">
                            <div class="form-group" >
                        

                                <div class="form-floating" >
                                  <input type="text" class="form-control" placeholder="  "  name="pincode" style="border-radius:10px;" 
                                :style=" pincode != null ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' " v-model="pincode" id="floatingInput" >
                                    <label for="floatingInput" style="color:#6aa3d8"> <b>Pincode</b></label>
                                </div>
                          
                                
                            </div>

                        </div>
                         <div class="col-sm-12 mt-2 col-md-2">
                            <div class="form-group" >
                        

                           <button type="button" class="btn btn-sm btn-outline-primary mt-3 ml-1" v-on:click="getdetails()">Get Details</button>
                          
                                
                            </div>

                        </div>
                        
                        <div class="col-sm-12 mb-2 col-md-6" >
                            <div class="form-group"  >
                        

                          
                           <label for="" style="color:#6aa3d8"> <b>City</b></label>
                                        <multiselect  v-model="dcity"  :options="ccoptions"  :multiple="false" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select City" :preselect-first="false">
                          
                       </multiselect>
                                  
                                   
                                
                           
                          
                                
                            </div>

                        </div>

                        
                        <div class="col-sm-12 mt-2 col-md-6">
                            <div class="form-group" >
                        

                                <div class="form-floating" >
                                  <input type="text" class="form-control" placeholder="  "  name="state" style="border-radius:10px;" 
                                :style=" influencers.state != null ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' 
                                " v-model="state" id="floatingInput" disabled>
                                    <label for="floatingInput" style="color:#6aa3d8"> <b>State</b></label>
                                </div>
                          
                                
                            </div>

                        </div>

                        
                        <div class="col-sm-12 mt-2 col-md-6">
                            <div class="form-group" >
                        

                                <div class="form-floating" >
                                  <input type="text" class="form-control" placeholder="  "  name="country" style="border-radius:10px;" 
                                :style=" influencers.country != null ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;'
                                 " v-model="country" id="floatingInput" disabled>
                                    <label for="floatingInput" style="color:#6aa3d8"> <b>Country</b></label>
                                </div>
                          
                                
                            </div>

                        </div>

                        
           </div>

            <h5 class="mt-4" style="color:#7e7979"><b>Help us know you better</b></h5>

            <div class="mt-4 rinline" >
         
         
              

             
        
                   <div class="form-check form-check-inline ">
              <input class="form-check-input mt-1" type="radio" name="gender" v-model="gender" id="inlineRadio1" value="Male">
              <label class="form-check-label" for="inlineRadio1" style="color:#7e7979;font-size: 0.86rem;"><b>Male</b></label>
            </div>
              
                
                      <div class="form-check form-check-inline ">
              <input class="form-check-input mt-1" type="radio" name="gender" v-model="gender" id="inlineRadio2" value="Female">
              <label class="form-check-label" for="inlineRadio2" style="color:#7e7979;font-size: 0.86rem;"><b>Female</b></label>
            </div>
               
                   
                       <div class="form-check form-check-inline ">
              <input class="form-check-input mt-1" type="radio" name="gender" v-model="gender" id="inlineRadio3" value="Other">
              <label class="form-check-label" for="inlineRadio3" style="color:#7e7979;font-size: 0.86rem;"><b>Other</b></label>
            </div>
  
             


           
                
          
             

            </div>

            

             <div class="container mt-5 rinline">

               <div class="row ">
                
                     <div class="form-check  col-md-2 col-12" v-for="occupation in occupations">
                 
              <input class="form-check-input mt-1" type="radio" name="occoption"   @change="changeoccopt($event)" id="inlineRadio4" v-model="occoption" :value="occupation">
              <label class="form-check-label" for="inlineRadio4" style="color:#7e7979;font-size: 0.86rem;"><b>  {{ occupation }}</b></label>
        

                 </div>

               </div>
          
               
               </div>

               

             <div class="row mt-4"> 

                <div class="col-sm-12 mt-2 col-md-6" v-if="occoption == 'Working Professional'">
                          <div class="form-group" >
                                    

                              <div class="form-floating" >
                                         <input type="email" class="form-control" placeholder="  " name="compname"   style="border-radius:10px;" 
                                            :style=" occval.compname != '' ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' " 
                                               v-model="occval.compname"
                                    :disabled="occval.status == 1"   id="floatingInput" >
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>Company Name</b></label>
                           </div>
                                      
                                            
                         </div>
                   </div>

                      <div class="col-sm-12 mt-2 col-md-6" v-if="occoption == 'Working Professional'">
                          <div class="form-group" >
                                    

                              <div class="form-floating" >
                                         <input type="email" class="form-control" placeholder="  " name="designation"  style="border-radius:10px;" 
                                            :style=" occval.designation != '' ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' " 
                                               v-model="occval.designation"
                                    :disabled="occval.status == 1"   id="floatingInput" >
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>Designation</b></label>
                           </div>
                                      
                                            
                         </div>
                   </div>

                      <div class="col-sm-12 col-12 mt-1 col-md-5" v-if="occoption == 'Student'">
               
                <div class="form-group row ">
               
                       <label for="agender" class="form-label mt-3 col-12 col-md-12 instaf cdesmd" style="color:#7e7979">
                    Do you want to be a part of our campus ambassador program ?
                    <a  data-toggle="tooltip" data-placement="right" title="Creators studying in college can represent their college by become a campus ambassador of their college">
                      <i class="fa fa-info-circle"></i>
                    </a>
           
                    </label>

                 </div>
              </div>
               

                 
                  <div class="mt-2 col-12 col-md-7 mt-3" v-if="occoption == 'Student'">
                    <div class="form-check form-check-inline">
              <input class="form-check-input mt-1" type="radio"  id="inlineRadio8" name="campuspro"  v-model="occval.campuspro" value="1">
              <label class="form-check-label" for="inlineRadio8" style="color:#7e7979;font-size: 0.86rem;"><b>Yes</b></label>
            </div>
               <div class="form-check form-check-inline">
              <input class="form-check-input mt-1" type="radio"  id="inlineRadio9" name="campuspro"  v-model="occval.campuspro" value="0">
              <label class="form-check-label" for="inlineRadio9" style="color:#7e7979;font-size: 0.86rem;"><b>No</b></label>
            </div>
                  </div>  
             

               <div class="col-sm-12 mt-2 col-md-6" v-if="occoption == 'Student' && occval.campuspro == 1">
                <div class="form-group">
                    <div class="form-floating" >
                    <input type="email" class="form-control" placeholder="  " name="colgname"  style="border-radius:10px;" 
                        :style=" occval.colgname != null ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' " 
                            v-model="occval.colgname"
                        :disabled="occval.status == 1"  id="floatingInput" >
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>College Name</b></label>
                           </div>
                      
                </div>
              </div>

              
               <div class="col-sm-12 mt-2 col-md-6" v-if="occoption == 'Student' && occval.campuspro == 1">
                <div class="form-group">
                  <div class="form-floating" >
                    <input type="email" class="form-control" placeholder="  "  name="coursename" style="border-radius:10px;" 
                        :style=" occval.colgname != null ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' " 
                             v-model="occval.coursename"
                        :disabled="occval.status == 1" id="floatingInput" >
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>Course Name</b></label>
                           </div>
                      
                </div>
              </div>
               <div class="col-sm-12 mt-2 col-md-6" v-if="occoption == 'Student' && occval.campuspro == 1">
                <div class="form-group">
                 <div class="form-floating" >
                    <input type="email" class="form-control" placeholder="  "  name="yrofjoin" style="border-radius:10px;" 
                        :style=" occval.yrofjoin != null ? 'border: solid 3px #6aa3d8;' : 'border: solid 3px #c4c4c4;' " 
                           v-model="occval.yrofjoin"
                        :disabled="occval.status == 1" id="floatingInput" >
                                                <label for="floatingInput" style="color:#6aa3d8"> <b>Year of Joining</b></label>
                           </div>
                      
                </div>
              </div>
      



            </div> 




          

          

           
              
  















           <h5 class="mt-4" style="color:#7e7979"><b>Which category are you into?</b></h5>


                <div class="row mt-4">
                <button
                style="border-radius:14px;"
                  type="button"
                  v-on:click="intrestcheck(item.name)"
                  :class="[
                    userintrests.includes(item.name)
                      ? 'col-sm-3 col-3  m-1 mt-2 col-md-2 btn btn-primary btn-sm '
                      : 'col-sm-3 col-3 mt-2 m-1  col-md-2 btn btn-outline-secondary btn-sm',
                  ]"
                  v-for="(item, index) in intrest"
                >
                  {{ item.name }}
                </button>
              </div>



               <h5 class="mt-4" style="color:#7e7979"><b>What are the languages that you know?</b></h5>

                <div class="row mt-4">
              
                <button
                  type="button"
                    style="border-radius:14px;"
                  v-on:click="languagecheck(item.name)"
                  :class="[
                    userlanguages.includes(item.name)
                      ?   'col-sm-3 col-3  m-1 mt-2 col-md-2 btn btn-primary btn-sm'
                      : 'col-sm-3 col-3 mt-2 m-1  col-md-2 btn btn-outline-secondary btn-sm',
                  ]"
                  v-for="(item, index) in languages"
                >
                  {{ item.name }}
                </button>
              </div>

               <button
            type="button"
            class="btn  mt-5  float-left "
            v-on:click="savebutton"
            style="width:9rem;border-radius:20px;background-color:#6aa3d8;color:White"
          >
             <b>Save Changes</b>
          </button>


      
          </div> 
        

           







         
           























      
        </div>
      </form>
    </div>



  </div>

</div>

</template>

<style scoped>
.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:visited,
.btn-primary:focus {
     background-color:#6aa3d8;
      border-color: #6aa3d8;
}
</style>

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
      // payments: ["Bank Account Transfer", "Paytm", "UPI"],
      // payoption: "Bank Account Transfer",
     occupations: ["Working Professional", "Student", "Full Time Social Media Influencer", "Any Other"],
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
       occtx: JSON.parse(this.influencers.occupation),
      occtype: "",
      occupationform: "",
      occval: "",
       
      pat1:'',

      // paytx: JSON.parse(this.influencers.payment),
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

      // insta: this.instagram,
         aaoptions: [
         '0 - 18'  ,
        '19 - 24' ,
      '25 - 32' ,
         '33 - 40'  ,
          '40 +'
         ],
          ccoptions: [
	"Achalpur",
  "Achhnera",
  "Adalaj",
  "Adilabad",
  "Adityapur",
  "Adoni",
  "Adoor",
  "Adra",
  "Adyar",
  "Afzalpur",
  "Agartala",
  "Agra",
  "Ahmedabad",
  "Ahmednagar",
  "Aizawl",
  "Ajmer",
  "Akola",
  "Akot",
  "Alappuzha",
  "Aligarh",
  "AlipurdUrban Agglomerationr",
  "Alirajpur",
  "Allahabad",
  "Alwar",
  "Amalapuram",
  "Amalner",
  "Ambejogai",
  "Ambikapur",
  "Amravati",
  "Amreli",
  "Amritsar",
  "Amroha",
  "Anakapalle",
  "Anand",
  "Anantapur",
  "Anantnag",
  "Anjangaon",
  "Anjar",
  "Ankleshwar",
  "Arakkonam",
  "Arambagh",
  "Araria",
  "Arrah",
  "Arsikere",
  "Aruppukkottai",
  "Arvi",
  "Arwal",
  "Asansol",
  "Asarganj",
  "Ashok Nagar",
  "Athni",
  "Attingal",
  "Aurangabad",
  "Aurangabad",
  "Azamgarh",
  "Bagaha",
  "Bageshwar",
  "Bahadurgarh",
  "Baharampur",
  "Bahraich",
  "Balaghat",
  "Balangir",
  "Baleshwar Town",
  "Ballari",
  "Balurghat",
  "Bankura",
  "Bapatla",
  "Baramula",
  "Barbil",
  "Bargarh",
  "Barh",
  "Baripada Town",
  "Barmer",
  "Barnala",
  "Barpeta",
  "Batala",
  "Bathinda",
  "Begusarai",
  "Belagavi",
  "Bellampalle",
  "Belonia",
  "Bengaluru",
  "Bettiah",
  "BhabUrban Agglomeration",
  "Bhadrachalam",
  "Bhadrak",
  "Bhagalpur",
  "Bhainsa",
  "Bharatpur",
  "Bharuch",
  "Bhatapara",
  "Bhavnagar",
  "Bhawanipatna",
  "Bheemunipatnam",
  "Bhilai Nagar",
  "Bhilwara",
  "Bhimavaram",
  "Bhiwandi",
  "Bhiwani",
  "Bhongir",
  "Bhopal",
  "Bhubaneswar",
  "Bhuj",
  "Bikaner",
  "Bilaspur",
  "Bobbili",
  "Bodhan",
  "Bokaro Steel City",
  "Bongaigaon City",
  "Brahmapur",
  "Buxar",
  "Byasanagar",
  "Chaibasa",
  "Chalakudy",
  "Chandausi",
  "Chandigarh",
  "Changanassery",
  "Charkhi Dadri",
  "Chatra",
  "Chennai",
  "Cherthala",
  "Chhapra",
  "Chhapra",
  "Chikkamagaluru",
  "Chilakaluripet",
  "Chirala",
  "Chirkunda",
  "Chirmiri",
  "Chittoor",
  "Chittur-Thathamangalam",
  "Coimbatore",
  "Cuttack",
  "Dalli-Rajhara",
  "Darbhanga",
  "Darjiling",
  "Davanagere",
  "Deesa",
  "Dehradun",
  "Dehri-on-Sone",
  "Delhi",
  "Deoghar",
  "Dhamtari",
  "Dhanbad",
  "Dharmanagar",
  "Dharmavaram",
  "Dhenkanal",
  "Dhoraji",
  "Dhubri",
  "Dhule",
  "Dhuri",
  "Dibrugarh",
  "Dimapur",
  "Diphu",
  "Dumka",
  "Dumraon",
  "Durg",
  "Eluru",
  "English Bazar",
  "Erode",
  "Etawah",
  "Faridabad",
  "Faridkot",
  "Farooqnagar",
  "Fatehabad",
  "Fatehpur Sikri",
  "Fazilka",
  "Firozabad",
  "Firozpur Cantt.",
  "Firozpur",
  "Forbesganj",
  "Gadwal",
  "Gandhinagar",
  "Gangarampur",
  "Ganjbasoda",
  "Gaya",
  "Giridih",
  "Goalpara",
  "Gobichettipalayam",
  "Gobindgarh",
  "Godhra",
  "Gohana",
  "Gokak",
  "Gooty",
  "Gopalganj",
  "Gudivada",
  "Gudur",
  "Gumia",
  "Guntakal",
  "Guntur",
  "Gurdaspur",
  "Gurgaon",
  "Guruvayoor",
  "Guwahati",
  "Gwalior",
  "Habra",
  "Hajipur",
  "Haldwani-cum-Kathgodam",
  "Hansi",
  "Hapur",
  "Hardoi ",
  "Hardwar",
  "Hazaribag",
  "Hindupur",
  "Hisar",
  "Hoshiarpur",
  "Hubli-Dharwad",
  "Hugli-Chinsurah",
  "Hyderabad",
  "Ichalkaranji",
  "Imphal",
  "Indore",
  "Itarsi",
  "Jabalpur",
  "Jagdalpur",
  "Jaggaiahpet",
  "Jagraon",
  "Jagtial",
  "Jaipur",
  "Jalandhar Cantt.",
  "Jalandhar",
  "Jalpaiguri",
  "Jamalpur",
  "Jammalamadugu",
  "Jammu",
  "Jamnagar",
  "Jamshedpur",
  "Jamui",
  "Jangaon",
  "Jatani",
  "Jehanabad",
  "Jhansi",
  "Jhargram",
  "Jharsuguda",
  "Jhumri Tilaiya",
  "Jind",
  "Jodhpur",
  "Jorhat",
  "Kadapa",
  "Kadi",
  "Kadiri",
  "Kagaznagar",
  "Kailasahar",
  "Kaithal",
  "Kakinada",
  "Kalimpong",
  "Kalpi",
  "Kalyan-Dombivali",
  "Kamareddy",
  "Kancheepuram",
  "Kandukur",
  "Kanhangad",
  "Kannur",
  "Kanpur",
  "Kapadvanj",
  "Kapurthala",
  "Karaikal",
  "Karimganj",
  "Karimnagar",
  "Karjat",
  "Karnal",
  "Karur",
  "Karwar",
  "Kasaragod",
  "Kashipur",
  "KathUrban Agglomeration",
  "Katihar",
  "Kavali",
  "Kayamkulam",
  "Kendrapara",
  "Kendujhar",
  "Keshod",
  "Khair",
  "Khambhat",
  "Khammam",
  "Khanna",
  "Kharagpur",
  "Kharar",
  "Khowai",
  "Kishanganj",
  "Kochi",
  "Kodungallur",
  "Kohima",
  "Kolar",
  "Kolkata",
  "Kollam",
  "Koratla",
  "Korba",
  "Kot Kapura",
  "Kota",
  "Kothagudem",
  "Kottayam",
  "Kovvur",
  "Koyilandy",
  "Kozhikode",
  "Kunnamkulam",
  "Kurnool",
  "Kyathampalle",
  "Lachhmangarh",
  "Ladnu",
  "Ladwa",
  "Lahar",
  "Laharpur",
  "Lakheri",
  "Lakhimpur",
  "Lakhisarai",
  "Lakshmeshwar",
  "Lal Gopalganj Nindaura",
  "Lalganj",
  "Lalganj",
  "Lalgudi",
  "Lalitpur",
  "Lalsot",
  "Lanka",
  "Lar",
  "Lathi",
  "Latur",
  "Lilong",
  "Limbdi",
  "Lingsugur",
  "Loha",
  "Lohardaga",
  "Lonar",
  "Lonavla",
  "Longowal",
  "Loni",
  "Losal",
  "Lucknow",
  "Ludhiana",
  "Lumding",
  "Lunawada",
  "Lunglei",
  "Macherla",
  "Machilipatnam",
  "Madanapalle",
  "Maddur",
  "Madhepura",
  "Madhubani",
  "Madhugiri",
  "Madhupur",
  "Madikeri",
  "Madurai",
  "Magadi",
  "Mahad",
  "Mahalingapura",
  "Maharajganj",
  "Maharajpur",
  "Mahasamund",
  "Mahbubnagar",
  "Mahe",
  "Mahemdabad",
  "Mahendragarh",
  "Mahesana",
  "Mahidpur",
  "Mahnar Bazar",
  "Mahuva",
  "Maihar",
  "Mainaguri",
  "Makhdumpur",
  "Makrana",
  "Malaj Khand",
  "Malappuram",
  "Malavalli",
  "Malda",
  "Malegaon",
  "Malerkotla",
  "Malkangiri",
  "Malkapur",
  "Malout",
  "Malpura",
  "Malur",
  "Manachanallur",
  "Manasa",
  "Manavadar",
  "Manawar",
  "Mancherial",
  "Mandalgarh",
  "Mandamarri",
  "Mandapeta",
  "Mandawa",
  "Mandi Dabwali",
  "Mandi",
  "Mandideep",
  "Mandla",
  "Mandsaur",
  "Mandvi",
  "Mandya",
  "Manendragarh",
  "Maner",
  "Mangaldoi",
  "Mangaluru",
  "Mangalvedhe",
  "Manglaur",
  "Mangrol",
  "Mangrol",
  "Mangrulpir",
  "Manihari",
  "Manjlegaon",
  "Mankachar",
  "Manmad",
  "Mansa",
  "Mansa",
  "Manuguru",
  "Manvi",
  "Manwath",
  "Mapusa",
  "Margao",
  "Margherita",
  "Marhaura",
  "Mariani",
  "Marigaon",
  "Markapur",
  "Marmagao",
  "Masaurhi",
  "Mathabhanga",
  "Mathura",
  "Mattannur",
  "Mauganj",
  "Mavelikkara",
  "Mavoor",
  "Mayang Imphal",
  "Medak",
  "Medininagar (Daltonganj)",
  "Medinipur",
  "Meerut",
  "Mehkar",
  "Memari",
  "Merta City",
  "Mhaswad",
  "Mhow Cantonment",
  "Mhowgaon",
  "Mihijam",
  "Mira-Bhayandar",
  "Mirganj",
  "Miryalaguda",
  "Modasa",
  "Modinagar",
  "Moga",
  "Mohali",
  "Mokameh",
  "Mokokchung",
  "Monoharpur",
  "Moradabad",
  "Morena",
  "Morinda, India",
  "Morshi",
  "Morvi",
  "Motihari",
  "Motipur",
  "Mount Abu",
  "Mudabidri",
  "Mudalagi",
  "Muddebihal",
  "Mudhol",
  "Mukerian",
  "Mukhed",
  "Muktsar",
  "Mul",
  "Mulbagal",
  "Multai",
  "Mumbai",
  "Mundargi",
  "Mundi",
  "Mungeli",
  "Munger",
  "Murliganj",
  "Murshidabad",
  "Murtijapur",
  "Murwara (Katni)",
  "Musabani",
  "Mussoorie",
  "Muvattupuzha",
  "Muzaffarpur",
  "Mysore",
  "Nabadwip",
  "Nabarangapur",
  "Nabha",
  "Nadbai",
  "Nadiad",
  "Nagaon",
  "Nagapattinam",
  "Nagar",
  "Nagari",
  "Nagarkurnool",
  "Nagaur",
  "Nagda",
  "Nagercoil",
  "Nagina",
  "Nagla",
  "Nagpur",
  "Nahan",
  "Naharlagun",
  "Naidupet",
  "Naihati",
  "Naila Janjgir",
  "Nainital",
  "Nainpur",
  "Najibabad",
  "Nakodar",
  "Nakur",
  "Nalbari",
  "Namagiripettai",
  "Namakkal",
  "Nanded-Waghala",
  "Nandgaon",
  "Nandivaram-Guduvancheri",
  "Nandura",
  "Nandurbar",
  "Nandyal",
  "Nangal",
  "Nanjangud",
  "Nanjikottai",
  "Nanpara",
  "Narasapuram",
  "Narasaraopet",
  "Naraura",
  "Narayanpet",
  "Nargund",
  "Narkatiaganj",
  "Narkhed",
  "Narnaul",
  "Narsinghgarh",
  "Narsinghgarh",
  "Narsipatnam",
  "Narwana",
  "Nashik",
  "Nasirabad",
  "Natham",
  "Nathdwara",
  "Naugachhia",
  "Naugawan Sadat",
  "Nautanwa",
  "Navalgund",
  "Navsari",
  "Nawabganj",
  "Nawada",
  "Nawanshahr",
  "Nawapur",
  "Nedumangad",
  "Neem-Ka-Thana",
  "Neemuch",
  "Nehtaur",
  "Nelamangala",
  "Nellikuppam",
  "Nellore",
  "Nepanagar",
  "New Delhi",
  "Neyveli (TS)",
  "Neyyattinkara",
  "Nidadavole",
  "Nilambur",
  "Nilanga",
  "Nimbahera",
  "Nirmal",
  "Niwai",
  "Niwari",
  "Nizamabad",
  "Nohar",
  "Noida",
  "Nokha",
  "Nokha",
  "Nongstoin",
  "Noorpur",
  "North Lakhimpur",
  "Nowgong",
  "Nowrozabad (Khodargama)",
  "Nuzvid",
  "O' Valley",
  "Obra",
  "Oddanchatram",
  "Ongole",
  "Orai",
  "Osmanabad",
  "Ottappalam",
  "Ozar",
  "P.N.Patti",
  "Pachora",
  "Pachore",
  "Pacode",
  "Padmanabhapuram",
  "Padra",
  "Padrauna",
  "Paithan",
  "Pakaur",
  "Palacole",
  "Palai",
  "Palakkad",
  "Palampur",
  "Palani",
  "Palanpur",
  "Palasa Kasibugga",
  "Palghar",
  "Pali",
  "Pali",
  "Palia Kalan",
  "Palitana",
  "Palladam",
  "Pallapatti",
  "Pallikonda",
  "Palwal",
  "Palwancha",
  "Panagar",
  "Panagudi",
  "Panaji",
  "Panamattom",
  "Panchkula",
  "Panchla",
  "Pandharkaoda",
  "Pandharpur",
  "Pandhurna",
  "PandUrban Agglomeration",
  "Panipat",
  "Panna",
  "Panniyannur",
  "Panruti",
  "Panvel",
  "Pappinisseri",
  "Paradip",
  "Paramakudi",
  "Parangipettai",
  "Parasi",
  "Paravoor",
  "Parbhani",
  "Pardi",
  "Parlakhemundi",
  "Parli",
  "Partur",
  "Parvathipuram",
  "Pasan",
  "Paschim Punropara",
  "Pasighat",
  "Patan",
  "Pathanamthitta",
  "Pathankot",
  "Pathardi",
  "Pathri",
  "Patiala",
  "Patna",
  "Patratu",
  "Pattamundai",
  "Patti",
  "Pattran",
  "Pattukkottai",
  "Patur",
  "Pauni",
  "Pauri",
  "Pavagada",
  "Pedana",
  "Peddapuram",
  "Pehowa",
  "Pen",
  "Perambalur",
  "Peravurani",
  "Peringathur",
  "Perinthalmanna",
  "Periyakulam",
  "Periyasemur",
  "Pernampattu",
  "Perumbavoor",
  "Petlad",
  "Phagwara",
  "Phalodi",
  "Phaltan",
  "Phillaur",
  "Phulabani",
  "Phulera",
  "Phulpur",
  "Phusro",
  "Pihani",
  "Pilani",
  "Pilibanga",
  "Pilibhit",
  "Pilkhuwa",
  "Pindwara",
  "Pinjore",
  "Pipar City",
  "Pipariya",
  "Piriyapatna",
  "Piro",
  "Pithampur",
  "Pithapuram",
  "Pithoragarh",
  "Pollachi",
  "Polur",
  "Pondicherry",
  "Ponnani",
  "Ponneri",
  "Ponnur",
  "Porbandar",
  "Porsa",
  "Port Blair",
  "Powayan",
  "Prantij",
  "Pratapgarh",
  "Pratapgarh",
  "Prithvipur",
  "Proddatur",
  "Pudukkottai",
  "Pudupattinam",
  "Pukhrayan",
  "Pulgaon",
  "Puliyankudi",
  "Punalur",
  "Punch",
  "Pune",
  "Punganur",
  "Punjaipugalur",
  "Puranpur",
  "Puri",
  "Purna",
  "Purnia",
  "PurqUrban Agglomerationzi",
  "Purulia",
  "Purwa",
  "Pusad",
  "Puthuppally",
  "Puttur",
  "Puttur",
  "Qadian",
  "Raayachuru",
  "Rabkavi Banhatti",
  "Radhanpur",
  "Rae Bareli",
  "Rafiganj",
  "Raghogarh-Vijaypur",
  "Raghunathganj",
  "Raghunathpur",
  "Rahatgarh",
  "Rahuri",
  "Raiganj",
  "Raigarh",
  "Raikot",
  "Raipur",
  "Rairangpur",
  "Raisen",
  "Raisinghnagar",
  "Rajagangapur",
  "Rajahmundry",
  "Rajakhera",
  "Rajaldesar",
  "Rajam",
  "Rajampet",
  "Rajapalayam",
  "Rajauri",
  "Rajgarh (Alwar)",
  "Rajgarh (Churu)",
  "Rajgarh",
  "Rajgir",
  "Rajkot",
  "Rajnandgaon",
  "Rajpipla",
  "Rajpura",
  "Rajsamand",
  "Rajula",
  "Rajura",
  "Ramachandrapuram",
  "Ramagundam",
  "Ramanagaram",
  "Ramanathapuram",
  "Ramdurg",
  "Rameshwaram",
  "Ramganj Mandi",
  "Ramgarh",
  "Ramnagar",
  "Ramnagar",
  "Ramngarh",
  "Rampur Maniharan",
  "Rampur",
  "Rampura Phul",
  "Rampurhat",
  "Ramtek",
  "Ranaghat",
  "Ranavav",
  "Ranchi",
  "Ranebennuru",
  "Rangia",
  "Rania",
  "Ranibennur",
  "Ranipet",
  "Rapar",
  "Rasipuram",
  "Rasra",
  "Ratangarh",
  "Rath",
  "Ratia",
  "Ratlam",
  "Ratnagiri",
  "Rau",
  "Raurkela",
  "Raver",
  "Rawatbhata",
  "Rawatsar",
  "Raxaul Bazar",
  "Rayachoti",
  "Rayadurg",
  "Rayagada",
  "Reengus",
  "Rehli",
  "Renigunta",
  "Renukoot",
  "Reoti",
  "Repalle",
  "Revelganj",
  "Rewa",
  "Rewari",
  "Rishikesh",
  "Risod",
  "Robertsganj",
  "Robertson Pet",
  "Rohtak",
  "Ron",
  "Roorkee",
  "Rosera",
  "Rudauli",
  "Rudrapur",
  "Rudrapur",
  "Rupnagar",
  "Sabalgarh",
  "Sadabad",
  "Sadalagi",
  "Sadasivpet",
  "Sadri",
  "Sadulpur",
  "Sadulshahar",
  "Safidon",
  "Safipur",
  "Sagar",
  "Sagara",
  "Sagwara",
  "Saharanpur",
  "Saharsa",
  "Sahaspur",
  "Sahaswan",
  "Sahawar",
  "Sahibganj",
  "Sahjanwa",
  "Saidpur",
  "Saiha",
  "Sailu",
  "Sainthia",
  "Sakaleshapura",
  "Sakti",
  "Salaya",
  "Salem",
  "Salur",
  "Samalkha",
  "Samalkot",
  "Samana",
  "Samastipur",
  "Sambalpur",
  "Sambhal",
  "Sambhar",
  "Samdhan",
  "Samthar",
  "Sanand",
  "Sanawad",
  "Sanchore",
  "Sandi",
  "Sandila",
  "Sanduru",
  "Sangamner",
  "Sangareddy",
  "Sangaria",
  "Sangli",
  "Sangole",
  "Sangrur",
  "Sankarankovil",
  "Sankari",
  "Sankeshwara",
  "Santipur",
  "Sarangpur",
  "Sardarshahar",
  "Sardhana",
  "Sarni",
  "Sarsod",
  "Sasaram",
  "Sasvad",
  "Satana",
  "Satara",
  "Sathyamangalam",
  "Satna",
  "Sattenapalle",
  "Sattur",
  "Saunda",
  "Saundatti-Yellamma",
  "Sausar",
  "Savanur",
  "Savarkundla",
  "Savner",
  "Sawai Madhopur",
  "Sawantwadi",
  "Sedam",
  "Sehore",
  "Sendhwa",
  "Seohara",
  "Seoni",
  "Seoni-Malwa",
  "Shahabad",
  "Shahabad, Hardoi",
  "Shahabad, Rampur",
  "Shahade",
  "Shahbad",
  "Shahdol",
  "Shahganj",
  "Shahjahanpur",
  "Shahpur",
  "Shahpura",
  "Shahpura",
  "Shajapur",
  "Shamgarh",
  "Shamli",
  "Shamsabad, Agra",
  "Shamsabad, Farrukhabad",
  "Shegaon",
  "Sheikhpura",
  "Shendurjana",
  "Shenkottai",
  "Sheoganj",
  "Sheohar",
  "Sheopur",
  "Sherghati",
  "Sherkot",
  "Shiggaon",
  "Shikaripur",
  "Shikarpur, Bulandshahr",
  "Shikohabad",
  "Shillong",
  "Shimla",
  "Shirdi",
  "Shirpur-Warwade",
  "Shirur",
  "Shishgarh",
  "Shivamogga",
  "Shivpuri",
  "Sholavandan",
  "Sholingur",
  "Shoranur",
  "Shrigonda",
  "Shrirampur",
  "Shrirangapattana",
  "Shujalpur",
  "Siana",
  "Sibsagar",
  "Siddipet",
  "Sidhi",
  "Sidhpur",
  "Sidlaghatta",
  "Sihor",
  "Sihora",
  "Sikanderpur",
  "Sikandra Rao",
  "Sikandrabad",
  "Sikar",
  "Silao",
  "Silapathar",
  "Silchar",
  "Siliguri",
  "Sillod",
  "Silvassa",
  "Simdega",
  "Sindagi",
  "Sindhagi",
  "Sindhnur",
  "Singrauli",
  "Sinnar",
  "Sira",
  "Sircilla",
  "Sirhind Fatehgarh Sahib",
  "Sirkali",
  "Sirohi",
  "Sironj",
  "Sirsa",
  "Sirsaganj",
  "Sirsi",
  "Sirsi",
  "Siruguppa",
  "Sitamarhi",
  "Sitapur",
  "Sitarganj",
  "Sivaganga",
  "Sivagiri",
  "Sivakasi",
  "Siwan",
  "Sohagpur",
  "Sohna",
  "Sojat",
  "Solan",
  "Solapur",
  "Sonamukhi",
  "Sonepur",
  "Songadh",
  "Sonipat",
  "Sopore",
  "Soro",
  "Soron",
  "Soyagaon",
  "Sri Madhopur",
  "Srikakulam",
  "Srikalahasti",
  "Srinagar",
  "Srinagar",
  "Srinivaspur",
  "Srirampore",
  "Srisailam Project (Right Flank Colony) Township",
  "Srivilliputhur",
  "Sugauli",
  "Sujangarh",
  "Sujanpur",
  "Sullurpeta",
  "Sultanganj",
  "Sultanpur",
  "Sumerpur",
  "Sumerpur",
  "Sunabeda",
  "Sunam",
  "Sundargarh",
  "Sundarnagar",
  "Supaul",
  "Surandai",
  "Surapura",
  "Surat",
  "Suratgarh",
  "SUrban Agglomerationr",
  "Suri",
  "Suriyampalayam",
  "Suryapet",
  "Tadepalligudem",
  "Tadpatri",
  "Takhatgarh",
  "Taki",
  "Talaja",
  "Talcher",
  "Talegaon Dabhade",
  "Talikota",
  "Taliparamba",
  "Talode",
  "Talwara",
  "Tamluk",
  "Tanda",
  "Tandur",
  "Tanuku",
  "Tarakeswar",
  "Tarana",
  "Taranagar",
  "Taraori",
  "Tarbha",
  "Tarikere",
  "Tarn Taran",
  "Tasgaon",
  "Tehri",
  "Tekkalakote",
  "Tenali",
  "Tenkasi",
  "Tenu dam-cum-Kathhara",
  "Terdal",
  "Tezpur",
  "Thakurdwara",
  "Thammampatti",
  "Thana Bhawan",
  "Thane",
  "Thanesar",
  "Thangadh",
  "Thanjavur",
  "Tharad",
  "Tharamangalam",
  "Tharangambadi",
  "Theni Allinagaram",
  "Thirumangalam",
  "Thirupuvanam",
  "Thiruthuraipoondi",
  "Thiruvalla",
  "Thiruvallur",
  "Thiruvananthapuram",
  "Thiruvarur",
  "Thodupuzha",
  "Thoubal",
  "Thrissur",
  "Thuraiyur",
  "Tikamgarh",
  "Tilda Newra",
  "Tilhar",
  "Tindivanam",
  "Tinsukia",
  "Tiptur",
  "Tirora",
  "Tiruchendur",
  "Tiruchengode",
  "Tiruchirappalli",
  "Tirukalukundram",
  "Tirukkoyilur",
  "Tirunelveli",
  "Tirupathur",
  "Tirupathur",
  "Tirupati",
  "Tiruppur",
  "Tirur",
  "Tiruttani",
  "Tiruvannamalai",
  "Tiruvethipuram",
  "Tiruvuru",
  "Tirwaganj",
  "Titlagarh",
  "Tittakudi",
  "Todabhim",
  "Todaraisingh",
  "Tohana",
  "Tonk",
  "Tuensang",
  "Tuljapur",
  "Tulsipur",
  "Tumkur",
  "Tumsar",
  "Tundla",
  "Tuni",
  "Tura",
  "Uchgaon",
  "Udaipur",
  "Udaipur",
  "Udaipurwati",
  "Udgir",
  "Udhagamandalam",
  "Udhampur",
  "Udumalaipettai",
  "Udupi",
  "Ujhani",
  "Ujjain",
  "Umarga",
  "Umaria",
  "Umarkhed",
  "Umbergaon",
  "Umred",
  "Umreth",
  "Una",
  "Unjha",
  "Unnamalaikadai",
  "Unnao",
  "Upleta",
  "Uran Islampur",
  "Uran",
  "Uravakonda",
  "Urmar Tanda",
  "Usilampatti",
  "Uthamapalayam",
  "Uthiramerur",
  "Utraula",
  "Vadakkuvalliyur",
  "Vadalur",
  "Vadgaon Kasba",
  "Vadipatti",
  "Vadnagar",
  "Vadodara",
  "Vaijapur",
  "Vaikom",
  "Valparai",
  "Valsad",
  "Vandavasi",
  "Vaniyambadi",
  "Vapi",
  "Vapi",
  "Varanasi",
  "Varkala",
  "Vasai-Virar",
  "Vatakara",
  "Vedaranyam",
  "Vellakoil",
  "Vellore",
  "Venkatagiri",
  "Veraval",
  "Vidisha",
  "Vijainagar, Ajmer",
  "Vijapur",
  "Vijayapura",
  "Vijayawada",
  "Vijaypur",
  "Vikarabad",
  "Vikramasingapuram",
  "Viluppuram",
  "Vinukonda",
  "Viramgam",
  "Virudhachalam",
  "Virudhunagar",
  "Visakhapatnam",
  "Visnagar",
  "Viswanatham",
  "Vita",
  "Vizianagaram",
  "Vrindavan",
  "Vyara",
  "Wadgaon Road",
  "Wadhwan",
  "Wadi",
  "Wai",
  "Wanaparthy",
  "Wani",
  "Wankaner",
  "Wara Seoni",
  "Warangal",
  "Wardha",
  "Warhapur",
  "Warisaliganj",
  "Warora",
  "Warud",
  "Washim",
  "Wokha",
  "Yadgir",
  "Yamunanagar",
  "Yanam",
  "Yavatmal",
  "Yawal",
  "Yellandu",
  "Yemmiganur",
  "Yerraguntla",
  "Yevla",
  "Zaidpur",
  "Zamania",
  "Zira",
  "Zirakpur",
  "Zunheboto",
],   
         
 

      id: null,
      limitdate: "",
      value: null,
 
      payopt: {},
      occopt: {},
      // audage:this.instagram.iaudienceage
      //  ? this.instagram.iaudienceage.split(",")
      //   : []
      //  ,
      //  audcity:this.instagram.iaudienceloc
      //  ? this.instagram.iaudienceloc.split(",")
      //   : []
      //  ,
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
    // this.payoption = this.paytx.type;
    // this.paytype = this.paytx.type;
    // this.payval = JSON.parse(this.paytx.value);
    // this.paymentform = this.paytx.value;

    this.occoption = this.occtx.type;
    this.occtype = this.occtx.type;
    this.occval = JSON.parse(this.occtx.value);
    this.occupationform = this.occtx.value;

     

   
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
        
        }else {
          var x = {
         
          };
          this.occtype = this.occoption;
          this.occval = x;
        }
      }
    },

   
    savebutton(event) {
   
      event.preventDefault();
        
  
  
         this.occupationform = JSON.stringify(this.occval);
          this.$swal({
              title: "Success!",
              timer:99999,
              text: "",
              icon: "success",
          });  
      
        document.getElementById("occval").value = this.occupationform;
        document.getElementById("myform").submit();
          
        

     
        return true;      
 
        
    },
  },
};
</script>
