<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    
    <button onclick="location.href='books/create'" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
    新しいマニュアルの作成
    </button>
  <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto ">
  <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2 my-20">
        <br>過去に作成したマニュアル
        </label>
        

         @if (count($books) > 0)
      　<div class="grid grid-cols-4 gap-4" style="grid-template-columns:repeat(4,minmax(0,1fr));">
            @foreach ($books as $book)
        <div class="col-span-1">
        <div class="flex d-flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset($book->s1_img)}}" alt="no image"  style="width:250px;height:auto" >
          <div class="p-6">
            <!--<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>-->
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->title}}</h1>
            <div class="flex items-center flex-wrap ">
            <div class="flex justify-between p-4 items-center bg-blue-500 text-white rounded-lg border-2 border-white">
            <div>
            <form action="{{ url('books/'.$book->id.'/edit') }}" method="GET">
                         @csrf
                        <button type="submit"  class="btn bg-blue-500 rounded-lg">
                            更新・公開
                        </button>
                     </form>
              </div>
            </div>
             <div class="flex justify-between p-4 items-center bg-blue-500 text-white rounded-lg border-2 border-white">
                    <form action="{{ url('books/'.$book->id) }}" method="POST">
                         @csrf
                         @method('DELETE')
                        
                        <button type="submit"  class="btn bg-blue-500 rounded-lg">
                            削除
                        </button>
                        
            </form>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
  </div>
  @endforeach
</div>
@endif
    

</section>

        </div>
    </div>
    
    </div>
    <!--右側エリア[[END]--> 
    
    
    

</x-app-layout>
