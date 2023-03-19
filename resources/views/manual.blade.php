<!-- resources/views/books.blade.php -->
<x-app-layout>

    <!--ヘッダー[START]-->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('マニュアルの確認') }}
        </h2>
    </x-slot>
    <!--ヘッダー[END]-->
    
    <!--全エリア[START]-->
    <div class="flex bg-gray-100">
    
    
    <!--右側エリア[START]-->
    <div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">

    
    <form action="{{ url('books/'.$book->id) }}" method="POST"  enctype="multipart/form-data" class="w-full max-w-lg">
    @method('PATCH')
     @csrf
         <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2">
      {{$book->title}}
        </label>
        <div class="flex flex-wrap -m-4">
         <div class="p-4 md:w-2/3">
        <div class="h-25 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:m md:h-36 w-25 object-cover object-center" src="{{asset($book->s1_img)}}" alt="No image"style="width:250px;height:auto">
        </div>
      </div>
      <div class="p-4 md:w-1/3">
            <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ1</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s1_title}}</h1>
            <p class="leading-relaxed mb-3">{{$book->s1_body}}</p>
        </div>
      </div>
      </div>
        
    <div class="flex flex-wrap -m-4">
         <div class="p-4 md:w-2/3">
        <div class="h-25 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:m md:h-36 w-25 object-cover object-center" src="{{asset($book->s2_img)}}" alt="No image"style="width:250px;height:auto">
        </div>
      </div>
      <div class="p-4 md:w-1/3">
            <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ2</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s2_title}}</h1>
            <p class="leading-relaxed mb-3">{{$book->s2_body}}</p>
        </div>
      </div>
      </div>
      
      <div class="flex flex-wrap -m-4">
         <div class="p-4 md:w-2/3">
        <div class="h-25 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:m md:h-36 w-25 object-cover object-center" src="{{asset($book->s3_img)}}" alt="No image"style="width:250px;height:auto">
        </div>
      </div>
      <div class="p-4 md:w-1/3">
            <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ3</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s3_title}}</h1>
            <p class="leading-relaxed mb-3">{{$book->s3_body}}</p>
        </div>
      </div>
      </div>
      
      @if(!is_null($book->s4_body))
      <div class="flex flex-wrap -m-4">
         <div class="p-4 md:w-2/3">
        <div class="h-25 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:m md:h-36 w-25 object-cover object-center" src="{{asset($book->s4_img)}}" alt="No image"style="width:250px;height:auto">
        </div>
      </div>
      <div class="p-4 md:w-1/3">
            <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ4</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s4_title}}</h1>
            <p class="leading-relaxed mb-3">{{$book->s4_body}}</p>
        </div>
      </div>
      </div>
      @endif
      
    @if(!is_null($book->s5_body))
      <div class="flex flex-wrap -m-4">
         <div class="p-4 md:w-2/3">
        <div class="h-25 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:m md:h-36 w-25 object-cover object-center" src="{{asset($book->s5_img)}}" alt="No image"style="width:250px;height:auto">
        </div>
      </div>
      <div class="p-4 md:w-1/3">
            <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ5</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s5_title}}</h1>
            <p class="leading-relaxed mb-3">{{$book->s5_body}}</p>
        </div>
      </div>
      </div>
      @endif
    
    
    
    
    </div>
    <!--右側エリア[[END]--> 
    
    

</div>
 <!--全エリア[END]-->
 
 

</x-app-layout>