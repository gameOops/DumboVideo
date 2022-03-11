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
                            <label>E-mail</label>
                            <input v-model="email" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Пароль</label>
                            <input v-model="password" type="password" class="form-control" placeholder="Пароль">
                        </div>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <button @click="auth" type="submit" class="btn btn-outline-primary btn-block btn-lg">Войти</button>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <p class="light-gray">Нет аккаунта? <router-link :to="{name:'signup'}">Регистрация</router-link></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">

                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from "axios";

export default {
    name: "Auth",
    data()
    {
        return {
            email:null,
            password:null,
        }
    },
    methods: {
        auth()
        {
            let data = {
                'email':this.email,
                'password':this.password,
            }
            axios.post('/api/auth',data)
                .then(({data}) => {
                    console.log(data)
                    if(data['status'] === 'success')
                    {
                        $cookies.set('token',data['token']);
                        window.location.href = '/';
                    } else if (data['status'] === 'error' || data['errors'].lenght > 0) {
                        alert(data['message'])
                    }
                })
        }
    }
}
</script>

<style scoped>

</style>
