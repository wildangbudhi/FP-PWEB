{{-- Login Modal --}}
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby= "@yield('id')ModalLabel" id="@yield('id')Modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>@yield('title')</h4>
                <button type="button" name="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @yield('modal-content')
            </div>
        </div>
    </div>
</div>