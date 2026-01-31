@if (session()->has('toast'))
    @php
        $toast = session('toast');
        $title = $toast['title'] ?? 'Info';
        $message = $toast['message'] ?? '';
        $dot = $toast['dot'] ?? '#0d6efd';
        $delay = (int) ($toast['delay'] ?? 3500);
        $time = $toast['time'] ?? 'maintenant';
    @endphp

    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1080">
        <div id="appToast"
             class="toast align-items-center border-0"
             role="alert"
             aria-live="assertive"
             aria-atomic="true"
             data-bs-delay="{{ $delay }}"
             data-bs-autohide="true">

            <div class="toast-header border-0">
                <span class="me-2" style="width:10px;height:10px;border-radius:999px;background:{{ $dot }};"></span>
                <strong class="me-auto">{{ $title }}</strong>
                <small class="text-muted">{{ $time }}</small>
                <button type="button" class="btn-close ms-2 mb-1" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>

            <div class="toast-body">
                {{ $message }}
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof bootstrap === 'undefined') {
                console.error('Bootstrap JS non chargé → toast impossible.');
                return;
            }
            const el = document.getElementById('appToast');
            if (!el) return;

            const t = new bootstrap.Toast(el);
            t.show();
        });
    </script>
@endif
