<x-auth-layout title="Login">
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden border-0">
                        <div class="row g-0">
                            
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4">
                                    <div>
                                        <h2 class="text-primary">Selamat Datang Di Website Desa Lumban Dolok</h2>
                                    </div>
    
                                    <div class="mt-4">
                                        @if(session('loginError'))
            					        <div class="alert alert-danger">
               					         <b></b> {{session('loginError')}}
            					        </div>
            					        @endif
                                        <form class="auth-login-form mt-2" action="{{route('auth.login')}}" method="POST">
                                            @csrf
            
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="Enter username">
                                            </div>
                                            @error('username')
                                            <div class="alert-alert danger">{{ $message}}</div>
                                            @enderror
                    
                                            <div class="mb-3">
                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" name="password" class="form-control pe-5  @error('password') is-invalid @enderror" placeholder="Enter password" id="password-input">
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>
                                            @error('password')
										    <div class="alert-alert danger">{{ $message}}</div>
									        @enderror
                                            
                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>

                                    {{-- <div class="mt-5 text-center">
                                        <p class="mb-0">Tidak Memiliki Akun? <a href="{{route('auth.register')}}" class="fw-semibold text-primary text-decoration-underline">Daftar Disini</a> </p>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4 auth-one-bg h-100">
                                    
                                    <div class="position-relative h-100 d-flex flex-column">
                                        <div class="mb-4">
                                            <img src=" ">
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script>Kelompok7 PA1 <i class="mdi mdi-heart text-danger"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->
</x-auth-layout>