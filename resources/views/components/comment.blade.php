<div class="comment-wrap container mt-5">
    <h2>Комментарий</h2>
    <form>
        <div class="form-group">
            <input type="text" class="form-control mt-2 comment-title" id="subject" placeholder="Тема сообщения">
        </div>
        <div class="form-group">
            <textarea class="form-control mt-2 comment-text" id="message" rows="5" placeholder="Текст сообщения"></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button data-id="{{$article->id}}" type="button" class="btn-comment btn btn-primary mt-2">Отправить</button>
        </div>
    </form>
</div>

