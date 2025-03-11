     <footer class=" bg-gradient-to-r from-customBlue-400 to-customBlue-200   text-white  py-5 bottom-0 ">
         <div
             class="grid grid-cols-4 gap-5 max-md:grid-cols-2 max-sm:grid-cols-1 max-md:px-8 max-sm:px-4 px-16 font-normal content-center">
             
             <div class="py-2">
                 
                 <img class="w-full h-auto" src="<?php echo e(asset('/asset/website/images/company_logo_footer.png')); ?>"
                     alt="Strategic Revenue Insights" title="Strategic Revenue Insights">
                 <p class="my-3">Strategic Revenue Insights is a syndicated market research firm registered with the
                     Registrar of Companies in India.</p>
             </div>
             
             <div class="p-2">
                 <p class="font-semibold text-lg">Office Address</p>
                 <p class="my-4">20/6/12 site IV Sahibabad industrial area Sahibabad Ghaziabad U.P. 201010</p>
                 <p class="mb-3">Email : sales@strategicrevenueinsights.net </p>

                 <b>Stay Connected</b>
                 <div class="flex flex-wrap gap-5 mt-2 items-center">
                     <a target="_blank" href=" https://www.linkedin.com/company/strategic-revenue-insights/">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="40px" height="40px">
                             <path fill="#0288D1"
                                 d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z" />
                             <path fill="#FFF"
                                 d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z" />
                         </svg>
                     </a>
                     <a href="https://x.com/SRI_INC_"> <img class=" w-7 h-7"
                             src="<?php echo e(asset('/asset/website/images/twitter.png')); ?>" alt="twitter"></a>
                     
                 </div>
             </div>
             <div class="p-2 max-sm:p-1">
                 <b>Certified By</b>
                 <div class="flex flex-wrap gap-3 my-3">
                     <img src="<?php echo e(asset('/asset/website/images/IAF.png')); ?>" alt="IAF" class="h-12 w-15">
                     <img src="<?php echo e(asset('/asset/website/images/ISO.jpg')); ?>" alt="ISO"
                         class="h-12 w-15 rounded-full">
                     
                     
                 </div>
                 <div class="p-2 max-sm:p-1">
                     <form id="subscribe_to_newsletter" method="POST" accept="javascript:void(0)">
                         <?php echo csrf_field(); ?>
                         <label for="subscribe_to_email">Subscribe to Newsletter</label>
                         <div class="relative">
                             <input type="email" id="subscribe_to_email" name="subscribe_to_email"
                                 class="py-3 px-4 ps-11 block w-full bg-white text-gray-500 border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
                                 placeholder="Your email" required>
                             <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                 <svg class="shrink-0 size-4 text-gray-600 dark:text-neutral-600"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round">
                                     <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                     <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                 </svg>
                             </div>
                         </div>
                         <button type="submit"
                             class="w-auto px-3 py-1 my-2 float-right max-sm:float-none font-semibold bg-customWhite-200 hover:bg-customWhite-300 text-customBlue-500 rounded-md shadow-md">Subscribe</button>
                     </form>
                 </div>
             </div>
             <div class="p-2 ">
                 <div class="grid gap-3 max-sm:grid-cols-2">
                     <div class="grid ">
                         <b>Legal</b>
                         <a href="<?php echo e(url('/cookie_policy')); ?>" rel="noindex nofollow">Cookie Policy</a>
                         <a href="<?php echo e(url('/privacy_policy')); ?>" rel="noindex nofollow">Privacy Policy</a>
                         <a href="<?php echo e(url('/terms_and_condition')); ?>" rel="noindex nofollow">Terms of Service</a>
                         <a href="<?php echo e(url('/general_disclaimers')); ?>" rel="noindex nofollow">GDPR & Other Policies</a>
                         <a href="<?php echo e(url('/frequently_asked_questions')); ?>" rel="noindex nofollow">FAQs</a>
                         <a href="<?php echo e(url('/refund_and_returns_policy')); ?>" rel="noindex nofollow">Refund and Returns
                             Policy</a>
                     </div>
                 </div>
             </div>
         </div>
         <hr>
         <p>
             <center>©<?php echo e(date('Y')); ?> Strategic Revenue Insights Inc. All Rights Reserved.</center>
         </p>

     </footer>


     <script src="<?php echo e(asset('asset/website/js/aos.js')); ?>"></script>
     <script src="<?php echo e(asset('asset/website/js/swiper-bundle.min.js')); ?>"></script>
     <script src="<?php echo e(asset('asset/website/js/jquery.lazyload.min.js')); ?>"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"></script>
     
     <script src="<?php echo e(asset('/asset/admin/js/iziToast.min.js')); ?>"></script>
     <script src="<?php echo e(asset('/asset/website/js/common.js')); ?>"></script>
     <script>
         $(document).ready(function() {
             //// ========================== subscribe to email form submit ==========================
             $('#subscribe_to_newsletter').on('submit', function(e) {
                 e.preventDefault();

                 var formData = new FormData(this);
                 $.ajax({
                    type: 'POST',
                    url: "<?php echo e(url('/subscribe_to_newsletter')); ?>",
                    data: $(this).serialize(),
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                    },
                     beforeSend: function() {
                         $('.loader').show();
                     },
                     success: function(data) {
                         console.log('data');
                         if (data.status == true) {
                             show_common_message_modal(data.data.thank_you_msg, 'Thank You')
                         } else {
                             alert('Something went wrong, Please try again later');
                         }
                     },
                     error: function(xhr, status, error) {
                         console.error('Error:', error);
                     },
                     complete: function() {
                         $('.loader').hide();
                     }
                 });
             })
         });
     </script>
     </body>

     </html>
<?php /**PATH C:\xampp\htdocs\sri_website\resources\views/website/layout/footer.blade.php ENDPATH**/ ?>