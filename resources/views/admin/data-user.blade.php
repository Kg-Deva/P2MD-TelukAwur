<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

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

            <!-- Bordered Table -->
            <div class="card">
              <div class="d-flex justify-content-between" >
                <h5 class="card-header">Data User</h5>
                <a class="card-header" href="/add-user"><button type="button" class="btn btn-outline-primary">Tambah</button></a>
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
                           $no = 1;
                           $edit = 1;
                           @endphp
                                @foreach ($data as $d)
                    <tbody>
                      <tr>
                        <td>{{$no++ }}</td>                        
                        <td>{{$d['name'] }}</td>
                        <td>{{$d['level'] }}</td>
                        <td>{{$d['email'] }}</td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ url('edit-user',$d->id) }}"><i class="bx bx-edit-alt me-1"></i>
                                Edit</a>
                              <a class="dropdown-item" href="{{ url('delete-user',$d->id) }}"><i class="bx bx-trash me-1"></i>
                                Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                                  
                    </tbody>
                  </table>
                </div>
              </div>
              
            </div>
            <!--/ Bordered Table -->
          </div>
          <!-- / Content -->

          <!-- Footer -->
          @include('admin.layouts.footer')
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  @include('sweetalert::alert')

</body>

</html>