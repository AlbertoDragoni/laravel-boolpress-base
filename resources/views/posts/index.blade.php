<h1>ciao

</h1>


@foreach ($posts as $post)
  <h2>{{$post->title}}</h2>
  <h2>{{$post->body}}</h2>
  <h2>{{$post->author}}</h2>
  <h2>{{$post->published}}</h2>
  <form action="{{route('posts.destroy', $post->id)}}" method="POST">
      @method('DELETE')
      @csrf
      <button class="btn btn-danger" type="submit">Elimina</button>
  </form>
@endforeach
