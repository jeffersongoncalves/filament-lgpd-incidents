<?php

return [
    'resource' => [
        'label' => 'Incidente',
        'plural_label' => 'Incidentes',
    ],

    'fields' => [
        'title' => 'Título',
        'description' => 'Descrição',
        'status' => 'Situação',
        'risk' => 'Risco',
        'discovered_at' => 'Ciência em',
        'occurred_at' => 'Ocorrido em',
        'due_at' => 'Comunicar até',
        'data_categories' => 'Categorias de dados',
        'affected_subjects' => 'Titulares afetados',
        'measures' => 'Medidas',
        'anpd' => 'ANPD',
        'subjects' => 'Titulares',
        'anpd_notified_at' => 'ANPD comunicada em',
        'anpd_protocol' => 'Protocolo na ANPD',
        'subjects_notified_at' => 'Titulares comunicados em',
        'notified_at' => 'Comunicado em',
        'partial' => 'Comunicação parcial',
        'complemented_at' => 'Complementação enviada em',
        'closed_at' => 'Encerrado em',
    ],

    'help' => [
        'partial' => 'Ative quando ainda faltam informações: a complementação deve ser enviada em até 20 dias úteis (Res. CD/ANPD 15/2024, art. 6º, §3º).',
        'discovered_at' => 'Quando você soube que o incidente afetou dados pessoais. O prazo de 3 dias úteis conta daqui e não pode ser alterado depois.',
    ],

    'risk' => [
        'pending' => 'Em avaliação',
        'low' => 'Baixo',
        'relevant' => 'Relevante',
    ],

    'status' => [
        'complement_overdue' => 'Complementação atrasada',
        'open' => 'Aberto',
        'pending' => 'Comunicação pendente',
        'overdue' => 'Vencido',
        'closed' => 'Encerrado',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Avaliar risco',
            'description' => 'Risco ou dano relevante aos titulares (dados sensíveis, de crianças, financeiros ou de autenticação, larga escala...) exige comunicar a ANPD e os titulares. Registre a justificativa nas medidas.',
            'success' => 'Risco avaliado.',
        ],
        'notify_anpd' => [
            'label' => 'ANPD comunicada',
            'success' => 'Comunicação à ANPD registrada.',
        ],
        'notify_subjects' => [
            'label' => 'Titulares comunicados',
            'success' => 'Comunicação aos titulares registrada.',
        ],
        'complement' => [
            'label' => 'Complementação enviada à ANPD',
            'description' => 'Envie as informações que faltam à ANPD até :date.',
            'success' => 'Complementação registrada.',
        ],
        'close' => [
            'label' => 'Encerrar',
            'success' => 'Incidente encerrado.',
        ],
    ],
];
