<div class="flex space-x-2 justify-between mx-10 py-3">
    <a href="{{route('welcome')}}" target="_new">
        <button class="w-32 bg-blue-700 font-bold hover:bg-blue-400 hover:text-indigo-900 text-indigo-300 py-3 px-1 rounded">
            Welcome
        </button>
    </a>
    <div class="flex space-x-2 justify-end">
        @foreach($pages as $page=>$route)
            <a href="{{$route}}" target="_new">
                <button class="w-32 bg-blue-700 font-bold hover:bg-blue-400 hover:text-indigo-900 text-indigo-300 py-3 px-1 rounded">
                    {{ $page }}
                </button>
            </a>
        @endforeach
    </div>
</div>
