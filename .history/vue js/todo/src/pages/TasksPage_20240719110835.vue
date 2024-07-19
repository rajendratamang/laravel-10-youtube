<template>
    <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#products">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#settings">Settings</a>
            </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content">
        <h1 id="dashboard">Dashboard</h1>
        <div class="card">
          <div class="card-header">
            Product List
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Category</th>
                  <th scope="col">Price</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td>Category 1</td>
                  <td>$100</td>
                  <td>
                    <i class="fa fa-edit" title="Edit"></i>
                    <i class="fa fa-trash ml-3" title="Delete"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Product 2</td>
                  <td>Category 2</td>
                  <td>$200</td>
                  <td>
                    <i class="fa fa-edit" title="Edit"></i>
                    <i class="fa fa-trash ml-3" title="Delete"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Product 3</td>
                  <td>Category 3</td>
                  <td>$300</td>
                  <td>
                    <i class="fa fa-edit" title="Edit"></i>
                    <i class="fa fa-trash ml-3" title="Delete"></i>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>
</template>