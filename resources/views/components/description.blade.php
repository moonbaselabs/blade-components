<div id="{{ $for }}_description" {{ $attributes->merge(['class' => $theme()]) }}>
  {{ $value ?? $slot }}
</div>
