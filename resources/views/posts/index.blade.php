@foreach ($posts as $key => $post)
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$post->src}}" alt="">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->body}}</p>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button class="btn btn-primary" type="button" name="button"><a href="{{ route('posts.edit', $post->id) }}">Mofidica</a></button>
    </div>
    <div class="col-sm-10">
      <button class="btn btn-primary" type="button" name="button"><a href="{{ route('posts.show', $post->id) }}">Visualizza</a></button>
    </div>
    <div class="col-sm-10">
      <form method="POST" action="{{route('posts.destroy', $post->id)}}">
        @method('DELETE')
        @csrf
        <button class="btn btn-primary" type="submit" name="button">Elimina</button>
      </form>
    </div>
  </div>
@endforeach













{{-- @foreach ($posts as $post)
  <h2>{{$post->title}}</h2>
  <h2>{{$post->body}}</h2>
  <h2>{{$post->author}}</h2>
  <h2>{{$post->published}}</h2>
  <button type="button" name="button"><a href="{{route('posts.edit', $post->id)}}">Modifica</a></button>
  <button type="button" name="button"><a href="{{route('posts.show', $post->id)}}">Visualizza</a></button>
  <form action="{{route('posts.destroy', $post->id)}}" method="POST">
      @method('DELETE')
      @csrf
      <button class="btn btn-danger" type="submit">Elimina</button>
  </form>
@endforeach --}}
