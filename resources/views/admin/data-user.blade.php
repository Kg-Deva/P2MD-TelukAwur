<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>

    <title>Data User</title>

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

                        <!-- Bordered Table -->
                        <div class="card">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-header">Data User</h5>
                                <a class="card-header" href="/add-user"><button type="button"
                                        class="btn btn-outline-primary">Tambah</button></a>
                            </div>


                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Level</th>
                                                <th>Email</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $no = 0;
                                            
                                        @endphp
                                        @foreach ($data as $d)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $data->firstitem() + $no++ }}</td>
                                                    <td>{{ $d['name'] }}</td>
                                                    <td>{{ $d['level'] }}</td>
                                                    <td>{{ $d['email'] }}</td>
                                                    <td>
                                                        <div>
                                                            <a class="dropdown-item"
                                                                href="{{ url('edit-user', $d->id) }}"><i
                                                                    class="bx bx-edit-alt me-1"></i>
                                                                Edit</a>

                                                            @if (auth()->user()->id != $d['id'])
                                                                <a class="dropdown-item"
                                                                    href="{{ url('delete-user', $d->id) }}"
                                                                    onclick="confirmation(event)"><i
                                                                        class="bx bx-trash me-1"></i>
                                                                    Delete</a>
                                                            @endif
                                                        </div>

                                                    </td>
                                                </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                    <br>
                                    {{ $data->links() }}

                                </div>
                            </div>

                        </div>
                        <!--/ Bordered Table -->
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('admin.layouts.footer')
                    <!-- / Footer -->
                    @include('admin.function.delete')

</body>

</html>
