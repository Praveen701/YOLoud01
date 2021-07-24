<template>
    <div class="container text-right">
        <button type="button" class="btn btn-primary align-items-end " v-on:click="openaddmodal">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </button>

        <div v-if="prods.length>0" class="row mt-2 text-left">
            <div v-for="item,index in prods" class="col-md-4 mt-3 col-sm-12 col-lg-4" >
                <div class="card border border-primary" style="border-radius:20px;">
                    <div class="card-body">
                        <div class="row text-center p-2">
                            <div class="col-6">
                                {{item.name}}
                            </div>
                            <div class='col-6'>
                                <i class="fas mr-2 fa-edit" v-on:click="openeditmodal(item,index)"></i>
                                <i class="fas mr-2 fa-trash" v-on:click="deletemodal(item,index)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-else class="container text-center alert alert-danger">
            Sorry No Data Found
        </div>
<div class="modal fade" id="addcat" tabindex="-1" role="dialog" aria-labelledby="addcat" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-left" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addcast">Add Intrest</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="catname">Intrest Name</label>
                <input type="text" v-model="catname" class="form-control" id="catname" placeholder="Enter Name">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" v-on:click="addcatname" class="btn btn-primary">Add Intrest</button>
        </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editcat" tabindex="-1" role="dialog" aria-labelledby="editcat" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editcats">Edit Intrest</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="catname">Intrest Name</label>
                <input type="text" v-model="catname" class="form-control" id="catname" placeholder="Enter Name">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" v-on:click="editcatname" class="btn btn-primary">Edit Intrest</button>
        </div>
        </div>
    </div>
</div>
    </div>
</template>

<script>
    export default {
        props:['data'],
        data(){
              return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                catname:null,
                catid:null,
                prods:this.data,
                ser:'',
                set:0,
                ind:null
              }
            },
        mounted() {
        },
        methods:{
            deletemodal(item,index){
                var self=this
                this.set=0;
                this.ser=''
                if(confirm("Are you sure you want to delete?")){
                    axios.post('/admin/settings/interest/delete',{
                        id:item.id
                    })
                    .then(response => {
                        if(response.data==1){
                            self.prods.splice(index,1);this.$swal({
                                title: "Success!",
                                text: "Deleted Succesfully!",
                                icon: "success",
                            });
                        }
                        else{

                            this.$swal({
                                title: "Error!",
                                text: "Please Refersh the page!",
                                icon: "error",
                            });
                        }
                    });
                }
                console.log(this.ser)
            },

            openaddmodal(){
                this.set=0;
                this.ser=''
                this.catname=null;
                this.catid=null
                this.ind=null
                $('#addcat').modal('show')
            },
            openeditmodal(item,ind){
                this.set=0;
                this.ser=''
                this.catname=item.name;
                this.catid=item.id
                this.ind=ind
                $('#editcat').modal('show')
            },
            editcatname(){
                this.set=0;
                this.ser=''
                var self=this
                if(this.catname!=''){
                    axios.post('/admin/settings/interest/edit/'+this.catid,{
                        name:this.catname
                    })
                    .then(response => {
                        if(response.data==1){
                            self.prods[self.ind].name=self.catname;
                            self.catname=''
                            this.$swal({
                                title: "Success!",
                                text: "Edited Succesfully!",
                                icon: "success",
                            });
                        }
                        else{
                            this.$swal({
                                title: "Error!",
                                text: "Please Refersh the page!",
                                icon: "error",
                            });
                        }
                    });
                }
                $('#editcat').modal('hide')
            },
            addcatname(){
                this.set=0;
                this.ser=''
                var self=this
                if(this.catname!=''){
                    axios.post('/admin/settings/interest/add',{
                        name:this.catname
                    })
                    .then(response => {
                        if(response.data.type==1){
                            self.prods.push(response.data.data)
                            this.$swal({
                                title: "Success!",
                                text: "Added Succesfully!",
                                icon: "success",
                            });
                            self.catname=''
                        }
                    });
                }
                $('#addcat').modal('hide')
            }

        }
    }
</script>
