<div class="modal fade" tabindex="-1" aria-hidden="true" id="{{ $attributes->get('id') }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">{{ $attributes->has('head') ? $attributes->get('head') : '' }}</h1>
            </div>
            {{ $slot }}
        </div>
    </div>
</div>
