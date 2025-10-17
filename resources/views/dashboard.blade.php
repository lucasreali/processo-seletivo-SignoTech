@extends('template')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Dashboard</h1>
            <p class="text-lg mb-4">Bem-vindo, {{ Auth::user()->name }}!</p>
            
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('user.logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Logout
                </button>
            </form>
        </div>
    </div>
@endsection