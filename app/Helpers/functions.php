<?php 

function uploadImage($file, $path, $page_content = null) {
	if ($file) {
		if (is_array($file)) {
			foreach ($file as $f) {
				makeImage($f, $path, $page_content);
			}
		} else {
			makeImage($file, $path, $page_content);
		}
	}

	return false;
}

function makeImage($file, $path, $page_content) {
	$fileName = $file->hashName();
	$image = \Image::make($file)->resize(1920, null, function ($constraint) {
		$constraint->aspectRatio();
	});
	$image = (string)$image->encode($file->getClientOriginalExtension(), 75);
	Storage::put($path . '/'. $fileName, $image);

	// insert image
	$image = new App\Image;
	$image->page_content_id = $page_content->id;
	$image->path = $fileName;
	$image->save();
}

function getServiceImage() {
	return [
		'4' => 'guarding',
		'5' => 'order',
		'6' => 'protection',
		'7' => 'ocassion',
		'8' => 'traffic',
	];
}