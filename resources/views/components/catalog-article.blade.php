@foreach ($pagination as $article)
    <div class="col-12 mb-5">
        <div class="card d-flex flex-row">
            <div>
                <a href="/articles/{{$article->id}}"><img style="width: 18rem;" src="{{asset('/images/cat.png')}}" class="card-img-top" alt="cat"></a>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <a style="color:black" class="text-decoration-none pb-5" href="/articles/{{$article->id}}"><div>
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{strlen($article->info) > 100 ? substr($article->info, 0, 100) . '...' : $article->info}}</p>
                </div></a>
                <div class="d-flex justify-content-end">
                    <div class="eye d-flex align-items-center">
                        <button type="button" class="btn btn-light">👁</button>
                        <span>{{$article->views}}</span>
                    </div>
                    <div class="eye d-flex align-items-center ms-4">
                        <button data-id="{{$article->id}}" type="button" class="btn-like btn btn-light">❤</button>
                        <span>{{$article->favorite}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
