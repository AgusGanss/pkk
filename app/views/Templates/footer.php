<section>
    <div class="p-3 text-light d-flex bd-highlight" style="background-color: black;">
        <div class="p-2 flex-fill bd-highlight text-center">
            <h5>Useful Link</h5>
            <ul class="useful">
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Shop</a></li>
            </ul>
        </div>
        <div class="p-2 flex-fill bd-highlight text-center">
            <h5>Private Policy</h5>
        </div>
        <div class="p-2 flex-fill bd-highlight text-center">
            <h5>Media Sosial</h5>
            <div class="medsos d-flex justify-content-center">
                <div class="bg-secondary m-3 background ">
                    <i class="bi bi-instagram "></i>
                </div>
                <div class="bg-secondary m-3 background">
                    <i class="bi bi-facebook"></i>
                </div>
                <div class="bg-secondary m-3 background">
                    <i class="bi bi-twitter"></i>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- NAVBAR -->
<script>
const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = () => {
  navbar.classList.add("show");
  menuBtn.classList.add("hide");
  body.classList.add("disabled");
}
cancelBtn.onclick = () => {
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
window.onscroll = () => {
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}
</script>

<!-- Footer -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
<script src="<?= BASEURL; ?>/js/sb-admin-2.js"></script>
<script src="<?= BASEURL; ?>/js/sb-admin-2.min.js"></script>
</body>
</html>