<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        session(['username' => $request->username]);

        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        $username = session('username');
        
        $readingStats = [
            'total' => 15,
            'finished' => 8,
            'reading' => 4,
            'unread' => 3
        ];
        
        return view('dashboard', [
            'username' => $username,
            'readingStats' => $readingStats
        ]);
    }

    public function pengelolaan()
    {
        $books = [
            [
                'id' => 1,
                'title' => 'Filosofi Teras',
                'author' => 'Henry Manampiring',
                'status' => 'Finished',
                'progress' => 100
            ],
            [
                'id' => 2,
                'title' => 'Bumi Manusia',
                'author' => 'Pramoedya Ananta Toer',
                'status' => 'Reading',
                'progress' => 65
            ],
            [
                'id' => 3,
                'title' => 'Negeri Para Bedebah',
                'author' => 'Tere Liye',
                'status' => 'Unread',
                'progress' => 0
            ],
            [
                'id' => 4,
                'title' => 'Cantik Itu Luka',
                'author' => 'Eka Kurniawan',
                'status' => 'Finished',
                'progress' => 100
            ]
        ];
        
        return view('pengelolaan', compact('books'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', [
            'username' => $username,
            'userData' => [
                'joined_since' => 'Januari 2024',
                'total_books' => 42,
                'favorite_genre' => 'Non-Fiksi, Self-Improvement'
            ]
        ]);
}
}