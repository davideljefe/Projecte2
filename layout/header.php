<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Habitacions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Reserves</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Login
              </button>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Registrarse
              </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Iniciar Sessió</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email1" placeholder="usuari@exemple.com">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Contrasenya</label>
                  <input type="password" class="form-control" id="contra1">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sessió</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registarse</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="row g-3">
                <div class="col-md-6">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="nom">
                </div>
                <div class="col-md-6">
                  <label for="cognoms" class="form-label">Cognoms</label>
                  <input type="text" class="form-control" id="cognoms">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail3" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail3" placeholder="usuari@exemple.com">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Contrasenya</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="direccio" class="form-label">Direcció</label>
                  <input type="text" class="form-control" id="direccio" placeholder="C/ Hola mon, 6">
                </div>
                <div class="col-md-6">
                  <label for="ciutat" class="form-label">Ciutat</label>
                  <input type="text" class="form-control" id="ciutat">
                </div>
                <div class="col-md-6">
                  <label for="cp" class="form-label">CP</label>
                  <input type="number" id="cp" class="form-control">
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
