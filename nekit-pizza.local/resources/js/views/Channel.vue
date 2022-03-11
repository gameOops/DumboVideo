<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Изменить оформление канала</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="file" ref="bg_img" v-on:change="handleFileUploadImage()">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-success" @click="saveBG">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-channel-page" id="content-wrapper">
            <div class="single-channel-image">
                <div class="edit_bg">
                    <a data-toggle="modal" data-target="#exampleModal">
                        <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 40px; height: 100%;"><g class="style-scope yt-icon"><path d="M12,10c1.65,0,3,1.35,3,3s-1.35,3-3,3s-3-1.35-3-3S10.35,10,12,10 M12,9c-2.21,0-4,1.79-4,4s1.79,4,4,4s4-1.79,4-4 S14.21,9,12,9L12,9z M14.59,5l1.71,1.71L16.59,7H17h4v12H3V7h4h0.41l0.29-0.29L9.41,5H14.59 M15,4H9L7,6H2v14h20V6h-5L15,4L15,4z" class="style-scope yt-icon"></path></g></svg>
                    </a>
                </div>
                <img class="img-fluid" alt="" :src="'../user-photos/'+channel.bg">
                <div class="channel-profile">
                    <img class="channel-profile-img" alt="" :src="'../user-photos/'+channel.image">
                    <div class="social hidden-xs">
                        Соц. сети &nbsp;
                        <a class="fb" href="#">VK</a>
                        <a class="tw" href="#">INSTAGRAM</a>
                        <a class="gp" href="#">TWITCH</a>
                    </div>
                </div>
            </div>
            <div class="single-channel-nav">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="channel-brand" href="#">
                        {{channel.name}}
                        <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified" v-if="channel.verify === '1'">
                            <i class="fas fa-check-circle text-success"></i>
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Видео <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Плейлисты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Каналы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Сообщество</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Информация</a>
                            </li>
                            <!--
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Donate
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li> -->
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control form-control-sm mr-sm-1" type="search" placeholder="Поиск" aria-label="Search"><button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button> &nbsp;&nbsp;&nbsp;
                            <button @click="sendSub" v-if="isSub === false" class="btn btn-outline-danger btn-sm" type="button">Subscribe <strong>1.4M</strong></button>
                            <button @click="sendSub" v-else class="btn btn-outline-light btn-sm" type="button">Вы подписаны</button>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="video-block section-padding">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <div class="btn-group float-right right-action">
                                    <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                    </div>
                                </div>
                                <h6>Videos</h6>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 mb-3" v-for="video in channel.videos" >
                            <router-link :to="{name:'watch', params:{id:video.id}}" >
                                <div class="video-card">
                                    <div class="video-card-image">
                                        <router-link class="play-icon" :to="{name:'watch', params:{id:video.id}}">
                                            <i class="fas fa-play-circle"></i>
                                        </router-link>
                                        <router-link :to="{name:'watch', params:{id:video.id}}">
                                            <img class="img-fluid" :src="'../user-photos/'+video.preview" alt="">
                                        </router-link>
                                        <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                        <div class="video-title">

                                            <router-link :to="{name:'watch', params:{id:video.id}}">
                                                {{video.name}}
                                            </router-link>

                                        </div>
                                        <div class="video-page text-success">
                                             {{channel.name}} <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                        </div>
                                        <div class="video-view">
                                            {{video.views}} views &nbsp;<i class="fas fa-calendar-alt"></i> {{video.created_at}}
                                        </div>
                                    </div>
                                </div>
                            </router-link>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a tabindex="-1" href="#" class="page-link">Previous</a>
                            </li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item">
                                <a href="#" class="page-link">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Channel",
    data() {
        return {
            id:this.$route.params.id,
            token:$cookies.get('token'),
            channel:[],
            isSub:null,
            bg:null
        }
    },
    mounted() {
        this.getData();
        this.checkSub();
    },
    watch: {
        $route (to, from){
            if(to.name === 'channel')
            {
                this.id = to.params.id;
                this.getData();
            }
        },
    },
    methods: {
        handleFileUploadImage() {
            this.bg = this.$refs.bg_img.files[0];
        },
        saveBG()
        {
            let data = new FormData();

            data.append('token',this.token);
            data.append('image',this.bg);

            axios.post('/api/change-bg',data, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(({data}) => {
                    this.getData();
                })
        },
        sendSub()
        {
            let datasub = {
                'token':$cookies.get('token'),
                'channel_id':this.id
            }
            axios.post('/api/create-user-subscribe',datasub)
                .then(({data}) => {
                    this.checkSub();
                })
        },
        checkSub()
        {
            let data = {
                'token':$cookies.get('token'),
                'channel_id':this.id
            }
            axios.post('/api/check-user-subscribe',data)
                .then(({data}) => {
                    if (data['status'] === 'subscribed')
                    {
                        this.isSub = true
                    } else {
                        this.isSub = false
                    }
                })
        },
        getData() {
            let data = {
                'id':this.id
            }
            axios.post('/api/get-channel',data)
                .then(({data}) => {
                    this.channel = data;
                })

        }
    }
}
</script>

<style scoped>
    .edit_bg {
        position: absolute;
        padding: 10px;
        background-color: #4e4e4ec9;
        border-radius: 50%;
        right: 10px;
        top: 10px;
        display:none;
    }
    .edit_bg:hover {
        cursor: pointer;
    }
    .edit_bg > a > svg {
        fill:white;
    }
    .single-channel-image:hover .edit_bg {
        display: block;
    }
</style>
