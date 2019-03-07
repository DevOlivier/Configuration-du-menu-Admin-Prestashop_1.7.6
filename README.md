# Configuration-du-menu-Admin-Prestashop
Intégrer les liens vers nos controllers depuis l'admin de Prestashop 1.7.6

<h1>Configuration du fichier module_test.php pour accèder à notre controlleur dans l'Admin</h1>

https://devdocs.prestashop.com/1.7/modules/creation/

<h2>Ce qui n'est pas forcément expliqué dans la doc</h2>
<hr>
<h3>Méthode install()</h3>
<p>Il faudra instancier la classe Tab() et y affecter un id_parent pour accrocher notre lien.
Il faudra également faire en sorte de paramétrer le multi Langage : Language::getLangues 
</p>
<h3>Configuration de la route yml</h3>
<ul>
  <li>_legacy_controller</li>
  <li>_legacy_link</li>
</ul>
