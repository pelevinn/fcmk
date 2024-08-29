@foreach ($articles as $article)
    <div class="col-md-4 mb-5 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <a href="/articles/{{$article->id}}"><img src="{{asset('/images/cat.png')}}" class="card-img-top" alt="cat"></a>
            <div class="card-body">
                <a style="text-decoration:none; color:black" href="/articles/{{$article->id}}"><h5 class="card-title">{{$article->title}}</h5>
                <p class="card-text">{{strlen($article->info) > 100 ? substr($article->info, 0, 100) . '...' : $article->info}}</p></a>
                <div class="d-flex justify-content-between">
                    <div class="eye d-flex align-items-center">
                        <button type="button" class="btn btn-light">👁</button>
                        <span>{{$article->views}}</span>
                    </div>
                    <div class="eye d-flex align-items-center">
                        <button data-id="{{$article->id}}" type="button" class="btn-like btn btn-light">❤</button>
                        <span>{{$article->favorite}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
