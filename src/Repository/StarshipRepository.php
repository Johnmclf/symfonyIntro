<?php
namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;
use App\Model\StarshipStatusEnum;


class StarshipRepository
{

    public function __construct(private LoggerInterface $logger)
    {

    }

    public function find(int $id): ?Starship
    {
        foreach ($this->findAll() as $starship) {
            if ($starship->getId() === $id) {
                $this->logger->info("Vaisseau spatial trouvé : {$starship->getName()}");
                return $starship;
            }
        }
        return null;
    }


    public function findAll(): array
    {
        $this->logger->info('collection de vaisseux spatiauxrécupérée');
        return [
            new Starship(
                id: 1,
                name: 'USS LeafyCruiser (NCC-0001)',
                class: 'Garden',
                captain: 'Jean-Luc Pickles',
                status: StarshipStatusEnum::IN_PROGRESS,
            ),
            new Starship(
                id: 2,
                name: 'USS Espresso (NCC-1234-C)',
                class: 'Latte',
                captain: 'James T. Quick!',
                status:  StarshipStatusEnum::COMPLETED,
            ),
            new Starship(
                id: 3,
                name: 'USS Wanderlust (NCC-2024-W)',
                class: 'Delta Tourist',
                captain: 'Kathryn Journeyway',
                status:  StarshipStatusEnum::WAITINNG,
            ),
        ];
    }
}