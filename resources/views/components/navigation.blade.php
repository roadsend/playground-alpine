<div class="flex space-x-2 justify-end mr-10 py-3">
    @foreach($pages as $page=>$route)
        <a href="{{$route}}" target="_new">
            <button class="w-32 bg-blue-700 font-bold hover:bg-blue-400 hover:text-indigo-900 text-indigo-300 font-3xl py-3 px-1 rounded-full">
                {{ $page }}
            </button>
        </a>
    @endforeach
</div>
