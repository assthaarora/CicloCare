<?php

return [
    'configs' => [
        [
            'name' => 'webhook',

            'signing_secret' => env('WEBHOOK_CLIENT_SECRET'),

            'signature_header_name' => 'Signature',

            'signature_validator' => \Spatie\WebhookClient\SignatureValidator\DefaultSignatureValidator::class,

            'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,

            'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,

            'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
            
            'store_headers' => [

            ],

            'process_webhook_job' => App\Handler\WebhookHandler::class,
        ],[]
    ],

    /*
     * The number of days after which models should be deleted.
     *
     * Set to null if no models should be deleted.
     */
    'delete_after_days' => 30,
];