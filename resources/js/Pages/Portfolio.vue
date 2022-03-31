<template>
    <layout>
        <div class="container defalut_page">
                <h1 class="fs text-center">HISTORY IN THE MAKING</h1>
                <p class="text-center fs font-bold">Partners We Have In Our Journey</p>
                <br>
                <div class="row">
                    <div v-for="partner in partnership" :key="partner.id" class="col-xl-2 col-sm-4 col-6 mb-4">
                            <inertia-link :href="route('partner.details',partner.id)">
                                <div class="hover-card card">
                                    <img :src="parent_url()+'/uploads/images/'+partner.logo" alt="companu Logo">
                                </div>
                            </inertia-link>
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
        props: ['partnership']
    });
</script>

