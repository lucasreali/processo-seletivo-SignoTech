@extends('template')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <form action="{{ route('user.store')  }}" class="flex flex-col gap-2 border border-gray-300 p-5 rounded-md w-[350px] shadow-2xl" method="POST">
            @csrf
            @method('post')

            <div class="flex flex-col items-center justify-center">
                <h1 class="text-2xl font-bold">Welcome</h1>
                <h2 class="text-xl">Entry with your credentials</h2>
            </div>
            
            <livewire:input label="Name:" name="name" required placeholder="Jhon Doe"/>
            <livewire:input label="Email:" name="email" required placeholder="mail@exemple.com" type="email"/>
            <livewire:input label="Password:" name="password" required type="password"/>
            <button class="bg-black text-white py-2 rounded-md mt-3">Register</button>

            <span class="flex text-sm gap-1 justify-center">
                If you alredy have account, plase
                <a href="/login" class="underline">Login</a>
            </span>
        </form>
    </div>
@endsection