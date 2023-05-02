<?php



namespace App\Utils;

class AdresseFilter
{
    private $adresselivs;

    public function __construct(array $adresselivs)
    {
        $this->adresselivs = $adresselivs;
    }

    public function hasBadword(string $message): bool
    {
        foreach ($this->adresselivs as $adresseliv) {
            if (strpos($message, $adresseliv) !== false) {
                return true;
            }
        }

        return false;
    }
}