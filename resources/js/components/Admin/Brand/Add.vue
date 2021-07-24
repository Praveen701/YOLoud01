<template>
    <div>
        




<!-- <form action="/admin/brand/add" method="POST" id="addbrand" enctype="multipart/form-data">
 <input type="hidden" name="_token" :value="csrf" />
  <input type="hidden" name="name" v-model="name" />

        <input type="hidden" name="email" v-model="email" />
           
        <input type="hidden" name="companyname" v-model="companyname" />
  <input type="hidden" name="designation" v-model="designation" />

        <input type="hidden" name="phonenumber" v-model="phonenumber" />
              
           
        <input type="hidden" name="city" :v-model="city" :value="this.pincode.City" />

  <input type="hidden" name="offering" v-model="offering" />

        <input type="hidden" name="state" :v-model="state" :value="this.pincode.State" />
            <input type="hidden" name="country" v-model="country" />
        <input type="hidden" name="pincode" :v-model="pincode" :value="this.pincode.Pincode" />

  </form> -->



<!-- 

          <div class="col-sm-12 mt-2 col-md-6">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input   type="text" v-model="name"  class="form-control" name="name"  placeholder="Enter Name">
                  <small class="text-danger" v-if="errors.name">{{errors.name[0]}}</small>
              </div>
          </div>
          <div class="col-sm-12 mt-2 col-md-6">
            <div class="form-group">

              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" v-model="email"  name="email"  placeholder="Enter Email" >
             <small class="text-danger" v-if="errors.email">{{errors.email[0]}}</small>
            </div>
        </div> -->
<!--        
        <div class="col-sm-12 mt-2 col-md-6">
            <div class="form-group">
              <label for="companyname" class="form-label">Company Name</label>
             <input type="text" class="form-control"  v-model="companyname" name="companyname" placeholder="Enter Company Name">
               <small class="text-danger" v-if="errors.companyname">{{errors.companyname[0]}}</small>
            </div>
        </div>
     
          <div class="col-sm-12 mt-2 col-md-6">
            <div class="form-group">
              <label for="companyname" class="form-label">Company Logo</label>
            <input required type="file" class="form-control-file" name="photo" id="myInputFileID" placeholder="" aria-describedby="fileHelpId">
             <small id="fileHelpId" class="form-text text-muted">Select a File of Png,Svg,Jpg with a size limit  of 7mb</small>

            </div>
        </div> -->
    
        <!-- <div class="col-sm-12 mt-2 col-md-6">
            <div class="form-group">
              <label for="designation" class="form-label">Designation</label>
                <select v-model="designation" name="designation" class="form-control">
                  <option  value="Owner" selected>Owner</option>
                  <option value="Others" >Others</option>

               </select>
             <small class="text-danger" v-if="errors.designation">{{errors.designation[0]}}</small>
            </div>
          </div>

        <div class="col-sm-12 mt-2 col-md-6">
          <div class="form-group">
            <label for="phonenumber" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" name="phonenumber" v-model="phonenumber"  placeholder="Enter Phone Number">
            <small class="text-danger" v-if="errors.phonenumber">{{errors.phonenumber[0]}}</small>
           
          </div>
      </div> -->
      
   <div class="">
    <div class="form-group">
      <label for="pincode" class="form-label">Pincode</label>
    
      
         <multiselect v-model="pincode" :options="Sheet1" :multiple="false" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="Select Pincode" label="Pincode" track-by="Pincode" :preselect-first="false">
               </multiselect>   
            <small class="text-danger" v-if="this.pincode.Pincode == null">{{errors.pincode[0]}}</small>
    
    </div>
</div>
   
  <div class="">
    <div class="form-group">
      <label for="city" class="form-label">City</label>
  <input type="text" class="form-control" name="city" :v-model="city" :value="this.pincode.City" disabled> 

  
   
   
    </div>
</div>
  <div class="">
    <div class="form-group">
      <label for="state" class="form-label">State</label>
      <input type="text" class="form-control" name="state"  :v-model="state" :value="this.pincode.State"  disabled>

    </div>
</div>
  <div class="">
    <div class="form-group">
      <label for="country" class="form-label">Country</label>
         <input type="text"  class="form-control" name="country" v-model="country" value="INDIA" disabled>
   
   
    </div>
</div>

<!-- 
<div class="col-sm-12 mt-2 col-md-6">
<div class="form-group">
<label for="offering" class="form-label">Offering</label>
  <select v-model="offering"  name="offering" class="form-control">
    <option value="Product" selected>Product</option>
    <option value="Service" >Service</option>

 </select>
  <small class="text-danger" v-if="errors.offering">{{errors.offering[0]}}</small>
</div>
</div> -->








</div> 



</template>


<script>
export default {
    props: [],
    data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
       
            selpin:[],
            name:'',
            country:'INDIA',
            companyname:'',
            email:'',
            errors:{
                name:'',
                email:'',
                phonenumber:'',
                companyname:'',
                designation:'',
                pincode:'',
                offering:''
            },
            
            phonenumber: '',
            designation: '',
            offering: '',
            city:'',
            state: null,
            pincode: [],
             Sheet1: 
       
  [
       
        
        {
            "PostOfficeName": "Wazir Nagar",
            "Pincode": "110007",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
      
       
        {
            "PostOfficeName": "Patel Nagar West",
            "Pincode": "110008",
            "City": "New Delhi",
            "District": "Central Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "A F Palam",
            "Pincode": "110010",
            "City": "New Delhi",
            "District": "West Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "A P S Colony",
            "Pincode": "110010",
            "City": "New Delhi",
            "District": "West Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Army Base",
            "Pincode": "110010",
            "City": "New Delhi",
            "District": "West Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Bazar Road",
            "Pincode": "110010",
            "City": "New Delhi",
            "District": "West Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Central Ordinance",
            "Pincode": "110010",
            "City": "New Delhi",
            "District": "West Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Central Vehicle",
            "Pincode": "110010",
            "City": "New Delhi",
            "District": "West Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Delhi Cantt",
            "Pincode": "110010",
            "City": "New Delhi",
            "District": "South West",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Depot",
            "Pincode": "110010",
            "City": "New Delhi",
            "District": "West Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Dhaula Khuan",
            "Pincode": "110010",
            "City": "New Delhi",
            "District": "West Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Kirby Place",
            "Pincode": "110010",
            "City": "New Delhi",
            "District": "West Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Work Shop",
            "Pincode": "110010",
            "City": "New Delhi",
            "District": "West Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Defence Head Qrs",
            "Pincode": "110011",
            "City": "New Delhi",
            "District": "Central Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Gymkhana Club",
            "Pincode": "110011",
            "City": "New Delhi",
            "District": "Central Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Nirman Bhawan",
            "Pincode": "110011",
            "City": "New Delhi",
            "District": "Central Delhi",
            "State": "Delhi"
        },
       
        {
            "PostOfficeName": "Udyog Bhawan",
            "Pincode": "110011",
            "City": "New Delhi",
            "District": "Central Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Central Tractor",
            "Pincode": "110012",
            "City": "New Delhi",
            "District": "Central Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Inderpuri",
            "Pincode": "110012",
            "City": "New Delhi",
            "District": "Central Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "N P Laboratories",
            "Pincode": "110012",
            "City": "New Delhi",
            "District": "Central Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Organisation",
            "Pincode": "110012",
            "City": "New Delhi",
            "District": "Central Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Research Institute",
            "Pincode": "110012",
            "City": "New Delhi",
            "District": "Central Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Dargah Shareef",
            "Pincode": "110013",
            "City": "New Delhi",
            "District": "South Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Hazrat Nizamuddin",
            "Pincode": "110013",
            "City": "New Delhi",
            "District": "South Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Hari Nagar Ashram",
            "Pincode": "110014",
            "City": "New Delhi",
            "District": "South Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Jangpura",
            "Pincode": "110014",
            "City": "New Delhi",
            "District": "South Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Central Kirti Nagar",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "D I Area",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "E S I Hospital",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Industrial Area",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Karampura",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Kirti Nagar",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Mansarover Garden",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Moti Nagar",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "North Industrial Area",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Ramesh Nagar",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Sudershan Park",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Vishnu Garden",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Zakhira",
            "Pincode": "110015",
            "City": "New Delhi",
            "District": "North Delhi",
            "State": "Delhi"
        },
        {
            "PostOfficeName": "Ashram",
            "Pincode": "110016",
            "City": "New Delhi",
            "District": "South Delhi",
            "State": "Delhi"
        },
       
      
        {
            "PostOfficeName": "Zervavra",
            "Pincode": "394245",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Mahuva N",
            "Pincode": "394250",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Hajira",
            "Pincode": "394270",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Chalthan",
            "Pincode": "394305",
            "City": "Chalthan",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Gangadhra R S",
            "Pincode": "394310",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Palsana",
            "Pincode": "394315",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Baleshwar",
            "Pincode": "394317",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Sevni",
            "Pincode": "394320",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Umbhel",
            "Pincode": "394325",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Vav Kathodra",
            "Pincode": "394326",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Kadodara",
            "Pincode": "394327",
            "City": "Kadodara",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Orna",
            "Pincode": "394330",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Kadod",
            "Pincode": "394335",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Madhi",
            "Pincode": "394340",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Mota",
            "Pincode": "394345",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Sarbhon",
            "Pincode": "394350",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Puni",
            "Pincode": "394352",
            "City": "Navsari",
            "District": "Navsari",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Varad",
            "Pincode": "394355",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Kakrapar",
            "Pincode": "394360",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Bedkuvadoor",
            "Pincode": "394363",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Unchamala",
            "Pincode": "394364",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Raniamba",
            "Pincode": "394365",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Nijhar",
            "Pincode": "394370",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Uchhal",
            "Pincode": "394375",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Bhadbhuja",
            "Pincode": "394378",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Kukarmunda",
            "Pincode": "394380",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Velachha",
            "Pincode": "394405",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Mota Miya Mangrol",
            "Pincode": "394410",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Mosali",
            "Pincode": "394421",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Vankal",
            "Pincode": "394430",
            "City": "Navsari",
            "District": "Navsari",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Zankhavav",
            "Pincode": "394440",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Umarpada",
            "Pincode": "394445",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Bhatha",
            "Pincode": "394510",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Fertilizernagar Tribhco S",
            "Pincode": "394515",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Variav",
            "Pincode": "394520",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Mor",
            "Pincode": "394530",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Olpad",
            "Pincode": "394540",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Dumas",
            "Pincode": "394550",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Bardoli H Q",
            "Pincode": "394601",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Sardar Bag",
            "Pincode": "394601",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Sugar Factory",
            "Pincode": "394601",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Vankaner Bardoli",
            "Pincode": "394620",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Buhari",
            "Pincode": "394630",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Gadat",
            "Pincode": "394631",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Pati",
            "Pincode": "394632",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Valod",
            "Pincode": "394640",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
        {
            "PostOfficeName": "Vedachhi",
            "Pincode": "394641",
            "City": "Surat",
            "District": "Surat",
            "State": "Gujarat"
        },
  ]
        
      }
    },


    methods: {       
        savebutton(){
            var self = this;
            this.errors = {
                name:'',
                email:'',
                phonenumber:'',
                companyname:'',
                designation:'',
                pincode:'',
                offering:'',
                photo:''
            },
              
              axios.post('/admin/brand/validatebrand',{
                  name:this.name,
                email:this.email,
                phonenumber:this.phonenumber,
                companyname:this.companyname,
                designation:this.designation,
                 pincode:this.pincode,
                offering:this.offering,
              })   
              .then(response => {
                  console.log(response);
                        if(response.data.isvalid==true){
                        
                       document.getElementById("addbrand").submit();  
                   
                        }
                        else{
                            this.errors=response.data.data;
                        }
                    });

   
        }
    }
};
</script>
