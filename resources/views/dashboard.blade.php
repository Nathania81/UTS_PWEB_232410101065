@extends('layouts.app')

@section('content')
    @if(session('username'))
        <div class="bg-venus border-l-4 border-planetary text-planetary p-4 mb-6 rounded">
            <h2 class="text-xl font-semibold">Selamat datang, <span class="font-bold">{{ session('username') }}</span>!</h2>
            <p class="mt-2">Mau membaca buku apa hari ini?</p>
        </div>
    @endif
    
    <h1 class="text-3xl font-bold mb-6 text-planetary">Dashboard Buku Bacaan</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
        <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-planetary">
            <h3 class="text-gray-500">Total Buku</h3>
            <p class="text-3xl font-bold text-planetary">{{ $readingStats['total'] }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-galaxy">
            <h3 class="text-gray-500">Selesai Dibaca</h3>
            <p class="text-3xl font-bold text-galaxy">{{ $readingStats['finished'] }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-meteor">
            <h3 class="text-gray-500">Sedang Dibaca</h3>
            <p class="text-3xl font-bold text-meteor">{{ $readingStats['reading'] }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-universe">
            <h3 class="text-gray-500">Belum Dibaca</h3>
            <p class="text-3xl font-bold text-universe">{{ $readingStats['unread'] }}</p>
        </div>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow-md border border-venus">
        <h2 class="text-xl font-semibold mb-4 text-planetary">Rekomendasi Buku</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="border border-venus rounded-lg p-4 hover:shadow-md transition">
                <h3 class="font-bold text-planetary">Atomic Habits</h3>
                <p class="text-sm text-gray-600">James Clear</p>
            </div>
            <div class="border border-venus rounded-lg p-4 hover:shadow-md transition">
                <h3 class="font-bold text-planetary">Laskar Pelangi</h3>
                <p class="text-sm text-gray-600">Andrea Hirata</p>
            </div>
            <div class="border border-venus rounded-lg p-4 hover:shadow-md transition">
                <h3 class="font-bold text-planetary">Sebuah Seni Untuk Bersikap Bodo Amat</h3>
                <p class="text-sm text-gray-600">Mark Manson</p>
            </div>
        </div>
    </div>
@endsection