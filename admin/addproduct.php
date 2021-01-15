
    <!-- Header -->
    <?php require_once("product.php");?>
   <?php require 'header.php';?>
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">CreateCategory</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="index.php">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">CreateCategory</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
              
            </div>
            <div class="card-body">
              <form id="addproduct">
              <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h1 class="mb-0">Create New Product</h1>
                            <div class="mb-0">Enter Product Details </div>
                            <small class="important-field"> 
                            * Mandatory Fields</small>
                            </div>
                        </div>
                    </div>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="form-group col-lg-6">
                    <label for="inputState">Select Product Category
                    <span class="important-field"> *</span></label>
                    <select id="inputState" class="form-control" name="productcategory">
                        <option value="Please select">Please select</option>
                          <?php 
                                      $obj=new Product;
                                      $sql="SELECT prod_name FROM tbl_product WHERE prod_parent_id=1";
                                      $res=$obj->con->query($sql);
                              
                                      if ($res->num_rows > 0) {
                                          while ($row=$res->fetch_assoc()) {
                                              echo "<option>".$row['prod_name']."</option>";
                                          }
                                          
                                      }
                                      else
                                      {
                                      return false; 
                                      }
                          ?>
                        </select>
                         <div class="invalid-feedback">
                      Please Select a Product Category.
                    </div>
                    
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="productname">Enter Product Name
                        <span class="important-field"> *</span></label>
                        <input type="text" id="productname" class="form-control" placeholder="product Name" name="productname">
                          <div class="invalid-feedback">
                            Please provide a valid Product Name.
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="pageurl">Page URL</label>
                        <input type="text" id="pageurl" class="form-control" placeholder="Page URL" name="pageurl">
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h1 class="mb-0">Product Description</h1>
                            <div class="mb-0">Enter Product Description Below </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="monthlyprice">Enter Monthly Price
                        <span class="important-field"> *</span></label>
                        <input type="text" id="monthlyprice" class="form-control" placeholder="Monthly Price" name="monthlyprice">
                        <small class="text-muted">This would be Monthly Plan</small>
                        <div class="invalid-feedback">
                          Please Enter valid Monthly price.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="annualprice">Enter Annual Price
                        <span class="important-field"> *</span> </label>
                        <input type="text" id="annualprice" class="form-control" placeholder="Annual Price" name="annualprice">
                        <small class="text-muted">This would be Annual Price</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Annual Price.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="sku">SKU<span class="important-field"> *</span></label>
                        <input type="text" id="sku" class="form-control" placeholder="SKU" name="sku">
                        <div class="invalid-feedback">
                          Please Enter valid SKU.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h1 class="mb-0">Features</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="webspace">Web Space(in GB)
                        <span class="important-field"> *</span></label>
                        <input type="text" id="webspace" class="form-control" placeholder="Web Space" name="webspace">
                        <small class="text-muted">Enter 0.5 for 512 MB</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Web Space.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="bandwidth">Bandwidth (in GB)
                        <span class="important-field"> *</span></label>
                        <input type="text" id="bandwidth" class="form-control" placeholder="Bandwidth" name="bandwidth">
                        <small class="text-muted">Enter 0.5 for 512 MB</small>
                        <div class="invalid-feedback">
                          Please Enter bandwidth.
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="freedomain">Free Domain<span class="important-field"> *</span> </label>
                        <input type="text" id="freedomain" class="form-control" placeholder="Free Domain" name="freedomain">
                        <small class="text-muted">Enter 0 if 
                        no domain available in this service</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Free Domain.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="languagetechnology">Language/ Technology Support
                        <span class="important-field"> *</span> </label>
                        <input type="text" id="languagetechnology" class="form-control" placeholder="Language or Technology Support" name="languagetechnology">
                        <small class="text-muted">Separate by (,) 
                        Ex: PHP, MySQL, MongoDB</small>
                        <div class="invalid-feedback">
                        Please Enter Valid Language or Technology Support.
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="mailbox">Mailbox
                        <span class="important-field"> *</span> </label>
                        <input type="text" id="mailbox" class="form-control" placeholder="Mailbox" name="mailbox">
                        <small class="text-muted">Enter Number addproduct
                          Please Enter Valid Number of Mailbox.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center pb-3">
                  <input type="submit" name="submit" class="btn btn-primary mt-4" id="createcategory" value="Create Category" >
                </div>
                </form>
              </div>   
            </div>
          </div>
        </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative
                Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link"
                  target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
 
    </div>
    </footer>
  </div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
  <script src="../ajax.js"></script>
</body>

</html>

