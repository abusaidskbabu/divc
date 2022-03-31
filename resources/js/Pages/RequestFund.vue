<template>
   <layout>
      <div class="container defalut_page ">
         <section class="contact-pg-contact-section section-padding">
            <h1 class="fs text-center">APPLY FOR INVESTMENT</h1>
            <br>
            <div class="row">
               <div class="col-md-2"></div>
               <div class="col-md-8">
                  <div class="contact-form-area">
                     <div class="row">
                        <div class="col-md-12 mb-3">
                        </div>
                     </div>
                     <div class="contact-form">
                        <form  @submit.prevent="submit" class="contact-validation-active" id="contact-form" action="https://tpb.vmsinc.us/entrepreneurship-submit" enctype="multipart/form-data">
                           <input type="hidden" name="_token" value="kXt2yEAhaLubqW2IbIUl1jJ9bT8pTaBBDDJqacTp">                            
                           <div>
                              <label for="">Startup Name *</label>
                              <input v-model="form.startup_name" type="text" class="form-control" placeholder="Startup Name.." required="">
                              <spam v-if="errors.startup_name" class="help-block with-errors" style="color:red">{{  errors.startup_name }}</spam>
                           </div>
                           <div>
                              <label for="">Registration No</label>
                              <input v-model="form.registration_no" type="text" class="form-control" name="registration_no" id="registration_no" placeholder="Registration No..">
                              <spam v-if="errors.registration_no" class="help-block with-errors" style="color:red">{{  errors.registration_no }}</spam>
                           </div>
                           <div>
                              <label for="">Website Url</label>
                              <input v-model="form.website_url" type="text" class="form-control" name="website_url" id="name" placeholder="Website Url..">
                              <spam v-if="errors.website_url" class="help-block with-errors" style="color:red">{{  errors.website_url }}</spam>
                           </div>
                           <div>
                              <label for=""> Mobile number *</label>
                              <input v-model="form.mobile_number" type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="Mobile.." required="">
                              <spam v-if="errors.mobile_number" class="help-block with-errors" style="color:red">{{  errors.mobile_number }}</spam>
                           </div>
                           <div class="comment-area">
                              <label for="">Address *</label>
                              <textarea v-model="form.address" name="address" id="address" placeholder="Address.." required=""></textarea>
                              <spam v-if="errors.address" class="help-block with-errors" style="color:red">{{  errors.address }}</spam>
                           </div>
                           <div>
                              <label for="">Sector *</label>
                              <select  v-model="form.sector" name="sector" id="sector" class="form-control" required="">
                                 <option selected="" disabled=""> Select Sector </option>
                                 <option value="1"> Education </option>
                                 <option value="2"> Financial Service </option>
                                 <option value="3"> Environment </option>
                                 <option value="4"> Transport </option>
                                 <option value="5"> Infrastructure </option>
                                 <option value="6"> Agriculture </option>
                                 <option value="7"> Food Processing </option>
                                 <option value="8"> Pharmaceutical </option>
                                 <option value="9"> Manufacturing </option>
                                 <option value="10"> Tourism </option>
                                 <option value="11"> Media &amp; Environment </option>
                                 <option value="12"> e-Commerce </option>
                                 <option value="13"> Biotech </option>
                                 <option value="14"> Semiconductor / Nanotech / IoT </option>
                                 <option value="15"> Health </option>
                              </select>
                              <spam v-if="errors.sector" class="help-block with-errors" style="color:red">{{  errors.sector }}</spam>
                           </div>
                           <div>
                              <label for=""> Amount Requested *</label>
                              <input v-model="form.amount_requested" type="text" class="form-control" name="amount_requested" id="amount_requested" placeholder="Amount requested.." required="">
                              <spam v-if="errors.amount_requested" class="help-block with-errors" style="color:red">{{  errors.amount_requested }}</spam>
                           </div>
                           <div>
                              <label for="">Product Stage *</label>
                              <select  v-model="form.product_stage" name="product_stage" id="product_stage" class="form-control" required="">
                                 <option selected="" disabled=""> Select Stage </option>
                                 <option value="1"> Idea Only </option>
                                 <option value="2"> Prototype </option>
                                 <option value="3"> Minimum Visible Product </option>
                                 <option value="4"> Commercial Product </option>
                              </select>
                              <spam v-if="errors.product_stage" class="help-block with-errors" style="color:red">{{  errors.product_stage }}</spam>
                           </div>
                           <div>
                              <label for=""> Attachment *</label>
                              <input  type="file"  @input="form.attachment = $event.target.files[0]" class="form-control" name="attachment" id="attachment">
                              <spam v-if="errors.attachment" class="help-block with-errors" style="color:red">{{  errors.attachment }}</spam>
                           </div>
                           <div id="Pitch_link">
                              <label for="">Pitch Video Link</label>
                              <input v-model="form.video_link" type="text" class="form-control" name="video_link" id="video_link" placeholder="Video Link..">
                              <spam v-if="errors.video_link" class="help-block with-errors" style="color:red">{{  errors.video_link }}</spam>
                           </div>
                            <div id="successMessage" v-if="$page.props.flash.message">
                                <span class="successMessage">{{ $page.props.flash.message }}</span>
                            </div>
                           

                           <div class="submit-area mb-3" id="submitBtn">
                              <button type="submit" class="theme-btn">Apply Now</button>
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
    import { useForm } from '@inertiajs/inertia-vue3'
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
         const form = useForm({
            startup_name: null,
            registration_no:null,
            website_url:null,
            mobile_number:null,
            address:null,
            sector:null,
            amount_requested:null,
            product_stage:null,
            video_link:null,
            progress:null,
            attachment:null,
         })
         function submit() {
            Inertia.post('/apply-for-refund', form, {
               forceFormData: true,
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