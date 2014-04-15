<?php

class Wine extends Eloquent {

  function getWineById($id){
    return DB::select('select * from wine where id = ?', array($id));
  }

}
