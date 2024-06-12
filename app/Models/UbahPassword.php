<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PasswordModel extends Model
{
    use HasFactory;

    /**
     * @param string $currentPassword
     * @param string $newPassword
     * @return bool
     */
    public function updatePassword(string $currentPassword, string $newPassword): bool
    {
        $user = Auth::user();

        // Check if current password is correct
        if (!Hash::check($currentPassword, $user->password)) {
            return false;
        }

        // Update password
        $user->password = Hash::make($newPassword);
        $user->save();

        return true;
    }
}
