<form method="{{ $method !== 'get' ? 'post' : 'get' }}" action="{{ $action }}" {!! $hasFiles ? 'enctype="multipart/form-data"' : '' !!} {{ $attributes }}>
    @csrf
    @method($method)
    {{ $slot }}
</form>
