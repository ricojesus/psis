<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoleBasedRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_registration_sets_admin_role(): void
    {
        $response = $this->post('/admin/register/admin', [
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticated();

        $this->assertDatabaseHas('users', [
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);
    }

    public function test_professional_registration_sets_professional_role(): void
    {
        $response = $this->post('/profissional/register/professional', [
            'name' => 'Professional User',
            'email' => 'professional@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticated();

        $this->assertDatabaseHas('users', [
            'email' => 'professional@example.com',
            'role' => 'professional',
        ]);
    }

    public function test_patient_registration_sets_patient_role(): void
    {
        $response = $this->post('/paciente/register/patient', [
            'name' => 'Patient User',
            'email' => 'patient@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticated();

        $this->assertDatabaseHas('users', [
            'email' => 'patient@example.com',
            'role' => 'patient',
        ]);
    }

    public function test_default_registration_without_role_keeps_patient_role(): void
    {
        $response = $this->post('/register', [
            'name' => 'Default User',
            'email' => 'default@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticated();

        $this->assertDatabaseHas('users', [
            'email' => 'default@example.com',
            'role' => 'patient',
        ]);
    }
}
