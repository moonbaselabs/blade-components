<div x-data="Components.menu()" x-on:keydown.escape.stop="open = false; focusButton()" x-on:click.away="onClickAway($event)" {{ $attributes->class('relative inline-block text-left') }}>
    <div>
        {!! Str::replaceFirst(' ', ' id="'.$id.'_button" x-ref="button" x-on:click="onButtonClick()" x-on:keyup.space.prevent="onButtonEnter()" x-on:keydown.enter.prevent="onButtonEnter()" aria-haspopup="true" x-bind:aria-expanded="open.toString()" x-on:keydown.arrow-up.prevent="onArrowUp()" x-on:keydown.arrow-down.prevent="onArrowDown()"', (string) $slot) !!}
    </div>

    <div x-cloak
      x-ref="menu-items"
      x-show="open"
      x-transition:enter="transition ease-out duration-100"
      x-transition:enter-start="transform opacity-0 scale-95"
      x-transition:enter-end="transform opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-75"
      x-transition:leave-start="transform opacity-100 scale-100"
      x-transition:leave-end="transform opacity-0 scale-95"
      x-bind:aria-activedescendant="activeDescendant"
      x-on:keydown.arrow-up.prevent="onArrowUp()"
      x-on:keydown.arrow-down.prevent="onArrowDown()"
      x-on:keydown.tab="open = false"
      x-on:keydown.enter.prevent="open = false; focusButton()"
      x-on:keyup.space.prevent="open = false; focusButton()"
      class="absolute {{ $align === 'right' ? 'origin-top-right right-0' : 'origin-top-left left-0' }} mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
      role="menu"
      aria-orientation="vertical"
      aria-labelledby="{{ $id }}_button"
      tabindex="-1"
    >
        <div class="py-1" role="none">
          {{ $items }}
        </div>
    </div>
</div>
