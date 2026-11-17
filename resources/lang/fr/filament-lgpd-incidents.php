<?php

return [
    'resource' => [
        'label' => 'Incident',
        'plural_label' => 'Incidents',
    ],

    'fields' => [
        'title' => 'Titre',
        'description' => 'Description',
        'status' => 'Statut',
        'risk' => 'Risque',
        'discovered_at' => 'Connu le',
        'occurred_at' => 'Survenu le',
        'due_at' => 'À notifier avant',
        'data_categories' => 'Catégories de données',
        'affected_subjects' => 'Personnes concernées touchées',
        'measures' => 'Mesures',
        'anpd' => 'ANPD',
        'subjects' => 'Personnes concernées',
        'anpd_notified_at' => 'ANPD notifiée le',
        'anpd_protocol' => 'Protocole ANPD',
        'subjects_notified_at' => 'Personnes concernées informées le',
        'notified_at' => 'Notifié le',
        'closed_at' => 'Clôturé le',
        'partial' => 'Notification partielle',
        'complemented_at' => 'Complément envoyé le',
    ],

    'help' => [
        'discovered_at' => 'Quand vous avez appris que l\'incident touchait des données personnelles. Le délai de 3 jours ouvrables commence ici et ne peut plus être modifié.',
        'partial' => 'À activer s\'il manque encore des informations : le complément est alors dû sous 20 jours ouvrés (Rés. CD/ANPD 15/2024, art. 6, §3).',
    ],

    'risk' => [
        'pending' => 'En évaluation',
        'low' => 'Faible',
        'relevant' => 'Significatif',
    ],

    'status' => [
        'open' => 'Ouvert',
        'pending' => 'Notification en attente',
        'overdue' => 'En retard',
        'closed' => 'Clôturé',
        'complement_overdue' => 'Complément en retard',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Évaluer le risque',
            'description' => 'Un risque ou dommage significatif pour les personnes concernées (données sensibles, d\'enfants, financières ou d\'authentification, grande échelle...) impose de notifier l\'ANPD et les personnes concernées. Consignez la justification dans les mesures.',
            'success' => 'Risque évalué.',
        ],
        'notify_anpd' => [
            'label' => 'ANPD notifiée',
            'success' => 'Notification à l\'ANPD enregistrée.',
        ],
        'notify_subjects' => [
            'label' => 'Personnes concernées informées',
            'success' => 'Information des personnes concernées enregistrée.',
        ],
        'close' => [
            'label' => 'Clôturer',
            'success' => 'Incident clôturé.',
        ],
        'complement' => [
            'label' => 'Complément envoyé à l\'ANPD',
            'description' => 'Envoyez les informations manquantes à l\'ANPD avant le :date.',
            'success' => 'Complément enregistré.',
        ],
    ],
];
