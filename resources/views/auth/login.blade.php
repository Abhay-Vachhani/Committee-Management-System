@extends('layout.app')

@section('content')
<!-- Modal -->
<div class="modal fade0 " id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-3">
                            <label for="email" class="col-form-label">email</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="email" class="form-control" name="email">
                            <div class="col-12">
                                <span class="form-text text-danger" hidden>
                                    Must be 8-20 characters long.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-3">
                            <label for="userName" class="col-form-label">Password</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="password" class="form-control" name="password">
                            <div class="col-12">
                                <span class="form-text text-danger" hidden>
                                    Must be 8-20 characters long.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <input type="submit" value="Login" class="btn btn-outline-primary">
                    </div>
                    <span class="form-text text-danger">
                        @if (Session::has('error'))
                            {{ Session::get('error') }}
                        @endif
                    </span>
                </form>
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