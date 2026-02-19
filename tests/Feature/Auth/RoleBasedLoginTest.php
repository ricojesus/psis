<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoleBasedLoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_login_redirects_to_admin_dashboard(): void
    {
        $user = User::factory()->create([
            'role' => 'admin',
            'status' => 'active',
        ]);

        $response = $this->post('/admin/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertRedirect('/admin/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    public function test_professional_login_redirects_to_professional_dashboard(): void
    {
        $user = User::factory()->create([
            'role' => 'professional',
            'status' => 'active',
        ]);

        $response = $this->post('/profissional/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertRedirect('/profissional/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    public function test_patient_login_redirects_to_patient_dashboard(): void
    {
        $user = User::factory()->create([
            'role' => 'patient',
            'status' => 'active',
        ]);

        $response = $this->post('/paciente/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertRedirect('/paciente/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    public function test_login_with_wrong_role_path_logs_user_out_and_returns_error(): void
    {
        $user = User::factory()->create([
            'role' => 'patient',
            'status' => 'active',
        ]);

        $response = $this->from('/admin/login')->post('/admin/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertRedirect('/admin/login');
        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }
}
