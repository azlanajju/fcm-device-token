<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define the service account JSON as a string variable
$serviceAccountJson = '{
        "type": "service_account",
        "project_id": "fir-api-c0d9d",
        "private_key_id": "73fd95cd1708df6f05b54700dc990b90358102d1",
        "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQDE+0wzeMRT0wfD\ngjvLvUk8ptpw0pWhVG0eCmoC4m8qZj/BP1oOkR6OCvRriTKIrSsv884LUR3zfgXG\n7VmBJU7U7SNu1LaFCRZwCXYt35glgMKj3+Y+EGL9SVLaQ2PuaQ/EkYhNj4TQteiK\nN0ksP4Z0uBipIWljdrJSJvEsJrGLlOhCjf0fepbscnywLaGBCqxkakp7Lnzus2Dp\nuFfcTbt1z/f/WL8IuCVgZzVihVtOJPFiDfrs2RuKU+FwZAYlJJsu8MeSCEGZJRvK\niV2/xEg9PN8GCKSpefRSEs3lVJjRIvoYXEcS5Bl2NNnq9ddz6mO3ItykOG4i2Znc\nCGJZKWvfAgMBAAECggEALzKjXIXoTMl4x8CxwSyWmsDEAFqE3cYT6ynFovFMf5VG\nW3BpjKn67z/ytr2F7TfI7FF3okCKc6hTjAmc85PT4rL7VXgET7YQuUGbHny/wOSs\nPoXMbjyQ622hO4kALcTgsVHJngPwZ+3eTRfYIZELD3Z4+jV2Qg3TxllsWg7fZbkZ\naYMn0e9kZBEu/r6oEDYhOnKRiO/YUDF7JKo+BqmgKsLfAakZ77cecoFwTrljHKa+\npZ7iiFvBZvRz4Ycw3GX4OJi+ndrkAB5nteHFEubfAVFGZsq8CA+aa1emcsZBetlM\nZxQV8Uzxm9bF2+7hTwOvCGI63yWrkczl7FE8n/kwmQKBgQDurL/vlArVx7MdwalE\nrN/d4cRQpui6kPiLxWPW6NlgCoy7Pnoq8Pt03qFjvnCg3fN4w3u3f4VuwAiqi7mJ\nqhv112tnCQPIZaR0WZfMZaCB46S4g9esdlIqK3zQnBN1eHsVq8PaR0xqj85JbRVF\nvbAeQTrWTmb7JijHWeLE3By04wKBgQDTR8V0vR+bARWYJ7ItFJ/mtdeFE/G/blh1\nBPD3CEuBagG4i/tkS+NjpW2sd+O5q+EksAXUhDHZ1szfL3o9jydqRKz9LWN0cM9h\n1zO9ptQB8wOB+0CXHv67WU1dWb3ASjcfe4EcpTOisWDY3SM+MfsdPayhUWyGN2vi\nDrz0DUxZ1QKBgBHqB3H9A58uIQSPv5u2+gqWYnzHOlqefPlItIix63bo880uEE9e\nzRDlkOmCpsN8RUUALy4DtUktwrjCSgfKK9UU+Su/ongNIP3Wp60gx55YLsnmo25/\nZwVhRDoILPG5PEvRG58rkNHCv3IFbP5SEYED1l21fsdFAvSLi5jJCKKPAoGAbcZV\npqD5Ae1fTe4aGmgj6JhEgWVqbt8jYLGPjZqmuHfeqwc4N9ViMQzr3fdwv7C5SvmW\nHeQNjrSXP8MITWHKxeEmzGi/yukuJxTMUlaSwuyDvw5PcfVtvuPYWY9eEsG8wEPI\nQpznJjnpKuRDAnavlXLM9gg7TcUP7aVgsaETMX0CgYBW8ZKU2b18eez5iRlnSwKk\nOkI74gasN2Iki+0d7625Q6LDMqMZjQXljJ0HN3G7RJk45bFNNoCKsaPQbEbNax5n\nu7for5Jw5/QDRn6lr073u0XkP1PFa1bteKkPOY3uJJ+2nB84a/Km6xTzKFdXVHIZ\n5bWolotmoldzsiywLTXmLA==\n-----END PRIVATE KEY-----\n",
        "client_email": "firebase-adminsdk-2aeyx@fir-api-c0d9d.iam.gserviceaccount.com",
        "client_id": "114090838431407493645",
        "auth_uri": "https://accounts.google.com/o/oauth2/auth",
        "token_uri": "https://oauth2.googleapis.com/token",
        "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
        "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-2aeyx%40fir-api-c0d9d.iam.gserviceaccount.com"
    }';

// Include the Composer autoloader to load the required libraries.
require 'vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
use Kreait\Firebase\Messaging\MessageTarget;

$factory = (new Factory)
    ->withServiceAccount($serviceAccountJson);

// Create a Cloud Messaging instance
$messaging = $factory->createMessaging();

// Create a Cloud Message
$message = CloudMessage::withTarget(MessageTarget::TOKEN, 'd4UlTnQSj0Xdw9-HA_exdr:APA91bG3avBCrO37KX4pS6BnLF0cglvsk2NVRH4TyH7bxvoziEpLcnnuoBjskBVmKL4xyWRcv8DreeO-wD6uLBo6snVR-vbk5dTrIg6JZdMqGDfnlGPDuPyV7MEqxtOotwWqQUEp_Zhk')
    ->withNotification(Notification::create('Title', 'Body'))
    ->withData(['key' => 'value']);

// Send the message
$messaging->send($message);

echo 'Message sent successfully!';
?>
