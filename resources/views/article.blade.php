@include('components._top')
@include('components.nav')
@if ( empty($article) )
    <h1>Статья отсутствует</h1>
@else
    <div class="container mt-2">
        <div class="row">
            <div id="article" data-id="{{$article->id}}" class="col-md-12 mb-5 d-flex flex-wrap">
                <div class="article-bg mb-3 w-100">
                    <img class="w-100 d-block" src="{{asset('/images/spb_bg.jpg')}}" alt="">
                </div>
                <div class="article-info">
                    <div class="row">
                        <div class="col-4">
                            <div class="article-tags">
                                <a href="#" class="btn btn-secondary btn-lg active mb-2" role="button" aria-pressed="true">Город</a>
                                <a href="#" class="btn btn-secondary btn-lg active mb-2" role="button" aria-pressed="true">Новости</a>
                                <a href="#" class="btn btn-secondary btn-lg active mb-2" role="button" aria-pressed="true">Транспорт</a>
                                <a href="#" class="btn btn-secondary btn-lg active mb-2" role="button" aria-pressed="true">Спорт</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="article-text">
                                {{$article->info}}
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="eye d-flex align-items-center">
                                    <button type="button" class="btn btn-light">👁</button>
                                    <span>{{$article->views}}</span>
                                </div>
                                <div class="heart d-flex align-items-center">
                                    <button type="button" data-id="{{$article->id}}" class="btn-like btn btn-light ms-4">❤</button>
                                    <span>{{$article->favorite}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            @include('components.comment')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@include('components._bottom')

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $(document).ready(function(){
        $('.btn-like').click( function(e){
            let btn = $(e.currentTarget);
            $.ajax({
                method: "post",
                url: "/api/articles/like/" + btn.data('id'),
                success: function(response){
                    console.dir(response);
                    btn.parent().find("span").text(response.likes);
                }
            })
        });
        setTimeout( function(){
            let article = $('#article');
            $.ajax({
                method: "post",
                url: "/api/articles/views/" + article.data('id'),
                success: function(response){
                    console.dir(response);
                    $(".eye > span").text(response.views);
                }
            })
        }, 5000 );

    });
</script>
