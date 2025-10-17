@extends('template')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <form action="{{ route('user.login') }}" class="flex flex-col gap-2 border border-gray-300 p-5 rounded-md w-[350px] shadow-2xl" method="POST">
            @csrf
            @method('post')

            <div class="flex flex-col items-center justify-center">
                <h1 class="text-2xl font-bold">Welcome Back</h1>
                <h2 class="text-xl">Entry with your credentials</h2>
            </div>

            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <livewire:input label="Email:" name="email" required placeholder="mail@exemple.com" type="email"/>
            <livewire:input label="Password:" name="password" required type="password"/>
            
            <button class="bg-black text-white py-2 rounded-md mt-3">Login</button>

            <span class="flex text-sm gap-1 justify-center">
                Don't have an account? Please
                <a href="/register" class="underline">Register</a>
            </span>
        </form>
    </div>
@endsection
