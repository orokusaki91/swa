<?php 

function uploadImage($file, $path, $page = null) {
	if ($file) {
		if (is_array($file)) {
			foreach ($file as $f) {
				makeImage($f, $path, $page);
			}
		} else {
			makeImage($file, $path, $page);
		}
	}

	return false;
}

function makeImage($file, $path, $page) {
	$fileName = $file->hashName();
	$image = \Image::make($file)->resize(1920, null, function ($constraint) {
		$constraint->aspectRatio();
	});
	$image = (string)$image->encode('jpg', 75);
	Storage::put($path . '/'. $fileName, $image);

	// insert image
	$image = new App\Image;
	$image->page_id = $page->id;
	$image->path = $fileName;
	$image->save();
}

function getServiceLinks() {
	return [
		'bewachung' => 'guarding',
		'ordnung' => 'order',
		'schutz' => 'protection',
		'anlass' => 'ocassion',
		'verkehr' => 'ocassion',
	];
}