<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <title>Edit Beranda</title>

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
                        <div class="d-flex justify-content-center">

                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">Edit Beranda</h5>
                                    <div class="card-body">
                                        <form class="mb-3" action="{{ url('update-beranda', $data->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="card-body demo-vertical-spacing demo-only-element">

                                                <div class="form-group">
                                                    <label for="basicInput">Gambar</label>
                                                    <input class="form-control @error('gambar') is-invalid @enderror"
                                                        type="file" id="gambar" name="gambar">
                                                    @error('gambar')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <img src="{{ asset('storage/' . $data->gambar) }}" height="10%"
                                                        width="50%" alt="" srcset="">

                                                </div>
                                        </form>
                                        <button class="btn btn-primary d-grid w-100">Update</button>
                                        <!-- <button class="btn btn-danger d-grid w-100"><a href="/data-user"></a></button> -->
                                        </form>
                                        <button class="btn btn-danger d-grid w-100"><a href="/beranda"
                                                style="color: white;">Back</a></button>
                                    </div>
                                </div>
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
