<template>
    <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <div v-if="success == true" class="alert " v-bind:class="'alert-'+alert" role="alert">{{ message }}</div>
                    <form method="POST" action="">
                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control  " name="email" value="email" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" >

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="button" @click="click()" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';

export default {
    data(){
        return {
            success:false,
            message:'',
            alert:'danger'
        }
    },
    methods:{
            click() {
                axios.post("/login" )
                    .then(response => {

                        this.success = true 

                        if(response.data.success){
                            this.alert = 'primary'
                        }else{
                            this.alert = 'danger'
                        }
                        this.message = response.data.message

                        console.log(response.data)
                    })
                .catch(function (error) {
                        console.log(error);
                    });
            }
    }
}
</script>