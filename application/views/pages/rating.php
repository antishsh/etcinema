<?php if(isset($records)){ ?>
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Rating</h5>

    <?php foreach( $records as $r) { ?>
      
<?php echo form_open('index.php/Pages/add_rating')?>

<form>
<div class="form-group">
    <label for="formGroupExampleInput">ID</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="id" readonly value="<?php echo $r['id'];?>"  placeholder="Rating">
    <div class="text-danger">
    <?php echo form_error('id'); ?>
    </div>  
  <div class="form-group">
    <label for="formGroupExampleInput">Rating</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="rating" value="<?php echo $r['rating'];?>"  placeholder="Rating">
    <div class="text-danger">
    <?php echo form_error('rating'); ?>
    </div>  
<div class="form-group">
    <label for="formGroupExampleInput">Discription</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="description" value="<?php echo $r['description'];?>" placeholder="Discription">
    <div class="text-danger">
    <?php echo form_error('description'); ?>
    </div>  
</div>
  
<div class="form-group">
<input type="submit" value='save'>
 
</div>


</form>
</div>
</div>
  <?php }} else{?>
      
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Rating</h5>

<?php echo form_open('index.php/Pages/add_rating')?>
<form> 
  <div class="form-group">
    <label for="formGroupExampleInput">Rating</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="rating" placeholder="Rating">

    <div class="text-danger">
    <?php echo form_error('rating'); ?>
    </div>  

<div class="form-group">
    <label for="formGroupExampleInput">Discription</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="description"  placeholder="Discription">
    <div class="text-danger">
    <?php echo form_error('description'); ?>
    </div>  
</div>
<div class="form-group">
<input type="submit" value='save'>
</div>
</form>
 
             
</div>
</div>
  <?php }?>

 <?php if(isset($ratings)){?>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rating</h5>
			  <div class="table-responsive">
               <table class="table table-sm">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
      <th scope="col">Rating</th>
      <th scope="col">Discription</th>
      <th scope="col"></th>
      <th scope="col"></th>
                  </tr>
                </thead>
                <?php 
            
 echo "<tbody>";
      foreach( $ratings as $r) { 

       
             
        echo "<tr>"; 
        echo "<td>".$r->id."</td>"; 
        echo "<td>".$r->rating."</td>";
        echo "<td>".$r->description."</td>";?>
               
               <td>
                 
               <a href="<?php echo site_url('index.php/pages/delete_rating/').$r->id;?>">
                   <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
               </td>
               <td>
                   <a href="<?php echo site_url('index.php/pages/edit_rating/').$r->id;?>">
                   <i class="zmdi zmdi-edit zmdi-hc-lg"></i></a>
           
                   
                  
                </td>
               <?php echo "<tr>"; 
         
   echo " </tbody>";
}
?>
</table>
<?php } ?>
              
            </div>
            </div>
          </div>