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
                        <h6>Channels Categories</h6>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-carousel-category">
                        <div class="item">
                            <div class="category-item">
                                <a href="#">
                                    <img class="img-fluid" src="img/s1.png" alt="">
                                    <h6>Your Life</h6>
                                    <p>74,853 views</p>
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
                        <h6>Featured Videos</h6>
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
                        <h6>Popular Channels</h6>
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
            axios.post('/api/get-all-channels')
                .then(({data}) => {
                    this.channels = data;
                })
        }
    }
}
</script>

