<template>
    <div class="card bg-white text-right p-2">
        <div class="card-body">
            <form action="/admin/influencer/add" method="post" id="myform">
                <input type="hidden" name="_token" :value="csrf" />
               
                <input type="hidden" name="name"    v-model="name"/>
                <input type="hidden" name="email"    v-model="email"/>
               
                <input type="hidden" name="phone" v-model="phonenumber"/>
           
                <input type="hidden" name="city" v-model="city"/>
                <input type="hidden" name="state" v-model="state"/>
            <input type="hidden" name="offering" v-model="offering"/>
                <input type="hidden" name="designation" v-model="designation"/>
       
                <input type="hidden" name="country" v-model="country"/>
      
              
       

                <h3 class="mt-2 mb-3 text-left">New Brand</h3>
                <div class="text-right">
                    <ul class="nav text-left">
                        <li class="nav-item">
                            <a
                                class="nav-link btn"
                                v-on:click="changePage(0)"
                                v-bind:style="
                                    page == 0 ? 'color:#DDA05D;' : 'color:#01AFBA;'
                                "
                            >
                                <h4>General Profile</h4></a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link btn"
                                v-on:click="changePage(1)"
                                v-bind:style="
                                    page == 1 ? 'color:#DDA05D;' : 'color:#01AFBA;'
                                "
                            >
                                <h4>Brand Details</h4></a
                            >
                        </li>
                   
                       
                    </ul>
                    <div class="container-fluid text-left">
                        <span v-if="page == 0" class="row">
                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span> </label>
                                    <input
                                        required
                                        v-model=name
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        placeholder="Enter Name"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label
                                    ><br />
                                    <input
                                        type="email"
                                        class="form-control"
                                        value=""
                                        required
                                        v-model="email"
                                        id="email"
                                        placeholder="Enter Email"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label
                                    ><br />
                                    <input
                                        type="password"
                                        class="form-control"
                                        value=""
                                        required
                                        v-model="password"
                                        id="password"
                                        placeholder="Enter password"
                                    />
                                </div>
                            </div>



                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label"
                                        >Phone Number</label
                                    >
                                    <input
                                        type="tel"
                                        class="form-control"
                                        value=""
                                        v-model="phone"
                                        id="phone"
                                        placeholder="Enter Phone Number"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="age" class="form-label">Age</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="age"
                                        v-model="age"
                                        placeholder="Enter Age"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="gender" class="form-label"
                                        >Gender</label
                                    >
                                    <select
                                        id="gender"
                                        v-model="gender"
                                        class="form-control"
                                    >
                                        <option value="Male" selected>Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="dob" class="form-label"
                                        >Date of Birth</label
                                    >
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="dob"
                                        @input="calcage"
                                        v-model="dob"
                                        placeholder="Enter Date of Birth"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="city" class="form-label">City</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="city"
                                        v-model="city"
                                        placeholder="Enter City"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="state" class="form-label">State</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="state"
                                        v-model="state"
                                        placeholder="Enter State"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2 col-md-6">
                                <div class="form-group">
                                    <label for="country" class="form-label"
                                        >Country</label
                                    >
                                    <select
                                        v-model=country
                                        id="country"
                                        class="form-control"
                                    >
                                        <option value="Afganistan">Afghanistan</option>
                                        <option selected>India</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Saudi Arabia"
                                            >Saudi Arabia</option
                                        >
                                        <option value="Singapore">Singapore</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="United Kingdom"
                                            >United Kingdom</option
                                        >
                                        <option value="United Arab Erimates">
                                            United Arab Emirates
                                        </option>
                                        <option value="United States of America">
                                            United States of America
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </span>
                         <span v-else-if="page == 1" class="row">
                             <h1>PO</h1>
             
            </span>
                      
                     
                    </div>
                    <div class="tab-content text-left">
                        <div role="tabpanel" class="tab-pane fade" id="aofi">
                            <div class="mt-2 card">
                                <div class="card-body text-dark"></div>
                                <div class="card-footer">
                                    <input
                                        type="submit"
                                        class="float-right btn btn-primary"
                                        value="Save Changes"
                                    />
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Payment">
                            <div class="mt-2 card">
                                <div class="card-body text-dark">

                                </div>
                                <div class="card-footer">
                                    <input
                                        type="submit"
                                        class="float-right btn btn-primary"
                                        value="Save Changes"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                <button type="button" class="btn btn-primary p-2" v-on:click="savebutton"><i class="fas fa-save    "></i> Save</button>
                </div>
            </form>
        </div>
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
            page: 0,
            payments: ["Net Banking", "Paytm", "Google Pay", "UPI"],
            payoption: "Net Banking",
            name:'',
            password:'',
            email:'',
            phone: '',
            age: '',
            gender: '',
            dob: '',
            languages:[],
            paytx:[],
            paytype:'',
            paymentform:'',
            payval:'',
            social:'',
            city:'',
            state:'',
            country:'',
            id: null,
            limitdate:'',
            value: null,
            insta: this.instagram,
            payopt:{},
            userintrests:[],
            today:0
        };
    },


    methods: {
        saveChanges() {
            axios
                .post("/settings/update/" + this.id, {
                    value: this.value
                })
                .then(response => {
                    if (response.data) {
                        if (response) {
                            this.phone = response.data.phone;
                            this.city = response.data.phone;
                            this.state = response.data.dob;
                            this.country = response.data.id;
                        } else {
                            this.phone = null;
                            this.city = null;
                            this.state = null;
                            this.country = null;
                        }
                    }
                });
        },
       
        changePage(val) {
            this.page = val;
        },
    
       
        savebutton(event){

            event.preventDefault();
                document.getElementById("myform").submit();
                return true;
            
           
        }
    }
};
</script>
