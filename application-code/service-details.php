<?php include('components/header.php'); ?>

<main>

   <!-- service breadcrumb area start -->
   <section class="breadcrumb__area breadcrumb-style pt-190 pb-210 p-relative z-index-1"
      data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg">
      <div class="breadcrumb__bg-overlay m-img"></div>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-10">
               <div class="breadcrumb__content text-center">
                  <h3 class="breadcrumb__title">Machine Learning
                     <img src="assets/img/breadcrumb/titile.svg" alt="">
                  </h3>
                  <div class="breadcrumb__list breadcrumb__list-translate">
                     <span><a href="home">Home</a></span>
                     <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                     <span>pages</span>
                     <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                     <span>Service Details</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- service breadcrumb area end -->


   <!-- service details area start -->
   <section class="tp-service-details-area pt-120 pb-120">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="tp-service-widget">
                  <div class="tp-service-widget-item mb-40">
                     <div class="tp-service-widget-tab">
                        <ul>
                           <li><a class="active" href="service-details.php">Cloud Compute <i
                                    class="fa-regular fa-arrow-right-long"></i></a></li>
                           <li><a href="service-details2.php">Cloud object Storage <i
                                    class="fa-regular fa-arrow-right-long"></i></a></li>
                           <li><a href="service-details3.php">Private Cloud <i
                                    class="fa-regular fa-arrow-right-long"></i></a></li>

                        </ul>
                     </div>
                  </div>

                  <div class="tp-service-widget-item mb-40">
                     <div class="tp-service-contact">
                        <div class="tp-service-contact-form">
                           <form id="contact-form" action="assets/mail.php" method="POST">
                              <div class="row tp-gx-10">
                                 <div class="col-md-6">
                                    <div class="tp-service-contact-input">
                                       <input name="name" type="text" placeholder="Fast Name">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="tp-service-contact-input">
                                       <input name="text" type="text" placeholder="Last Name">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="tp-service-contact-input">
                                       <input name="email" type="email" placeholder="Email">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="tp-service-contact-input">
                                       <input name="text" type="text" placeholder="Phone">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="tp-service-contact-input">
                                       <textarea name="message" placeholder="Enter Message"></textarea>
                                    </div>
                                 </div>
                                 <div class="tp-service-contact-btn mt-10">
                                    <button type="submit" class="tp-btn">Send Message</button>
                                 </div>
                              </div>
                           </form>
                           <p class="ajax-response"></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-8">
               <div class="tp-service-details-wrapper">
                  <div class="tp-service-details-thumb">
                     <img src="assets/img/services/service-details/img-1.jpg" alt="">
                  </div>
                  <h3 class="tp-service-details-title">Cloud Compute</h3>
                  <p>Unlock the potential of your projects with Cloud Compute. Our scalable processing power ensures
                     seamless execution of applications,
                     enhancing efficiency and performance. Whether it's data analysis, simulations, or complex
                     computations, our cloud infrastructure
                     adapts to your needs, offering a dynamic environment for innovation.</p>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="tp-service-details-thumb p-relative">
                           <img src="assets/img/services/service-details/img-2.jpg" alt="">
                           <div class="tp-video-play text-center">
                              <a class="popup-video effect-1 effect-2"
                                 href="https://www.youtube.com/watch?v=hQIfjJbIy6o&amp;ab_channel=GaanBanglaTV"><i
                                    class="fa-sharp fa-solid fa-play"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="tp-service-details-list">
                           <h3 class="tp-service-details-title">Why is Scalable Processing Power Vital for Your
                              Projects?</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisici
                              sed do eiusmod tempor incididunt ut labore et </p>
                           <ul>
                              <li><span><svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                          fill="currentColor"></path>
                                    </svg></span>Research beyond the business plan</li>
                              <li><span><svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                          fill="currentColor"></path>
                                    </svg></span>Scalable processing power ensures seamless execution</li>
                              <li><span><svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                          fill="currentColor"></path>
                                    </svg></span>The ability to turnaround consulting</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <p>
                  <p><strong>Elevate your projects with Cloud Compute's comprehensive features.</strong> Benefit from
                     optimized resource management, ensuring your applications receive the required processing power for
                     cost savings and heightened performance. Navigate changing workloads effortlessly through adaptive
                     scaling—whether it's handling sudden demand spikes or routine fluctuations, our Cloud Compute
                     infrastructure ensures optimal performance. Moreover, unleash your creativity and innovation with
                     the freedom to seamlessly scale projects, explore new ideas, and outpace competitors in our
                     dynamic, powerful cloud environment.</p>
                  </p>

                  <div class="tp-service-details-faq faq-style-1">
                     <div class="tp-faq-tab-content tp-accordion">
                        <div class="accordion" id="general_accordion">
                           <div class="accordion-item tp-faq-active">
                              <h2 class="accordion-header" id="headingOne">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How to learn digital marketing?
                                 </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="headingOne" data-bs-parent="#general_accordion">
                                 <div class="accordion-body">
                                    <p>A startup or start-up is started by individual founders or entrepreneurs to
                                       search for a repeatable and scalable business model. A startup or start-up is
                                       started by individual founders...</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can I use the demos made by Ewebot?
                                 </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#general_accordion">
                                 <div class="accordion-body">
                                    <p>Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione
                                       signiferumque vim te. Ex mea quem munere lobortis. Duis aute irure dolor in
                                       reprehenderit in voluptate velit esse cillum.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Why didn’t you showcase my submission?
                                 </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#general_accordion">
                                 <div class="accordion-body">
                                    <p>A startup or start-up is started by individual founders or entrepreneurs to
                                       search for a repeatable and scalable business model. A startup or start-up is
                                       started by individual founders...</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFour">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What everybody ought to know about digital marketing?
                                 </button>
                              </h2>
                              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#general_accordion">
                                 <div class="accordion-body">
                                    <p>A startup or start-up is started by individual founders or entrepreneurs to
                                       search for a repeatable and scalable business model. A startup or start-up is
                                       started by individual founders...</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- service details area end -->


   <!-- cta area start -->
   <div class="tp-service-cta-area p-relative">
      <div class="tp-cta-4-shape fadeUp">
         <img src="assets/img/cta/home-3/shape-2.png" alt="">
      </div>
      <div class="container">
         <div class="row gx-0">
            <div class="col-xl-6">
               <div class="tp-cta-4-wrapper-left">
                  <img class="shape-1" src="assets/img/cta/home-3/shape-3.png" alt="">
                  <div
                     class="tp-cta-4-mail d-flex flex-wrap justify-content-center justify-content-xl-start align-items-center">
                     <img src="assets/img/cta/home-3/conversation.png" alt="">
                     <a href="mailto:@themepure.gmail.com">Contact us at <span>@Themepure.com</span></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-6">
               <div class="tp-cta-4-wrapper-right">
                  <div class="tp-cta-4-headphone d-flex flex-wrap justify-content-center ">
                     <div class="tp-cta-4-headphone-thumb">
                        <img src="assets/img/cta/home-3/headphone.png" alt="">
                     </div>
                     <div class="tp-cta-4-content">
                        <p>PERFECT SOLUTION From <span>It Advisor</span></p>
                        <a href="tel:9266688000">+92 666 888 0000</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- cta area end -->
</main>

<?php include('components/footer.php'); ?>