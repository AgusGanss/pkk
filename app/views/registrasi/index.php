

<body>
<form action="<?= BASEURL; ?>/registrasi/tambah" method="post">
    <div class="login gx-5 d-flex">
    
      <div class="card col-3 p-2 mt-10">


         <div class="text-center">
            <h1 class="h3 text-gray-900 mb-4" style="font-weight: bold; margin-top:30px;">REGISTRASI</h1>
          </div>


           <div  class="form-group">
              <p style="font-size: 10px;">Registrasi to your Account</p>
              <input type="text" class="form-control form-control-use id="exampleInputEmail" aria-describedby="" name="username" placeholder="Enter Username...">
            </div>



            <div class="form-group">
               <input type="text" class="form-control form-control-use id="exampleInputEmail" aria-describedby=""  placeholder=" Name..." name="name">
            </div>
      

            
           <div class="form-group">
              <input type="email" class="form-control form-control-use id="exampleInputEmail" aria-describedby="" placeholder="Enter Email Address..." name="email">
            </div>


            <div class="form-group">
                <input type="password" class="form-control form-control-use id="exampleInputEmail" aria-describedby="emailHelp" name="password" placeholder=" Password...">
            </div>



            <div class="form-group">
                <input type="text" class="form-control form-control-use id="exampleInputEmail" aria-describedby="emailHelp" name="alamat" placeholder="Alamat...">
            </div>

            
          <button type="submit" class="btn btn-primary">Submit</button>


      <hr>

      <div class="text-center">
        <a class="small" href="<?= BASEURL ?>/login">Have any Account Please Login!</a>
      </div>
    </div>
      
   
    <img class="foto" src="<?= BASEURL ?>/img/background-login.jpg" alt="">
    </div>
    </form>

    
    
   


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>