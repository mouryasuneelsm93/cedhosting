

<!-- Header -->
<?php require 'header.php';?>
<style>

.card-header:first-child {
    
    overflow: scroll;
}
</style>
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
<div class="container mt--8 pb-5">
  <!-- Table -->
  <div class="row justify-content-center">
    <div class="col">
      <div class="card bg-secondary border-0">
        <div class="card-header bg-transparent pb-5">
         
        <table class="table table-striped" id="myTable">
        <thead class="bg-info">
          <tr>
          <th>Parent_id</th>
                <th>Product_id</th>
          <th>Product Category Name</th>
                <th>Product Name</th>
                <th>Product URL</th>
                <th>Product Monthly price</th>
                <th>Product Annual Price</th>
                <th>Product SKU</th>
                <th>Product WebSpace(GB)</th>
                <th>Product Bandwidth(GB)</th>
                <th>Product Free Domain</th>
                <th>Product Language/Technology Support</th>
                <th>Product MailBox</th>
                <th>Product Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
              include("product.php");
              $obj=new Product;
              $name="";
              $link="";
              $result=$obj->prod_show();
            
              foreach($result as $key=>$value)
              {
                
                echo "<tr>";
                foreach($value as $key=>$value1)
                {
                  if($key=="name")
                  {
                    $a=$value1;
                  }
                 
                  
                  echo "<td>".$value1."</td>";
                }
                echo "<td><button type='button' class='btn btn-primary edit' data-id='$a' data-name='$name' data-link='$link' data-toggle='modal' data-target='#myModal'>Edit</button> <button type='button' class='btn btn-danger del'  data-id='$a'>Delete</button></td></tr>";
              }

          ?>

        </tbody>
      </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
     

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="border-bottom:ridge">
              <h4 class="modal-title" >Product_Id : <span id="sp"></span></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
             
            <div class="modal-body">
              
                <div class="card-header bg-transparent pb-5">
                  <div class="text-muted text-center mt-2 mb-4"></div>
                  <div class="text-center">
                    Create Category
                  </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                  <form role="form" method="post" id="update">
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                        </div>
                        <input class="form-control" value="Hosting" type="text" name="hosting" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Product Name" required type="text" id="uproductname"
                          name="productname">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <textarea class="editor text-muted" placeholder="HTML" name="editor" id="ueditor" aria-hidden="true"
                            style="width:26vw" required></textarea>
                          <div role="application" class="tox tox-tinymce" aria-disabled="false"
                            style="visibility: hidden; height: 200px;">
        
                          </div>
                        </div>
                      </div>
                    </div>
        
                    <div class="text-center">
                      <button type="submit" name="bt" class="btn btn-primary mt-4" id="createcategory"  >Update Category</button>
                    </div>
                  </form>
                
              </div>
             
            </div>

          </div>
        </div>

      </div>
    </div>
   
  </div>
  <?php require("footer.php");?>
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
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
