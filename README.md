#Pantouf'Land


## architecture du projet:

```
/css
/images
/inc
	// fichiers utilitaires PHP

/templates
	// portions de code chargées de la présentation
	// (=html + affichage de variables)

index.php => page d'accueil
	// fichiers php => correspondent aux pages de ma boutique.
	// appellent éventuellement les fichiers de /inc dont ils ont besoin pour les traitements
	// PUIS
	// appellent les fichiers de /templates qui vont bien pour présenter les infos

README.md + boutique1.png
	// fichers de référence, informatifs
```
