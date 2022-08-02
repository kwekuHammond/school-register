<x-card CardTitle="Create Account">
        <form method="POST" action="/create-account" class="col needs-validation" novalidate>
            @csrf <!--  prevents cross site scripting attacks -->
            <div class="col-md">
                <label for="fullname_id" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="fullname"  id="fullname_id" value="{{old('fullname')}}" required>
                @error('fullname')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="invalid-feedback">
                    Enter a valid email address
                </div>
            </div>

            <div class="col-md">
                <label for="email_id" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}" id="email_id" required>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="invalid-feedback">
                    Enter a valid email address
                </div>

            </div>
            <div class="col-md pb-4">
                <label for="pswd_id" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="{{old('password')}}" id="pswd_id" required>
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md pb-4">
                <label for="repeat_pswd_id" class="form-label">Repeat Password</label>
                <input type="password" class="form-control" name="repeat_password" value="{{old('repeat_password')}}" id="repeat_pswd_id" required>
                @error('repeat_password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="signup"><i class="bi bi-person-circle"></i>  Create Account</button>
            </div>
            <p><h6>Already Have An Account? <a href="/">Sign In</a>  </h6></p>
        </form>
</x-card>
