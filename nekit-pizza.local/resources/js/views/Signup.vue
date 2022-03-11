<template>
    <section class="login-main-wrapper">
        <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
                <div class="col-md-5 p-5 bg-white full-height">
                    <div class="login-main-left">
                        <div class="text-center mb-5 login-main-left-header pt-4">
                            <img src="img/favicon.png" class="img-fluid" alt="LOGO">
                            <h5 class="mt-3 mb-3">Добро пожаловать в Vidoe</h5>
                            <p>It is a long established fact that a reader <br> will be distracted by the readable.</p>
                        </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" v-model="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Название канала</label>
                                <input type="text" v-model="name" class="form-control" placeholder="Название канала">
                            </div>
                            <div class="form-group">
                                <label>Пароль</label>
                                <input type="password" v-model="password" class="form-control" placeholder="Пароль">
                            </div>
                            <div class="form-group">
                                <label>Пароль</label>
                                <input type="text" v-model="password_repeat" class="form-control" placeholder="Повторите пароль">
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-outline-primary btn-block btn-lg" @click="signup">Регистрация</button>
                            </div>

                        <div class="text-center mt-5">
                            <p class="light-gray">Already have an Account? <a href="login.html">Sign In</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="login-main-right bg-white p-5 mt-5 mb-5">
                        <div class="owl-carousel owl-carousel-login">
                            <div class="item">
                                <div class="carousel-login-card text-center">
                                    <img src="img/login.png" class="img-fluid" alt="LOGO">
                                    <h5 class="mt-5 mb-3">​Watch videos offline</h5>
                                    <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-login-card text-center">
                                    <img src="img/login.png" class="img-fluid" alt="LOGO">
                                    <h5 class="mt-5 mb-3">Download videos effortlessly</h5>
                                    <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-login-card text-center">
                                    <img src="img/login.png" class="img-fluid" alt="LOGO">
                                    <h5 class="mt-5 mb-3">Create GIFs</h5>
                                    <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from "axios";

export default {
    name: "Signup",
    data() {
        return {
            name:null,
            password:null,
            email:null,
            password_repeat:null
        }
    },
    methods: {
        signup() {
            let data = {
                'name':this.name,
                'password':this.password,
                'email':this.email,
            }
            axios.post('/api/register',data)
                .then(({data}) => {
                    if (data['status'] === 'success') {
                        alert('Регистрация прошла успешно!');
                        window.location.href = '/auth';
                    }
                })
        }
    }
}
</script>

<style scoped>

</style>
