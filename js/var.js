var number = 0;
var lastClicked;
var user = ["","","","","","","",""];
var questions = ["","","","","","","",];
var answers = ["","","","","","","",];
var fresque = '<a href="fresque.php"><button type="button" class="btn btn-lg btn-outline-secondary shadow-sm mt-5">Voir la fresque</button></a>';
var download ='<div class="col-md-12 text-center"><a href="images/image.png" download="Image"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm"><i class="fas fa-download mr-3"></i>Télécharger votre image</button></a></div>';
var restart ='<div class="col-md-12 text-center"><a href="index.html"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm"></i>Rejouer<i class="fas fa-redo ml-3"></button></a></div>';
var graph = "<p>L’histoire se termine ici.<br>Voici la représentation graphique de ton aventure !</p>";
var rules = "<p class='mt-n4'>C’est l’apocalypse, tu dois fuir la ville rapidement et tu ne peux pas revenir en arrière.<br><br>Tu es donc seul dans cette nouvelle aventure, livré à toi-même, tu dois faire des choix<br><br>afin de créer ta propre histoire. Chacun de tes choix auront un impact, donc choisis bien !</p>";
questions[0] = "Avant de partir, tu ne peux choisir qu’un objet à prendre sur toi, lequel prends-tu ?";
questions[1] = "Tu as ton objet avec toi, vers quelle destination te diriges-tu maintenant ?";
questions[2] = "Dans cette aventure, tu es plutôt...";
questions[3] = "Tu as besoin d’un abris pour survivre, avec quel matériau es-tu prêts à le fabriquer ?";
questions[4] = "Afin de manger et prendre des forces, quelle activité décides-tu d'adopter ?";
questions[5] = "Tu croises une personne au loin sur ton chemin. Elle semble menaçante. Que fais-tu ?";
questions[6] = "Finalement… Penses-tu réussir à survivre avec tes choix ?"
answers[0] = '<div class="div-choix"><input type="radio" name="choix" value="choice1"/><label class="cc-unselected drinkcard-cc shadow" id="bow" for="choix1"></label><h5 class="mx-n5">Un arc et des flèches</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice2"/><label class="cc-unselected drinkcard-cc shadow" id="axe" for="choix1"></label><h5 class="mx-n5">Une hache</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice3"/><label class="cc-unselected drinkcard-cc shadow" id="food" for="choix3"></label><h5 class="mx-n5">De la nourriture</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice4"/><label class="cc-unselected drinkcard-cc shadow" id="bottle" for="choix1"></label><h5 class="mx-n5">Une gourde d\'eau</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice5"/><label class="cc-unselected drinkcard-cc shadow" id="bag" for="choix1"></label><h5 class="mx-n5">Un sac</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice6"/><label class="cc-unselected drinkcard-cc shadow" id="map" for="choix1"></label><h5 class="mx-n5">Un kit d\'orientation</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice7"/><label class="cc-unselected drinkcard-cc shadow" id="medic" for="choix1"></label><h5 class="mx-n5">Un kit médical</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice8"/><label class="cc-unselected drinkcard-cc shadow" id="plush" for="choix8"></label><h5 class="mx-n5">Un doudou</h5></div>';
answers[1] = '<div class="div-choix"><input type="radio" name="choix" value="choice1"/><label class="cc-unselected drinkcard-cc shadow" id="forest" for="choix1"></label><h5 class="mx-n5">La forêt</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice2"/><label class="cc-unselected drinkcard-cc shadow" id="cave" for="choix1"></label><h5 class="mx-n5">La grotte</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice3"/><label class="cc-unselected drinkcard-cc shadow" id="sea" for="choix3"></label><h5 class="mx-n5">Le bord de mer</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice4"/><label class="cc-unselected drinkcard-cc shadow" id="hills" for="choix1"></label><h5 class="mx-n5">La montagne</h5></div>';
answers[2] = '<div class="div-choix"><input type="radio" name="choix" value="choice1"/><label class="cc-unselected drinkcard-cc shadow" id="diffus" for="choix1"></label><h5 class="mx-n5">Organisé(e)</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice2"/><label class="cc-unselected drinkcard-cc shadow" id="mariniere" for="choix1"></label><h5 class="mx-n5">À l\'improviste</h5></div>';
answers[3] = '<div class="div-choix"><input type="radio" name="choix" value="choice1"/><label class="cc-unselected drinkcard-cc shadow" id="wood" for="choix1"></label><h5 class="mx-n5">En bois</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice2"/><label class="cc-unselected drinkcard-cc shadow" id="clay" for="choix1"></label><h5 class="mx-n5">En argile</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice3"/><label class="cc-unselected drinkcard-cc shadow" id="stone" for="choix1"></label><h5 class="mx-n5">En pierre</h5></div>';
answers[4] = '<div class="div-choix"><input type="radio" name="choix" value="choice1"/><label class="cc-unselected drinkcard-cc shadow" id="taming" for="choix1"></label><h5 class="mx-n5">L\'élevage</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice2"/><label class="cc-unselected drinkcard-cc shadow" id="farming" for="choix1"></label><h5 class="mx-n5">L\'agriculture</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice3"/><label class="cc-unselected drinkcard-cc shadow" id="hunting" for="choix1"></label><h5 class="mx-n5">La chasse</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice4"/><label class="cc-unselected drinkcard-cc shadow" id="foraging" for="choix1"></label><h5 class="mx-n5">La cueillette</h5></div>';
answers[5] = '<div class="div-choix"><input type="radio" name="choix" value="choice1"/><label class="cc-unselected drinkcard-cc shadow" id="kill" for="choix1"></label><h5 class="mx-n5"> Je la confronte</h5></div><div class="div-choix"><input type="radio" name="choix" value="choice2"/><label class="cc-unselected drinkcard-cc shadow" id="live" for="choix1"></label><h5 class="mx-n5">Je prends la fuite</h5></div>';
answers[6] = '<div class="div-choix"><input type="radio" name="choix" value="choice1"/><label class="cc-unselected drinkcard-cc shadow" id="yes" for="choix1"></label><h5 class="mx-n5"> Oui </h5></div><div class="div-choix"> <input type="radio" name="choix" value="choice2"/><label class="cc-unselected drinkcard-cc shadow" id="no" for="choix2"></label><h5 class="mx-n5">Non</h5></div>';
