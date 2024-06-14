<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_pengguna' => ['required', 'string', 'max:255'],
            'nomor_hp' => ['required', 'numeric', 'number_betweens:12,15'],
            'alamat' => ['required', 'string', 'max:255'],
            'foto' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
