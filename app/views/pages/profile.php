<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
  <h1 class="mt-4 mb-4"><?php echo $data['title']; ?></h1>
  <div class="card">
    <div class="card-header">
      <h4 class="mb-0"><?php echo $data['user']->firstName . ' ' . $data['user']->lastName; ?></h4>
    </div>
    <div class="card-body">
      <p class="card-text"><strong>Email:</strong> <?php echo $data['user']->email; ?></p>
      <p class="card-text"><strong>Address:</strong> <?php echo $data['user']->address; ?></p>
      <p class="card-text"><strong>Phone:</strong> <?php echo $data['user']->phone; ?></p>
      <p class="card-text"><strong>Salary:</strong> <?php echo $data['user']->salary; ?></p>
      <p class="card-text"><strong>SSN:</strong> <?php echo $data['user']->SSN; ?></p>
      <a href="<?php echo URLROOT; ?>/users/edit" class="btn btn-secondary mt-2">Edit Profile</a>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>