@include('components._top')
@include('components.nav')

<div class="container">
    <div class="row">
        <div class="container">
            <div class="row mt-5">
                <div class="mb-4">
                    <h1>Каталог статей</h1>
                    <p>Далеко-далеко за словесными горами в стране гласных, и согласных живут рыбные тексты. Рот толку сбить скатился снова лучше собрал страну заманивший, грустный вершину журчит единственное силуэт его свой запятых свою наш жизни семантика предупреждал эта безопасную первую путь не! Несколько необходимыми всемогущая это ты домах? От всех, эта взгляд. Своего ручеек переписывается дорогу? Предупредила напоивший алфавит повстречался маленький большой, букв рот взобравшись всеми. Пустился деревни журчит щеке составитель. Снова решила, текст предложения дорогу злых своего о выйти грустный! Дал домах даль оксмокс буквоград толку бросил последний на берегу. Речью, свое агентство предупредила вскоре его рекламных решила меня жизни за последний, все своих вопроса. Свой!</p>
                </div>
                <div>
                    @include('components.catalog-article')
                </div>
            </div>
            @include('components.pagination')

        </div>
    </div>
</div>

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
    });
</script>

