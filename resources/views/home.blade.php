@extends('layouts.app', ['pageTitle' => 'Dashboard'])

@section('content')

 <h3>BIEN OUEJ ALEX TU T'ES CONNECTE !!!</h3>
 <br>
 <h4>C'est Victor Chanson et j'etait tout seul pour réaliser ce projet ;)</h4>
 <br>
 <h5>Voila ce que j'ai fait :</h5>
 <ul>
  <li>Connexion / Inscription / Logout : <strong>OUI</strong></li>
  <li>Site responsive est esthétiquement correct (bootstrap suffit) : <strong>MOYEN</strong></li>
  <li>Page profil modifiable :  <strong>OUI</strong></li>
  <li>Page contact avec formulaire : <strong>NON</strong></li>
  <li>Formulaire de projet fonctionnel : <strong>OUI</strong></li>
  <li>Administration limitée via middleware (uniquement accessible par un administrateur) : <strong>YES</strong></li>
 <li>Gestion des projets : <strong>OUI</strong></li>
  <li>Gestion des articles : <strong>OUI</strong></li>
  <li>Gestion des commentaires : <strong>OUI</strong></li>
  <br>
  <h5>BONUS :</h5>
  <li>Code propre et commenté : <strong>NON</strong></li>
  <li>Connexion avec les réseaux sociaux, à l’aide de Socialite : <strong>NON</strong></li>
  <li>Bonne utilisation de github : <strong>NON</strong></li>
  <li>Intégration d’un thème css : <strong>NON</strong></li>
 </ul>

@endsection
