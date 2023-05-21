@extends('layout.updateUsers')
@section('title', 'Self Awareness')

<style>
.card {
  width: 190px;
  height: 274px;
  background: white;
  padding: .4em;
  border-radius: 6px;
}

.card-image {
  background-color: rgb(236, 236, 236);

  border-radius: 6px 6px 0 0;
}

.card-image:hover {
  transform: scale(0.98);
}

.category {
  text-transform: uppercase;
  font-size: 0.7em;
  font-weight: 600;
  color: rgb(63, 121, 230);
  padding: 10px 7px 0;
}

.category:hover {
  cursor: pointer;
}

.heading {
  font-weight: 600;
  color: rgb(88, 87, 87);
  padding: 7px;
}

.heading:hover {
  cursor: pointer;
}

.author {
  color: gray;
  font-weight: 400;
  font-size: 11px;
  padding-top: 20px;
}

.name {
  font-weight: 600;
}

.name:hover {
  cursor: pointer;
}
</style>
@section('content')
@parent
<section style="height:80vh; overflow-y: auto;">
    <div class="container">
        <div class="row row-cols-3 " style="padding-left: 50px;">
            @foreach ($data as $item)
            <div class="" style="padding-top: 200px;">
                <div class="card" style="width: 300px; height: 350px;">
                  <div class="card-image"></div>
                  <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top rounded" alt="..." style="width: 300px; height: 200px;">
                  <div class="category">Illustration</div>
                  <div class="heading">
                    {{ $item->judul }}
                    <div>
                      <a href="{{ route('users.Materi', ['data' => $item->judul]) }}" class="btn btn-primary">{{ $item->materi }}</a>
                    </div>
                  </div>
                </div> 
              </div>
            @endforeach
        </div>
    </div>
</section>
@endsection