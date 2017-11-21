<p>Filmes:</p>

@foreach($filmes as $filme)
<p>
  <a href="{{ route('filmes.show', $filme) }}">
    {{ $filme->titulo }} ({{ $filme->ano }})
  </a>
</p>
@endforeach