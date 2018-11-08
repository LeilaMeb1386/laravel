@if ($showaside)
  @include('./layout.aside')
@endif

<h1>Accuiel : {{ $name }}<h1>
  <ul>
@foreach ($data as $val)
  <li>  {{ $val }} </li>
@endforeach
</ul>
