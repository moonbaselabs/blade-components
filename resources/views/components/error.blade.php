@error($for, $bag)
  <div id="{{ $id }}_error" {{ $attributes->merge(['class' => $theme()]) }}>
    @if ($slot->isEmpty())
      {{ $value ?? $message }}
    @else
      {{ $slot }}
    @endif
  </div>
@enderror
