<?php
class ia
{
  public $tipo="nave";
  public $mapaCol=4;
  public $mapaFil=4;
  public $numNaves=3;
  public $navesHumano=[];

//array
public $navesIA=[
  0=>["tipo"=>"nave",
      "col"=>0,
      "fil"=>3],
  1=>["tipo"=>"nave",
      "col"=>2,
      "fil"=>3],
  2=>["tipo"=>"nave",
      "col"=>1,
      "fil"=>3],
];

//getters
  public function getColumna() {
    return $this->mapaCol;
  }
  public function getFila() {
    return $this->mapaFil;
  }
  public function getNave() {
    return $this->numNaves;
  }
  public function getNaveshumano(){
    return $this->navesHumano;
  }
  public function getNavesIA(){
    return $this->navesIA;
  }

  //setters
  public function setMapaCol($mapaCol){
      if($mapaCol>3 ){
         $this->mapaCol = 3;
      }elseif ($mapaCol<0) {
        $this->mapaCol = 0;
      }else{
        $this->mapaCol = $mapaCol;
      }
  }
  public function setMapaFil($mapaFil){
      if($mapaFil>3 ){
         $this->mapaFil = 3;
 }    elseif ($mapaFil<0) {
        $this->mapaFil = 0;
 }    else{
        $this->mapaFil = $mapaFil;
  }
  }
  public function setNaveHumana($tipo,$col,$fil){
    $this->navesHumano[]=[
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ];
  }
  public function setNavesIA($navesIA){
    $this->navesIA = $navesIA;
  }

  //Random
  public function randompos() {
	$this->columna=rand(0,3);
	$this->fila=rand(0,3);
  }
}
?>
