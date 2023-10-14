<h3 class="titulo">{if (isset($error))}
    {$error}
  {else}
    {$tituloForm}
  {/if}</h3>
<form action="loginAuth" method="POST">
  <div class=" formLogin centrado">
    <div class="wine-details">
      <div class="item-form">
        <label for="exampleInputEmail1" class="form-label encabezado-table">Email: </label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
          placeholder="Ingrese su Email">
      </div>
      <div class="item-form">
        <label for="exampleInputPassword1" class="form-label encabezado-table">Password: </label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password"
          placeholder="Ingrese su contraceña">
      </div>
      <div class="centrado">
        <button type="submit" class="btn btn-primary botton-add">Login</button>
      </div>
    </div>
  </div>
</form>