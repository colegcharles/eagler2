<?php
echo '<h1> Registration Quiz for '. $_GET["email"] . '</h1>';
echo '<small> amr go in and make the actual questions / corresponding table in db to store info</small>'
?>

<form action='../php/signup.php' method='post'>
        <div class="form-group">
          <label for="exampleInputEmail1">do you like boys or girls</label>
          <input name="q1" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Please select your major</label>
            <input name="q2" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Do you like Pizza?</label>
            <input name="q3" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Do you ...?</label>
            <input name="q4" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Do you ...?</label>
            <input name="q5" required class="form-control">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Do you ...?</label>
          <input name="q6" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Do you ...?</label>
          <input name="q7" required class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
</form>
      