@extends('layout.app')
@section('title', 'Admin')

@section('content')
<!-- Modal -->
<div class="modal fade0 " id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">Admin</h1>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <a href="{{ route('admin.create') }}" class="btn btn-outline-primary">Create Secretry Account</a>
            </div>
        </div>
    </div>
</div>

<script type="importmap">
    {
      "imports": {
        "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/esm/popper.min.js",
        "bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.esm.min.js"
      }
    }
</script>
<script type="module">
    import * as bootstrap from 'bootstrap'
    
    const loginModal = new bootstrap.Modal(document.querySelector('#loginModal'), {
        backdrop: 'static',
        keyboard: false
    })
    loginModal.show()
    document.querySelector('#email').focus()
</script>
@endsection