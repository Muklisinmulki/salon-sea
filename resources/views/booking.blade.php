@extends('layouts.app')

@section('title', 'Booking')

@section('content')
<section class="py-16 bg-gradient-to-br from-gray-900 to-black text-white min-h-screen flex items-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <h2 class="text-4xl font-extrabold text-center mb-12 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Booking Now</h2>
        <form action="{{ route('booking.store') }}" method="POST" class="bg-black bg-opacity-50 p-10 rounded-2xl shadow-2xl border border-purple-500 backdrop-filter backdrop-blur-lg">
            @csrf
            @if (session('success'))
                <div class="bg-green-500 bg-opacity-20 border border-green-500 text-green-300 px-4 py-3 rounded-lg mb-6" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-purple-300 mb-2">Full Name</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-3 bg-gray-800 bg-opacity-50 border-2 border-purple-500 rounded-lg shadow-sm focus:outline-none focus:border-pink-500 focus:ring focus:ring-pink-200 transition duration-300 text-white placeholder-gray-400" placeholder="John Doe">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-purple-300 mb-2">Active Phone Number</label>
                        <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 bg-gray-800 bg-opacity-50 border-2 border-purple-500 rounded-lg shadow-sm focus:outline-none focus:border-pink-500 focus:ring focus:ring-pink-200 transition duration-300 text-white placeholder-gray-400" placeholder="+1 (123) 456-7890">
                    </div>
                </div>
                <div class="space-y-6">
                    <div>
                        <label for="service" class="block text-sm font-medium text-purple-300 mb-2">Type of Service</label>
                        <select id="service" name="service" required class="w-full px-4 py-3 bg-gray-800 bg-opacity-50 border-2 border-purple-500 rounded-lg shadow-sm focus:outline-none focus:border-pink-500 focus:ring focus:ring-pink-200 transition duration-300 text-white">
                            <option value="" disabled selected>Select a service</option>
                            <option value="haircuts">Haircuts and Styling</option>
                            <option value="manicure">Manicure and Pedicure</option>
                            <option value="facial">Facial Treatments</option>
                        </select>
                    </div>
                    <div>
                        <label for="datetime" class="block text-sm font-medium text-purple-300 mb-2">Preferred Date and Time</label>
                        <input type="datetime-local" id="datetime" name="datetime" required class="w-full px-4 py-3 bg-gray-800 bg-opacity-50 border-2 border-purple-500 rounded-lg shadow-sm focus:outline-none focus:border-pink-500 focus:ring focus:ring-pink-200 transition duration-300 text-white">
                    </div>
                </div>
            </div>
            <div class="mt-10 flex justify-center">
                <button type="submit" class="px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-lg font-bold rounded-full shadow-lg hover:from-purple-700 hover:to-pink-700 transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                    Booking
                </button>
            </div>
        </form>
    </div>
</section>
@endsection