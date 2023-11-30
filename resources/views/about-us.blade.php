<x-app-layout>
    <div class="bg-white">
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
                        <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">About us</a>
                    </div>
                </li>
            </ol>
        </nav>
        <div class="max-w-2xl mx-auto px-4 py-12 sm:px-6 lg:max-w-7xl">
            <div class="relative bg-white overflow-hidden">
                <div class="relative">
                    <div class="text-lg max-w-prose mx-auto">
                        <h1>
                            <div class="flex justify-center space-x-6">
                                <img class="h-12" src="{{ asset('Pangasinan_State_University_logo.png')}}" alt="Company name">
                                <x-application-logo class="block h-12 w-auto fill-current text-gray-800" />
                            </div>
                            <span class="mt-2 block text-4xl text-center leading-8 font-extrabold tracking-tight text-gray-900">About Us</span>
                        </h1>
                        <p class="mt-8 text-xl text-gray-500 leading-8">Welcome to PSU Marketplace. Greetings! We're thrilled to welcome you to PSU Marketplace, a dynamic platform tailored for our
                            vibrant community of students, faculty, and the wonderful residents of our Alaminos City.
                        </p>
                    </div>
                    <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
                        <span class="mt-4 block text-xl text-center leading-8 font-extrabold tracking-tight text-gray-900">Our Mission</span>
                        <h1 class="mt-4">At PSU Marketplace, our mission is to create a space that goes beyond transactions. We aim to foster
                            collaboration, support local initiatives, and provide a seamless experience for all our users.
                        </h1>
                        <span class="mt-6 block text-xl text-center leading-8 font-extrabold tracking-tight text-gray-900">What Sets Us Apart</span>
                        <h1 class="mt-4">What makes us unique is our commitment to community-centric values. PSU Marketplace is your go-to
                            destination where every interaction is meaningful, every transaction makes an impact, and every
                            connection contributes to the growth of our shared educational journey.
                        </h1>
                        <span class="mt-6 block text-xl text-center leading-8 font-extrabold tracking-tight text-gray-900">Connect with Us</span>
                        <h1 class="mt-4">We're excited to have you with us! Connect with PSU Marketplace on social media, and don't hesitate to
                            share your thoughts and ideas. Your feedback is invaluable as we continue to evolve and serve you
                            better.
                        </h1>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>