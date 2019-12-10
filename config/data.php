<?php
$tel = '';
$sitename = env('APP_NAME');
$siteloc = '';
$sitecountry = '';
$email = env('MAIL_USERNAME');
return [

    //SITE METADATA
    'meta' => [
        'sitename' => $sitename,
        'logoalt' => "$siteloc Taxis Minibus Hire",
        'contact_number' => $tel,
        'contact_email' => $email,
        'contact_address' => '',
        'fb' => '#',
        'insta' => '#',
        'gplus' => '#',
        'twitter' => '#',
        'url' => env('APP_URL'),
    ],

    'footer' => [
        'desc' => "$sitename is an established taxi and minibus rental service in $siteloc, providing transport over the UK",
        'column2title' => 'Contact Us',
        'column3title' => 'Newsletter',
        'column3desc' => 'Sign Up to our newsletter for great deals on Taxi Hire and Minibus Hire.',
    ],

    //HOMEPAGE METADATA
    'home' => [
        'title' => "Tel: $tel",
        'desc' => "$sitename Is Your Number One Choice For Small & Large Airport Transfers. Book Airport Transfers Across Heathrow, Gatwick and Stansted. 8-16 Seater minibuses available at very low prices.",
        'tags' => "Minibus Hire, Taxis, $siteloc, Airport, Heathrow, Gatwick.",
        //HEADER
        'Header' => "$sitename",
        'Header2' => "Get A Free Quote Today",
        'Subtitle' => "$sitename is $sitecountry's number one minibus and taxi hire provider.",
        'Subtitle2' => 'Save up to 33% on minibus and taxi hire transport.',
        'SliderButton1' => 'Get Quote',
        'Header3' => "Providing quality service at unbeatable rates.",
        'Subtitle3' => 'We provide reliable and affordable minibus rental and taxi hire',
        'Subtitle4' => "services online across $sitecountry.",
        'SliderButton2' => 'Learn More',

        //BODY
        'MainHeader' => 'Our Advantages',
        'Adv1Title' => 'Free Wi-Fi',
        'Adv1Desc' => '',
        'Adv2Title' => 'Shuttle to the Bus',
        'Adv2Desc' => '',
        'Adv3Title' => 'Comfortable Seats',
        'Adv3Desc' => '',
        'Adv4Title' => 'Different Payment Methods',
        'Adv4Desc' => '',

        'MainHeader2' => "$siteloc Minibus and Taxi Hire",

        //IMAGES
        'image1' => [
            'alt' => "Coach Hire - $sitename",
            'caption' => "Coach Hire - $sitename",
        ],
        'image2' => [
            'alt' => "Airport Transfers - $sitename",
            'caption' => "Airport Transfers - $sitename",
        ],
        'image3' => [
            'alt' => "Wedding Transport - $sitename",
            'caption' => "Wedding Transport - $sitename",
        ],
        'image4' => [
            'alt' => "Conference Transport - $sitename",
            'caption' => "Conference Transport - $sitename",
        ],
        'image5' => [
            'alt' => "Events & Parties Travel - $sitename",
            'caption' => "Events & Parties Travel - $sitename",
        ],
        'image6' => [
            'alt' => "Long Distance Hire - $sitename",
            'caption' => "Long Distance Hire - $sitename",
        ],

        'BannerMessage' => "Call $tel Now To Book",
        //TODO Modify Paragraphs in welcome.blade.php manually
        'callUs' => "Call: $tel",

    ],

    //About METADATA
    'about' => [
        'title' => 'About Us',
        'desc' => "$sitename is a taxi and minibus hire with a variety of vehicles available to cater all your transport needs. 
        We are an established transport provider in $sitecountry for many years.",
        'tags' => "24 Hour Minibus Taxis $siteloc, About Us",
        'header' => 'A Few Words About Us',
        //TODO Modify Paragraphs in about.blade.php manually
        'header2' => 'We offer',
        'image1alt' => "$siteloc Taxi Hire",
        'image2alt' => "Taxi Hire $sitecountry",
        'image3alt' => "24 Hour Taxis $siteloc",
        'image4alt' => "$sitecountry Minibus Hire Rentals",

        'list' => [
            'Luxury Taxis With Drivers',
            'Luxury Minibuses With Drivers',
            'School Transportation Services',
            'Staff Transportation Services',
            'Long Term Rentals',
            'Airport Transfers',
            'Long distance travel offers'
        ],
    ],

    'faq' => [
        'title' => 'FAQ',
        'desc' => 'Have questions? Check here to see some of the most commonly received queries first before you contact us.',
        'tags' => "FAQ $siteloc Taxis, Frequently Asked Questions",

        'header' => 'Frequently Asked Questions',
        'subheader' => 'You can contact us directly any time but take some time and read through the frequently asked questions on our website. If
                you have requested a quote already and you have some queries on that quote or your itinerary kindly
                    contact our customer support or travel agent directly.',
        
        'list' => [
            '1' => [
                'Q' => "How do I pay for my vehicle?",
                'A' => "You can pay cash on the day or you can pay via your credit or debit card using PayPal.",
            ],
            '2' => [
                'Q' => "How far in advance can I book my transport?",
                'A' => "All online bookings should be made 24hrs before the journey is going to take place. For transport required within 24hrs please call us on the telephone number provided to confirm availability.",
            ],
            '3' => [
                'Q' => "Are the prices per passenger of per vehicle?",
                'A' => "All our charges are per vehicle and not per passenger.",
            ],
            '4' => [
                'Q' => "Do you charge extra if my flight is delayed.",
                'A' => "If you provide a flight number, you will not be charged extra if your flight is delayed because we monitor flight arrivals at all UK airports. Please make sure you provide your flight number to the booking operator.",
            ],
            '5' => [
                'Q' => "How will I find my driver at the airport?",
                'A' => "All our drivers will be given your contact information so they will call you to meet them in a specific location in the arrivals section. Meet and greet services may include an extra charge so please contact our operator for further information.",
            ],
            '6' => [
                'Q' => "Are your drivers qualified?",
                'A' => "All drivers working for our company are fully qualified and registered with the local licencing authority.",
            ],
            '7' => [
                'Q' => "Do you take on company contracts?",
                'A' => "Yes we do take on company contracts, please fill in our contact form and we will get back to you within 24hrs.",
            ],            
        ],
    ],

    'privacy' => [
        'title' => 'Privacy Policy',
        'desc' => 'By using our website you agree to our Privacy Policy outlined on this page',
        'tags' => "Privacy Policy $siteloc Taxi Minibus Hire",
    ],

    'thanks' => [
        'title' => 'Thank You',
        'desc' => 'Thank You for submitting your Query. we will be in contact with you shortly.',
        'tags' => "Thank You Page, Taxi Hire, $siteloc Taxis,",
    ],

    'contact' => [
        'title' => 'Contact Us',
        'desc' => "If you have any questions, or wish to request a quote, then contact us below or by email on $email. Or you can give us a call on $tel. You can also use our live chat system to connect with us immediately",
        'tags' => "Contact Us, $siteloc Minibus, $siteloc Taxi Hire",

        'header1' => 'Get in Touch',
        'paragraph1' => 'You can contact us any way that is convenient for you. We are available 24/7 via phone
                                    or email.',
        'paragraph2' => 'You can also use a quick contact form below or visit our office
                                    personally.',
        'openhours' => "24 hours a day, 7 days a week",
        //TODO enter google embed URL (just url not html)
        'mapurl' => ''

    ],

    'fleet' => [
        'title' => 'Fleet',
        'desc' => 'Check out our extensive collection of vehicles available to travel in. We can cover transport for multiple people over long distances.',
        'tags' => "Fleet $siteloc Taxi, Minibus Hire",

        'header1' => 'Coaches',
        'header2' => 'Minibuses',

        'feature1' => [
            'alt' => "Free WiFi Taxi $siteloc Hire",
            'name' => 'Free WiFi',
        ],
        'feature2' => [
            'alt' => "Luggage Taxi $siteloc Hire",
            'name' => 'Luggage',
        ],
        'feature3' => [
            'alt' => "Outlets Power $siteloc Taxi Hire",
            'name' => 'Outlets',
        ],
        'feature4a' => [
            'alt' => "Reclining Seats $siteloc Hire Taxi",
            'name' => 'Reclining Seats',
        ],
        'feature4b' => [
            'alt' => "Legroom Taxi Hire $siteloc",
            'name' => 'More Legroom',
        ],
        'feature5' => [
            'alt' => "Restroom Taxi Hire $siteloc",
            'name' => 'Restroom',
        ],
        'feature6' => [
            'alt' => "Television TV $siteloc Hire Minibus",
            'name' => 'TV',
        ],

        //TODO Modify fleet_header.blade.php foreach loop if not using all 5 minibuses etc
        'coach1' => [
            'alt' => "72 Passenger $siteloc Coach Taxi image",
            'title' => '72 Passenger MTI Coach',
            'subtitle' => '72 Passenger',
        ],
        'coach2' => [
            'alt' => "64 Passenger Coach $siteloc Hire image",
            'title' => '64 Passenger Setra Coach',
            'subtitle' => '64 Passenger',
        ],
        'coach3' => [
            'alt' => "56 Passenger Coach $siteloc Hire image",
            'title' => '56 Passenger Setra Coach',
            'subtitle' => '56 Passenger',
        ],
        'mini1' => [
            'alt' => "24 Seats Minibus Hire $siteloc image",
            'title' => '24 Seater Minibus',
            'subtitle' => '24 Passenger',
        ],
        'mini2' => [
            'alt' => "16 Seats Minibus Hire $siteloc image",
            'title' => '16 Seater Minibus',
            'subtitle' => '16 Passenger',
        ],
        'mini3' => [
            'alt' => "14 Seats Minibus Hire $siteloc image",
            'title' => '14 Seater Minibus',
            'subtitle' => '14 Passenger',
        ],
        'mini4' => [
            'alt' => '8 Seats Mercedes $siteloc Hire image',
            'title' => '8 Passenger Mercedes',
            'subtitle' => '8 Passenger',
        ],
        'mini5' => [
            'alt' => "6 Seats $siteloc MPV Minibus Hire image",
            'title' => '6 Passenger MPV',
            'subtitle' => '6 Passenger',
        ],
        'mini6' => [
            'alt' => "4 Seats $siteloc Passenger Car Hire image",
            'title' => '4 Passenger Car',
            'subtitle' => '4 Passenger',
        ],
    ],

    'blog' => [
        'title' => 'Blog',
        'desc' => "The latest news from $sitename and the best offers we have to Offer for all your travel needs. If you require more information on building a quality excursion tour please call and we will be more than happy to help you.",
        'tags' => "Blog News Taxi $siteloc Minibus Hire",
    ],
    'offers' => [
        'title' => 'Offers',
        'desc' => 'Check out our special deals on popular destinations and trips all over the UK. Take advantage of our deals on selected journeys.',
        'tags' => "Our Offers $siteloc Minibus Hire",

        'header1' => 'Special Offers',
        'list' => [
            '1' => [
                'h' =>"$siteloc to  (via Taxi Car)",
                'p' =>'£18.00',
                ],
            '2' => [
                'h' =>"$siteloc to  (via Taxi Car)",
                'p' =>'£20.00',
            ],
            '3' => [
                'h' =>"$siteloc to  (via Taxi Car)",
                'p' =>'£54.00',
            ],
            '4' => [
                'h' =>"$siteloc to  (via Taxi Car)",
                'p' =>'£62.00',
            ],
            '5' => [
                'h' =>"$siteloc to  (via Taxi Car)",
                'p' =>'£51.00',
            ],
            '6' => [
                'h' =>"$siteloc to  (via a 16 Seater Minibus)",
                'p' =>'£62.00',
            ],
            '7' => [
                'h' =>"$siteloc to  (via a 16 Seater Minibus)",
                'p' =>'£64.00',
            ],
            '8' => [
                'h' =>"$siteloc to  (via a 16 Seater Minibus)",
                'p' =>'£115.00',
            ],
            '9' => [
                'h' =>"$siteloc to  (via a 16 Seater Minibus)",
                'p' =>'£128.00',
            ],
            '10' => [
                'h' =>"$siteloc to  (via a 16 Seater Minibus)",
                'p' =>'£112.00',
            ],
        ],
    ]
];