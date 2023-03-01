<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <!--for JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--html-->
    <div>
      <div class="row align-items-center" style="height: 100vh; background: #416d16;">
        <div class="mx-auto col-10 col-md-8 col-lg-6" style="border-radius: 25px;
        background: #73AD21;
        padding: 20px;
        width: 800px;
        height: 300px;">
          <!-- Form -->
            <form method='POST' class="form-example" action="zzz.php">
                <div class="form-group">
                    <label for="name_lastName">Name, Last name</label>
                    <input type="text" class="form-control visible" id="name_lastName" aria-describedby="name_lastName" placeholder="Enter name, last name" name="name"
                    value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" class="form-control" id="amount" aria-describedby="amount" placeholder="Enter amount" name="amount"
                    value="<?php if(isset($_POST['amount'])) echo $_POST['amount']; ?>">
                </div>
                <div class="form-group">
                    <label for="weeks">Weeks</label>
                    <input type="number" class="form-control" id="weeks" aria-describedby="weeks" placeholder="Enter weeks" name="weeks"
                    value="<?php if(isset($_POST['weeks'])) echo $_POST['weeks']; ?>">
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary btn-customized mt-4">Calculate</button>
                </div>
            </form>
          <!-- Form end -->
        </div>
    </div>
    <!--php-->
  </body>
</html>