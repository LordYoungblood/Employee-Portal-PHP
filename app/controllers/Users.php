<?php
class Users extends Controller
{
  private $userModel;

  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function index()
  {
    $data = [
      'title' => 'Employee Portal',
      'description' => 'Manage employees'
    ];

    $this->view('users/register', $data);
  }

  // Register method remains unchanged

  public function login()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process form
      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Init data
      $data = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'email_err' => '',
        'password_err' => '',
      ];

      // Validate Email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      }

      // Validate Password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password';
      }

      // Check for user/email
      if ($this->userModel->findUserByEmail($data['email'])) {
        // User found
      } else {
        // User not found
        $data['email_err'] = 'No user found';
      }

      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['password_err'])) {
        // Validated
        // Check and set logged in user
        $loggedInUser = $this->userModel->login($data['email'], $data['password']);

        if ($loggedInUser) {
          // Create Session
          // Assuming that the User model's login method returns the user's ID in the 'id' field
          $_SESSION['user_id'] = $loggedInUser->id;
          header('Location: ' . URLROOT . '/your_dashboard'); // Redirect to the desired page after successful login
        } else {
          $data['password_err'] = 'Password incorrect';
          $this->view('users/login', $data);
        }
      } else {
        // Load view with errors
        $this->view('users/login', $data);
      }
    } else {
      // Init data
      $data = [
        'email' => '',
        'password' => '',
        'email_err' => '',
        'password_err' => '',
      ];

      // Load view
      $this->view('users/login', $data);
    }
  }

  public function logout()
  {
    unset($_SESSION['user_id']);
    session_destroy();
    header('Location: ' . URLROOT . '/users/login');
  }

  public function register()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

      // Init data
      $data = [
        'title' => 'Contact Us',
        'description' => 'Fill out form to contact our support team.',
        'firstName' => trim($_POST['firstName']),
        'lastName' => trim($_POST['lastName']),
        'email' => trim($_POST['email']),
        'address' => trim($_POST['address']),
        'phone' => trim($_POST['phone']),
        'salary' => trim($_POST['salary']),
        'SSN' => str_replace('-', '', trim($_POST['SSN'])),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'firstName_err' => '',
        'lastName_err' => '',
        'email_err' => '',
        'address_err' => '',
        'phone_err' => '',
        'salary_err' => '',
        'SSN_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      // Validate fields
      // Add your validation logic for firstName, lastName, address, phone, salary, and SSN here
      // Example: if (empty($data['firstName'])) { $data['firstName_err'] = 'Please enter first name'; }

      // Validate Email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      } else {
        if ($this->userModel->findUserByEmail($data['email'])) {
          $data['email_err'] = 'Email is already taken';
        }
      }

      // Validate Password and Confirm Password
      // Add your password validation logic here

      // Make sure errors are empty
      if (empty($data['firstName_err']) && empty($data['lastName_err']) && empty($data['email_err']) && empty($data['address_err']) && empty($data['phone_err']) && empty($data['salary_err']) && empty($data['SSN_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
        // Validated

        // Hash password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // Register User
        if ($this->userModel->register($data)) {
          // Redirect to the login page
          header('Location: ' . URLROOT . '/users/login');
        } else {
          die('Something went wrong');
        }
      } else {
        // Load view with errors
        $this->view('users/register', $data);
      }
    } else {
      $data = [
        'firstName' => '',
        'lastName' => '',
        'email' => '',
        'address' => '',
        'phone' => '',
        'salary' => '',
        'SSN' => '',
        'password' => '',
        'confirm_password' => '',
        'firstName_err' => '',
        'lastName_err' => '',
        'email_err' => '',
        'address_err' => '',
        'phone_err' => '',
        'salary_err' => '',
        'SSN_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      // Load view
      $this->view('users/register', $data);
    }
  }

  public function profile()
  {
    // Check if user is logged in
    if (!isset($_SESSION['user_id'])) {
      header('Location: ' . URLROOT . '/users/login');
      exit();
    }

    $user = $this->userModel->getUserById($_SESSION['user_id']);

    $data = [
      'title' => 'Profile',
      'user' => $user
    ];

    $this->view('pages/profile', $data);
  }
  public function edit()
  {
    // Check if user is logged in
    if (!isset($_SESSION['user_id'])) {
      header('Location: ' . URLROOT . '/users/login');
      exit();
    }

    $user = $this->userModel->getUserById($_SESSION['user_id']);

    $data = [
      'title' => 'Edit Profile',
      'user' => $user
    ];

    $this->view('users/edit', $data);
  }

  public function update()
  {
    if (!isset($_SESSION['user_id'])) {
      header('Location: ' . URLROOT . '/users/login');
      exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Init data
      $data = [
        'id' => $_SESSION['user_id'],
        'firstName' => trim($_POST['firstName']),
        'lastName' => trim($_POST['lastName']),
        'email' => trim($_POST['email']),
        'address' => trim($_POST['address']),
        'phone' => trim($_POST['phone']),
        'salary' => trim($_POST['salary']),
        'SSN' => trim($_POST['SSN']),
        'firstName_err' => '',
        'lastName_err' => '',
        'email_err' => '',
        'address_err' => '',
        'phone_err' => '',
        'salary_err' => '',
        'SSN_err' => ''
      ];

      // Validate fields
      // Add your validation logic for firstName, lastName, address, phone, salary, and SSN here

      // Validate Email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      } elseif ($this->userModel->findUserByEmail($data['email']) && $this->userModel->getUserById($data['id'])->email != $data['email']) {
        $data['email_err'] = 'Email is already taken';
      }

      // Make sure errors are empty
      if (empty($data['firstName_err']) && empty($data['lastName_err']) && empty($data['email_err']) && empty($data['address_err']) && empty($data['phone_err']) && empty($data['salary_err']) && empty($data['SSN_err'])) {
        // Validated

        // Update User
        if ($this->userModel->update($data)) {
          // Redirect to the profile page
          header('Location: ' . URLROOT . '/users/profile');
        } else {
          die('Something went wrong');
        }
      } else {
        // Load view with errors
        $this->view('users/edit', $data);
      }
    } else {
      // Redirect to the edit page
      header('Location: ' . URLROOT . '/users/edit');
    }
  }

  public function delete()
  {
    // Check if user is logged in
    if (!isset($_SESSION['user_id'])) {
      header('Location: ' . URLROOT . '/users/login');
      exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if ($this->userModel->deleteUser($_SESSION['user_id'])) {
        // Unset session and destroy it
        unset($_SESSION['user_id']);
        session_destroy();

        // Redirect to the login page
        header('Location: ' . URLROOT . '/users/login');
      } else {
        die('Something went wrong');
      }
    } else {
      // Redirect to the profile page
      header('Location: ' . URLROOT . '/users/profile');
    }
  }
}
