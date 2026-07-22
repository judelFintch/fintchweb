<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Portfolio — Fintch Web')]
class PortfolioPage extends Component
{
    public string $activeCategory = 'all';

    public array $categories = ['all', 'logiciel', 'web'];

    public array $projects = [
        [
            'title'    => 'ClinicSoft',
            'category' => 'logiciel',
            'tags'     => ['Laravel', 'Livewire', 'MySQL', 'SaaS Médical'],
            'desc'     => 'SaaS médical complet avec 74 modules : réception, laboratoire, bloc opératoire, maternité, pharmacie, imagerie, facturation, comptabilité et pilotage.',
            'result'   => 'Un seul système pour piloter tout l\'établissement, de l\'admission à la facturation, sans jongler entre plusieurs outils.',
            'url'      => null,
            'image'    => 'portfolio/clinicsoft.png',
            'real'     => true,
            'color'    => 'from-blue-600 to-indigo-700',
        ],
        [
            'title'    => 'NadhiyaStore',
            'category' => 'logiciel',
            'tags'     => ['Laravel', 'Livewire', 'POS', 'Gestion Stock'],
            'desc'     => 'Plateforme de gestion magasin : caisse POS avec scan code-barres, catalogue produits, suivi des stocks, alertes, fournisseurs et rapports de ventes.',
            'result'   => 'Caisse, stock et fournisseurs synchronisés en temps réel, avec des rapports de vente consultables à tout moment.',
            'url'      => null,
            'image'    => 'portfolio/nadhiyastore.png',
            'real'     => true,
            'color'    => 'from-teal-500 to-emerald-700',
        ],
        [
            'title'    => 'Orion Centre d\'Art',
            'category' => 'web',
            'tags'     => ['Site web', 'Culture', 'Événements', 'Blog'],
            'desc'     => 'Site vitrine pour un centre d\'art multidisciplinaire : galerie, formations artistiques, événements, podcasts et blog culturel.',
            'result'   => 'Une identité culturelle forte et cohérente en ligne — confirmée par le client lui-même (voir témoignage).',
            'url'      => 'https://www.orioncentredart.com/',
            'image'    => 'portfolio/orion.png',
            'real'     => true,
            'color'    => 'from-violet-600 to-purple-800',
            'comment'  => [
                'author' => 'La direction, Orion Centre d\'Art',
                'text'   => 'Un site qui nous ressemble vraiment — moderne, vivant, et facile à faire évoluer.',
            ],
        ],
        [
            'title'    => 'Smart Hardware ERP',
            'category' => 'logiciel',
            'tags'     => ['Laravel', 'Livewire', 'ERP', 'Multi-dépôts'],
            'desc'     => 'ERP pour quincaillerie : caisse POS, gestion multi-magasins/dépôts, achats, transferts de stock, inventaires, dépenses, rapports et rôles utilisateurs.',
            'result'   => 'Une vision consolidée de tous les magasins et dépôts depuis un seul outil, achats et transferts inclus.',
            'url'      => null,
            'image'    => 'portfolio/smarthardware.png',
            'real'     => true,
            'color'    => 'from-slate-700 to-teal-800',
        ],
        [
            'title'    => 'ConsForest Maniema',
            'category' => 'web',
            'tags'     => ['Site web', 'ONG', 'Environnement', 'Crédit Carbone'],
            'desc'     => 'Site vitrine pour un programme de conservation forestière en RDC : présentation du projet, crédits carbone REDD+, impact social, actualités et galerie de terrain.',
            'result'   => 'Une vitrine professionnelle pour dialoguer avec des partenaires internationaux sur la conservation et le crédit carbone.',
            'url'      => 'https://consforestmaniema.com/',
            'image'    => 'portfolio/consforest.png',
            'real'     => true,
            'color'    => 'from-emerald-700 to-green-900',
            'comment'  => [
                'author' => 'La direction, ConsForest Maniema',
                'text'   => 'Fintch Web a créé un site à la hauteur de notre mission : sobre, élégant et efficace pour présenter notre travail de conservation aux partenaires internationaux.',
            ],
        ],
    ];

    public function getFilteredProjectsProperty(): array
    {
        if ($this->activeCategory === 'all') {
            return $this->projects;
        }
        return array_values(array_filter($this->projects, fn($p) => $p['category'] === $this->activeCategory));
    }

    public function setCategory(string $cat): void
    {
        $this->activeCategory = $cat;
    }

    public function render()
    {
        return view('frontend.portfolio', [
            'filteredProjects' => $this->filteredProjects,
        ]);
    }
}
