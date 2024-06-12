<?php
class UbahPassword
{
    private $username;
    private $oldPassword;
    private $newPassword;
    private $errors = [];


    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
    }

    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function changePassword()
    {
        if ($this->validate()) {
            $hashedPassword = password_hash($this->newPassword, PASSWORD_BCRYPT);
            $query = "UPDATE users SET password = :newPassword WHERE username = :username";
            $stmt->bindParam(':newPassword', $hashedPassword);
            $stmt->bindParam(':username', $this->username);

            if ($stmt->execute()) {
                return true;
            } else {
                $this->errors[] = "Gagal untuk mengubah password.";
                return false;
            }
        } else {
            return false;
        }
    }

    private function validate()
    {
        if (empty($this->oldPassword) || empty($this->newPassword)) {
            $this->errors[] = "Anda harus mengisi seluruh kolom yang dibutuhkan.";
            return false;
        }

        if (!$this->checkOldPassword()) {
            $this->errors[] = "Password lama salah.";
            return false;
        }

        if (strlen($this->newPassword) < 6) {
            $this->errors[] = "Kata sandi harus terdiri dari minimal 6 karakter.";
            return false;
        }

        return true;
    }

    private function checkOldPassword()
    {
        $query = "SELECT password FROM users WHERE username = :username";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $this->username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && password_verify($this->oldPassword, $result['password'])) {
            return true;
        } else {
            return false;
        }
    }
}
