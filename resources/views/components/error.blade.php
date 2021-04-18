@error($for, $bag)
  <div id="{{ $for }}_error" {{ $attributes->merge(['class' => $theme()]) }}>
    @if ($slot->isEmpty())
      {{ $value ?? $message }}
    @else
      {{ $slot }}
    @endif
  </div>
@enderror
