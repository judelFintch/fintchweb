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

    public array $categories = ['all', 'logiciel', 'web', 'mobile', 'ecommerce', 'design'];

    public array $projects = [
        [
            'title'    => 'ClinicSoft',
            'category' => 'logiciel',
            'tags'     => ['Laravel', 'Livewire', 'MySQL', 'SaaS Médical'],
            'desc'     => 'SaaS médical complet avec 74 modules : réception, laboratoire, bloc opératoire, maternité, pharmacie, imagerie, facturation, comptabilité et pilotage.',
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
            'url'      => 'https://www.orioncentredart.com/',
            'image'    => 'portfolio/orion.png',
            'real'     => true,
            'color'    => 'from-violet-600 to-purple-800',
        ],
        [
            'title'    => 'Smart Hardware ERP',
            'category' => 'logiciel',
            'tags'     => ['Laravel', 'Livewire', 'ERP', 'Multi-dépôts'],
            'desc'     => 'ERP pour quincaillerie : caisse POS, gestion multi-magasins/dépôts, achats, transferts de stock, inventaires, dépenses, rapports et rôles utilisateurs.',
            'url'      => null,
            'image'    => 'portfolio/smarthardware.png',
            'real'     => true,
            'color'    => 'from-slate-700 to-teal-800',
        ],
        [
            'title'    => 'LuxeStore',
            'category' => 'ecommerce',
            'tags'     => ['Laravel', 'Livewire', 'Stripe'],
            'desc'     => 'Boutique e-commerce haut de gamme avec paiement sécurisé et gestion des stocks en temps réel.',
            'url'      => null,
            'image'    => null,
            'real'     => false,
            'color'    => 'from-pink-500 to-rose-700',
        ],
        [
            'title'    => 'MediTrack',
            'category' => 'web',
            'tags'     => ['Vue.js', 'API REST', 'MySQL'],
            'desc'     => 'Plateforme SaaS de suivi médical pour cliniques et cabinets indépendants.',
            'url'      => null,
            'image'    => null,
            'real'     => false,
            'color'    => 'from-cyan-500 to-blue-700',
        ],
        [
            'title'    => 'FoodRunner',
            'category' => 'mobile',
            'tags'     => ['React Native', 'Firebase', 'Maps'],
            'desc'     => 'Application de livraison de repas avec géolocalisation en temps réel.',
            'url'      => null,
            'image'    => null,
            'real'     => false,
            'color'    => 'from-orange-500 to-red-700',
        ],
        [
            'title'    => 'BrandKit',
            'category' => 'design',
            'tags'     => ['Branding', 'Figma', 'Illustration'],
            'desc'     => 'Identité visuelle complète pour startup tech : logo, palette, typographie et guide de marque.',
            'url'      => null,
            'image'    => null,
            'real'     => false,
            'color'    => 'from-amber-500 to-yellow-700',
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
