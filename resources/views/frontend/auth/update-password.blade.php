@extends('layouts.master')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="container py-5">
                        <form id="resetPasswordForm">
                            <div class="form-group">
                                <label for="inputPassword">Enter New Password</label>
                                <input type="password" class="form-control form-control-user" id="inputPassword" name="password" placeholder="Enter New Password...">
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control form-control-user" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password...">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@yield('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("resetPasswordForm").addEventListener("submit", function(event) {
            var password = document.getElementById("inputPassword").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match");
                event.preventDefault();
            }
        });
    });

</script>

