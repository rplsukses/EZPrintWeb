@extends ('admin/header')
@extends ('admin/footer')
@extends ('admin/sidebar')

    <!-- Navbar -->
    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
        <div class="container-fluid">
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input class="form-control" placeholder="Search..." type="text" value=""> <button class="btn btn-white btn-round btn-just-icon" type="submit"><i class="material-icons">search</i>
                <div class="ripple-container"></div></button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo"><i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">Account</p></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <!-- Content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <a href="{{ route('add_admin') }}"><button type="submit" class="btn btn-primary pull-right">Add</button></a>
          </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tabel Admin</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table cellspacing="0" class="table" id="dtBasicExample" width="100%">
                      <thead class=" text-primary">
                        <tr>
                          <th>No.</th>
                          <th>ID Admin<i aria-hidden="true" class="fa fa-sort float-right"></i></th>
                          <th class="th-sm">Nama <i aria-hidden="true" class="fa fa-sort float-right"></i></th>
                          <th class="th-sm">Email <i aria-hidden="true" class="fa fa-sort float-right"></i></th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('edit_admin') }}">Edit</a>
                            <a class="btn btn-danger btn-sm" href="#">Delete</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Content -->

          <!-- pagination -->
          <nav aria-label="pagination">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled"><span class="page-link">Previous</span></li>
              <li class="page-item active"><span class="page-link">1 <span class="sr-only">(current)</span></span></li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">5</a>
              </li>
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- End Pagination -->
    </body>
    </html>
