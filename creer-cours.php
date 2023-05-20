<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School'prog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    
    <?php include_once('inc/menu.tpl.php'); ?>
    
    <main class="container mb-5">
        <div class="row">
            <div class="col">
                <h1>Créer un cours</h1>
            </div>
        </div>
        <form>
          <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title">
          </div>
  
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image">
          </div>
  
          <div class="mb-3">
            <label for="shortDescription" class="form-label">Description courte</label>
            <input type="text" class="form-control" id="shortDescription">
          </div>
  
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="7"></textarea>
          </div>
  
          <div class="mb-3">
            <label for="programContent" class="form-label">Le programme</label>
            <textarea class="form-control" id="programContent" rows="5"></textarea>
          </div>
  
          <div class="mb-3">
            <label for="nbHours" class="form-label">Nombre d'heures</label>
            <input type="text" class="form-control" id="nbHours">
          </div>
  
          <div class="mb-3">
  
            <label for="price" class="form-label">Tarif</label>
            <input type="text" class="form-control" id="price">
          </div>
  
          <div class="mb-3">
            <label for="date" class="form-label">Dates</label>
            <input type="text" class="form-control" id="date">
          </div>
  
          <div class="mb-3">
            <label for="prof" class="form-label">Professeur</label>
            <select class="form-select" id="prof" aria-label="Choissir un professeur">
              <option selected>Choisir un professeur</option>
              <option value="1">Nicolas R.</option>
              <option value="2">Pierre C.</option>
              <option value="3">Alexandre B.</option>
            </select>
          </div>
          
          <div class="mb-3">
            <label for="modality" class="form-label">Modalité</label>
            <select class="form-select" id="modality">
              <option selected>Choisir la modalité</option>
              <option value="1">A distance</option>
              <option value="2">Présentiel</option>
              <option value="3">A distance et présentiel</option>
            </select>
          </div>
  
          <div class="mb-3">
            <label for="levelRequire" class="form-label">Niveau requis</label>
            <select class="form-select" id="levelRequire">
              <option selected>Choisir le niveau requis</option>
              <option value="1" >Débutant</option>
              <option value="2">Intermédiare</option>
              <option value="3">Avancé</option>
            </select>
          </div>
  
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Créer</button>
          </div>
        </form>
      </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>