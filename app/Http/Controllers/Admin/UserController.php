<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadImagesDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;

class UserController extends VoyagerBreadController
{
	// POST BR(E)AD
	public function update(Request $request, $id)
	{
		$slug = $this->getSlug($request);

		$dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

		// Compatibility with Model binding.
		$id = $id instanceof Model ? $id->{$id->getKeyName()} : $id;

		$data = call_user_func([$dataType->model_name, 'findOrFail'], $id);

		 // Check permission
		$this->authorize('edit', $data);

		if(! \Auth::user()->hasPermission('edit_roles')) {
			unset($request['role_id']);
		}

		// Validate fields with ajax
		$val = $this->validateBread($request->all(), $dataType->editRows);

		if ($val->fails()) {
			return response()->json(['errors' => $val->messages()]);
		}

		if (!$request->ajax()) {
			$this->insertUpdateData($request, $slug, $dataType->editRows, $data);

			event(new BreadDataUpdated($dataType, $data));

			return redirect()
				->route("voyager.{$dataType->slug}.index")
				->with([
					       'message'    => __('voyager.generic.successfully_updated')." {$dataType->display_name_singular}",
					       'alert-type' => 'success',
				       ]);
		}
	}
}
