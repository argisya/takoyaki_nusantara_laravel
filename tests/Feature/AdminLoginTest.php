<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class AdminLoginTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Config::set('database.connections.sqlite.database', ':memory:');
        Config::set('database.default', 'sqlite');
        Config::set('session.driver', 'array');
        DB::purge('sqlite');

        Schema::connection('sqlite')->create('users', function (Blueprint $table): void {
            $table->id('id_user');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function test_admin_login_persists_across_requests_with_custom_user_primary_key(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'ValidPassword123',
        ]);

        $this->post('/login', [
            'email' => 'admin@example.com',
            'password' => 'ValidPassword123',
        ])->assertRedirect(route('admin.dashboard'));

        $this->get('/login')->assertRedirect(route('admin.dashboard'));
    }

    public function test_failed_admin_login_shows_notification(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'ValidPassword123',
        ]);

        $this->from('/login')->post('/login', [
            'email' => 'admin@example.com',
            'password' => 'WrongPassword',
        ])->assertRedirect('/login')
            ->assertSessionHas('error', 'Email atau password yang Anda masukkan salah. Silakan coba lagi.');

        $this->get('/login')
            ->assertOk()
            ->assertSee('Email atau password yang Anda masukkan salah. Silakan coba lagi.');
    }
}
