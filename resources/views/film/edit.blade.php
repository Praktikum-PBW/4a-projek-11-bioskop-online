@extends('../layouts.sidebar')

@section('content')
    <section class="py-3">
        <div class="    row">
            <div class="col-md-12">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Data Film</h1>
                </div>
                <form action="/film/edit/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-2">
                        <input type="text" name="title" id="title" class="form-control" placeholder="title"
                            value="{{ $data->title }}">
                        <label for="title" class="form-label">Title</label><br>
                    </div>
                    <div class="mb-4">
                        <label for="poster" class="form-label">Poster</label><br>
                        <input type="file" name="poster" id="poster" class="form-control" placeholder="poster">
                    </div>
                    <div class="   form-floating mb-2">
                        <input type="text" name="genre" id="genre" class="form-control" placeholder="genre"
                            value="{{ $data->genre }}">
                        <label for=" genre" class="form-label">Genre</label><br>
                    </div>
                    <div class="form-floating mb-4">
                        <select name="rating" id="rating" class="form-select" aria-label="Floating label select">
                            <option selected>{{ $data->rating }}</option>
                            <option value="P">P</option>
                            <option value="A">A</option>
                            <option value="R">R</option>
                            <option value="D">D</option>
                        </select>
                        <label for="rating" class="form-label">Rating</label>
                    </div>
                    <div class="form-floating mb-2">
                        <textarea class="form-control" placeholder="overview" name="overview" id="overview"
                            style="height: 100px">{{ $data->overview }}</textarea>
                        <label for="overview">Overview</label>
                    </div>
                    <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>
@endsection
