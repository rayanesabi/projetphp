<?php

final class Recette {
    private string $nom;

    private string $ingredients;


    public function donneRecette(){
        return ($this->nom .  $this->ingredients);

    }
    public function __construct(string $S_nom, string $S_ingredients){
        $this->nom = $S_nom;
        $this->ingredients = $S_ingredients;
    }

    public static function fromArray(array $A_parametres) {
        return new self(
            $A_parametres['nom'],
            $A_parametres['ingredients']
        );

    }

    public function save(Connection $connection) {
        $connection->save('Recette', ['nom' => $this->nom]);
    }
}