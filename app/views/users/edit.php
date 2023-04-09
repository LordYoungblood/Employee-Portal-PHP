<?php require APPROOT . '/views/inc/header.php'; ?>
<h1><?php echo $data['title']; ?></h1>
<div class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2>Edit Profile</h2>
      <p>Update your profile information</p>
      <form action="<?php echo URLROOT; ?>/users/update" method="post">
        <div class="form-group">
          <label for="firstName">First Name:</label>
          <input type="text" class="form-control" id="firstName" name="firstName"
            value="<?php echo $data['user']->firstName; ?>" required>
        </div>
        <div class="form-group">
          <label for="lastName">Last Name:</label>
          <input type="text" class="form-control" id="lastName" name="lastName"
            value="<?php echo $data['user']->lastName; ?>" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['user']->email; ?>"
            required>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" class="form-control" id="address" name="address"
            value="<?php echo $data['user']->address; ?>" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $data['user']->phone; ?>"
            required>
        </div>
        <div class="form-group">
          <label for="salary">Salary:</label>
          <input type="text" class="form-control" id="salary" name="salary" value="<?php echo $data['user']->salary; ?>"
            required>
        </div>
        <div class="form-group">
          <label for="SSN">SSN:</label>
          <input type="text" class="form-control" id="SSN" name="SSN" value="<?php echo $data['user']->SSN; ?>" required
            pattern="\d{3}-?\d{2}-?\d{4}">
          <small class="form-text text-muted">Format: 123-45-6789 or 123456789</small>
        </div>
        <div class="row text-center">
          <div class="col">
            <input type="submit" value="Save Changes" class="btn btn-success btn-block">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>