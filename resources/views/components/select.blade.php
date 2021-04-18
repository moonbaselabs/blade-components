@if(! $multiple)
  <select {{ $controlAttributes() }}>
    @foreach($options as $v => $l)
      @if($placeholder)
        <option value hidden>{{ $placeholder }}</option>
      @endif
      <option {{ $isSelected($v) ? 'selected' : '' }} value="{{ $v }}">{{ $l }}</option>
    @endforeach
  </select>
@else
  <div id="{{ $id }}" {{ $controlAttributes() }}>
    @foreach($options as $v => $l)
      <x-label class="flex items-center space-x-2 w-full py-2 px-3 bg-white hover:bg-gray-50">
        <x-checkbox name="{{ $name }}[]" value="{{ $v }}" :checked="$isSelected($v)" />
        <span>{{ $l }}</span>
      </x-label>
    @endforeach
  </div>
@endif
