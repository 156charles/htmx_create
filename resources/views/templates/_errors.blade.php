<div id="emailError" class="text-red-500" hx-swap-oob="true">
    @if($error->has('email'))
        <div class="error">{{ $error->first('email') }}</div>
    @endif
</div>

<div id="passwordMessage" class="text-red-500" hx-swap-oob="true">
    @if($error->has('password'))
        <div class="error">{{ $error->first('password') }}</div>
    @endif
</div>
