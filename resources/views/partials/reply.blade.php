<div class="card mt-3 mb-3">
  <div class="card-header">
    <div class="level">
      <a href="#">
        {{ $reply->owner->name }} said {{ $reply->created_at->diffForHumans() }}
      </a>

      <div class="d-inline-block float-right">
        <form action="/replies/{{ $reply->id }}/favorites" method="post">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-primary" {{ $reply->isFavorited() ? 'disabled' : '' }}>
            {{ $reply->favorites_count }} {{ str_plural('Favorite', $reply->favorites_count) }}
          </button>
        </form>
      </div>
      
    </div>
  </div>
  <div class="card-body">
    {{ $reply->body }}
  </div>
</div>