  <!DOCTYPE html>

  <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

  <head>
    <title>Edit</title>

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
                <div class="d-flex justify-content-center" >
                <div class="col-md-6">
                    <div class="card mb-4">
                      <h5 class="card-header">Form Controls</h5>
                      <div class="card-body">
                      <form id="formAuthentication" class="mb-3" action="{{ url('update-user', $data->id) }}" method="POST">
                          {{ csrf_field() }}
                  <div class="mb-3">
                    <label for="username" class="form-label">Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="username"
                      name="name"
                      placeholder="Enter your Name"
                      value="{{ $data->name}}"
                      autofocus
                    />
                  </div>
                  <div class="mb-3">
                          <label for="exampleFormControlReadOnlyInput1" class="form-label">Level</label>
                          <input
                            class="form-control"
                            type="text"
                            id="exampleFormControlReadOnlyInput1"
                            placeholder="USER"
                            readonly value="{{ $data->level}}"
                          />
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ $data->email}}" />
                  </div>
                

                  <button class="btn btn-primary d-grid w-100">Update</button>
                  <!-- <button class="btn btn-danger d-grid w-100"><a href="/data-user"></a></button> -->
                </form>
                  <button class="btn btn-danger d-grid w-100"><a href="/data-user" style="color: white;">Back</a></button>

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