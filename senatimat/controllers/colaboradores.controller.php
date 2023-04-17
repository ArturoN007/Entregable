<?php

require_once '../models/Colaboradores.php';

if (isset($_POST['operacion'])){

  $colaborador = new Colaboradores();

  if ($_POST['operacion'] == 'listar'){
    $data = $Colaborador->listarColaboradores();
    
    //Enviar los datos a la vista
    //Si contiene información, si no está vacío...
    if ($data){
      echo "<option value='' selected>Seleccione</option>";
      foreach($data as $registro){
        echo "<option value='{$registro['idcolaborador']}'>{$registro['colaborador']}</option>";
      }
    }else{
      echo "<option value=''>No encontramos al colaborador</option>";
    }
  }

}