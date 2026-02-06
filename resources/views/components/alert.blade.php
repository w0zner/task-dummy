
<div {{ $attributes->merge(['class' => $class . ' ' . $tipo]) }} role="alert">
  <p class="font-medium">{{ $title }}</p>
  <br>
  <p>{{ $slot }}</p>
</div>


 {{-- @class($class . ' ' . $tipo) --}}
