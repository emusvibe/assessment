<?php

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="../template-parts/main.js"></script>
<div class="form-wrapper">
<div class="row">
    <div class="col-md-6">
    <form method="post" enctype="multipart/form-data" id="form" action="../template-parts/form.php">
	<div class="form-heading">
      <h3 class="title">Test</h3>
    </div>
  <div class="form-group">
    <label class="field-label"  for="input-1">Input 1</label>
	<input class="form-control" name="input-1" id="input-1" type="text" value="" aria-invalid="false">    
  </div>
  
  <div class="form-group">
    <label class="field-label"  for="input-2">Input 2</label>
	<input class="form-control" name="input-2" id="input-2" type="text" value="" aria-invalid="false">    
  </div>
  
  <div class="form-group">
    <label class="field-label"  for="input-3">Input 3</label>
	<input class="form-control" name="input-3" id="input-3" type="text" value="" aria-invalid="false">    
  </div>  
  
  <div class="form-footer">
	        <input type="submit"
	               id="form-submit-button"
	               class="btn btn-primary"
	               value="Submit"
	               onclick="" />
        </div>
</form>
    </div>

</div>




  
</div>
