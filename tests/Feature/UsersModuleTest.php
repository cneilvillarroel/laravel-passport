<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/* Clase generada por php artisan make:test UsersModuleTest */
class UsersModuleTest extends TestCase
{
    function testMiPrimerTest(){
        $this->get('probando/mundo querido')    // ruta a probar
            ->assertStatus(200)                 // estado esperado
            ->assertSee('Hola: mundo querido');  // string o contenido que debe tener la vista
    }
    
    /** @test user list view*/
    function testUserList()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Lista de usuarios');
    }

    /** @test edit user view */
    function testUserEdit()
    {
        $this->get('editar-usuario/1')
            ->assertStatus(200)
            ->assertSee('Accel 018');
    }

    

}
