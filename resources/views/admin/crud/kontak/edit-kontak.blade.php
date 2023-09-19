<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <title>Edit | Telepon</title>

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
                                    <h5 class="card-header">Merged</h5>
                                    <div class="card-body">
                                        <form class="mb-3" action="{{ url('update-kontak', $data->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="card-body demo-vertical-spacing demo-only-element">
                                                <div>
                                                    <label for="basicInput">Lokasi</label>
                                                    <input class="form-control" aria-label="With textarea"
                                                        placeholder="Lokasi" name="lokasi" type="text"
                                                        value="{{ $data->lokasi }}">
                                                </div>
                                                <div>
                                                    <label for="basicInput">Email</label>
                                                    <input class="form-control" aria-label="With textarea"
                                                        placeholder="Email" name="email" type="text"
                                                        value="{{ $data->email }}">
                                                </div>
                                                <div>
                                                    <label for="basicInput">Telepon</label>
                                                    <input class="form-control @error('telepon') is-invalid @enderror"
                                                        type="text" id="telepon" name="telepon"
                                                        placeholder="Telepon" value="{{ $data->telepon }}">
                                                    @error('telepon')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                        </form>
                                        <button class="btn btn-primary d-grid w-100">Update</button>
                                        <!-- <button class="btn btn-danger d-grid w-100"><a href="/data-user"></a></button> -->
                                        </form>
                                        <button class="btn btn-danger d-grid w-100"><a href="/kontak"
                                                style="color: white;">Back</a></button>
                                    </div>
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
