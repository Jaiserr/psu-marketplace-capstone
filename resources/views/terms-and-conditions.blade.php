<x-app-layout>
    <nav class="flex pl-5 pt-5 lg:max-w-7xl lg:mx-auto lg:px-8" aria-label="Breadcrumb">
        <ol role="list" class="bg-white rounded-md shadow px-6 flex space-x-4">
            <li class="flex">
                <div class="flex items-center">
                    <a href="{{ url('/dashboard') }}" class="text-gray-400 hover:text-gray-500">
                        <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        <span class="sr-only">Home</span>
                    </a>
                </div>
            </li>
            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Terms and Conditions</a>
                </div>
            </li>
        </ol>
    </nav>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto px-4 py-10 sm:px-6 lg:max-w-7xl">
            <div class="relative bg-white overflow-hidden">
                <div class="relative">
                <div class="text-lg max-w-prose mx-auto">
                    <h1>
                    <div class="flex justify-center space-x-6">
                        <img class="h-12" src="{{ asset('Pangasinan_State_University_logo.png')}}" alt="Company name"><x-application-logo class="block h-12 w-auto fill-current text-gray-800" />
                    </div>
                    <span class="mt-2 block text-4xl text-center leading-8 font-extrabold tracking-tight text-gray-900">Terms and Conditions</span>
                    </h1>
                    <p class="mt-8 text-xl text-gray-500 leading-8">Welcome to PSU Marketplace. These terms and conditions ("Terms") govern your use of our platform and services. By accessing or using PSU Marketplace, you agree to comply with and be bound by these Terms.</p>
                </div>
                <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
                    <span class="mt-4 block text-xl text-start leading-8 font-extrabold tracking-tight text-gray-900">1. User Agreement</span>
                    <h1 class="mt-4">1.1 By registering on PSU Marketplace, you agree to abide by these Terms and all applicable laws and regulations.</h1>
                    <h1 class="mt-4">1.2 PSU Marketplace is a platform that connects buyers and sellers. Sellers are responsible for the items they list, and buyers are responsible for fulfilling their purchase obligations.</h1>
                
                    <span class="mt-4 block text-xl text-start leading-8 font-extrabold tracking-tight text-gray-900">2. Seller Fees</span>
                    <h1 class="mt-4">2.1 Sellers on PSU Marketplace are required to pay a commission fee of 15% of the total sale price for each successfully sold item.</h1>
                    <h1 class="mt-4">2.2 Commission can be paid at our main office located at Pangasinan State University Alaminos City Campus in Bolaney, Alaminos City, Pangasinan.</h1>
        
                    <span class="mt-4 block text-xl text-start leading-8 font-extrabold tracking-tight text-gray-900">3. Meeting Location</span>
                    <h1 class="mt-4">3.1 Sellers and buyers are required to arrange item pickups at designated meeting locations.</h1>
                    <h1 class="mt-4">3.2 The designated meeting location for item pickups is exclusively on PSU (Pangasinan State University) Alaminos City Campus in Bolaney, Alaminos City, Pangasinan.</h1>
                    <h1 class="mt-4">3.3 Sellers are responsible for providing accurate meeting location details, and buyers are responsible for meeting sellers at the specified PSU Alaminos City Campus location.</h1>
                    <h1 class="mt-4">3.4 The available time for pick up is Monday to Friday, from 9:00 AM to 4:00 PM.</h1>
                            
                    <span class="mt-4 block text-xl text-start leading-8 font-extrabold tracking-tight text-gray-900">4. User Conduct</span>
                    <h1 class="mt-4">4.1 Users must conduct themselves in a lawful and respectful manner while using PSU Marketplace.</h1>
                    <h1 class="mt-4">4.2 Users are prohibited from engaging in fraudulent activities, misrepresentations, or any behavior that violates these Terms.</h1>
                    
                    <span class="mt-4 block text-xl text-start leading-8 font-extrabold tracking-tight text-gray-900">5. Dispute Resolution</span>
                    <h1 class="mt-4">5.1 PSU Marketplace strives to provide a fair and transparent platform for all users.</h1>
                    <h1 class="mt-4">5.2 Any disputes between buyers and sellers should be resolved amicably through communication. If a resolution cannot be reached, PSU Marketplace may intervene to help facilitate a fair resolution.</h1>
                    
        
                    <span class="mt-4 block text-xl text-start leading-8 font-extrabold tracking-tight text-gray-900">6. Termination of Account</span>
                    <h1 class="mt-4">6.1 PSU Marketplace reserves the right to suspend or terminate user accounts that violate these Terms or engage in fraudulent activities.</h1>
                    <h1 class="mt-4">6.2 Users may terminate their accounts at any time by following the account closure procedures outlined on the platform.</h1>
                            
                    <span class="mt-4 block text-xl text-start leading-8 font-extrabold tracking-tight text-gray-900">7. Changes to Terms</span>
                    <h1 class="mt-4">7.1 PSU Marketplace may update these Terms from time to time. Users will be notified of any changes, and continued use of the platform constitutes acceptance of the revised Terms.</h1>

                    <span class="mt-4 block text-xl text-start leading-8 font-medium tracking-tight text-gray-900">By using PSU Marketplace, you acknowledge that you have read, understood, and agreed to these Terms and Conditions.</span>
                    <span class="mt-4 block text-xl text-start leading-8 font-medium tracking-tight text-gray-900">For inquiries or assistance, please contact PSU Marketplace support.</span>    
                    <span class="mt-4 block text-xl text-start leading-8 font-extrabold tracking-tight text-gray-900">Last updated: November 29,2023</span>
        
                    </h1>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>