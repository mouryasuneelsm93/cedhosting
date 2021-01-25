<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
    .p1
    {
        display:none;
    }
    </style>
</head>
<body>
    <?php require_once("header.php");?>
<div class="container">
    <form id="details">
    <div class="text-left text-danger">
        <h2>Shipping Details:</h2>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-2 text-muted text-center" >
            <label>House No.</label>
        </div>
        <div class="col-sm-3" >
            <input type="text" placeholder="House No" id="h_no" name="h_no" class="form-control">
        </div>
        <div class="col-sm-2 text-muted text-center" >
            <label>Landmark</label>
        </div>
        <div class="col-sm-3" >
            <input type="text" placeholder="Landmark" id="l_mark" name="l_mark" class="form-control">
        </div>
    </div>
    <br>
    
    <div class="row">
        <div class="col-sm-2 text-muted text-center" >
            <label>City</label>
        </div>
        <div class="col-sm-3" >
            <input type="text" placeholder="City" class="form-control" id="city" name="city">
        </div>
        <div class="col-sm-2 text-muted text-center" >
            <label>State</label>
        </div>
        <div class="col-sm-3" >
            <input type="text" placeholder="state" class="form-control" id="state" name="state">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-2 text-muted text-center" >
            <label>Pincode</label>
        </div>
        <div class="col-sm-3" >
            <input type="text" placeholder="country" class="form-control" id="p_code" name="p_code">
        </div>
        <div class="col-sm-2 text-muted text-center" >
            <label>Country</label>
        </div>
        <div class="col-sm-3" >
            <input type="text" placeholder="country" class="form-control" id="country" name="country">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3 text-center" >
            <input type="submit"  class="btn btn-warning" value="submit" name="submit">
            <a href="cart.php" type="button" class="btn btn-danger">Cancel</a>
        </div>
    </div>
</form>
 <div class="row">
    <div class="col-sm-3 pl-3 p1">
        <h2 class="text-muted"><?php echo $_SESSION['user'];?></h2>
        <p class="shipping_data">
        </p>
        <br>
        <a href="pay.php" type="button" class="btn btn-primary">confirm</a>
        <a href="payment.php" type="button" class="btn btn-primary">Edit</a>
    </div>
    <div class="col-sm-6">
    </div>
    <div class="col-sm-3">
    </div>
 </div>
 <br>
 
</div>
<br>
    <?php require_once("footer.php");?>
  
</body>
</html>
