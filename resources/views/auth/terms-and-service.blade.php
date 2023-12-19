<div x-data="{createOpen:false}" class="inline">
    <button type="button" x-on:click="createOpen = true">
        <strong class="text-indigo-600">Terms and Conditions</strong>
    </button>
    <div x-show="createOpen" x-cloak x-on:click="createOpen = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>
    <div x-show="createOpen" x-cloak>
        <div class="fixed bg-slate-50 shadow-md rounded-md top-2/4 left-2/4 w-3/4 -translate-y-2/4 -translate-x-2/4"
            style="z-index: 501; max-height: 80vh; overflow-y: auto;">
            <div class="p-6 relative bg-white">
                <div class="relative">
                    <div class="text-lg max-w-prose mx-auto">
                        <h1>
                        <div class="flex justify-center space-x-6">
                            <img class="h-12" src="{{ asset('Pangasinan_State_University_logo.png')}}" alt="Company name"><x-application-logo class="block h-12 w-auto fill-current text-gray-800" />
                        </div>
                        <span class="mt-2 block text-xl text-center leading-8 font-extrabold tracking-tight text-gray-900">Terms and Conditions</span>
                        </h1>
                        <p class="mt-8 text-sm text-gray-500 leading-8">Welcome to PSU Marketplace. These terms and conditions ("Terms") govern your use of our platform and services. By accessing or using PSU Marketplace, you agree to comply with and be bound by these Terms.</p>
                    </div>
                    <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
                        <span class="mt-2 block text-sm text-start leading-8 font-extrabold tracking-tight text-gray-900">1. User Agreement</span>
                        <h1 class="mt-2">1.1 By registering on PSU Marketplace, you agree to abide by these Terms and all applicable laws and regulations.</h1>
                        <h1 class="mt-2">1.2 PSU Marketplace is a platform that connects buyers and sellers. Sellers are responsible for the items they list, and buyers are responsible for fulfilling their purchase obligations.</h1>
                    
                        <span class="mt-2 block text-sm text-start leading-8 font-extrabold tracking-tight text-gray-900">2. Seller Fees</span>
                        <h1 class="mt-2">2.1 Sellers on PSU Marketplace are required to pay a commission fee of 15% of the total sale price for each successfully sold item.</h1>
                        <h1 class="mt-2">2.2 Commission can be paid at our main office located at Pangasinan State University Alaminos City Campus in Bolaney, Alaminos City, Pangasinan.</h1>
            
                        <span class="mt-2 block text-sm text-start leading-8 font-extrabold tracking-tight text-gray-900">3. Meeting Location</span>
                        <h1 class="mt-2">3.1 Sellers and buyers are required to arrange item pickups at designated meeting locations.</h1>
                        <h1 class="mt-2">3.2 The designated meeting location for item pickups is exclusively on PSU (Pangasinan State University) Alaminos City Campus in Bolaney, Alaminos City, Pangasinan.</h1>
                        <h1 class="mt-2">3.3 Sellers are responsible for providing accurate meeting location details, and buyers are responsible for meeting sellers at the specified PSU Alaminos City Campus location.</h1>
                        <h1 class="mt-2">3.4 The available time for pick up is Monday to Friday, from 9:00 AM to 4:00 PM.</h1>
                                
                        <span class="mt-2 block text-sm text-start leading-8 font-extrabold tracking-tight text-gray-900">4. User Conduct</span>
                        <h1 class="mt-2">4.1 Users must conduct themselves in a lawful and respectful manner while using PSU Marketplace.</h1>
                        <h1 class="mt-2">4.2 Users are prohibited from engaging in fraudulent activities, misrepresentations, or any behavior that violates these Terms.</h1>
                        
                        <span class="mt-2 block text-sm text-start leading-8 font-extrabold tracking-tight text-gray-900">5. Dispute Resolution</span>
                        <h1 class="mt-2">5.1 PSU Marketplace strives to provide a fair and transparent platform for all users.</h1>
                        <h1 class="mt-2">5.2 Any disputes between buyers and sellers should be resolved amicably through communication. If a resolution cannot be reached, PSU Marketplace may intervene to help facilitate a fair resolution.</h1>
                        
            
                        <span class="mt-2 block text-sm text-start leading-8 font-extrabold tracking-tight text-gray-900">6. Termination of Account</span>
                        <h1 class="mt-2">6.1 PSU Marketplace reserves the right to suspend or terminate user accounts that violate these Terms or engage in fraudulent activities.</h1>
                        <h1 class="mt-2">6.2 Users may terminate their accounts at any time by following the account closure procedures outlined on the platform.</h1>
                                
                        <span class="mt-2 block text-sm text-start leading-8 font-extrabold tracking-tight text-gray-900">7. Changes to Terms</span>
                        <h1 class="mt-2">7.1 PSU Marketplace may update these Terms from time to time. Users will be notified of any changes, and continued use of the platform constitutes acceptance of the revised Terms.</h1>
        
                        <span class="mt-2 block text-sm text-start leading-8 font-medium tracking-tight text-gray-900">By using PSU Marketplace, you acknowledge that you have read, understood, and agreed to these Terms and Conditions.</span>
                        <span class="mt-2 block text-sm text-start leading-8 font-medium tracking-tight text-gray-900">For inquiries or assistance, please contact PSU Marketplace support.</span>    
                        <span class="mt-2 block text-sm text-start leading-8 font-extrabold tracking-tight text-gray-900">Last updated: November 29,2023</span>
            
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>