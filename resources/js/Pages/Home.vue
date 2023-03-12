
<template>
<layout>

    <div>
        <section id="home" class="home_video" data-hash="home" >
            <!-- <video autoplay muted loop id="homeVideo">
                <source src="">
            </video> -->
            <img class="desktop" src="/assets/videos/home_gif.gif" style="height:100%;width:100%;" alt="">
            <img class="mobile" src="/assets/videos/mobile.gif" style="height:100%;width:100%;" alt="">
            <div class="content">
                <!-- <h1 class="video_title">MAKE HISTORY</h1> -->
            </div>
        </section>

        <section v-for="(data,index) in projects" :key="index" class="slidePart swiper-slide" data-hash="slide2" >
            <div class="container pm20 vc_large_img_parent">
                <div class="row">
                <div class="col-md-12">
                    <inertia-link :href="'/partner/'+data.id">
                        <img class="" :src="parent_url()+'/uploads/images/'+data.thumbnail" :alt="data.title">
                    </inertia-link>
                    
                </div>
                <!-- <div class="col-md-12">
                    <p class="company_logo">
                        <img :class="'img_'+index" :src="parent_url()+'/uploads/images/'+data.logo" :alt="data.title">
                    </p>
                    <div v-html="data.short_description"></div>
                    <inertia-link :href="'/partner/'+data.id"><svg width="40" height="40" viewBox="0 0 236 237" style="fill: rgb(0, 0, 0);"><g fill="{{ fill }}"><path d="M114.908.039C49.897 1.701-1.632 56.269.04 121.681c1.67 65.412 55.92 117.276 120.93 115.614 30.619-.782 59.333-13.279 80.855-35.191a4.847 4.847 0 00-.042-6.828 4.78 4.78 0 00-6.787.036c-19.77 20.128-46.145 31.607-74.272 32.326-59.72 1.526-109.55-46.115-111.086-106.203C8.103 61.348 55.435 11.224 115.155 9.697 174.869 8.171 224.703 55.812 226.239 115.9c.346 13.552-1.756 26.835-6.25 39.481-.891 2.512.408 5.277 2.904 6.177a4.799 4.799 0 006.139-2.921c4.89-13.772 7.183-28.237 6.806-42.982C234.166 50.243 179.917-1.622 114.908.039"></path><path d="M130.43 107.805a4.876 4.876 0 01-.269-.247l-2.367-2.339-16.217-15.909.096-.023-19.237-19.01a4.85 4.85 0 01-.058-6.832 4.777 4.777 0 016.785-.063l37.724 37.282c.203.201.384.415.544.64l13.828 13.566a4.857 4.857 0 01-.874 6.774 4.778 4.778 0 01-6.733-.868l-13.222-12.971zM136.887 131.276a4.854 4.854 0 00.062-6.831 4.769 4.769 0 00-3.432-1.445 4.771 4.771 0 00-3.357 1.381l-37.724 37.283a4.85 4.85 0 00-.058 6.831 4.778 4.778 0 006.785.062l37.724-37.281z"></path></g></svg>
                        </inertia-link>
                </div> -->
                
                </div>
            </div>
        </section>
    </div>

    

</layout>
</template>





<script>
    import Layout from '@/Shared/Layout';
    import { defineComponent } from 'vue'


    import { Swiper, SwiperSlide } from "swiper/vue";
    import "swiper/css";
    import "swiper/css/pagination";
    import "./style.css";
    import { Mousewheel, Pagination } from "swiper";



    //SwiperCore.use([Mousewheel]);
    

    export default defineComponent({
        components: {
            Layout,
        },
        props: ['projects'],
         setup() {
            return {
                modules: [Pagination],
            };
        }
    })


</script>

