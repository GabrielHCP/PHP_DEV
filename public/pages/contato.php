 
<?php  echo get('message'); ?>
<form class="row g-3" action="/pages/forms/contato.php" method="POST">

  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nome</label>
    <input type="text" class="form-control" id="validationDefault01" name="name" >
  </div>

  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Sobrenome</label>
    <input type="text" class="form-control" id="validationDefault02" name="lastname" >
  </div>

  <div class="col-md-3">
    <label for="validationDefault02" class="form-label">E-mail</label>
    <input type="text" class="form-control" id="validationDefault02" name="email">
  </div>

  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="validationDefault03" name="city" >
  </div>

  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Estado</label>
    <input type="text" class="form-control" id="validationDefault03"  name="state" >
  </div>

  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">CEP</label>
    <input type="text" class="form-control" id="validationDefault05" name="zip" >
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>

</form>