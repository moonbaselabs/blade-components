@isset($href)
  <a href="{{ $href }}" {{ $attributes->merge(['class' => $theme()]) }}>{{ $slot }}</a>
@else
  <button {{ $attributes->merge(['type' => 'submit', 'class' => $theme()]) }}>
    {{ $slot }}
  </button>
@endif
