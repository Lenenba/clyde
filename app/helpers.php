<?php

if(! function_exists('file_uploader'))
{
	function file_uploader($image, Illuminate\Http\Request $request)
	{
		 if ($request->hasFile($image)) {
                 try {
                        $file = $request->file($image);
                        $name = time() . '.' . $file->getClientOriginalExtension();

                        $img = Image::make($file)->resize(320, 150);

                       	$img->save(public_path('images/'.$name), 100);

                     } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                     }
        }
        return $name;
	}
}	

if(! function_exists('file_uploader_large'))
{
	function file_uploader_large($image, Illuminate\Http\Request $request)
	{
		 if ($request->hasFile($image)) {
                 try {
                        $file = $request->file($image);
                        $name = time() . '.' . $file->getClientOriginalExtension();

                        $img = Image::make($file);

                       	$img->save(public_path('images/'.$name), 100);

                     } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                     }
        }
        return $name;
	}
}	

if(! function_exists('page_title'))
{
	function page_title($title)
	{
		$base_title = 'Resto Facile - votre satisfaction notre potion';

		if($title === ''){
			return $base_title;
		}else{
			return $title. '|' . $base_title;
		}
	}
}


if(! function_exists('set_active_route'))
{
	function set_active_route($route)
	{
		return Route::is($route) ? 'active' : '';
	}
}

