<?php
class User
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Register user
  public function register($data)
  {
    $this->db->query('INSERT INTO users (email, password, firstName, lastName, address, phone, salary, SSN) VALUES(:email, :password, :firstName, :lastName, :address, :phone, :salary, :SSN)');
    // Bind values
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':firstName', $data['firstName']);
    $this->db->bind(':lastName', $data['lastName']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':phone', $data['phone']);
    $this->db->bind(':salary', $data['salary']);
    $this->db->bind(':SSN', $data['SSN']);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // Find user by email
  public function findUserByEmail($email)
  {
    $this->db->query('SELECT * FROM users WHERE email = :email');
    // Bind value
    $this->db->bind(':email', $email);

    $row = $this->db->single();

    // Check row
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }
}
