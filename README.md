# FLASHY
Cette librairie vous permet de gérer vos message de notification entre plusieurs pages. Notamment dans la gestion des messages d'erreur au niveau des formulaires ou les données ne sont pas valider dans le même fichier.

# Utilisation :

<pre>
  //Ajoute un message de type erreur, considéré comme par défaut
Flasy::addFlash('key','message');

//Ajoute un message de type succès, il faut obligatoirement ajouter Flashy::SUCCESS
Flasy::addFlash('key','message',Flasy::SUCCESS);

//Renvoie le message associé à cette clé, par défaut dans
// la liste des messages d'erreurs, vous puvez ajouter Flashy::ERROR, mais cet paramètre est déjà par défaut
Flasy::getFlash('key');

//Pour les message de succès, il faut obligatoirement ajouter Flashy::SUCCESS
Flasy::getFlash('key',Flasy::SUCCESS);

//Renvoie true s'il y'a des messages d'erreurs et false sinon
Flasy::hasFlashyErrors();

//Renvoie true s'il y'a des messages de succeès et false sinon
Flasy::hasFlashySuccess();

//Renvoie un tableau associatif contenant tous les messages de succès
Flasy::getAllSuccesFlashy();

//Renvoie un tableau associatif contenant tous les messages d'erreur
Flasy::getAllErrorFlashy();

//Renvoie true cette clé existe et false sinon. Par défaut il vérifie que dans les messages d'erreur
Flasy::hasInFlash('key');

//Pour qu'il prenne compte des messages de succès, il faut aujouter Flashy::SUCCESS
Flasy::hasInFlash('key',Flasy::SUCCESS);

Exemple :

//Pour un message d'erreur
Flasy::addFlash('empty_nom','Le nom ne peut être vide !');

//Pour un message de succès

Flasy::addFlash('welcome','Bienvenue sur mon site',Flasy::SUCCESS);
</pre>
