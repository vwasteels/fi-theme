<?



/* Template Helpers */
/* --------------------------------------------------------------------------------- */


/* 
 * load view form ./views folder
 */

function get_view($name) {
	include(TEMPLATEPATH.'/views/'.$name.'.php');
}


/* 
 * truncate string 
 */

function tokenTruncate($string, $your_desired_width, $end_string = '...') {
  $string = strip_tags($string);
  $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
  $parts_count = count($parts);

  $has_been_cut = false;
  $length = 0;
  $last_part = 0;
  for (; $last_part < $parts_count; ++$last_part) {
    $length += strlen($parts[$last_part]);
    if ($length > $your_desired_width) { 
      $has_been_cut = true;
      break; 
    }
  }
  
  // if cut add $end_string
  if($has_been_cut) {
    return implode(array_slice($parts, 0, $last_part)).$end_string;
  } else {
    return implode(array_slice($parts, 0, $last_part));
  }
}

?>
