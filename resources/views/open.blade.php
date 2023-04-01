

   <body style="background-color:rgb(219 234 254);">
       
    
    <!--全エリア[START]-->
    <div class="flex bg-gray-100" style="margin: 50px;">
    
    
    <!--右側エリア[START]-->
    <div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">
     <div id="timer"></div>
    
    <div class="w-full max-w-lg">
    @method('PATCH')
     @csrf
         <label class="block uppercase tracking-wide text-gray-700 text-4xl font-bold mb-2" style="font-size: 3rem;">
      {{$book->title}}
        </label>
        <div class="flex flex-wrap -m-4" style="display: flex;">
         <div class="p-4 md:w-2/3">
        <div class="h-25 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:m md:h-36 w-25 object-cover object-center" src="{{asset($book->s1_img)}}" alt="No image"style="width:250px;height:auto;margin-top: 20px;">
        </div>
      </div>
      <div class="p-4 md:w-1/3" style="margin-left: 50px;width: 70%;">
            <div class="p-6">
            <h1 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ1</h1>
            <h2 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s1_title}}</h2>
            <p class="leading-relaxed mb-3">{{$book->s1_body}}</p>
        </div>
      </div>
      </div>
        
    <div class="flex flex-wrap -m-4" style="display: flex;">
         <div class="p-4 md:w-2/3">
        <div class="h-25 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:m md:h-36 w-25 object-cover object-center" src="{{asset($book->s2_img)}}" alt="No image"style="width:250px;height:auto;margin-top: 20px;">
        </div>
      </div>
      <div class="p-4 md:w-1/3" style="margin-left: 50px;width: 70%;">
            <div class="p-6">
            <h1 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ2</h1>
            <h2 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s2_title}}</h2>
            <p class="leading-relaxed mb-3">{{$book->s2_body}}</p>
        </div>
      </div>
      </div>
      
      <div class="flex flex-wrap -m-4" style="display: flex;">
         <div class="p-4 md:w-2/3">
        <div class="h-25 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:m md:h-36 w-25 object-cover object-center" src="{{asset($book->s3_img)}}" alt="No image"style="width:250px;height:auto;margin-top: 20px;">
        </div>
      </div>
      <div class="p-4 md:w-1/3" style="margin-left: 50px;width: 70%;">
            <div class="p-6">
            <h1 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ステップ3</h1>
            <h2 class="title-font text-lg font-medium text-gray-900 mb-3">{{$book->s3_title}}</h2>
            <p class="leading-relaxed mb-3">{{$book->s3_body}}</p>
        </div>
      </div>
      </div>
      
      @if(!is_null($book->s4_body))
      <div class="flex flex-wrap -m-4" style="display: flex;">
         <div class="p-4 md:w-2/3">
        <div class="h-25 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:m md:h-36 w-25 object-cover object-center" src="{{asset($book->s4_img)}}" alt="No image"style="width:250px;height:auto;margin-top: 20px;">
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
      <div class="flex flex-wrap -m-4" style="display: flex;">
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
    
    @if (auth()->check())
    @if (auth()->user()->hasFavorite($book))
    <form action="{{ route('list.unfavorite', $book) }}" method="POST" style="margin-top: 20px;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">いいねを取り消す</button>
    </form>
@else
    <form action="{{ route('list.favorite', $book) }}" method="POST" style="margin-top: 20px;">
        @csrf
        <button type="submit" class="btn btn-primary">いいね</button>
    </form>
@endif
@else
    <p>ログインをするとマニュアルにいいねが出来ます。</p>
    <button onclick="location.href='/prd/login'" class="btn btn-primary">ログイン</button>
@endif

    
    </div>

    </div>
    <!--右側エリア[[END]--> 
    
    

</div>
 <!--全エリア[END]-->

<script>
  var count = 180; // タイマーの秒数
  var timer = setInterval(function() {
    count--;
    var minutes = Math.floor(count / 60);
    var seconds = count % 60;
    var display = "あと " + minutes + " 分 " + seconds + " 秒";
    document.getElementById("timer").innerHTML = display; // タイマーを更新する
    if (count <= 0) {
      clearInterval(timer); // タイマーを停止する
      alert("3分が経過しました！");
    }
  }, 1000); // 1秒毎にタイマーを更新する
</script>
