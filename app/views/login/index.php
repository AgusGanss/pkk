<body>
    <div class="login gx-5 d-flex">
        <div class="card col-3 p-2 mt-10">
            <div class="text-center">
                <h1 class="h3 text-gray-900 mb-4" style="font-weight: bold; margin-top:30px;">LOGIN</h1>
            </div>
            <div class="form-group">
                <p style="font-size: 10px;">Login to your Account</p>


                <form action="<?= BASEURL; ?>/login/prosesLogin" method="post">
                    <input type="email" class="form-control form-control-use" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-use" id="exampleInputPassword" placeholder="Password..." name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <hr>

            <div class="text-center">
                <a class="small" href="<?= BASEURL ?>/registrasi">Create an Account!</a>
            </div>
        </div>
        <img class="foto" src="<?= BASEURL ?>/img/background-login.jpg" alt="">
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>