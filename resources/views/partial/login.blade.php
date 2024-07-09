<div class="w-[30%] mx-auto border border-slate-400 rounded p-3 mt-[10rem]">
    @if (Session::has('Error'))
        <div class="bg-red-400 text-red-700 font-bold p-2 rounded">
            <ul>
                <li>{{ Session::get('Error') }}</li>
            </ul>
        </div>
    @endif

    <h1 class="text-2xl text-center font-bold mt-3">Login</h1>
    <div class="mt-2">
        <form hx-post="{{route('user.login')}}" hx-trigger="submit"  method="POST" hx-target="body" hx-swap="innerHTML">
            @csrf
            <div class="mb-2">
                <label for="">Email</label>
                <input type="text" name="email" class="w-full p-2 rounded border border-slate-300">
                @error('email')
                    <div class="text-red-600">
                        {{$message}}
                    </div>
                @enderror
                <div id="emailError"></div>
            </div>
            <div class="mb-2">
                <label for="">Password</label>
                <input type="password" name="password" class="w-full p-2 rounded border border-slate-300">
                @error('password')
                <div class="text-red-600">
                    {{$message}}
                </div>
            @enderror
                <div id="passwordMessage"></div>
            </div>
            <div class="mt-5">
                <button type="submit" class="bg-blue-600 rounded text-white p-2 w-full">Login</button>
            </div>
        </form>
    </div>
</div>
