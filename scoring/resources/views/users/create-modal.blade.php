<!-- Modal -->
<!-- Modal HTML Markup -->
<div id="create" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="{{ action('UserController@store') }}">
                    @csrf
                    @include('users._form')
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
