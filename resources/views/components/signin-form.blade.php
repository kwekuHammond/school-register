<x-card CardTitle="Log In">
        <form class="col needs-validation" method="POST" action="/" novalidate>
            @csrf <!--  prevents cross site scripting attacks -->
            <div class="col-md">
                <label for="login_email_id" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}" id="login_email_id" required>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="invalid-feedback">
                    Enter a valid email address
                </div>
            </div>
            <div class="col-md pb-4">
                <label for="login_p" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="{{old('password')}}" id="login_p" required>
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="invalid-feedback">
                    Please enter password
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" name="sigin" type="submit"><i class="bi bi-box-arrow-in-right"></i> Login</button>
            </div>
        </form>
        <p><h6>Don't Have Account? <a href="/create-account">Sign Up</a>  </h6></p>
</x-card>
