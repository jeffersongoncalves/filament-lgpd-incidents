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
        'partial' => 'Comunicación parcial',
        'complemented_at' => 'Complemento enviado el',
    ],

    'help' => [
        'discovered_at' => 'Cuándo supiste que el incidente afectó datos personales. El plazo de 3 días hábiles empieza aquí y no se puede cambiar después.',
        'partial' => 'Actívelo si aún faltan datos: el complemento debe enviarse en 20 días hábiles (Res. CD/ANPD 15/2024, art. 6, §3).',
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
        'complement_overdue' => 'Complemento atrasado',
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
        'complement' => [
            'label' => 'Complemento enviado a la ANPD',
            'description' => 'Envíe la información que falta a la ANPD antes del :date.',
            'success' => 'Complemento registrado.',
        ],
    ],
];
