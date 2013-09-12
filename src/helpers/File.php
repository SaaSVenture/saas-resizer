<?php
namespace Saas\Resizer\Helpers;

class File {
	
	/**
	 * Get a file MIME type by extension.
	 *
	 * @param  string  $extension
	 * @return string
	 */
	public static function mime($ext)
	{
		$mime = '';
		switch ($ext) {
			case 'jpg' : $mime = 'image/jpeg'; break;
			case 'gif' : $mime = 'image/gif'; break;
			case 'png' : $mime = 'image/png'; break;
			default    :  break;
		}
		return $mime;
	}
	
	/**
	 * Extract the file extension from a file path.
	 *
	 * @param  string  $path
	 * @return string
	 */
	public static function extension($path)
	{
		return pathinfo($path, PATHINFO_EXTENSION);
	}
	
}