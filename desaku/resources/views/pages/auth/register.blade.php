<x-auth-layout title="register">
<!-- auth-page content -->
<div class="auth-page-content overflow-hidden pt-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card overflow-hidden border-0 m-0">
                    <div class="row justify-content-center g-0">
                        <div class="col-lg-6">
                            <div class="p-lg-5 p-4 auth-one-bg h-100">
                               
                                <div class="position-relative h-100 d-flex flex-column">
                                    <div class="mb-4">
                                        <a href="index.html" class="d-block">
                                            <img src="assets/images/logo-light.png" alt="" height="18">
                                        </a>
                                    </div>
                                       
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="p-lg-5 p-4">
                                <div>
                                    <h5 class="text-primary">Daftar Akun</h5>
                                </div>

                                <div class="mt-4">
                                    <form class="auth-register-form mt-2" action="{{route('auth.register')}}" method="POST">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email Anda">  
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message}}
                                            </div>
                                            @enderror     
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                            <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Username Anda">
                                            @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message}}
                                            </div>
                                            @enderror   
                                        </div>
                                        

                                        <div class="mb-2">
                                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password ">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message}}
                                            </div>
                                            @enderror
                                        </div>
                                                                                
                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Daftar</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="mt-5 text-center">
                                    <p class="mb-0">Sudah Memiliki Akun? <a href="{{route('auth.index')}}" class="fw-semibold text-primary text-decoration-underline">Login Disini</a> </p>
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
                    <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script> Kelompok7 PA1 <i class="mdi mdi-heart text-danger"></i></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->
</x-auth-layout>