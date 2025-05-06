@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-planetary">Profil Pengguna</h1>
    
    <br>
    
    <div class="bg-white p-6 rounded-lg shadow-md max-w-2xl mx-auto border border-venus">
        <div class="flex items-center space-x-6 mb-6">
            <div class="w-24 h-24 bg-planetary rounded-full flex items-center justify-center text-milkyway text-4xl font-bold">
                {{ strtoupper(substr(session('username') ?? 'U', 0, 1)) }}
            </div>
            <div>
                <h2 class="text-xl font-semibold text-planetary">{{ session('username') ?? 'Pengguna' }}</h2>
                <p class="text-galaxy-800">Pembaca Aktif</p>
            </div>
        </div>
        
        <div class="space-y-4">
            <div class="border-b border-venus pb-4">
                <h3 class="font-medium text-gray-700">Total Buku Dibaca</h3>
                <p class="text-planetary font-bold">{{ $userData['total_books'] ?? 0 }} buku</p>
            </div>
            <div class="border-b border-venus pb-4">
                <h3 class="font-medium text-gray-700">Bergabung Sejak</h3>
                <p class="text-planetary">{{ $userData['joined_since'] ?? 'Tidak diketahui' }}</p>
            </div>
            <div>
                <h3 class="font-medium text-gray-700">Genre Favorit</h3>
                <p class="text-planetary">{{ $userData['favorite_genre'] ?? 'Belum diatur' }}</p>
            </div>
        </div>
    </div>
@endsection