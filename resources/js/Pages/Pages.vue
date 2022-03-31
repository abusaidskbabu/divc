<template>
    <layout>
        <div class="container defalut_page" v-html="page.note"></div>
    </layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import Layout from '@/Shared/Layout';

    export default defineComponent({
        components: {
            Layout
        },
        props: ['page']
    });
</script>

