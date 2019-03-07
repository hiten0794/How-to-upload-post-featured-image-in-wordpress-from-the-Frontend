<?php
/**
 * The template name: Front-End Post
 * //
 */

get_header(); ?>




<div id="primary" class="content-area" style=" width: 850px;margin: -73px 215px 0px;" >


  <h2>How to upload post featured image in wordpress from the Frontend</h2>
  <form method="post" enctype="multipart/form-data">
  
  
    <div class="form-group">
      <label for="title">Post Title:</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
	
	
    <div class="form-group">
      <label for="pwd">Post Description :</label>
      <textarea class="form-control"  name="description"></textarea>
    </div>
	
	<div class="form-group">
      <label for="title">Post Featured Image:</label>
      <input type="file" class="form-control" id="thumbnail" name="thumbnail">
    </div>
	
	
    
	<BR>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  
  


</div>





<?php
get_footer();
