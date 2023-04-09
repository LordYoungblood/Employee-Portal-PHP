<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2>Create An Account</h2>
      <p>Please fill out this form to register with us</p>
      <form action="<?php echo URLROOT; ?>/users/register" method="post">
        <div class="form-group">
          <label for="firstName">First Name: <sup>*</sup></label>
          <input type="text" name="firstName"
            class="form-control form-control-lg <?php echo (!empty($data['firstName_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['firstName']; ?>">
          <span class="invalid-feedback"><?php echo $data['firstName_err']; ?></span>
        </div>
        <div class="form-group">
          <label for="lastName">Last Name: <sup>*</sup></label>
          <input type="text" name="lastName"
            class="form-control form-control-lg <?php echo (!empty($data['lastName_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['lastName']; ?>">
          <span class="invalid-feedback"><?php echo $data['lastName_err']; ?></span>
        </div>
        <div class="form-group">
          <label for="email">Email: <sup>*</sup></label>
          <input type="email" name="email"
            class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['email']; ?>">
          <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>
        <div class="form-group">
          <label for="address">Address: <sup>*</sup></label>
          <input type="text" name="address"
            class="form-control form-control-lg <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['address']; ?>">
          <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
        </div>
        <div class="form-group">
          <label for="salary">Salary: <sup>*</sup></label>
          <input type="text" name="salary"
            class="form-control form-control-lg <?php echo (!empty($data['salary_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['salary']; ?>">
          <span class="invalid-feedback"><?php echo $data['salary_err']; ?></span>
        </div>
        <div class="form-group">
          <label for="phone">Phone: <sup>*</sup></label>
          <input type="text" name="phone" maxlength="14"
            class="form-control form-control-lg <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['phone']; ?>" oninput="applyPhoneMask(this)">
          <span class="invalid-feedback"><?php echo $data['phone_err']; ?></span>
        </div>
        <div class="form-group">
          <label for="SSN">SSN: <sup>*</sup></label>
          <input type="text" name="SSN" maxlength="11"
            class="form-control form-control-lg <?php echo (!empty($data['SSN_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['SSN']; ?>" oninput="applySsnMask(this)">
          <span class="invalid-feedback"><?php echo $data['SSN_err']; ?></span>
        </div>

        <div class="form-group">
          <label for="password">Password: <sup>*</sup></label>
          <input type="password" name="password"
            class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['password']; ?>">
          <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
        </div>
        <div class="form-group">
          <label for="confirm_password">Confirm Password: <sup>*</sup></label>
          <input type="password" name="confirm_password"
            class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"
            value="<?php echo $data['confirm_password']; ?>">
          <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
        </div>
        <div class="row">
          <div class="col">
            <input type="submit" value="Register" class="btn btn-success btn-block">
          </div>
          <div class="col">
            <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>