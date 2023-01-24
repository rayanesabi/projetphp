<?php 

final class RecetteChoisie {

    private String $nom;
    private String $ingredients;
    private String $difficulté;
    private int $coût;
    private int $tempsPreparation;
    private int $tempsRepos;
    private int $tempsCuisson;
    private int $tempsTotal;


    /*Getters*/
    public function donneNom() {
        return $this->nom;
    }

    public function donneIngredients() {
        return $this->ingredients;
    }

    public function donneDifficulté() {
        return $this->difficulté;
    }

    public function donneCout() {
        return $this->coût;
    }

    public function donneTempsPreparation() {
        return $this->tempsPreparation;
    }

    public function donneTempsRepos() {
        return $this->tempsRepos;
    }

    public function donneTempsCuisson() {
        return $this->tempsCuisson;
    }

    public function donneTempsTotal() {
        return $this->tempsTotal;
    }

    
    /*Setters*/
    public function __construct(String $nom, String $ingredients, String $difficulté, int $coût, int $tempsPreparation, int $tempsRepos, int $tempsCuisson, int $tempsTotal)
    {
        $this->nom = $nom;
        $this->ingredients = $ingredients;
        $this->difficulté = $difficulté;
        $this->coût = $coût;
        $this->tempsPreparation = $tempsPreparation;
        $this->tempsRepos = $tempsRepos;
        $this->tempsCuisson = $tempsCuisson;
        $this->tempsTotal = $tempsTotal; 
    }

    public static function fromArray(array $A_parametres) {
        return new self(
            $A_parametres['nom'],
            $A_parametres['ingredients'],
            $A_parametres['difficulté'],
            $A_parametres['coût'],
            $A_parametres['tempsPreparation'],
            $A_parametres['tempsRepos'],
            $A_parametres['tempsCuisson'],
            $A_parametres['tempsTotal']
        );
    }
}