<?php
session_start();
require_once("../model/admin.php");
require_once("../model/user.php");
require_once("../model/pincho.php");
require_once("../model/part.php");


$p = new Pincho();
$boolean = $p->selectAllSinV();
if($boolean == false){
  $msg = "Error listar.";
  header("Location: ../view/administrar/listarpincho.php?msg=$msg");
}else{
  $array = serialize($boolean);
  header("Location: ../view/administrar/listarpincho.php?array=$array");
}
if($_GET["action"]=='lp'){
  $p = new Pincho();
	$boolean = $p->selectAllSinV();
	if($boolean == false){
		$msg = "Error listar.";
		header("Location: ../view/administrar/listarpincho.php?msg=$msg");
	}else{
		$array = serialize($boolean);
		header("Location: ../view/administrar/listarpincho.php?array=$array");
  }
}else{
  if($_GET["action"]=='vp'){
    $p = new Pincho();
  	$boolean = $p->selectAll();
  	if($boolean == false){
  		$msg = "Error Validar";
  		header("Location: ../view/administrar/validarpincho.php?msg=$msg");
  	}else{
  		$array = serialize($boolean);
  		header("Location: ../view/administrar/validarpincho.php?array=$array");
    }
  }else{
    if($_GET["action"]=='ap'){
      if($boolean == false){
    		$msg = "Error Validar";
    		header("Location: ../view/administrar/asignarpincho.php?msg=$msg");
    	}else{
    		$array = serialize($boolean);
    		header("Location: ../view/administrar/asignarpincho.php?array=$array");
      }
    }else{
    if($_GET["action"]=='lu'){
      $p = new Usuario();
      $boolean = $p->selectUsers();
      if($boolean == false){
        $msg = "Error Validar";
        header("Location: ../view/administrar/listarusuarios.php?msg=$msg");
      }else{
        $array = serialize($boolean);
        header("Location: ../view/administrar/listarusuarios.php?array=$array");
      }
    }else{
    if($_GET["action"]=='le'){
      $p = new Participante();
      $boolean = $p->selectAll();
      if($boolean == false){
        $msg = "Error Listar";
        header("Location: ../view/administrar/listarestablecimientos.php?msg=$msg");
      }else{
        $array = serialize($boolean);
        header("Location: ../view/administrar/listarestablecimientos.php?array=$array");
      }
    }else{
    if($_GET["action"]=='lo'){
      $p = new Usuario();
      $boolean = $p->listarNoticias();
      if($boolean == false){
        $msg = "Error Listar";
        header("Location: ../view/administrar/listarnoticias.php?msg=$msg");
      }else{
        $array = serialize($boolean);
        header("Location: ../view/administrar/listarnoticias.php?array=$array");
      }
  }else{
    if($_GET["action"]=='lc'){
      $p = new Usuario();
      $boolean = $p->selectAllComent();
      if($boolean == false){
        $msg = "Error Listar";
        header("Location: ../view/administrar/listarcomentarios.php?msg=$msg");
      }else{
        $array = serialize($boolean);
        header("Location: ../view/administrar/listarcomentarios.php?array=$array");
      }
  }
}
}
}
}
}
}
?>
