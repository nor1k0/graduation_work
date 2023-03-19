<!-- resources/views/books.blade.php -->
<script type="module" src="{{ asset('build/assets/test.js') }}"></script>
<x-app-layout>

    <!--ヘッダー[START]-->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('マニュアルの編集') }}
        </h2>
    </x-slot>
    <!--ヘッダー[END]-->
            
        <!-- バリデーションエラーの表示に使用-->
       <!-- resources/views/components/errors.blade.php -->
        @if (count($errors) > 0)
            <!-- Form Error List -->
            <div class="flex justify-between p-4 items-center bg-red-500 text-white rounded-lg border-2 border-white">
                <div><strong>入力した文字を修正してください。</strong></div> 
                <div>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <!-- バリデーションエラーの表示に使用-->
    
    <!--全エリア[START]-->
    <div class="flex bg-gray-100">

        <!--左エリア[START]--> 
        <div class="text-gray-700 text-left px-4 py-4 m-2">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            </div>


<!-- 本のタイトル -->
            <form action="{{ url('books/'.$book->id) }}" method="POST"  enctype="multipart/form-data" class="w-full max-w-lg">
                @method('PATCH')
                @csrf
                
                　 <div class="form-check form-check-inline">
                 <input type="radio" name="flag_open" class="form-check-input" id="release1" value="0" {{ old ('flag_open') == '0' ? 'checked' : '' }} checked>
                 <label for="release1" class="form-check-label">非公開</label>
                 </div>
                 <div class="form-check form-check-inline">
                 <input type="radio" name="flag_open" class="form-check-input" id="release2" value="1" {{ old ('flag_open') == '1' ? 'checked' : '' }}>
                 <label for="release2" class="form-check-label">公開</label>
                 </div>      
                      
                 <div class="flex flex-col px-2 py-2">
                   <!-- カラム１ -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2">
                       タイトル
                      </label>
                      <input name="title" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-6 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{$book->title}}" type="text" placeholder="">
                    </div>
                     <div  style="border: 2px solid #c0c0c0; margin: 15px"></div>
                    <!-- カラム2 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2">
                       ステップ1
                      </label>
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       見出し
                      </label>
                      <input name="s1_title" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{$book->s1_title}}"type="text" placeholder="">
                    </div>
                    <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       本文
                      </label>
                      <input  id="s1_body" name="s1_body" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{$book->s1_body}}"type="text" placeholder=""  maxlength="200">
                    　<span id="s1_counter"></span>
                    </div>
                     <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       画像
                      </label>
                      <input name="s1_img" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="file">
                    </div>
                    
                     <div  style="border: 2px solid #c0c0c0; margin: 15px"></div>
                    <!-- カラム2 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2">
                       ステップ2
                      </label>
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       見出し
                      </label>
                      <input name="s2_title" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{$book->s2_title}}" type="text" placeholder="">
                    </div>
                    <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       本文
                      </label>
                      <input id="s2_body" name="s2_body" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{$book->s2_body}}" type="text" placeholder=""  maxlength="200">
                     <span id="s2_counter"></span>
                    </div>
                     <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       画像
                      </label>
                      <input name="s2_img" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="file">
                    </div>
                    
                     <div  style="border: 2px solid #c0c0c0; margin: 15px"></div>
                    <!-- カラム2 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2">
                       ステップ3
                      </label>
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       見出し
                      </label>
                      <input name="s3_title" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{$book->s3_title}}"　type="text" placeholder="">
                    </div>
                    <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       本文
                      </label>
                      <input id="s3_body" name="s3_body" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{$book->s3_body}}" type="text" placeholder="" maxlength="200">
                    <span id="s3_counter"></span>
                    </div>
                     <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       画像
                      </label>
                      <input name="s3_img" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="file">
                    </div>
                    
                     <div  style="border: 2px solid #c0c0c0; margin: 15px"></div>
                    <!-- カラム2 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2">
                       ステップ4
                      </label>
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       見出し
                      </label>
                      <input name="s4_title" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{$book->s4_title}}" type="text" placeholder="">
                    </div>
                    <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       本文
                      </label>
                      <input  id="s4_body" name="s4_body" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{$book->s4_body}}" type="text" placeholder="" maxlength="200">
                     <span id="s4_counter"></span>
                    </div>
                     <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       画像
                      </label>
                      <input name="s4_img" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="file">
                    </div>
                    
                     <div  style="border: 2px solid #c0c0c0; margin: 15px"></div>
                    <!-- カラム2 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2">
                       ステップ5
                      </label>
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       見出し
                      </label>
                      <input name="s5_title" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{$book->s5_title}}" type="text" placeholder="">
                    </div>
                    <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       本文
                      </label>
                      <input id="s5_body" name="s5_body" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" value="{{$book->s5_body}}" placeholder="" maxlength="200">
                     <span id="s5_counter"></span>
                    </div>
                     <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       画像
                      </label>
                      <input name="s5_img" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="file">
                    </div>

                    
                                      
                  <!-- カラム５ -->
                  <div class="flex flex-col">
                      <div class="text-gray-700 text-center px-4 py-2 m-2">
                             <button type="upload" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                保存
                            </button>
                      </div>
                   </div>
            </form>
        </div>
        </div>
        

        <!--左エリア[END]--> 
    
    
    <!--右側エリア[START]-->
    <div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">
          <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2">
         <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2">
        <br>
        {{$book->title}}
        </label>
        
        <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset($book->s1_img)}}" alt="No image" style="width:250px;height:auto">
        </div>
      </div>
      <div class="p-4 md:w-1/3">
            <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ1</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s1_title}}</h1>
            <p class="leading-relaxed mb-3">{{$book->s1_body}}</p>
            <div class="flex items-center flex-wrap">
            </div>
          </div>
        </div>
      </div>
      
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset($book->s2_img)}}" alt="No image" style="width:250px;height:auto">
        </div>
      </div>
      <div class="p-4 md:w-1/3">
            <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ2</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s2_title}}</h1>
            <p class="leading-relaxed mb-3">{{$book->s2_body}}</p>
            <div class="flex items-center flex-wrap">
            </div>
          </div>
        </div>
      </div>
    
        <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset($book->s3_img)}}" alt="No image" style="width:250px;height:auto">
        </div>
      </div>
      <div class="p-4 md:w-1/3">
            <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ3</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s3_title}}</h1>
            <p class="leading-relaxed mb-3">{{$book->s3_body}}</p>
            <div class="flex items-center flex-wrap">
            </div>
          </div>
        </div>
      </div>
      
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset($book->s4_img)}}" alt="No image" style="width:250px;height:auto">
        </div>
      </div>
      <div class="p-4 md:w-1/3">
            <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ4</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s4_title}}</h1>
            <p class="leading-relaxed mb-3">{{$book->s4_body}}</p>
            <div class="flex items-center flex-wrap">
            </div>
          </div>
        </div>
      </div>
      
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset($book->s5_img)}}" alt="No image" style="width:250px;height:auto">
        </div>
      </div>
      <div class="p-4 md:w-1/3">
            <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ5</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s5_title}}</h1>
            <p class="leading-relaxed mb-3">{{$book->s5_body}}</p>
            <div class="flex items-center flex-wrap">
            </div>
          </div>
        </div>
      </div>
       
    </div>
    <!--右側エリア[[END]--> 
    
    

</div>
 <!--全エリア[END]-->
 
 

</x-app-layout>