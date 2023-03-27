@extends('layout.app')
@section('title', 'Create Admin')

@section('content')
<!-- Modal -->
<div class="modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">Create Admin User</h1>
            </div>
            <div class="modal-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-3">
                            <label for="name" class="col-form-label">Name</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="name" class="form-control" name="name">
                            <div class="col-12">
                                <span class="form-text text-danger" hidden>
                                    Error
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-3">
                            <label for="email" class="col-form-label">Email</label>
                        </div>
                        <div class="col-8">
                            <input type="email" id="email" class="form-control" name="email">
                            <div class="col-12">
                                <span class="form-text text-danger" hidden>
                                    Error
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-3">
                            <label for="designation" class="col-form-label">Designation</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="designation" class="form-control" name="designation">
                            <div class="col-12">
                                <span class="form-text text-danger" hidden>
                                    Error
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-3">
                            <label for="department" class="col-form-label">Department</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="department" class="form-control" name="department">
                            <div class="col-12">
                                <span class="form-text text-danger" hidden>
                                    Error
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-3">
                            <label for="organization" class="col-form-label">Organization</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="organization" class="form-control" name="organization">
                            <div class="col-12">
                                <span class="form-text text-danger" hidden>
                                    Error
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-3">
                            <label for="mobile" class="col-form-label">Mobile</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="mobile" class="form-control" name="mobile">
                            <div class="col-12">
                                <span class="form-text text-danger" hidden>
                                    Error
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-3">
                            <label for="address" class="col-form-label">Address</label>
                        </div>
                        <div class="col-8">
                            <textarea id="address" class="form-control" name="address"></textarea>
                            <div class="col-12">
                                <span class="form-text text-danger" hidden>
                                    Error
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
    document.querySelector('#name').focus()
</script>
@endsection