<?php require "vista/layout/header.php";?>

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://cdn.pixabay.com/photo/2017/01/27/14/28/remove-2013214_960_720.png"
          class="img-fluid rounded-3" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="<?php echo urlsite?>?page=loginauth" method="post">
        <div class="form-outline mb-4 text-center mt-5">
            <label class="form-label fw-bolder fs-2" for="form1Example13">Inicio de sesión</label>
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" name="txt_username" class="form-control form-control-lg" placeholder="Ingresar aqui"/>
            <label class="form-label" for="form1Example13">Nombre de usuario</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" name="txt_password" class="form-control form-control-lg" placeholder="*******" />
            <label class="form-label" for="form1Example23">Contraseña</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <div class="d-grid gap-2 col-4 mx-auto">
            <button type="submit" class="btn btn-outline-primary btn-lg btn-block" name="btnlogin"> Ingresar </button>
          </div>
        </form>
        <p class="text-danger"><?php echo (isset($_GET['msg'])) ? $_GET['msg'] : "" ?></p>
      </div>
    </div>
  </div><?php require "vista/layout/footer.php";?>
</section> 

