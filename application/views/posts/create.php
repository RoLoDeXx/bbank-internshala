<h1 class="display-4">
    Add Sample
</h1>

<?= validation_errors();?>

<?= form_open('posts/create');?>
  <div class="form-group mt-5">
    <label for="FormControlInput1">Donor's name</label>
    <input type="text" class="form-control" name=donor_name id="FormControlInput1" placeholder="Donor's name" required>
  </div>
  <div class="form-group">
    <label for="FormControlSelect1">B Group</label>
    <select class="form-control" name="bloodGroup" id="FormControlSelect1">
      <option value="A+">A+</option>
      <option value="B+">B+</option>
      <option value="O+">O+</option>
      <option value="AB+">AB+</option>
      <option value="A-">A-</option>
      <option value="B-">B-</option>
      <option value="O-">O-</option>
      <option value="AB-">AB-</option>
    </select>
  </div>

  <div class="form-group">
    <label for="FormControlInput1">Age</label>
    <input type="number" min="18" max="60" class="form-control" name="age" id="FormControlInput1" placeholder="18" required>
  </div>

  <div class="form-group">
    <label for="FormControlTextarea1">Description</label>
    <textarea class="form-control" name="body" id="FormControlTextarea1" rows="3" placeholder="Additional details regarding the blood donor" required></textarea>
  </div>

  <button type="submit" class="btn btn-primary">
    Add 
  </button>

</form>