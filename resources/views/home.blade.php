@extends('layouts.app')
@section('title', 'Home')

@section('content')

    <!-- Banner Video -->
    <div class="relative overflow-hidden">
        <video autoplay loop muted class="w-full h-auto">
            <source src="{{ asset('asset/banner.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-50 text-white p-4 md:p-0">
            <p class="text-2xl md:text-3xl font-bold mb-2 md:mb-4 text-center">Welcome to SEA Salon</p>
            <h1 class="text-3xl md:text-5xl italic mb-4 md:mb-7 text-center">“Beauty and Elegance Redefined”</h1>
            <span class="text-lg md:text-2xl mb-4 md:mb-5 block text-center">
                <strong>Sekar:</strong> 08164829372 | <strong>Thomas:</strong> 08123456789
            </span>
            <div class="flex justify-center">
                <a href="{{ route('booking') }}" class="text-lg md:text-2xl px-8 py-3 bg-gradient-to-r from-purple-500 to-purple-700 text-white font-bold rounded-full shadow-lg hover:from-purple-700 hover:to-purple-900 transition-all duration-300 ease-in-out">
                    Booking
                </a>
            </div>
        </div>
    </div>

    <!-- Section Services -->
    <section class="bg-gradient-to-b from-black to-purple-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Our Services</h2>
                <p class="mt-4 text-lg text-gray-400">Discover our range of services that redefine beauty and elegance.</p>
            </div>
            <div class="mt-16 grid grid-cols-1 gap-8 md:grid-cols-3 lg:grid-cols-3">
                <!-- Card 1 -->
                <div class="overflow-hidden rounded-lg shadow-lg bg-purple-900 dark:bg-gray-800 text-white transform transition duration-500 hover:scale-105" data-aos="fade-up" data-aos-duration="1000">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-center" data-aos="zoom-in" data-aos-delay="300">
                            <img src="https://images.pexels.com/photos/8468036/pexels-photo-8468036.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Haircuts and Styling" class="h-48 w-48 object-cover rounded-full">
                        </div>
                        <h3 class="mt-4 text-lg font-semibold" data-aos="fade-right" data-aos-delay="500">Haircuts and Styling</h3>
                        <p class="mt-2 text-gray-300" data-aos="fade-left" data-aos-delay="700">Transform your look with our expert haircut and styling services.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="overflow-hidden rounded-lg shadow-lg bg-purple-900 dark:bg-gray-800 text-white transform transition duration-500 hover:scale-105" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-center" data-aos="zoom-in" data-aos-delay="500">
                            <img src="https://images.pexels.com/photos/973405/pexels-photo-973405.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Manicure and Pedicure" class="h-48 w-48 object-cover rounded-full">
                        </div>
                        <h3 class="mt-4 text-lg font-semibold" data-aos="fade-right" data-aos-delay="700">Manicure and Pedicure</h3>
                        <p class="mt-2 text-gray-300" data-aos="fade-left" data-aos-delay="900">Indulge in luxurious manicure and pedicure treatments for complete relaxation.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="overflow-hidden rounded-lg shadow-lg bg-purple-900 dark:bg-gray-800 text-white transform transition duration-500 hover:scale-105" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-center" data-aos="zoom-in" data-aos-delay="700">
                            <img src="https://images.pexels.com/photos/5069494/pexels-photo-5069494.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Facial Treatments" class="h-48 w-48 object-cover rounded-full">
                        </div>
                        <h3 class="mt-4 text-lg font-semibold" data-aos="fade-right" data-aos-delay="900">Facial Treatments</h3>
                        <p class="mt-2 text-gray-300" data-aos="fade-left" data-aos-delay="1100">Revitalize your skin with our customized facial treatments for a glowing complexion.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Customer Reviews -->
    <section class="bg-gradient-to-b from-purple-600 to-purple-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Customer Reviews</h2>
                <p class="mt-4 text-lg text-gray-300">See what our customers have to say about us.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="zoom-in-up">
            @foreach($reviews as $review)
                <div class="bg-white rounded-lg shadow-lg p-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-200 text-gray-600">
                            <i class="fas fa-user"></i> <!-- Ganti dengan ikon sesuai keinginan Anda -->
                        </div>
                        <div class="ml-4">
                            @if ($review->user)
                                <p class="font-semibold text-gray-800">{{ $review->user->name }}</p>
                            @else
                                <p class="font-semibold text-gray-800">Anonymous</p>
                            @endif
                            <p class="text-sm text-gray-600">{{ $review->created_at->format('F j, Y') }}</p>
                        </div>
                    </div>
                    <p class="mb-4 text-gray-800">{{ $review->content }}</p>
                    <div class="flex items-center mt-4">
                        <div class="flex text-purple-600">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $review->rating)
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                        </div>
                        <span class="text-gray-600 ml-2">{{ $review->rating }} ({{ $review->user ? $review->user->reviews->count() : '0' }} reviews)</span>
                    </div>
                </div>
            @endforeach
            


            </div>
        </div>
    </section>

    <!-- Form Customer Review -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Leave a Review</h2>
                <p class="mt-4 text-lg text-gray-600">Share your experience with us!</p>
            </div>
            <div class="max-w-lg mx-auto">
                <form action="{{ route('reviews.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
                        <select id="rating" name="rating" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="5">⭐⭐⭐⭐⭐</option>
                            <option value="4">⭐⭐⭐⭐</option>
                            <option value="3">⭐⭐⭐</option>
                            <option value="2">⭐⭐</option>
                            <option value="1">⭐</option>
                        </select>
                    </div>
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">Review</label>
                        <textarea id="content" name="content" rows="4" class="mt-1 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-purple-500 to-purple-700 hover:from-purple-700 hover:to-purple-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Submit Review
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
