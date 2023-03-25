<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
  <h1 class="mt-4 mb-4"><?php echo $data['title']; ?></h1>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $data['user']->firstName . ' ' . $data['user']->lastName; ?></h5>
      <p class="card-text">Email: <?php echo $data['user']->email; ?></p>
      <p class="card-text">Address: <?php echo $data['user']->address; ?></p>
      <p class="card-text">Phone: <?php echo $data['user']->phone; ?></p>
      <p class="card-text">Salary: <?php echo $data['user']->salary; ?></p>
      <p class="card-text">SSN: <?php echo $data['user']->SSN; ?></p>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>