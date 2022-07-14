@extends('layouts.app')
@section('content')
<header>

  <!-- Background image -->
  <div class="relative overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 100%;
    background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
    height: 560px;
  ">
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
      style="background-color: rgba(0, 0, 0, 0.75)">
      <div class="flex justify-center items-center h-full">
        <div class="text-center text-white px-6 md:px-12">
          <h1 class="text-5xl font-bold mt-0 mb-6">Sukamaju Connect</h1>
          <h3 class="text-md mb-8">Aplikasi Pembuatan Artikel Karya Remaja Sukamaju Permai</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>

<!--  -->
<div class="flex space-x-2 mt-8 justify-center">
  <h2 class="text-4xl font-medium leading-tight text-gray-800">
    Software As 
    <span class="inline-block py-1.5 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-600 text-white rounded">A Service</span>
  </h2>
</div>
<!--  -->

<div class="flex justify-center py-10">
<!-- <h1 class="text-5xl font-bold mt-0 mb-6">Sukamaju Connection</h1> -->
  <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
    <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="https://images.unsplash.com/photo-1592899677977-9c10ca588bbd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGlwaG9uZXxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60" alt="" />
    <div class="p-6 flex flex-col justify-start">
      <h1 class="text-gray-900 text-2xl font-medium mb-2">Tentang Aplikasi</h1>
      <p class="font-light leading-relaxed mt-6 mb-4 text-gray-800">
        Aplikasi ini dibuat untuk siapa saja yang ingin menaruh artikel sederhana layaknya mengupload konten disosial media berupa gambar dan teks.
      </p>
      <p class="text-gray-600 text-xs mt-4">Arif Alexander - Developer Sukamaju Connect</p>
    </div>
  </div>
</div>


@endsection