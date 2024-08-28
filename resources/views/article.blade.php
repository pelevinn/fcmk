@include('components._top')
@include('components.nav')
@if ( empty($article) )
    <h1>Статья отсутствует</h1>
@else
<div class="col-md-4 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <a href="/articles/{{$article->id}}"><img src="{{asset('/images/cat.png')}}" class="card-img-top" alt="cat"></a>
        <div class="card-body">
            <a style="text-decoration:none; color:black" href="/articles/{{$article->id}}"><h5 class="card-title">{{$article->title}}</h5>
            <p class="card-text">{{$article->subtitle}}</p></a>
            <div class="d-flex justify-content-between">
                <div class="eye d-flex align-items-center">
                    <button type="button" class="btn btn-light">👁</button>
                    <span>{{$article->views}}</span>
                </div>
                <div class="eye d-flex align-items-center">
                    <button type="button" class="btn btn-light">❤</button>
                    <span>{{$article->favorite}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@include('components._bottom')
