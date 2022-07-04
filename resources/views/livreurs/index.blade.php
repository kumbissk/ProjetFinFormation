<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous"
    >
    <title>Creation compte livreur</title>
</head>
<body>
    
    <div class="row">
        <div class="col m-12 mb-5 mt-5">
            <form class="mb-5">
                <div class="mb-3">
                  <label for="exampleInputName" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPreName" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="exampleInputPreName" aria-describedby="prenameHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputAdressEmail" class="form-label">AdressEmail</label>
                    <input type="text" class="form-control" id="exampleInputAdressEmail" aria-describedby="adressEmailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword" aria-describedby="passwordHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputNumTelephone" class="form-label">Numero de telephone</label>
                    <input type="text" class="form-control" id="exampleInputNumTelephone" aria-describedby="numeroTelephoneHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputAdresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="exampleInputAdresse" aria-describedby="adresseHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputVille" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="exampleInputVille" aria-describedby="villeHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputCodePostal" class="form-label">Code Postal</label>
                    <input type="text" class="form-control" id="exampleInputCodePostal" aria-describedby="codePostalHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPays" class="form-label">Pays</label>
                    <select>
                        <option>France</option>
                        <option>Allemagne</option>
                        <option>Espagne</option>
                        <option>Italie</option>
                        <option>Portugal</option>
                        <option>Suisse</option>
                        <option>Senegal</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputRegion" class="form-label">Region</label>
                </div>
                <select>
                    <option>Dakar</option>
                </select>
                    
                {{-- <div class="mb-3">
                    <label for="exampleInputRegion" class="form-label">Region</label>
                    <input type="text" class="form-control" id="exampleInputRegion" aria-describedby="regionHelp" placeholder="Selectionner la region">
                </div> --}}
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">j'accepte les conditions d'utilisations</label>
                </div>
                <button type="submit" class="btn btn-primary">Creer un compte</button>
                <button type="submit" class="btn btn-danger">Effacer</button>       
            </form>
        </div>
    </div>

   

</body>
</html>