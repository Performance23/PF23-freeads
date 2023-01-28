@extends('layouts.guest')
@section('guest')
    <div class=" h-screen w-screen flex flex-col justify-center items-center bg-gray-200">

        <div class="mb-5 ">

            <p class="font-medium text-3xl text-blue-500">
                FreeAds
            </p>
        </div>
        <form action="{{ route('verification.verify') }}" method="post" class="bg-white p-5 rounded shadow-sm">
            @csrf
            @error('general')
                <div class="text-xs text-red-500 text-center mb-5">{{ $message }}</div>
            @enderror
            <div>
                <div class="mb-4">
                    <input type="text" name="code" placeholder="Code de verifiction"
                        class="@error('code') is-invalid @enderror sm:w-96 w-full h-10 py-2 px-4 mb-1 text-md outline-blue-500  border bg-white">
                    @error('code')
                        <div class="text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex items-center justify-between sm:flex-row flex-col-reverse">
                    <a class="text-xs text-gray-500" href="{{ route('register.create') }}">
                        Me renvoyer le code.
                    </a>
                    <button type="submit"
                        class="bg-blue-500 text-white rounded shadow-sm mb-1 py-2 px-8 w-full sm:w-auto">
                        Valider
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
