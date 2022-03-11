<template>
    <div>
        <div class="top-category section-padding mb-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title">
                        <div class="btn-group float-right right-action">
                            <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                            </div>
                        </div>
                        <h6>Категории</h6>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-carousel-category">
                        <div class="item">
                            <div class="category-item">
                                <a href="#">
                                    <img class="img-fluid" src="img/s1.png" alt="">
                                    <h6>Музыка</h6>
                                    <p>0 views</p>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-item">
                                <a href="#">
                                    <svg class="svg-category" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false"><g class="style-scope yt-icon"><path d="M10,9.35,15,12l-5,2.65ZM12,6a54.36,54.36,0,0,0-7.56.38A1.53,1.53,0,0,0,3.38,7.44,24.63,24.63,0,0,0,3,12a24.63,24.63,0,0,0,.38,4.56,1.53,1.53,0,0,0,1.06,1.06A54.36,54.36,0,0,0,12,18a54.36,54.36,0,0,0,7.56-.38,1.53,1.53,0,0,0,1.06-1.06A24.63,24.63,0,0,0,21,12a24.63,24.63,0,0,0-.38-4.56,1.53,1.53,0,0,0-1.06-1.06A54.36,54.36,0,0,0,12,6h0m0-1s6.25,0,7.81.42a2.51,2.51,0,0,1,1.77,1.77A25.87,25.87,0,0,1,22,12a25.87,25.87,0,0,1-.42,4.81,2.51,2.51,0,0,1-1.77,1.77C18.25,19,12,19,12,19s-6.25,0-7.81-.42a2.51,2.51,0,0,1-1.77-1.77A25.87,25.87,0,0,1,2,12a25.87,25.87,0,0,1,.42-4.81A2.51,2.51,0,0,1,4.19,5.42C5.75,5,12,5,12,5Z" class="style-scope yt-icon"></path></g></svg>
                                    <h6>Все</h6>
                                    <p>0 views</p>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-item">
                                <a href="#">
                                    <svg class="svg-category" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false"><g class="style-scope yt-icon"><path d="M4,21H3V3h1V21z M8,15H6v2h2V15z M8,11H6v2h2V11z M8,7H6v2h2V7z M18,15h-2v2h2V15z M8,19H6v2h2V19z M18,19h-2v2h2V19z M18,11h-2v2h2V11z M18,7h-2v2h2V7z M8,3H6v2h2V3z M18,3h-2v2h2V3z M21,3h-1v18h1V3z" class="style-scope yt-icon"></path></g></svg>
                                    <h6>Фильмы</h6>
                                    <p>0 views</p>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-item">
                                <a href="#">
                                    <svg class="svg-category" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false"><g class="style-scope yt-icon"><path d="M10,12H8v2H6v-2H4v-2h2V8h2v2h2V12z M17,12.5c0-0.83-0.67-1.5-1.5-1.5S14,11.67,14,12.5c0,0.83,0.67,1.5,1.5,1.5 S17,13.33,17,12.5z M20,9.5C20,8.67,19.33,8,18.5,8S17,8.67,17,9.5c0,0.83,0.67,1.5,1.5,1.5S20,10.33,20,9.5z M16.97,5.15l-4.5,2.53 l-0.49,0.27l-0.49-0.27l-4.5-2.53L3,7.39v6.43l8.98,5.04l8.98-5.04V7.39L16.97,5.15 M16.97,4l4.99,2.8v7.6L11.98,20L2,14.4V6.8 L6.99,4l4.99,2.8L16.97,4L16.97,4z" class="style-scope yt-icon"></path></g></svg>
                                    <h6>Видеоигры</h6>
                                    <p>0 views</p>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-item">
                                <a href="#">
                                    <svg class="svg-category" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false"><g class="style-scope yt-icon"><path d="M14,12c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2S14,10.9,14,12z M8.48,8.45L7.77,7.75C6.68,8.83,6,10.34,6,12 s0.68,3.17,1.77,4.25l0.71-0.71C7.57,14.64,7,13.39,7,12S7.57,9.36,8.48,8.45z M16.23,7.75l-0.71,0.71C16.43,9.36,17,10.61,17,12 s-0.57,2.64-1.48,3.55l0.71,0.71C17.32,15.17,18,13.66,18,12S17.32,8.83,16.23,7.75z M5.65,5.63L4.95,4.92C3.13,6.73,2,9.24,2,12 s1.13,5.27,2.95,7.08l0.71-0.71C4.02,16.74,3,14.49,3,12S4.02,7.26,5.65,5.63z M19.05,4.92l-0.71,0.71C19.98,7.26,21,9.51,21,12 s-1.02,4.74-2.65,6.37l0.71,0.71C20.87,17.27,22,14.76,22,12S20.87,6.73,19.05,4.92z" class="style-scope yt-icon"></path></g></svg>
                                    <h6>Трансляции</h6>
                                    <p>0 views</p>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-item">
                                <a href="#">
                                    <svg class="svg-category" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false"><g class="style-scope yt-icon"><path d="M17 3V5V6V10V10.51L16.99 10.97C16.94 13.1 15.66 14.94 13.74 15.67H13.72L13.66 15.69L13 15.95V16.65V19V20H14V21H15H10V20H11V19V16.65V15.95L10.34 15.71L10.26 15.68H10.25C8.33 14.95 7.05 13.11 7 10.98V10.51V10V6V5V3H17ZM18 2H6V5H4V6V10V11H6.01C6.07 13.53 7.63 15.78 9.97 16.64C9.98 16.64 9.99 16.64 10 16.65V19H9V20H8V22H16V20H15V19H14V16.65C14.01 16.65 14.02 16.65 14.03 16.64C16.36 15.78 17.93 13.54 17.99 11H20V10V6V5H18V2ZM18 10V6H19V10H18ZM5 10V6H6V10H5Z" class="style-scope yt-icon"></path></g></svg>
                                    <h6>Спорт</h6>
                                    <p>0 views</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
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
                        <h6>Все видео</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3" v-for="video in videos">
                    <router-link :to="{name:'watch', params:{id:video.id}}" >
                        <div class="video-card">
                            <div class="video-card-image">
                                <router-link class="play-icon" :to="{name:'watch', params:{id:video.id}}">
                                    <i class="fas fa-play-circle"></i>
                                </router-link>
                                <router-link :to="{name:'watch', params:{id:video.id}}">
                                    <img class="img-fluid" :src="'user-photos/'+video.preview" alt="">
                                </router-link>
                                <div class="time">3:50</div>
                            </div>
                            <div class="inline_infer">
                                <div class="prev_ima">
                                    <img :src="'user-photos/'+video.channel.image" alt="">
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <router-link :to="{name:'watch', params:{id:video.id}}">
                                            {{video.name}}
                                        </router-link>

                                    </div>
                                    <div class="video-page text-success" style="    font-size: 12px;">
                                        {{video.channel.name}} <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        {{video.views}} views &nbsp;<i class="fas fa-calendar-alt"></i> {{dateConv(video.created_at)}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </router-link>
                </div>

            </div>
        </div>
        <hr class="mt-0">
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
                        <h6>Популярные каналы</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3" v-for="channel in channels">
                    <router-link :to="{name:'channel',params:{'id':channel.id}}">
                        <div class="channels-card" >
                            <div class="channels-card-image">
                                <router-link :to="{name:'channel',params:{'id':channel.id}}">
                                    <img class="img-fluid" :src="'user-photos/'+channel.image" alt="">
                                </router-link>
                            </div>
                            <div class="channels-card-body">
                                <div class="channels-title">
                                    <router-link :to="{name:'channel',params:{'id':channel.id}}">
                                        {{channel.name}}
                                    </router-link>
                                </div>
                                <div class="channels-view">
                                    {{channel.subs_count}} subscribers
                                </div>
                                <div class="channels-card-image-btn">
                                    <button type="button" class="btn btn-outline-danger btn-sm">Subscribe
                                    </button>
                                </div>
                            </div>
                        </div>
                    </router-link>

                </div>

            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data()
    {
        return {
            videos:[],
            channels:[]
        }
    },
    mounted() {
        this.getData();
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
        getData()
        {

            axios.post('/api/get-all-videos')
                .then(({data}) => {
                    this.videos = data;
                })
            axios.post('/api/get-all-channels', {
                'limit':'4'
            })
                .then(({data}) => {
                    this.channels = data;
                })
        }
    }
}
</script>

<style>
    .svg-category {
        width:60px!important;
        height: 60px!important;
        fill:white;
    }
</style>
