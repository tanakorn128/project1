<?php
	//Function create URL Multipages
	function build_url($filename, $key, $value){
	  $values = array();
	  $query_str = array();
	  //get the query string arguments and store them in
	  //the $values array
	  parse_str($_SERVER['QUERY_STRING'], $values);
	  //loop through the $values array and add the appropriate 
	  //keys to the query string
	  foreach($values as $k=>$v){
		//IF, though, a key in the existing query string matches the same key
		//we're trying to add, ignore it, since we'll add it manually in a moment
		//This prevents having multiples of the same keys
		if($k!=$key){
		  $query_str[] = "{$k}={$v}";
		}
	  }
	  //add in our new key and value
	  $query_str[] = "{$key}={$value}";
	  //reconstruct the full URL using the implode() function to piece together all
	  //the query string values in the $query_string array, joining them together with "&"  
	  return "$filename?".implode("&", $query_str);
	}
?>
<div class="pagination"><p>
<span>All <strong><?php print $all_rows;?></strong> item</span>
<?php
$chk=$all_rows%$records_per_page;
if($chk>0){
	$chk=1;
}

if($page>1){
 print (($page>1)?"<a href='". build_url($fileName, "page", $page-1)."'>&lt;&lt; Pre</a>":"Pre");
}
		//$all_rows = $all_rows_row["COUNT(*)"];
for($i=1; $i<=($all_rows/$records_per_page)+$chk; $i++){

if($i != $page)
	//if($i <= ($page-1) and $i >($page+1)){
    	print "<a href='".build_url($fileName, "page", $i)."'>$i</a>";
//	}else if(($i>($all_rows/$records_per_page)+$chk-3) and ($i<=($all_rows/$records_per_page)+$chk)){
//		print "<a href='".build_url($fileName, "page", $i)."'>$i</a>";
//	}else{
	//	print ".";
	//}
  else
  //print "<span class=\"multipage_current\">" . $i . "</span>";
	print "<span class=\"current\">" . $i . "</span>";
  //output a little symbol (|) to seperate the links
  //but not for the last link
	//if($i<$all_rows/$records_per_page)
	//print " | ";
}

if($page < ($all_rows/$records_per_page)){
print (($page<$all_rows/$records_per_page)?"<a href='".build_url($fileName, "page", $page+1)."'>Next &gt;&gt;</a>":"Next");
}

?>
</p></div>
