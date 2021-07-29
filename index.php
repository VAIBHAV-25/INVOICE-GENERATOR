<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GST BILLING | INVOICE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <h2>GST BILLING</h2>
    </div>
    <form class="form" action="pdf.php" method="POST">
    <div class="form-control">
            <label>Deliever To</label>
            <input type="text" name="prodel" placeholder="Enter Agency Name:" required>
        </div>
        <div class="form-control">
            <label>Delievery Address</label>
            <input type="text" name="proadd" placeholder="Enter Agency Address:" required>
        </div>
        <div class="form-control">
            <label>Product Name</label>
            <input type="text" name="proname" placeholder="Enter Product Name:" required>
        </div>
        <div class="form-control">
            <label>Product Cost</label>
            <input type="number" name="procost" id="prodcost" placeholder="Enter Product Cost:" onkeyup="gst(this.value);" required>
        </div>
        <div class="form-control">
            <label>GST Number</label>
            <input type="text" name="progst" id="prodgst" placeholder="Enter GST Number:" required>
        </div>
        <div class="form-control">
            <label>Product Sales Date</label>
            <input type="date" name="prodate" id="proddate" placeholder="Enter Product Sales Date:" required>
        </div>
        <div class="form-control">
            <label>Product GST amount</label>
            <input type="number" step="proany" name="progcost" id="prodgcost" placeholder="Product's GST Amount:">
        </div>
        <div class="form-control">
            <label>Product's Total Price</label>
            <input type="number" name="protcost" id="prodtcost" placeholder="Product's Total Cost:">
        </div>
        <input type="submit" value="submit" class="btn" name="submit" id="button">
    </form>
</div>
<script>
    function gst(value){
        var gst;
        gst = 0.18 * value;
        document.getElementById('prodgcost').value = gst;   
        var total;
        total = parseInt(gst)+parseInt(value);
        document.getElementById('prodtcost').value = total;
    }

</script>
    
</body>
</html>