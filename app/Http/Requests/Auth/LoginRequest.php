<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        // Autenticación y manejo de intentos fallidos
        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            $this->incrementLoginAttempts();

            if ($this->hasTooManyLoginAttempts()) {
                RateLimiter::clear($this->throttleKey());
                throw ValidationException::withMessages([
                    'email' => 'Se alcanzaron los 3 intentos fallidos.',
                ])->redirectTo(route('welcome'));
            }

            throw ValidationException::withMessages([
                'email' => trans('Correo o contraseña incorrectos'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 3)) {
            return;
        }

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => RateLimiter::availableIn($this->throttleKey()),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    protected function throttleKey(): string
    {
        return strtolower($this->input('email')).'|'.$this->ip();
    }
    protected function incrementLoginAttempts()
    {
        RateLimiter::hit($this->throttleKey(), 60); // Define un tiempo de bloqueo de 60 segundos
    }

    protected function hasTooManyLoginAttempts(): bool
    {
        return RateLimiter::tooManyAttempts($this->throttleKey(), 3);
    }
}
