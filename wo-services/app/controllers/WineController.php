<?php

class WineController extends BaseController {

	public function getWineById($id)
	{
		return Response::json(array('name' => 'Wine Name', 'id' => $id));
	}

}
