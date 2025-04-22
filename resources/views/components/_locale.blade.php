
<form class="px-0" action="{{route('setLocale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn p-0 mx-0">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="25" height ="25" />
    </button>
</form>
