<template>
    <div>
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
                        <h6>Понравившиеся видео</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3" v-for="liked in videos">
                    <router-link :to="{name:'watch', params:{id:liked.video.id}}" >
                        <div class="video-card">
                            <div class="video-card-image">
                                <router-link class="play-icon" :to="{name:'watch', params:{id:liked.video.id}}">
                                    <i class="fas fa-play-circle"></i>
                                </router-link>
                                <router-link :to="{name:'watch', params:{id:liked.video.id}}">
                                    <img class="img-fluid" :src="'user-photos/'+liked.video.preview" alt="">
                                </router-link>
                                <div class="time">3:50</div>
                            </div>
                            <div class="inline_infer">
                                <div class="prev_ima">
                                    <img :src="'user-photos/'+liked.video.channel.image" alt="">
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <router-link :to="{name:'watch', params:{id:liked.video.id}}">
                                            {{liked.video.name}}
                                        </router-link>

                                    </div>
                                    <div class="video-page text-success" style="    font-size: 12px;">
                                        {{liked.video.channel.name}} <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        {{liked.video.views}} views &nbsp;<i class="fas fa-calendar-alt"></i> {{dateConv(liked.video.created_at)}}
                                    </div>
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
    name: "LikeList",
    data()
    {
        return {
            videos:[],
            channels:[],
            token:$cookies.get('token'),
        }
    },
    mounted() {
        this.getData();
        $('title').text('DumboTube');
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
            let data = {
                'token':this.token
            }
            axios.post('/api/get-user-likes',data)
                .then(({data}) => {
                    this.videos = data['data'];
                })
        }
    }
}
</script>

<style scoped>

</style>
