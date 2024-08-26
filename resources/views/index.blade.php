@include('components._top')
@include('components.nav')

<div class="container">
    <div class="row mt-5 mb-5">
        <h1>Успех</h1>
        <p>Для молодых и успешных</p>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ([1, 2, 3, 4, 5, 6] as $v)
            <div class="col-md-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('/images/cat.png')}}" class="card-img-top" alt="cat">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <div class="d-flex justify-content-between">
                            <div class="eye d-flex align-items-center">
                                <span>👁</span>
                                <span>123</span>
                            </div>
                            <button type="button" class="btn btn-light">❤</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('components._bottom')
