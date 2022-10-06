<div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 380px;">
    <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-5 fw-semibold">List group</span>
    </a>
    <div class="list-group list-group-flush border-bottom scrollarea">
     
     @foreach($movies as $movie)
        <a href="#" class="list-group-item list-group-item-action active py-3 lh-tight" aria-current="true">
        <div class="d-flex w-100 align-items-center justify-content-between">
          <strong class="mb-1"><a href="{{ route('single-moive', [ 'id' => $movie->id ]) }}">{{ $movie->title}}</a> </strong>
          <small></small>
        </div>
      </a>
    @endforeach
    </div>
  </div>
