<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ServicePage extends Component
{
    public string $slug;

    public function mount(string $slug): void
    {
        abort_unless(array_key_exists($slug, self::services()), 404);

        $this->slug = $slug;
    }

    public static function services(): array
    {
        return [
            'site-web' => [
                'title' => 'Creation de site web',
                'summary' => 'Sites vitrines rapides, responsives et orientes conversion pour PME, commerces et independants.',
                'project_type' => 'site-vitrine',
                'budget' => '500-1000',
                'items' => ['Design responsive', 'Pages essentielles', 'Formulaire de contact', 'SEO technique de base', 'Formation a la livraison'],
            ],
            'ecommerce' => [
                'title' => 'Creation de site e-commerce',
                'summary' => 'Boutiques en ligne performantes avec catalogue, panier, paiement, gestion des commandes et suivi commercial.',
                'project_type' => 'e-commerce',
                'budget' => '1000-3000',
                'items' => ['Catalogue produits', 'Tunnel de commande', 'Paiement et livraison', 'Tableau de bord ventes', 'Optimisation conversion'],
            ],
            'logiciel-metier' => [
                'title' => 'Logiciel metier sur mesure',
                'summary' => 'Applications web, ERP, POS et dashboards construits autour de vos operations internes.',
                'project_type' => 'logiciel-metier',
                'budget' => '3000-5000',
                'items' => ['Analyse des processus', 'Roles et permissions', 'Rapports et exports', 'Integrations API', 'Support evolutif'],
            ],
            'emails-professionnels' => [
                'title' => 'Emails professionnels',
                'summary' => 'Adresses email privees et professionnelles rattachees au domaine de votre entreprise, comme nom@entreprise.com.',
                'project_type' => 'emails-professionnels',
                'budget' => 'a-definir',
                'items' => ['Adresses email personnalisees', 'Configuration du nom de domaine', 'Securisation SPF, DKIM et DMARC', 'Webmail, mobile et ordinateur', 'Migration et assistance'],
            ],
            'cloud-microsoft-365' => [
                'title' => 'Cloud et Microsoft 365',
                'summary' => 'Des outils cloud bien configures pour centraliser vos documents, fluidifier la collaboration et securiser le travail de vos equipes.',
                'project_type' => 'cloud-microsoft-365',
                'budget' => 'a-definir',
                'items' => ['Microsoft 365 et gestion des comptes', 'SharePoint et intranet collaboratif', 'Teams et espaces de travail', 'OneDrive et partage documentaire', 'Migration, securite et accompagnement'],
            ],
            'cameras-surveillance' => [
                'title' => 'Cameras de surveillance',
                'summary' => 'Installation CCTV et IP avec acces distant, vision nocturne et configuration adaptee a vos locaux.',
                'project_type' => 'camera-surveillance',
                'budget' => 'a-definir',
                'items' => ['Audit du site', 'Choix des cameras', 'Installation et cablage', 'Acces mobile', 'Maintenance preventive'],
            ],
            'maintenance' => [
                'title' => 'Maintenance et support',
                'summary' => 'Suivi technique, mises a jour, corrections, sauvegardes et monitoring pour garder vos outils fiables.',
                'project_type' => 'maintenance',
                'budget' => 'a-definir',
                'items' => ['Mises a jour', 'Sauvegardes', 'Monitoring', 'Corrections rapides', 'Rapports mensuels'],
            ],
        ];
    }

    public function render()
    {
        return view('frontend.service', [
            'service' => self::services()[$this->slug],
        ])->title(self::services()[$this->slug]['title'].' - Fintch Web');
    }
}
