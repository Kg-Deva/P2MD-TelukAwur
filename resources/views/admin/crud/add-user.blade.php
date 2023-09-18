<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <title>Tables - Basic Tables | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    @include('admin.layouts.head')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admin.layouts.menu')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('admin.layouts.navbar')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Form controls -->
                        <div class="d-flex justify-content-center">

                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">Form Controls</h5>
                                    <div class="card-body">
                                        <form id="formAuthentication" class="mb-3" action="{{ route('simpan-user') }}"
                                            method="POST">
                                            {{ csrf_field() }}
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="username" name="name"
                                                    placeholder="Enter your Name" autofocus />
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlReadOnlyInput1"
                                                    class="form-label">Level</label>
                                                <input class="form-control" type="text" id="level"
                                                    placeholder="USER" readonly name="level" value="user" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                {{-- <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="Enter your email" /> --}}
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    type="text" id="email" name="email">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 form-password-toggle">
                                                <label class="form-label" for="password">Password</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="password" id="password" class="form-control"
                                                        name="password"
                                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                        aria-describedby="password" />
                                                    <span class="input-group-text cursor-pointer"><i
                                                            class="bx bx-hide"></i></span>
                                                </div>
                                            </div>

                                            <button class="btn btn-primary d-grid w-100">Add</button>
                                            <!-- <button class="btn btn-danger d-grid w-100"><a href="/data-user"></a></button> -->
                                        </form>
                                        <button class="btn btn-danger d-grid w-100"><a href="/data-user"
                                                style="color: white;">Back</a></button>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- / Content -->

                        <!-- Footer -->
                        @include('admin.layouts.footer')
                        <!-- / Footer -->




</body>

</html>
