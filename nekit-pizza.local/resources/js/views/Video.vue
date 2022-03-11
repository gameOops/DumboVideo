<template>
    <div>
        <div class="video-block section-padding">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-video-left">
                        <div class="single-video">
                            <video id="videoplayer" style="width: 100%" controls autoplay="true" loop="true" >
                                <source :src="'user-videos/'+video.src" type="video/mp4" />
                            </video>
                        </div>
                        <div class="single-video-title box mb-3">
                            <h2><a href="#">{{video.name}}</a></h2>
                            <div style="display: flex;">
                                <p class="mb-0"><i class="fas fa-eye"></i> {{video.views}} views</p>
                                <span style="display: flex; align-items: center; margin-left: 25px">
                                    <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 20px;fill:white; height: 100%;"><g class="style-scope yt-icon"><path d="M18.77,11h-4.23l1.52-4.94C16.38,5.03,15.54,4,14.38,4c-0.58,0-1.14,0.24-1.52,0.65L7,11H3v10h4h1h9.43 c1.06,0,1.98-0.67,2.19-1.61l1.34-6C21.23,12.15,20.18,11,18.77,11z M7,20H4v-8h3V20z M19.98,13.17l-1.34,6 C18.54,19.65,18.03,20,17.43,20H8v-8.61l5.6-6.06C13.79,5.12,14.08,5,14.38,5c0.26,0,0.5,0.11,0.63,0.3 c0.07,0.1,0.15,0.26,0.09,0.47l-1.52,4.94L13.18,12h1.35h4.23c0.41,0,0.8,0.17,1.03,0.46C19.92,12.61,20.05,12.86,19.98,13.17z" class="style-scope yt-icon"></path></g></svg>
                                    <span style="margin-left: 5px">0</span>
                                </span>
                                <span style="display: flex; align-items: center; margin-left: 10px">
                                    <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 20px;fill:white; height: 100%;"><g class="style-scope yt-icon"><path d="M17,4h-1H6.57C5.5,4,4.59,4.67,4.38,5.61l-1.34,6C2.77,12.85,3.82,14,5.23,14h4.23l-1.52,4.94C7.62,19.97,8.46,21,9.62,21 c0.58,0,1.14-0.24,1.52-0.65L17,14h4V4H17z M10.4,19.67C10.21,19.88,9.92,20,9.62,20c-0.26,0-0.5-0.11-0.63-0.3 c-0.07-0.1-0.15-0.26-0.09-0.47l1.52-4.94l0.4-1.29H9.46H5.23c-0.41,0-0.8-0.17-1.03-0.46c-0.12-0.15-0.25-0.4-0.18-0.72l1.34-6 C5.46,5.35,5.97,5,6.57,5H16v8.61L10.4,19.67z M20,13h-3V5h3V13z" class="style-scope yt-icon"></path></g></svg>
                                    <span style="margin-left: 5px;">0</span>
                                </span>
                                <span style="display: flex; align-items: center; margin-left: 10px">
                                    <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 20px;fill:white; height: 100%;"><g mirror-in-rtl="" class="style-scope yt-icon"><path d="M15,5.63L20.66,12L15,18.37V15v-1h-1c-3.96,0-7.14,1-9.75,3.09c1.84-4.07,5.11-6.4,9.89-7.1L15,9.86V9V5.63 M14,3v6 C6.22,10.13,3.11,15.33,2,21c2.78-3.97,6.44-6,12-6v6l8-9L14,3L14,3z" class="style-scope yt-icon"></path></g></svg>
                                    <span style="margin-left: 5px;">поделиться</span>
                                </span>
                                <span style="display: flex; align-items: center; margin-left: 10px">
                                    <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 20px;fill:white; height: 100%;"><g class="style-scope yt-icon"><path d="M22,13h-4v4h-2v-4h-4v-2h4V7h2v4h4V13z M14,7H2v1h12V7z M2,12h8v-1H2V12z M2,16h8v-1H2V16z" class="style-scope yt-icon"></path></g></svg>
                                    <span style="margin-left: 5px;">сохранить</span>
                                </span>
                            </div>
                        </div>
                        <div class="single-video-author box mb-3">
                            <div class="float-right">
                                <button v-if="isSub" class="btn btn-light" @click="sendSub" type="button">Вы подписаны</button>
                                <button  v-else class="btn btn-danger" @click="sendSub" type="button">Subscribe <strong>1.4M</strong></button>
                                <button class="btn btn btn-outline-danger" type="button"><i class="fas fa-bell"></i></button></div>
                            <img class="img-fluid" :src="'user-photos/'+channel.image" alt="">
                            <p>
                                <router-link :to="{name:'channel', params:{id:channel.id}}">
                                    <strong>{{channel.name}}</strong>
                                </router-link>

                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified" v-if="channel.verify === '1'">
                                    <i class="fas fa-check-circle text-success"></i>
                                </span>
                            </p>
                            <small>Published on {{video.created_at}}</small>
                        </div>
                        <div class="single-video-info-content box mb-3">
                            <h6>Category :</h6>
                            <p>{{video.category}}</p>
                            <h6>About :</h6>
                            <p>{{video.about}}</p>
                            <h6>Tags :</h6>
                            <p class="tags mb-0">
                                <span><a href="#">{{video.category}}</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-video-right">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="adblock">
                                    <div class="img">
                                        <img src="user-photos/Новый проект (1).jpg" style="width:100%" alt="">

                                    </div>
                                </div>
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
                                    <h6>Up Next</h6>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="video-card video-card-list" v-for="video in videos">
                                    <div class="video-card-image">
                                        <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                        <a href="#"><img class="img-fluid" :src="'user-photos/'+video.preview" alt=""></a>
                                        <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                        <div class="btn-group float-right right-action">
                                            <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                            </div>
                                        </div>
                                        <div class="video-title">
                                            <a href="#">{{video.name}}</a>
                                        </div>
                                        <div class="video-page text-success">
                                            {{video.channel.name}}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                        </div>
                                        <div class="video-view">
                                            {{video.views}} views &nbsp;<i class="fas fa-calendar-alt"></i> {{dateConv(video.created_at)}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Video",

    data() {
        return {
            id:this.$route.params.id,
            video:[],
            videos:[],
            isSub:null,
            channel:[]
        }
    },
    mounted() {
        this.getData();
        this.checkSub();
        axios.post('/api/get-all-videos')
            .then(({data}) => {
                this.videos = data;

            })
        setTimeout(function(){
            //document.getElementById('videoplayer').play()
        },1000)

    },

    methods: {
        dateConv(date) {
            let currentDate = Date.parse(new Date());
            let days = (currentDate - Date.parse(date))/86400000;       //86400000 - ms в дне

            let before = Math.round(days);

            switch (before) {
                case 0:
                    return 'Сегодня';
                    break;
                case 1:
                    return '1 день назад';
                    break;
                case 2:
                    return '2 дня назад';
                    break;
                case 3:
                    return '3 дня назад';
                    break;
                case 4:
                    return '4 дня назад';
                    break;
                case 5:
                    return '5 дней назад';
                    break;
                case 6:
                    return '6 дней назад';
                    break;
                case 7:
                    return '1 нед. назад';
                    break;
                case 8:
                    return '1 нед. назад';
                    break;
                case 9:
                    return '1 нед. назад';
                    break;
                case 10:
                    return '1 нед. назад';
                    break;
                case 11:
                    return '1 нед. назад';
                    break;
                case 12:
                    return '1 нед. назад';
                    break;
                case 13:
                    return '1 нед. назад';
                    break;
                case 14:
                    return '2 нед. назад';
                    break;
                default:
                    return date;
                    break;
            }

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
                'id':this.id,
                'video_id':this.id
            }
            axios.post('/api/get-video',data)
                .then(({data}) => {
                    this.video = data;
                    this.channel = data['channel']
                })
            axios.post('/api/add-video-watch',data)
                .then(({data}) => {
                    console.log(data)
                })
        }
    }
}
</script>

<style scoped>

</style>
