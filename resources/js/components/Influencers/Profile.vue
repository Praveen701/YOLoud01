<template>
    <li class="li-items mx-auto mt-2 d-flex align-items-center justify-content-center" style="flex-direction:column">
        <button data-toggle="modal" data-target="#imagemodal" class="edit btn" style="overflow: hidden; position:relative"><i class="middle fas fa-camera" style="color: black;"></i><img :src="'/storage/profile/'+[profile.avatar ? profile.avatar:'Empty.png']" class="shadow user-img" alt=""></button>
        <h2 class="text-center mt-3" style="font-family: 'Aladin', cursive;">{{ profile.name }}</h2>

        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="imagemodal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" v-on:click="ondel">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/settings/changeavatars" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" :value="csrf" />
                        <div class="form-group h5">
                          <label for="">Avatar</label>
                          <input required type="file" class="form-control-file" name="photo" id="myInputFileID" placeholder="" aria-describedby="fileHelpId">
                          <small id="fileHelpId" class="form-text text-muted">Select a File of Png,Svg,Jpg with a size limit  of 7mb</small>
                        </div>
                    <div class="container text-right">
                        <button class="btn btn-dark">Save</button>
                    </div>

                    </form>
                </div>
                </div>
            </div>
        </div>
    </li>
</template>

<script>
    export default {
        props:['profile'],
        data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        };
    },

        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            ondel(){
                document.getElementById("myInputFileID").value=null;
            }
        }
    }
</script>
<style>
#imagemodal {
  z-index: 10000000 !important;
}

.user-img{
    width: 12vw;
    height: 12vw;
    object-fit: cover;
    border-radius: 50%;
    opacity: 1;
    display: block;
    transition: .5s ease;
    backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  font-size:3rem;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.edit:hover .user-img {
  opacity: 0.3;
}

.edit:hover .middle {
  opacity: 1;
}
</style>
