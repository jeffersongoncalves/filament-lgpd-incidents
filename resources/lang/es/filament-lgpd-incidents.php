<?php

return [
    'resource' => [
        'label' => 'Incidente',
        'plural_label' => 'Incidentes',
    ],

    'fields' => [
        'title' => 'Título',
        'description' => 'Descripción',
        'status' => 'Estado',
        'risk' => 'Riesgo',
        'discovered_at' => 'Conocido el',
        'occurred_at' => 'Ocurrido el',
        'due_at' => 'Comunicar antes de',
        'data_categories' => 'Categorías de datos',
        'affected_subjects' => 'Titulares afectados',
        'measures' => 'Medidas',
        'anpd' => 'ANPD',
        'subjects' => 'Titulares',
        'anpd_notified_at' => 'ANPD comunicada el',
        'anpd_protocol' => 'Protocolo en la ANPD',
        'subjects_notified_at' => 'Titulares comunicados el',
        'notified_at' => 'Comunicado el',
        'closed_at' => 'Cerrado el',
    ],

    'help' => [
        'discovered_at' => 'Cuándo supiste que el incidente afectó datos personales. El plazo de 3 días hábiles empieza aquí y no se puede cambiar después.',
    ],

    'risk' => [
        'pending' => 'En evaluación',
        'low' => 'Bajo',
        'relevant' => 'Relevante',
    ],

    'status' => [
        'open' => 'Abierto',
        'pending' => 'Comunicación pendiente',
        'overdue' => 'Vencido',
        'closed' => 'Cerrado',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Evaluar riesgo',
            'description' => 'Un riesgo o daño relevante para los titulares (datos sensibles, de menores, financieros o de autenticación, gran escala...) obliga a comunicar a la ANPD y a los titulares. Registra la justificación en las medidas.',
            'success' => 'Riesgo evaluado.',
        ],
        'notify_anpd' => [
            'label' => 'ANPD comunicada',
            'success' => 'Comunicación a la ANPD registrada.',
        ],
        'notify_subjects' => [
            'label' => 'Titulares comunicados',
            'success' => 'Comunicación a los titulares registrada.',
        ],
        'close' => [
            'label' => 'Cerrar',
            'success' => 'Incidente cerrado.',
        ],
    ],
];
