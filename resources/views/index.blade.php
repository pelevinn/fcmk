@include('components._top')
@include('components.nav')

<div class="container">
    <div class="row mt-5 mb-5">
        <h1>Успех</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam possimus expedita ut et atque quae nihil libero excepturi omnis nam amet provident dolores eaque, ea optio eos minus rerum dicta distinctio id reprehenderit necessitatibus quo praesentium ipsam. Sequi at nisi quo rerum aspernatur non alias officia aut dolor facere ad, voluptatibus, quisquam eligendi blanditiis magni. Atque voluptas omnis unde non nulla ab ullam, doloremque impedit, sit eius obcaecati illo aut, corporis rem dicta laudantium! Quas illo eveniet saepe debitis laboriosam similique rem nulla, cupiditate praesentium. Id deleniti vel sapiente reiciendis debitis delectus, pariatur mollitia, nam cum et, necessitatibus quibusdam rerum.</p>
    </div>
</div>

<div class="container">
    <div class="row">
            @include('components.index-article')
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
