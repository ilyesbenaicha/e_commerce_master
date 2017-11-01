<?php
class Util
{
	public function upload($file_field_name, $path)
	{

		$newFileName = $_FILES[$file_field_name]['name'];
		if( !move_uploaded_file( $_FILES[$file_field_name]['tmp_name'], $path.'/'.$newFileName) )
			return "";
		return  $newFileName ;
	}
}
?>