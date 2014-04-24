<?php
//
// Variables disponibles:
//
$estOrdonnee = $this->estOrdonnee();
$olOuUl = $estOrdonnee ? 'ul' : 'ol';
$elements = $this->getElements();
$sousListe = $this->getSousListes();
$classes = $this->getClassesString();
$id = $this->getId();
//
//
?>
<?php print $this->getFileAriane()->getChemin() ?>ff
<ol class="breadcrumb">
  <li><a href="#">Homfefffff</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>