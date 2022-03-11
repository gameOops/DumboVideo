<template>
    <div>
        <div v-if="current === 'auth' || current === 'signup' || current === 'forget'">
            <router-view></router-view>
        </div>
        <div v-else>
            <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
                &nbsp;&nbsp;
                <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button> &nbsp;&nbsp;
                <a class="navbar-brand mr-1" href="index.html"><img class="img-fluid" alt="" src="img/logo.png"></a>
                <!-- Navbar Search -->
                <form class="d-none d-md-inline-block form-inline ml-auto mr-auto my-2 my-md-0 osahan-navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <div class="input-group-append">
                            <button class="btn btn-light" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- Navbar -->
                <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar" v-if="!token">
                    <li class="nav-item mx-1">
                        <router-link class="nav-link" :to="{name:'auth'}">
                            Войти
                        </router-link>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar" v-if="token">
                    <li class="nav-item mx-1">
                        <router-link class="nav-link" :to="{name:'upload'}">
                            <i class="fas fa-plus-circle fa-fw"></i>
                            Загрузить видео
                        </router-link>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <span class="badge badge-danger">9+</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <span class="badge badge-success">7</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
                        <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img alt="Avatar" :src="'user-photos/'+user.channel.image">
                            {{user.name}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <router-link class="dropdown-item" :to="{name:'channel', params:{'id':user.channel.id}}">
                                <i class="fas fa-fw fa-user-circle"></i> My Account
                            </router-link>
                            <a class="dropdown-item" href="subscriptions.html"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>
                            <a class="dropdown-item" href="settings.html"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div id="wrapper">
                <!-- Sidebar -->
                <ul class="sidebar navbar-nav">
                    <li class="nav-item active">
                        <router-link :to="{name:'home'}" class="nav-link" >
                            <i class="fas fa-fw fa-home"></i>
                            <span>Главная</span>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="channels.html">
                            <i class="fas fa-fw fa-users"></i>
                            <span>Каналы</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="single-channel.html">
                            <i class="fas fa-fw fa-user-alt"></i>
                            <span>Мой канал</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="video-page.html">
                            <i class="fas fa-fw fa-video"></i>
                            <span>Страница видео</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upload-video.html">
                            <i class="fas fa-fw fa-cloud-upload-alt"></i>
                            <span>Загрузить видео</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Страницы</span>
                        </a>
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">Login Screens:</h6>
                            <a class="dropdown-item" href="login.html">Login</a>
                            <a class="dropdown-item" href="register.html">Register</a>
                            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Other Pages:</h6>
                            <a class="dropdown-item" href="404.html">404 Page</a>
                            <a class="dropdown-item" href="blank.html">Blank Page</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history-page.html">
                            <i class="fas fa-fw fa-history"></i>
                            <span>History Page</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-fw fa-list-alt"></i>
                            <span>Categories</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="categories.html">Movie</a>
                            <a class="dropdown-item" href="categories.html">Music</a>
                            <a class="dropdown-item" href="categories.html">Television</a>
                        </div>
                    </li>
                    <li class="nav-item channel-sidebar-list">
                        <h6>Подписки</h6>
                        <ul>
                            <li v-for="sub in subs">
                                <router-link :to="{name:'channel',params:{'id':sub.channel_id}}">
                                    <img class="img-fluid" :src="'user-photos/'+sub.channel.image" alt="" >{{sub.channel.name}}
                                </router-link>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div id="content-wrapper">
                    <div class="container-fluid pb-0" v-if="current === 'home' || current === 'watch'">
                        <div class="top-mobile-search">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="mobile-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search for..." class="form-control">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <router-view></router-view>
                    </div>
                    <div v-else>
                        <div class="top-mobile-search">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="mobile-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search for..." class="form-control">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <router-view></router-view>
                    </div>
                    <!-- /.container-fluid -->
                    <!-- Sticky Footer -->
                    <footer class="sticky-footer">
                        <div class="container">
                            <div class="row no-gutters">
                                <div class="col-lg-6 col-sm-6">
                                    <p class="mt-1 mb-0">&copy; Copyright 2018 <strong class="text-dark">Vidoe</strong>. All Rights Reserved<br>
                                        <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a class="text-primary" target="_blank" href="https://askbootstrap.com/">Ask Bootstrap</a>
                                        </small>
                                    </p>
                                </div>
                                <div class="col-lg-6 col-sm-6 text-right">
                                    <div class="app">
                                        <a href="#"><img alt="" src="img/google.png"></a>
                                        <a href="#"><img alt="" src="img/apple.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- /.content-wrapper -->
            </div>
            <!-- /#wrapper -->
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Хотите выйти? </h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Выберите "выйти", если вы готовы прервать текущую сессию</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Отмена</button>
                            <a class="btn btn-primary" @click="logout">Выйти</a>
                        </div>
                    </div>
                </div>
            </div>
        </div >

    </div>
</template>
<script>
import axios from "axios";

export default {
    data()
    {
        return {
            brands:[],
            current:this.$router.currentRoute['name'],
            user:[],
            subs:[],
            token:$cookies.get('token')
        }
    },
    mounted() {
        this.getData()
        this.getUser()
    },
    watch:{
        $route (to, from){
            console.log(to)
            this.current = to['name']
        }
    },
    methods: {
        logout() {
            $cookies.remove('token');
            window.location.href='/auth';
        },
        getUser(){
          if(this.token) {
              let data = {
                  'token':this.token
              }
              axios.post('/api/user-data',data)
                  .then(({data}) => {
                      this.user = data;
                      let data2 = {
                          'id':data.channel.id
                      }
                      axios.post('/api/get-user-subscribe',data2)
                          .then(({data}) => {
                              this.subs = data;
                          })
                  })
          }
        },
        getData()
        {
            axios.post('/api/brands')
                .then(({data}) => {
                    this.brands = data;
                })
        }
    }
}
</script>
