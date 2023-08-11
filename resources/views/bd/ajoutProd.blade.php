<!DOCTYPE html>
<html>

<head>
    <title>Laravel Tutorial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Bienvenue</h1>
    <p>Ajouter un produit</p>
    <div class="container">
        @if ($errors->any())
        <div class="row">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        <div class="row">
            <form method="POST" action="/ajoutProd">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label for="exampleInputEmail1">Code Prod</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="code" placeholder="Le code du produit">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Prod Name</label>
                    <input name="name" type="text" class="form-control" id="ProdName" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Prod Line</label>
                    <input name="line" type="text" class="form-control" id="ProdLine" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Prix Achat</label>
                    <input name="achatPrix" type="number" step=".01" class="form-control" id="prodBuy" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Prix Vente</label>
                    <input name="ventePrix" type="number" step=".01" class="form-control" id="ProdMSRP" placeholder="Nom">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>