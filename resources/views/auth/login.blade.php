<x-guest-layout>
 
   <x-auth-session-status class="mb-4" :status="session('status')" />
    

    <div class="login-box">
        <div class="login-logo">
          <a href="../../index2.html">E-PROCUREMENT</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
      
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
              <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" :value="old('email')" required autofocus >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
              <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input id="remember_me" type="checkbox" name="remember">
                    <label for="remember">
                      Remember Me
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
      
             
            @if (Route::has('password.request'))
            <p class="mb-1">
              <a href="{{ route('password.request') }}">I forgot my password</a>
            </p>
            @endif
            <p class="mb-0">
              <a href="register.html" class="text-center">Register a new membership</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
</x-guest-layout>
