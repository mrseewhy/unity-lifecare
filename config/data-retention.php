<?php

return [
    'drafts' => [
        'delete_expired_after_days' => (int) env('DRAFT_RETENTION_GRACE_DAYS', 0),
    ],

    'submitted_forms' => [
        'delete_after_days' => (int) env('SUBMITTED_FORM_RETENTION_DAYS', 2555),
    ],
];
