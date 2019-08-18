<?php

$cities = [
    "İstanbul",
    "Ankara",
    "İzmir",
    "Adana",
    "Adıyaman",
    "Afyonkarahisar",
    "Ağrı",
    "Aksaray",
    "Amasya",
    "Antalya",
    "Ardahan",
    "Artvin",
    "Aydın",
    "Balıkesir",
    "Bartın",
    "Batman",
    "Bayburt",
    "Bilecik",
    "Bingöl",
    "Bitlis",
    "Bolu",
    "Burdur",
    "Bursa",
    "Çanakkale",
    "Çankırı",
    "Çorum",
    "Denizli",
    "Diyarbakır",
    "Düzce",
    "Edirne",
    "Elazığ",
    "Erzincan",
    "Erzurum",
    "Eskişehir",
    "Gaziantep",
    "Giresun",
    "Gümüşhane",
    "Hakkari",
    "Hatay",
    "Iğdır",
    "Isparta",
    "Kahramanmaraş",
    "Karabük",
    "Karaman",
    "Kars",
    "Kastamonu",
    "Kayseri",
    "Kırıkkale",
    "Kırklareli",
    "Kırşehir",
    "Kilis",
    "Kocaeli",
    "Konya",
    "Kütahya",
    "Malatya",
    "Manisa",
    "Mardin",
    "Mersin",
    "Muğla",
    "Muş",
    "Nevşehir",
    "Niğde",
    "Ordu",
    "Osmaniye",
    "Rize",
    "Sakarya",
    "Samsun",
    "Siirt",
    "Sinop",
    "Sivas",
    "Şırnak",
    "Tekirdağ",
    "Tokat",
    "Trabzon",
    "Tunceli",
    "Şanlıurfa",
    "Uşak",
    "Van",
    "Yalova",
    "Yozgat",
    "Zonguldak",
];

include "../jotform-api-php-master/JotForm.php";

$jotformAPI = new JotForm("74c454a3c60e96fd9a64fbd216f024c1");
$forms = $jotformAPI->getForms();

for ($i = 0; $i < count($cities); $i++) {
    $form = array(
        'questions' => array(
            array(
                'type' => 'control_head',
                'text' => 'Task 5, Welcome to ' . $cities[$i] . ' contanct Form Trial',
                'order' => '1',
                'name' => 'Header',
            ),
            array(
                'type' => 'control_textbox',
                'text' => 'Name',
                'order' => '2',
                'name' => 'Name',
                'validation' => 'None',
                'required' => 'Yes',
                'readonly' => 'No',
                'size' => '20',
                'labelAlign' => 'Auto',
                'hint' => '',
            ),
            array(
                'type' => 'control_textbox',
                'text' => 'Surname',
                'order' => '3',
                'name' => 'Surname',
                'validation' => 'None',
                'required' => 'Yes',
                'readonly' => 'No',
                'size' => '20',
                'labelAlign' => 'Auto',
                'hint' => '',
            ),
            array(
                'type' => 'control_textbox',
                'text' => 'Email',
                'order' => '4',
                'name' => 'Email',
                'validation' => 'None',
                'required' => 'Yes',
                'readonly' => 'No',
                'size' => '30',
                'labelAlign' => 'Auto',
                'hint' => '',
            ),
            array(
                'type' => 'control_textbox',
                'text' => 'Phone Number',
                'order' => '5',
                'name' => 'Phone',
                'validation' => 'None',
                'required' => 'Yes',
                'readonly' => 'No',
                'size' => '20',
                'labelAlign' => 'Auto',
                'hint' => '',
            ),
            array(
                'type' => 'control_textarea',
                'text' => 'Note',
                'order' => '6',
                'name' => 'Note',
                'validation' => 'None',
                'required' => 'Yes',
                'readonly' => 'No',
                'size' => '20',
                'labelAlign' => 'Auto',
                'hint' => '',
            ),
            array(
                'type' => 'control_button',
                'text' => 'Submit',
                'order' => '7',
                'name' => 'Submit',
                'validation' => 'None',
                'required' => 'No',
                'readonly' => 'No',
                'size' => '20',
                'labelAlign' => 'Auto',
                'hint' => '',
            ),
        ),
        'properties' => array(
            'title' => 'Task 5, Welcome to ' . $cities[$i] . ' contanct Form Trial',
            'height' => '600',
        ),
        'emails' => array(
            array(
                'type' => 'notification',
                'name' => 'notification',
                'from' => 'noreply@jotform.com',
                'to' => 'ardaaersoy@gmail.com',
                'subject' => 'New Submission',
                'html' => 'false'
            ),
        ),
    );

    $response = $jotformAPI->createForm($form);
}




/*
foreach ($forms as $form) {
    //print $form["title"];
}

try {
    include "../jotform-api-php-master/JotForm.php";

    $jotformAPI = new JotForm("74c454a3c60e96fd9a64fbd216f024c1");

    $forms = $jotformAPI->getForms(0, 1, null, null);

    $latestForm = $forms[0];

    $latestFormID = $latestForm["id"];

    $submissions = $jotformAPI->getFormSubmissions($latestFormID);

    var_dump($submissions[0]);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

try {
    include "../jotform-api-php-master/JotForm.php";

    $jotformAPI = new JotForm("74c454a3c60e96fd9a64fbd216f024c1");

    $filter = array(
        "id:gt" => "239252191641336722",
        "created_at:gt" => "2013-07-09 07:48:34",
    );

    $subs = $jotformAPI->getSubmissions(0, 1, $filter, "");
    var_dump($subs);

    $filter = array(
        "id:gt" => "239176717911737253",
    );

    $formSubs = $jotformAPI->getForms(0, 0, 2, $filter);

    var_dump($formSubs);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

try {
    include "jotform-api-php/JotForm.php";

    $jotformAPI = new JotForm("YOUR API KEY");

    $submissions = $jotformAPI->getSubmissions(0, 100, null, "created_at");

    var_dump($submissions);
} catch (Exception $e) {
    var_dump($e->getMessage());
}


*/
