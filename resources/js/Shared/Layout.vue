<template>
        <section class="header_section">
            <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-2">
                                <div class="logo">
                                    <inertia-link href="/"><img id="logo" src="/assets/images/logo.png" alt=""></inertia-link>
                                </div>
                            </div>
                            <div class="col-8"></div>
                            <div class="col-2">
                                <p class="text-right bars_icon">
                                    <!-- <i class="fa fa-bars text-white trigger_nav" aria-hidden="true"></i> -->
                                    <i class="fa fa-th-large trigger_nav text-white" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="nav_menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <p class="text-center">
                                    <span class="f_s_40" >
                                        <svg width="40px" height="40px" viewBox="0 0 236 237" version="1.1"><defs></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path d="M163.2751,8.8965 C223.3981,33.6845 252.0191,103.0635 227.0791,163.5585 C202.1391,224.0515 132.9361,253.1015 72.8131,228.3135 C12.6921,203.5265 -15.9299,134.1465 9.0101,73.6515 C14.0521,61.4215 20.9801,50.2785 29.5991,40.4505 C30.2611,39.3645 31.6561,37.7055 34.1721,35.1895 C36.0521,33.3095 39.1171,33.3165 41.0031,35.1925 L70.5631,64.5925 C70.5671,64.5965 70.5721,64.5995 70.5771,64.6035 L172.3441,165.8205 C174.2311,167.6915 174.2301,170.7345 172.3421,172.6085 C170.4551,174.4795 167.3971,174.4795 165.5111,172.6065 L135.9521,143.2065 C135.9471,143.2025 135.9421,143.1995 135.9371,143.1955 L37.8551,45.6445 C29.4501,54.9505 22.7241,65.5805 17.8871,77.3125 C-5.0229,132.8815 21.2711,196.6135 76.4961,219.3815 C131.7251,242.1515 195.2921,215.4675 218.2021,159.8975 C241.1131,104.3285 214.8221,40.5975 159.5921,17.8275 C133.5811,7.1035 104.8161,6.9275 78.5921,17.3345 C76.1221,18.3135 73.3371,17.0975 72.3721,14.6205 C71.4031,12.1425 72.6271,9.3395 75.0971,8.3595 C103.6441,-2.9685 134.9591,-2.7775 163.2751,8.8965 Z M100.9079,128.0464 C102.7739,126.1514 105.8319,126.1204 107.7389,127.9774 C109.6439,129.8274 109.6769,132.8664 107.8129,134.7624 L70.5959,172.5504 C68.7289,174.4444 65.6719,174.4774 63.7649,172.6244 C62.7989,171.6844 62.3149,170.4384 62.3149,169.1944 C62.3149,167.9804 62.7709,166.7704 63.6909,165.8354 L100.9079,128.0464 Z M135.9509,107.5977 C134.0639,109.4727 131.0069,109.4727 129.1199,107.5977 C128.1769,106.6597 127.7059,105.4337 127.7059,104.2027 C127.7059,102.9767 128.1769,101.7457 129.1199,100.8087 L165.5309,64.6207 C167.4179,62.7457 170.4749,62.7457 172.3619,64.6207 C174.2489,66.4957 174.2489,69.5347 172.3619,71.4097 L135.9509,107.5977 Z" fill="#000000"></path></g></svg>
                                    </span>
                                     </p>



                                <ul class="nav_menu_1">
                                    <li><inertia-link class="nav_link" :href="route('pages','about-us')">About Us</inertia-link></li>
                                    <li><inertia-link class="nav_link" :href="route('pages','what-we-do')">What We Do</inertia-link></li>
                                    <li><inertia-link class="nav_link" :href="route('portfolio')">Portfolio</inertia-link></li>
                                    <li><inertia-link class="nav_link" :href="route('request.for.fund')">Apply For Investment</inertia-link></li>
                                    <li><inertia-link class="nav_link" :href="route('accelerator.program')">Accelerator Program</inertia-link></li>
                                    <li><inertia-link class="nav_link" :href="route('contact.us')">Contact Us</inertia-link></li>
                                    <!-- <li><inertia-link class="nav_link" :href="route('pages','perspectives')">Perspectives</inertia-link></li> -->
                                     
                                    <li>
                                        <form @submit.prevent="submit">
                                            <div class="input-group mb-3">
                                                <input v-model="form.searchContent" type="text" class="form-control" placeholder="Search here.." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                   <button type="submit" class="searchButton"> <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    
                                </ul>

                                <p class="border_bottom"></p>

                                <ul class="nav_menu_2">
                                    <li><a href="#" class="nav_link"></a></li>
                                     <li><inertia-link class="nav_link" :href="route('pages','our-history')">Our Journey</inertia-link></li>
                                     <li><inertia-link class="nav_link" :href="route('pages','toc')">Term Of Condition</inertia-link></li>
                                     <li><inertia-link class="nav_link" :href="route('pages','privacy')">Privacy Policy</inertia-link></li>
                                    <!-- <li><a href="#" class="nav_link">More <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li> -->
                                </ul>

                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="copyright">Venture Capital is committed to respecting and protecting your privacy. Please contact info@venturecapital.com with any questions regarding our privacy practices. 
                                    <br>
                                    © 2021 Venture Capital | Designed By <a href="https://vmsl.com.bd" target="_blank">VMSL</a>
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
        </section>

    <slot/>
    <!-- Footer -->
    <footer class="">
    
        <!-- Section: Links  -->
        <section class="" style="background:#000000d1;">
            <div class="container  p-4 text-light">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        
                        <div class="logo mb-4">
                            <inertia-link href="/"><img id="logo" src="/assets/images/logo.png" alt=""></inertia-link>
                        </div>
                        
                        <p>
                            <inertia-link class="text-reset" :href="route('pages','about-us')">About Us</inertia-link>
                        </p>
                        <p>
                            <inertia-link class="text-reset" :href="route('pages','what-we-do')">What We Do</inertia-link>
                        </p>
                        <p>
                            <inertia-link class="text-reset" :href="route('contact.us')">Contact Us</inertia-link>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                        <h6 class="text-uppercase  mb-4">
                            Quick links
                        </h6>

                        <p>
                            <inertia-link class="text-reset" :href="route('portfolio')">Portfolio</inertia-link>
                        </p>
                        <p>
                            <inertia-link class="text-reset" :href="route('request.for.fund')">Apply For Investment</inertia-link>
                        </p>
                        <p>
                            <inertia-link class="text-reset" :href="route('accelerator.program')">Accelerator Program</inertia-link>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        
                        <p>
                            <inertia-link class="text-reset" :href="route('pages','our-history')">Our Journey</inertia-link>
                        </p>
                        <p>
                            <inertia-link class="text-reset" :href="route('pages','toc')">Term Of Condition</inertia-link>
                        </p>
                        <p>
                            <inertia-link class="text-reset" :href="route('pages','privacy')">Privacy Policy</inertia-link>
                        </p>
                        
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Connect with us
                        </h6>
                        <p><i class="fa fa-home me-3"></i>  Suvastu Zenim Plaza, Level #3, House #37, Road #16 (Old 27), Dhanmondi , Dhaka -1209, Bangladesh.</p>
                        <p>
                            <i class="fa fa-envelope me-3"></i>
                            info@di.vc
                        </p>
                        <p><i class="fa fa-phone me-3"></i> + 880 9643 400 400</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-1" style="background-color: rgb(63 62 62);color: #fff;font-size: 12px;">
            © 2022 Copyright - Designed By 
            <a class="text-reset fw-bold" target="_blank" href="https://www.vmsl.com.bd/"> VMSL</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</template>
<script>
    
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import { Inertia } from '@inertiajs/inertia';
    import { reactive } from 'vue';
    export default defineComponent({
        setup () {
            const form = reactive({
            searchContent: null,
            })
            function submit() {
                $('.trigger_nav').trigger('click');
            Inertia.post('/search', form)
            }

            return { form, submit }
        },


        components: {
            Head,
            Link,
        }
    });
</script>
