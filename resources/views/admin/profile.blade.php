  <!DOCTYPE html>

  <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
      data-assets-path="../assets/" data-template="vertical-menu-template-free">

  <head>
      <title>Profile</title>

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
                                  <h5 class="card-header">Profile</h5>
                                  <a class="card-header" href="{{ route('add-profile') }}"><button type="button"
                                          class="btn btn-outline-primary">Tambah</button></a>
                              </div>


                              <div class="card-body">
                                  <div class="table-responsive text-nowrap">
                                      <table class="table table-bordered">
                                          <thead>
                                              <tr>
                                                  <th>No</th>
                                                  <th>Deskripsi</th>
                                                  <th>Gambar</th>
                                                  <th>Actions</th>
                                              </tr>
                                          </thead>
                                          @php
                                              $no = 1;
                                          @endphp
                                          @foreach ($data as $d)
                                              <tbody>
                                                  <tr>
                                                      <td>{{ $no++ }}</td>
                                                      <td>{{ $d['deskripsi'] }}</td>
                                                      <td><img src="{{ asset('storage/' . $d->gambar) }}" alt=""
                                                              style="width: 100px; height: 50px; "></td>
                                                      <td>
                                                          <div>
                                                              <a class="dropdown-item"
                                                                  href="{{ url('edit-profile', $d->id) }}"><i
                                                                      class="bx bx-edit-alt me-1"></i>
                                                                  Edit</a>
                                                              <a class="dropdown-item"
                                                                  href="{{ url('delete-profile', $d->id) }}"
                                                                  onclick="confirmation(event)"><i
                                                                      class="bx bx-trash me-1"></i>
                                                                  Delete</a>
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
                      <script>
                          function confirmation(ev) {
                              ev.preventDefault();
                              var urlToRedirect = ev.currentTarget.getAttribute('delete-profile');
                              console.log(urlToRedirect);
                              swal({
                                      title: "Are you sure to Delete this post",
                                      text: "You will not be able to revert this!",
                                      icon: "warning",
                                      buttons: true,
                                      dangerMode: true,
                                  })
                                  .then((willCancel) => {
                                      if (willCancel) {



                                          window.location.href = urlToRedirect;

                                      }


                                  });


                          }
                      </script>

                      {{-- <script>
                        function confirmDelete(item_id) {
                            swal({
                                    title: 'Apakah Anda Yakin?',
                                    text: "Anda Tidak Akan Dapat Mengembalikannya!",
                                    type: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Yes, delete it!'
                                })
                                .then((willDelete) => {
                                    if (willDelete) {
                                        $('#' + item_id).submit();
                                    } else {
                                        swal("Cancelled Successfully");
                                    }
                                });
                        }
                    </script> --}}

  </body>

  </html>
