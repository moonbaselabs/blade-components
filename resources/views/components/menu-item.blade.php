<{{ $as }}
  x-bind:class="{
    '{{ $theme('active') }}': activeIndex === {{ \MoonbaseLabs\BladeComponents\Components\MenuItem::$index }},
    '{{ $theme('normal') }}': !(activeIndex === {{ \MoonbaseLabs\BladeComponents\Components\MenuItem::$index }})
  }"
  role="menuitem"
  tabindex="-1"
  id="menu-item-{{ \MoonbaseLabs\BladeComponents\Components\MenuItem::$index }}"
  x-on:mouseenter="activeIndex = {{ \MoonbaseLabs\BladeComponents\Components\MenuItem::$index }}"
  x-on:mouseleave="activeIndex = -1"
  x-on:click="open = false; focusButton()"
  {{ $attributes }}
>
  {{ $slot }}
</{{ $as }}>
