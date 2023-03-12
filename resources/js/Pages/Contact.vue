<template>
    <layout>
        <div class="container defalut_page">
                <h1 class="fs text-center">Contact Us</h1>
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

             <section class="contact-pg-contact-section section-padding">
                <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="contact-form-area">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                            </div>
                        </div>
                        <div class="contact-form">
                            <form  @submit.prevent="submit" class="contact-validation-active" id="contact-form" enctype="multipart/form-data">
                            <input  type="hidden" name="_token" value="kXt2yEAhaLubqW2IbIUl1jJ9bT8pTaBBDDJqacTp">                            
                            <div>
                                <label for="">Name *</label>
                                <input v-model="form.name" type="text" class="form-control" name="name" id="startup_name" placeholder="Name.." required>
                                <spam v-if="errors.name" class="help-block with-errors" style="color:red">{{  errors.name }}</spam>
                            </div>
                            <div>
                                <label for=""> Phone</label>
                                <input v-model="form.phone" type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="Phone..">
                                <!-- <div class="help-block with-errors" style="color:red"></div>-->
                            </div>

                            <div>
                                <label for="">Email</label>
                                <input v-model="form.email" type="email" class="form-control" name="mobile_number" id="mobile_number" placeholder="Email..">
                                <!-- <div class="help-block with-errors" style="color:red"></div>-->
                            </div>
                            <div>
                                <label for="">Subject</label>
                                <input v-model="form.subject" type="text" class="form-control" name="startup_name" id="startup_name" placeholder="Subject.." >
                                <!-- <div class="help-block with-errors" style="color:red"></div>-->
                            </div>

                            <div class="comment-area">
                                <label for="">Message *</label>
                                <textarea  v-model="form.message" name="address" id="address" placeholder="Message.." required></textarea>
                                <spam v-if="errors.message" class="help-block with-errors" style="color:red">{{ errors.message }}</spam>
                            </div>
   
                        
                            <div id="successMessage" v-if="$page.props.flash.message">
                                <span class="successMessage">{{ $page.props.flash.message }}</span>
                            </div>
                           
                          

                           <div class="submit-area mb-3" id="submitBtn">
                              <button type="submit" class="theme-btn">Submit</button>
                           </div>
                   
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                </div>
            </section>


        </div>
    </layout>
</template>

<script>
    import {defineProps, defineComponent, ref } from 'vue'
    import Layout from '@/Shared/Layout';
    import { Inertia } from '@inertiajs/inertia';
    import { reactive } from 'vue';
    const props = defineProps({
        message:null,
    });
    export default defineComponent({
        data(){
            return{
                errors:this.errors,
            }
        },
        setup () {
            const form = reactive({
                name: null,
                phone: null,
                subject: null,
                email: null,
                message: null,
                errors:null,
            })
            function submit() {
            
                Inertia.post('/contact-submit', form, {
                })

            }
            return { form, submit }
        },

        components: {
            Layout
        },
        props: ['errors']
    });
</script>

