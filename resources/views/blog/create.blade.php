@extends('layouts.app')

@section('content')
<div class="text-center">
    <div class="py-10">
        <h1 class="text-4xl">
            Tempat Ngeblog Nya Cuy
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-auto m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-4">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Judul Blog"
            class="bg-transparent block border-b-2 w-full h-20 text-4xl outline-none">

        <textarea 
            name="description"
            placeholder="Isi Konten Blog"
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

        <div class="bg-grey pt-15">
            <label class="w-full flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Masukan Gambar Nya Cuy
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

<!-- User Agreement -->

        <button    
        onclick="Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Postingan Anda Berhasil Di Publish'
            })"
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>

@endsection