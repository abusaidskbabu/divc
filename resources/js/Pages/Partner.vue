<template>
    <layout>
        <div class="container defalut_page">
                <p class="text-center"> <inertia-link href="/">
                        <svg width="40px" height="40px" viewBox="0 0 236 237" version="1.1"><defs></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path d="M163.2751,8.8965 C223.3981,33.6845 252.0191,103.0635 227.0791,163.5585 C202.1391,224.0515 132.9361,253.1015 72.8131,228.3135 C12.6921,203.5265 -15.9299,134.1465 9.0101,73.6515 C14.0521,61.4215 20.9801,50.2785 29.5991,40.4505 C30.2611,39.3645 31.6561,37.7055 34.1721,35.1895 C36.0521,33.3095 39.1171,33.3165 41.0031,35.1925 L70.5631,64.5925 C70.5671,64.5965 70.5721,64.5995 70.5771,64.6035 L172.3441,165.8205 C174.2311,167.6915 174.2301,170.7345 172.3421,172.6085 C170.4551,174.4795 167.3971,174.4795 165.5111,172.6065 L135.9521,143.2065 C135.9471,143.2025 135.9421,143.1995 135.9371,143.1955 L37.8551,45.6445 C29.4501,54.9505 22.7241,65.5805 17.8871,77.3125 C-5.0229,132.8815 21.2711,196.6135 76.4961,219.3815 C131.7251,242.1515 195.2921,215.4675 218.2021,159.8975 C241.1131,104.3285 214.8221,40.5975 159.5921,17.8275 C133.5811,7.1035 104.8161,6.9275 78.5921,17.3345 C76.1221,18.3135 73.3371,17.0975 72.3721,14.6205 C71.4031,12.1425 72.6271,9.3395 75.0971,8.3595 C103.6441,-2.9685 134.9591,-2.7775 163.2751,8.8965 Z M100.9079,128.0464 C102.7739,126.1514 105.8319,126.1204 107.7389,127.9774 C109.6439,129.8274 109.6769,132.8664 107.8129,134.7624 L70.5959,172.5504 C68.7289,174.4444 65.6719,174.4774 63.7649,172.6244 C62.7989,171.6844 62.3149,170.4384 62.3149,169.1944 C62.3149,167.9804 62.7709,166.7704 63.6909,165.8354 L100.9079,128.0464 Z M135.9509,107.5977 C134.0639,109.4727 131.0069,109.4727 129.1199,107.5977 C128.1769,106.6597 127.7059,105.4337 127.7059,104.2027 C127.7059,102.9767 128.1769,101.7457 129.1199,100.8087 L165.5309,64.6207 C167.4179,62.7457 170.4749,62.7457 172.3619,64.6207 C174.2489,66.4957 174.2489,69.5347 172.3619,71.4097 L135.9509,107.5977 Z" fill="#000000"></path></g>
                        </svg>
                    </inertia-link>
                </p>
                <br>
                <div class="row">
                    <div class="col-md-12 text-left">
                       <div class="right_side mt-5  d-sm-none d-md-block d-lg-none">
                            <img width="170" :src="parent_url()+'/uploads/images/'+partner.logo" alt="logo">
                       </div>
                   </div>
                    <div class="col-md-6 ">
                       <div class="left_side d-lg-block d-none">
                            <ul class="social_share">
                                <li><a target="_blank" :href="'https://www.facebook.com/sharer/sharer.php?u='+base_url()+'/partner/'+partner.id"> <i class="facebook fa fa-facebook-square" ></i> </a></li>
                                <li><a target="_blank" :href="'https://twitter.com/share?url='+base_url()+'/partner/'+partner.id+'&text='+partner.title+''"> <i class="twitter fa fa-twitter"></i> </a></li>
                                 <li><a target="_blank" :href="'https://www.linkedin.com/sharing/share-offsite/?url='+base_url()+'/partner/'+partner.id"> <i class="linkedin fa fa-linkedin"></i> </a></li>

                            </ul>
                            <img :src="parent_url()+'/uploads/images/'+partner.thumbnail" alt="thumbnail">
                       </div>
                       <br>
                       <p> <b>FOUNDER:</b> <span class="fs font-bold text-uppercase">{{partner.founder}}</span></p>
                       <div class="description text-justify" v-html="partner.description"></div>
                    </div>
                    <div class="col-md-6 text-center d-lg-block d-none">
                       <div class="right_side mt-5">
                            <img width="170" :src="parent_url()+'/uploads/images/'+partner.logo" alt="logo">
                            <h1 class="fs text-uppercase ">{{partner.title}}</h1>
                            <div class="short-description " v-html="partner.short_description"></div>
                       </div>
                   </div>
                </div>
        </div>
    </layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import Layout from '@/Shared/Layout';

    export default defineComponent({
        components: {
            Layout
        },
        props: ['partner']
    });
</script>

