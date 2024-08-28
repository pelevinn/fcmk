@foreach ($pagination as $article)
    <div class="col-12 mb-5">
        <div class="card d-flex flex-row">
            <div>
                <img style="width: 18rem;" src="{{asset('/images/cat.png')}}" class="card-img-top" alt="cat">
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->subtitle}}</p>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="eye d-flex align-items-center">
                        <button type="button" class="btn btn-light">👁</button>
                        <span>{{$article->views}}</span>
                    </div>
                    <div class="eye d-flex align-items-center ms-4">
                        <button type="button" class="btn btn-light">❤</button>
                        <span>{{$article->favorite}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
