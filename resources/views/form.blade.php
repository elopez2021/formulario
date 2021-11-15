<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registro de Usuario</h1>
          </div>
          <div class="panel-body">

          
            <form action="" method="post">
            @csrf
              <div class="form-group">
                <label for="firstName">Primer Nombre</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Apellido</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="gender">Género</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Masculino</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Femenino</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Otros</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <label for="number">Teléfono</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <input type="submit" value="Enviar" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; Edgar Technology</small>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>
