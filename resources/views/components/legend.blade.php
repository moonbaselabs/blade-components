<legend {{ $attributes->merge(['class' => $theme()]) }}>
  @if ($slot->isEmpty())
    {{ $value ?? $fallback }}
  @else
    {{ $slot }}
  @endif
</legend>
