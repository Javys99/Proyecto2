<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $prefijos = (["Javier", "Brian", "Antonio", "Rogelio", "Ana", "Andrea", "Elizabeth", "Nora", "Beatriz"]);
        $nombrespersona = $this->faker->randomElement($prefijos);

        $prefijos2 = (["Garcia", "Brito", "Melendez", "Olmos", "Lopez", "Guido", "Torres", "Casas", "Navarrete"]);
        $apellido_p = $this->faker->randomElement($prefijos);

        $prefijos3 = (["Licona", "Melendez", "Hernandez", "Martinez", "Gonzales", "Aguirre", "Mercado", "Romo", "Ruiz"]);
        $apellido_m = $this->faker->randomElement($prefijos);
        return [
            'nombre' => $nombrespersona,
            'apellido_paterno' => $apellido_p,
            'apellido_materno' => $apellido_m,
            'correo' => $this->faker->email(),
        ];
    }
}
