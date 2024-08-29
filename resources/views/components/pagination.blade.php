    <div class="pagination-articles d-flex justify-content-center me-3">
        {{ is_object($pagination) ? $pagination->links('pagination::bootstrap-4') : "" }}
    </div>
