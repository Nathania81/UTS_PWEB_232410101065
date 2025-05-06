@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6 text-planetary">Pengelolaan Buku Bacaan</h1>
        
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 md:mb-6 gap-3">
            <h2 class="text-lg md:text-xl font-semibold text-planetary">Daftar Buku Saya</h2>
            <button onclick="showAddBookModal()" 
                    class="bg-[#4561c4] text-white px-3 py-2 md:px-4 md:py-2 rounded-lg hover:bg-blue-700 transition flex items-center w-full sm:w-auto justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Tambah Buku
            </button>
        </div>
        
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-venus overflow-x-auto">
            <table class="min-w-full divide-y divide-venus">
                <thead class="bg-planetary text-blue-900">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-medium uppercase tracking-wider">Judul</th>
                        <th class="px-4 py-3 text-left text-sm font-medium uppercase tracking-wider">Pengarang</th>
                        <th class="px-4 py-3 text-left text-sm font-medium uppercase tracking-wider">Status</th>
                        <th class="px-4 py-3 text-left text-sm font-medium uppercase tracking-wider">Progress</th>
                        <th class="px-4 py-3 text-left text-sm font-medium uppercase tracking-wider">Update</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-venus">
                    @foreach($books as $book)
                    <tr>
                        <td class="px-4 py-3 whitespace-nowrap font-medium text-planetary">{{ $book['title'] }}</td>
                        <td class="px-4 py-3 whitespace-nowrap">{{ $book['author'] }}</td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs rounded-full 
                                @if($book['status'] == 'Finished') bg-galaxy/20 text-galaxy-800
                                @elseif($book['status'] == 'Reading') bg-meteor/20 text-meteor-800
                                @else bg-universe/20 text-universe-800 @endif">
                                {{ $book['status'] }}
                            </span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <div class="w-full bg-venus rounded-full h-2.5">
                                <div class="bg-planetary h-2.5 rounded-full" 
                                    style="width: {{ $book['progress'] }}%"></div>
                            </div>
                            <span class="text-sm text-gray-500">{{ $book['progress'] }}%</span>
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap">
                            <select onchange="updateStatus({{ $book['id'] }}, this.value)" 
                                    class="border border-venus rounded px-2 py-1 text-sm focus:ring-planetary focus:border-planetary w-full sm:w-auto">
                                <option value="Unread" @if($book['status'] == 'Unread') selected @endif>Belum Dibaca</option>
                                <option value="Reading" @if($book['status'] == 'Reading') selected @endif>Sedang Dibaca</option>
                                <option value="Finished" @if($book['status'] == 'Finished') selected @endif>Selesai Dibaca</option>
                            </select>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        {{-- Tambah Buku Baru --}}
        <div id="addBookModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
            <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
                <div class="p-4 md:p-6">
                    <h2 class="text-lg md:text-xl font-semibold mb-4 text-planetary">Tambah Buku Baru</h2>
                    <form>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Judul Buku</label>
                            <input type="text" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-planetary focus:border-transparent">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Pengarang</label>
                            <input type="text" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-planetary focus:border-transparent">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Status</label>
                            <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-planetary focus:border-transparent">
                                <option value="Unread">Belum Dibaca</option>
                                <option value="Reading">Sedang Dibaca</option>
                                <option value="Finished">Selesai Dibaca</option>
                            </select>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-end space-y-2 sm:space-y-0 sm:space-x-3">
                            <button type="button" 
                                    onclick="hideAddBookModal()" 
                                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition">
                                Batal
                            </button>
                            <button type="button" 
                                    onclick="alert('Buku berhasil ditambahkan (dummy)'); hideAddBookModal()" 
                                    class="px-4 py-2 bg-galaxy text-white rounded-lg hover:bg-[#4561c4] transition">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        //Menambahkan buku baru
        function showAddBookModal() {
            document.getElementById('addBookModal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }
        
        function hideAddBookModal() {
            document.getElementById('addBookModal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
        
        // Mengupdate status buku
        function updateStatus(bookId, newStatus) {
            alert(`Status buku ID ${bookId} diubah menjadi: ${newStatus}`);
        }

        document.addEventListener('click', function(event) {
            const modal = document.getElementById('addBookModal');
            if (event.target === modal) {
                hideAddBookModal();
            }
        });
    </script>
@endsection