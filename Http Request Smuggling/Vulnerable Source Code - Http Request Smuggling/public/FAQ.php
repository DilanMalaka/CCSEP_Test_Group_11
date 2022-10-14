<?php
$title = "Contact";
$page = $_SERVER['PHP_SELF'];
if(isset($_SERVER['QUERY_STRING'])) {
    $page .= "?".$_SERVER['QUERY_STRING'];
}

include_once("_header.php");
?>


<head>
<!-- <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" /> -->
</head>

<div class="form">
<h1>Ask a Question:</h1>

<form action="<?= $page ?>" method="post">

Name: <input type="text" name="name" value=""><br/>
<br/>

Content: <br/>
<textarea name="content" cols="25" rows="4" >
Send Us Your Concern :
</textarea>
</div>



<br/>
<br/>

<input type="submit" value="Submit" >
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
include_once("_footer.php");
?>