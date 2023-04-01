<!-- resources/views/books.blade.php -->
<script type="module" src="{{ asset('build/assets/test.js') }}"></script>
<x-app-layout>

    <!--ヘッダー[START]-->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('新しいマニュアルの作成') }}
        </h2>
        <br>
        <p>★読みやすいマニュアルのポイント★</p>
        <p>その１：短文(人が1分間に読める文字数は300文字程度)</p>
        <p>その２：専門用語を使わない(4文字以上のカタカナ・漢字は要注意)</p>
        <p>その３：写真・画像は必須</p>
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
    <!--<div class="flex bg-gray-100">-->

        <!--左エリア[START]--> 
        <div class="text-gray-700 text-left px-4 py-4 m-2">
            <!-- 本のタイトル -->
            <form action="{{ url('books') }}" method="POST"  enctype="multipart/form-data" class="w-3/4">
                @csrf
                
                 <div class="form-check form-check-inline">
                 <input type="radio" name="flag_open" class="form-check-input" value="0"  checked>
                 <label for="release1" class="form-check-label">非公開</label>
                 </div>
                 <div class="form-check form-check-inline">
                 <input type="radio" name="flag_open" class="form-check-input" value="1" >
                 <label for="release2" class="form-check-label">公開</label>
                 </div>     
                  <div class="flex flex-col px-2 py-2">
                   <!-- カラム１ -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2">
                       タイトル
                      </label>
                      <input name="title" class="appearance-none block w-full ext-gray-700 border border-500 rounded py-3 px-6 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">
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
                      <input name="s1_title" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">
                    </div>
                    <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       本文
                      </label>
                      <input id="s1_body" name="s1_body" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="" maxlength="200">
                    　<span id="s1_counter"></span>
                    </div>
                     <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       画像　※必須
                      </label>
                      <input name="s1_img" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="file" required>
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
                      <input name="s2_title" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">
                    </div>
                    <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       本文
                      </label>
                      <input id="s2_body" name="s2_body" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="" maxlength="200">
                    <span id="s2_counter"></span>
                    </div>
                     <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       画像　※必須
                      </label>
                      <input name="s2_img" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="file" required>
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
                      <input name="s3_title" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">
                    </div>
                    <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       本文
                      </label>
                      <input id="s3_body" name="s3_body" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="" maxlength="200">
                     <span id="s3_counter"></span>
                    </div>
                     <!-- カラム3 -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       画像　※必須
                      </label>
                      <input name="s3_img" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="file" required>
                    </div>
                    
                    <!-- <div  style="border: 2px solid #c0c0c0; margin: 15px"></div>-->
                    <!-- カラム2 -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2">-->
                    <!--   ステップ4-->
                    <!--  </label>-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   見出し-->
                    <!--  </label>-->
                    <!--  <input name="s4_title" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">-->
                    <!--</div>-->
                    <!-- カラム3 -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   本文-->
                    <!--  </label>-->
                    <!--  <input id="s4_body" name="s4_body" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="" maxlength="200">-->
                    <!-- <span id="s4_counter"></span>-->
                    <!--</div>-->
                     <!-- カラム3 -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   画像　※必須-->
                    <!--  </label>-->
                    <!--  <input name="s4_img" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="file">-->
                    <!--</div>-->
                    
                    <!-- <div  style="border: 2px solid #c0c0c0; margin: 15px"></div>-->
                    <!-- カラム2 -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-s font-bold mb-2">-->
                    <!--   ステップ5-->
                    <!--  </label>-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   見出し-->
                    <!--  </label>-->
                    <!--  <input name="s5_title" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">-->
                    <!--</div>-->
                    <!-- カラム3 -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   本文-->
                    <!--  </label>-->
                    <!--  <input id="s5_body" name="s5_body" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="" maxlength="200">-->
                    <!--<span id="s5_counter"></span>-->
                    <!--</div>-->
                     <!-- カラム3 -->
                    <!--<div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">-->
                    <!--  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">-->
                    <!--   画像　※必須-->
                    <!--  </label>-->
                    <!--  <input name="s5_img" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="file">-->
                    <!--</div>-->
                    <input name="user_id" class="appearance-none block w-full text-gray-700 border border-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="hidden" value="{{ Auth::id() }}">
                    

                    
                                      
                  <!-- カラム５ -->
                  <div class="flex flex-col">
                      <div class="text-gray-700 text-center px-4 py-2 m-2">
                             <button type="upload" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                保存
                            </button>
                      </div>
                   </div>
            </form>


        <!--左エリア[END]--> 
        
    
    

</div>
 <!--全エリア[END]-->
 
 

</x-app-layout>