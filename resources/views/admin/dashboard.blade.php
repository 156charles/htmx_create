
    <div class="bg-gray-300 w-full h-[100vh] relative">
        <div class="bg-white mx-auto w-[30%] absolute top-[10rem] left-[30rem] h-[30vh] p-3 text-center flex flex-col">
            <div class="p-4 mb-[3rem] text-2xl font-bold">
                Welcome {{auth()->user()->name}}
            </div>
        
            <div>
                <form action="" hx-post="{{route('user.logout')}}" hx-trigger="submit" hx-target="body" hx-swap="innerHTML">
                    @csrf
                    <button class="bg-blue-600 p-2 rounded text-white" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
