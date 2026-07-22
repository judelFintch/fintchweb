<?php

namespace App\Support;

class BlogArticles
{
    public static function all(string $locale = 'fr'): array
    {
        return $locale === 'en' ? self::en() : self::fr();
    }

    public static function find(string $slug, string $locale = 'fr'): ?array
    {
        return self::all($locale)[$slug] ?? null;
    }

    protected static function fr(): array
    {
        return [
            'prix-site-web-rdc' => [
                'title' => 'Combien coûte un site web professionnel en RDC ?',
                'meta_description' => 'Prix d\'un site vitrine, e-commerce ou logiciel sur mesure en RDC : les facteurs qui font varier le budget et comment bien le préparer.',
                'category' => 'Site web',
                'read_time' => '5 min',
                'excerpt' => 'Les prix varient fortement selon la complexité du projet. Voici les vrais facteurs qui font varier un devis, pour éviter les mauvaises surprises.',
                'sections' => [
                    [
                        'heading' => 'Pourquoi les prix varient autant',
                        'paragraphs' => [
                            'C\'est la question la plus fréquente qu\'on nous pose : "combien coûte un site web ?" La réponse honnête est "ça dépend", mais pas pour se dérober — parce qu\'un site vitrine de 5 pages et un logiciel de gestion avec authentification, rôles et rapports n\'ont rien à voir en termes de travail.',
                            'Un devis sérieux tient compte du nombre de pages, du design (template ajusté ou maquette sur mesure), des fonctionnalités (formulaire simple ou tableau de bord complet), et du temps de maintenance prévu après la mise en ligne.',
                        ],
                    ],
                    [
                        'heading' => 'Les grandes fourchettes de prix',
                        'paragraphs' => [
                            'Pour un site vitrine simple (présentation, contact, quelques pages), comptez généralement entre 500 et 1 000 USD. Pour une boutique en ligne avec paiement et gestion des commandes, la fourchette monte vers 1 000 à 3 000 USD. Un logiciel métier sur mesure (ERP, POS, gestion de clinique ou de pharmacie) démarre plutôt à partir de 3 000 USD, selon le nombre de modules et d\'intégrations.',
                            'Ces montants ne sont pas figés : ils dépendent aussi du délai souhaité et de la complexité des intégrations (paiement mobile, SMS, API tierces).',
                        ],
                    ],
                    [
                        'heading' => 'Ce qui fait grimper la facture sans qu\'on le voie venir',
                        'paragraphs' => [
                            'Trois choses expliquent la majorité des dépassements de budget : des fonctionnalités ajoutées en cours de route, l\'absence de contenu prêt (textes, photos, logo) au démarrage, et l\'oubli de la maintenance après la livraison.',
                            'Un site qui n\'est jamais mis à jour devient vite une faille de sécurité ou un frein technique. C\'est pour ça qu\'on recommande toujours de prévoir, dès le devis, un budget de suivi mensuel — même minime — plutôt que de découvrir le besoin après coup.',
                        ],
                    ],
                    [
                        'heading' => 'Comment bien préparer votre demande de devis',
                        'paragraphs' => [
                            'Avant de nous écrire, notez : l\'objectif principal du site (vendre, informer, gérer une activité interne), le délai souhaité, et si possible un ou deux exemples de sites que vous aimez. Ça nous permet de vous répondre avec un chiffrage précis dès le premier échange, au lieu d\'un aller-retour de questions.',
                        ],
                    ],
                ],
            ],
            'logiciel-gestion-metier-rdc' => [
                'title' => 'Pharmacie, clinique, commerce : pourquoi passer à un logiciel sur mesure',
                'meta_description' => 'Excel, cahiers papier ou logiciel générique : pourquoi les cliniques, pharmacies et commerces en RDC gagnent à passer à un logiciel de gestion sur mesure.',
                'category' => 'Logiciel métier',
                'read_time' => '4 min',
                'excerpt' => 'Beaucoup d\'entreprises en RDC gèrent encore leurs stocks, ventes ou dossiers patients avec des outils qui ne communiquent pas entre eux. Voici ce qu\'un logiciel sur mesure change concrètement.',
                'sections' => [
                    [
                        'heading' => 'Le problème classique : des outils qui ne se parlent pas',
                        'paragraphs' => [
                            'Beaucoup de structures — cliniques, pharmacies, quincailleries, boutiques — utilisent un mélange de cahiers, de fichiers Excel et parfois d\'un logiciel de caisse basique. Chaque outil fonctionne seul, mais personne n\'a une vue d\'ensemble en temps réel : le stock d\'un côté, les ventes de l\'autre, la comptabilité encore ailleurs.',
                            'C\'est exactement le problème que nous avons résolu pour ClinicSoft, un SaaS médical avec 74 modules couvrant la réception, le laboratoire, la pharmacie et la facturation dans un seul système — ou pour Smart Hardware ERP, qui centralise plusieurs magasins et dépôts d\'une quincaillerie.',
                        ],
                    ],
                    [
                        'heading' => 'Ce qu\'un logiciel sur mesure change concrètement',
                        'paragraphs' => [
                            'Un système pensé pour votre activité précise (et non un logiciel générique importé) s\'adapte à vos processus réels : vos catégories de produits, vos rôles d\'équipe, vos habitudes de facturation. Ça évite de plier votre façon de travailler aux limites d\'un outil pensé pour un autre marché.',
                            'Concrètement : moins de ressaisie manuelle entre outils, des rapports de vente ou de stock disponibles à tout moment, et une traçabilité claire de qui a fait quoi (utile autant pour la gestion que pour la confiance entre associés).',
                        ],
                    ],
                    [
                        'heading' => 'Sur mesure ne veut pas dire hors de prix',
                        'paragraphs' => [
                            'C\'est l\'idée reçue la plus courante : "sur mesure" fait penser à un budget énorme. En réalité, un projet peut démarrer avec les modules essentiels (caisse, stock, rapports) et évoluer ensuite par étapes, au rythme de votre croissance et de votre budget — plutôt que de tout construire d\'un coup.',
                        ],
                    ],
                ],
            ],
            'installation-cameras-surveillance-kinshasa' => [
                'title' => 'Installation de caméras de surveillance : guide pratique pour votre commerce',
                'meta_description' => 'Comment bien choisir et installer des caméras de surveillance CCTV/IP pour un commerce, un dépôt ou un bureau en RDC : les points à vérifier avant de se lancer.',
                'category' => 'Sécurité',
                'read_time' => '4 min',
                'excerpt' => 'Avant d\'installer des caméras, quelques questions simples évitent d\'investir dans un système mal adapté à vos locaux ou à votre budget.',
                'sections' => [
                    [
                        'heading' => 'Définir ce que vous voulez surveiller, et pourquoi',
                        'paragraphs' => [
                            'Un commerce, un dépôt et un bureau n\'ont pas les mêmes besoins. Un commerce veut souvent surveiller la caisse et les entrées/sorties ; un dépôt se concentre sur le contrôle des accès et les zones de stockage ; un bureau veut plutôt sécuriser l\'entrée et les espaces sensibles. Cette première question oriente tout le reste : nombre de caméras, emplacement, et niveau de qualité d\'image nécessaire.',
                        ],
                    ],
                    [
                        'heading' => 'CCTV filaire ou caméras IP : quelle différence pratique',
                        'paragraphs' => [
                            'Les systèmes CCTV classiques sont fiables et ne dépendent pas d\'internet, mais demandent un câblage dédié. Les caméras IP offrent un accès à distance depuis un téléphone, une vision nocturne souvent meilleure, et s\'intègrent plus facilement à un réseau existant — au prix d\'une dépendance à une connexion stable.',
                            'Le bon choix dépend de vos locaux (câblage déjà en place ou non), de la qualité de votre connexion internet, et du besoin réel de consulter les images à distance.',
                        ],
                    ],
                    [
                        'heading' => 'Les erreurs les plus fréquentes',
                        'paragraphs' => [
                            'Sous-estimer l\'éclairage nocturne, placer les caméras trop haut pour identifier un visage, ou choisir un système sans pensée pour la maintenance (qui vérifie que les caméras fonctionnent encore dans 6 mois ?) sont les trois erreurs qu\'on corrige le plus souvent lors d\'un audit.',
                            'Un bon système de surveillance inclut toujours un volet de maintenance préventive : vérification régulière des caméras, du stockage des enregistrements, et de l\'accès à distance.',
                        ],
                    ],
                    [
                        'heading' => 'Notre approche',
                        'paragraphs' => [
                            'On commence toujours par un audit des lieux avant de proposer un système — pas l\'inverse. Ça permet de dimensionner correctement le nombre de caméras et d\'éviter de payer pour un équipement surdimensionné (ou insuffisant) par rapport à vos locaux réels.',
                        ],
                    ],
                ],
            ],
        ];
    }

    protected static function en(): array
    {
        return [
            'prix-site-web-rdc' => [
                'title' => 'How much does a professional website cost in the DRC?',
                'meta_description' => 'Price of a showcase site, e-commerce store or custom software in the DRC: the factors that drive the budget and how to prepare it well.',
                'category' => 'Website',
                'read_time' => '5 min',
                'excerpt' => 'Prices vary a lot depending on the complexity of the project. Here are the real factors behind a quote, so you can avoid bad surprises.',
                'sections' => [
                    [
                        'heading' => 'Why prices vary so much',
                        'paragraphs' => [
                            'It\'s the question we get asked the most: "how much does a website cost?" The honest answer is "it depends" — not to dodge it, but because a 5-page showcase site and management software with authentication, roles and reports have nothing in common in terms of work.',
                            'A serious quote takes into account the number of pages, the design (adjusted template or custom mockup), the features (a simple form or a full dashboard), and the maintenance planned after launch.',
                        ],
                    ],
                    [
                        'heading' => 'The main price ranges',
                        'paragraphs' => [
                            'For a simple showcase site (presentation, contact, a few pages), expect generally between 500 and 1,000 USD. For an online store with payment and order management, the range rises to 1,000–3,000 USD. Custom business software (ERP, POS, clinic or pharmacy management) usually starts from 3,000 USD, depending on the number of modules and integrations.',
                            'These amounts aren\'t fixed: they also depend on the desired timeline and the complexity of integrations (mobile payment, SMS, third-party APIs).',
                        ],
                    ],
                    [
                        'heading' => 'What drives up the bill without you seeing it coming',
                        'paragraphs' => [
                            'Three things explain most budget overruns: features added along the way, content not ready (text, photos, logo) at the start, and forgetting maintenance after delivery.',
                            'A site that\'s never updated quickly becomes a security risk or a technical bottleneck. That\'s why we always recommend planning a monthly follow-up budget — even a small one — right from the quote, instead of discovering the need afterwards.',
                        ],
                    ],
                    [
                        'heading' => 'How to prepare your quote request well',
                        'paragraphs' => [
                            'Before writing to us, note down: the site\'s main goal (sell, inform, manage an internal activity), the desired timeline, and if possible one or two examples of sites you like. This lets us reply with an accurate estimate from the very first exchange, instead of a back-and-forth of questions.',
                        ],
                    ],
                ],
            ],
            'logiciel-gestion-metier-rdc' => [
                'title' => 'Pharmacy, clinic, retail: why switch to custom software',
                'meta_description' => 'Excel, paper notebooks or generic software: why clinics, pharmacies and shops in the DRC benefit from switching to custom management software.',
                'category' => 'Business software',
                'read_time' => '4 min',
                'excerpt' => 'Many businesses in the DRC still manage stock, sales or patient records with tools that don\'t talk to each other. Here\'s what custom software actually changes.',
                'sections' => [
                    [
                        'heading' => 'The classic problem: tools that don\'t talk to each other',
                        'paragraphs' => [
                            'Many organizations — clinics, pharmacies, hardware stores, shops — use a mix of notebooks, Excel files and sometimes basic checkout software. Each tool works on its own, but no one has a real-time overview: stock on one side, sales on another, accounting somewhere else entirely.',
                            'That\'s exactly the problem we solved for ClinicSoft, a medical SaaS with 74 modules covering reception, lab, pharmacy and billing in a single system — or for Smart Hardware ERP, which centralizes several stores and warehouses for a hardware business.',
                        ],
                    ],
                    [
                        'heading' => 'What custom software actually changes',
                        'paragraphs' => [
                            'A system designed for your specific business — rather than generic imported software — adapts to your real processes: your product categories, your team roles, your invoicing habits. That avoids bending your way of working to the limits of a tool built for another market.',
                            'Concretely: less manual re-entry between tools, sales or stock reports available at any time, and clear traceability of who did what (useful both for management and for trust between partners).',
                        ],
                    ],
                    [
                        'heading' => 'Custom doesn\'t mean expensive',
                        'paragraphs' => [
                            'It\'s the most common misconception: "custom" makes people think of a huge budget. In reality, a project can start with the essential modules (checkout, stock, reports) and grow later in stages, at the pace of your growth and your budget — rather than building everything at once.',
                        ],
                    ],
                ],
            ],
            'installation-cameras-surveillance-kinshasa' => [
                'title' => 'Installing surveillance cameras: a practical guide for your business',
                'meta_description' => 'How to choose and install CCTV/IP surveillance cameras for a shop, warehouse or office in the DRC: what to check before you start.',
                'category' => 'Security',
                'read_time' => '4 min',
                'excerpt' => 'Before installing cameras, a few simple questions help you avoid investing in a system poorly suited to your premises or your budget.',
                'sections' => [
                    [
                        'heading' => 'Define what you want to monitor, and why',
                        'paragraphs' => [
                            'A shop, a warehouse and an office don\'t have the same needs. A shop often wants to monitor the register and entries/exits; a warehouse focuses on access control and storage areas; an office wants to secure the entrance and sensitive spaces. This first question shapes everything else: number of cameras, placement, and the image quality level needed.',
                        ],
                    ],
                    [
                        'heading' => 'Wired CCTV or IP cameras: the practical difference',
                        'paragraphs' => [
                            'Classic CCTV systems are reliable and don\'t depend on internet, but require dedicated cabling. IP cameras offer remote access from a phone, often better night vision, and integrate more easily into an existing network — at the cost of depending on a stable connection.',
                            'The right choice depends on your premises (cabling already in place or not), the quality of your internet connection, and the real need to view footage remotely.',
                        ],
                    ],
                    [
                        'heading' => 'The most common mistakes',
                        'paragraphs' => [
                            'Underestimating night lighting, placing cameras too high to identify a face, or choosing a system without thinking about maintenance (who checks the cameras still work in 6 months?) are the three mistakes we correct most often during an audit.',
                            'A good surveillance system always includes preventive maintenance: regular checks of the cameras, of recording storage, and of remote access.',
                        ],
                    ],
                    [
                        'heading' => 'Our approach',
                        'paragraphs' => [
                            'We always start with an on-site audit before proposing a system — never the other way around. That lets us size the number of cameras correctly and avoid paying for equipment that\'s oversized (or insufficient) for your actual premises.',
                        ],
                    ],
                ],
            ],
        ];
    }
}
