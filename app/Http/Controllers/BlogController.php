<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function radhaAshtami()
    {
        return view('blog.ashtami');
    }
    public function faultFinding()
    {
        return view('blog.fault');
    }


    public function followEkadashi()
    {
        return view('blog.ekadashi');
    }

    public function janmashtamiDecoration()
    {
        return view('blog.janmashtami-decoration');
    }

    public function radhaRaniNames()
    {
        return view('blog.radharani-names');
    }

    public function abhiramThakura()
    {
        return view('blog.abhiram-thakura');
    }

    public function amalakiEkadashi()
    {
        return view('blog.amalaki-ekadashi');
    }

    public function aparaEkadashi()
    {
        return view('blog.apara-ekadashi');
    }

    public function lordVamanadeva()
    {
        return view('blog.lord-varahadeva');
    }

    public function radhaKunda()
    {
        return view('blog.radha-kunda');
    }

    public function bhaimiEkadashi()
    {
        return view('blog.bhaimi-ekadashi');
    }

    public function carryLord()
    {
        return view('blog.carry-lord');
    }

    public function carryLoardinHeart()
    {
        return view('blog.carry-lord-in-heart');
    }


    public $blogs = [
        [
            'title' => 'Ashtami',
            'image' => 'assets/images/blog/radha-ashtami-banner.jpg',
            'description' => 'Goddess Radha, the best we can call is Shree Radha Rani, our heart was born on Ashtami of Badhrapada...',
            'url' => 'ashtami'
        ],
        [
            'title' => 'Fault Finding',
            'image' => 'assets/images/blog/empathy-hero.png',
            'description' => 'Recently, I came across a video where nurses were being trained on how to care for elderly patients. The goal was not just medical, but emotional: to cultivate empathy, patience, and understanding by helping them see the world through the eyes of those who struggle with limitations. Watch here.

This got me thinking: in spiritual life too, we often forget to wear the lens of empathy.',
            'url' => 'fault-finding'
        ],
        [
            'title' => 'Ekadashi',
            'image' => 'assets/images/blog/ekadashi-hero.png',
            'description' => 'Ekadashi is the 11th day of both the waxing and waning moon, observed twice a month...',
            'url' => 'ekadashi'
        ],
        [
            'title' => '10 Unique Janmashtami Decoration Ideas at Home',
            'image' => 'assets/images/blog/janmashtami-decor-hero.png',
            'description' => 'Janmashtami, the celebration of Lord Krishna\'s birth, is a joyous occasion marked by vibrant decorations, devotional songs, and festive gatherings. One of the most enchanting aspects of this festival is the elaborate decoration of temples and homes to honor the divine arrival of Krishna.',
            'url' => 'janmashtami-decoration'
        ],
        [
            'title' => ' 11 Important Names of Srimati Radharani',
            'image' => 'assets/images/blog/radha-rani-bio.jpg',
            'description' => 'Srimati Radharani, the eternal consort of Lord Krishna, is revered by devotees worldwide for her unparalleled devotion, beauty, and spiritual significance. Throughout various scriptures and devotional texts, Radharani is addressed by numerous names, each reflecting a unique aspect of her divine personality and her profound relationship with Krishna.',
            'url' => 'radharani-names'
        ],
        [
            'title' => 'Abhirāma Ṭhākura: The Sweet Devotee of Radha and Krishna',
            'image' => 'assets/images/blog/khanakula-temple.jpg',
            'description' => 'Śrī Abhirāma Ṭhākura is a prominent figure in Gaudiya Vaishnavism, known for his deep devotion to Radha and Krishna. His life and teachings inspire countless devotees to deepen their love and devotion.',
            'url' => 'abhiram-thakura'
        ],
        [
            'title' => 'Amalaki Ekadashi',
            'image' => 'assets/images/blog/amalaki-ekadashi.jpg',
            'description' => 'Amalaki Ekadashi, also known as Amala Ekadashi, is a significant day in the Hindu lunar calendar dedicated to Lord Vishnu. It falls on the 11th day (Ekadashi) of the waxing moon in the month of Margashirsha (November-December). This Ekadashi is particularly special because it is associated with the sacred Amalaki tree (Indian gooseberry), which is revered for its medicinal and spiritual properties.',
            'url' => 'amalaki-ekadashi'
        ],
        [
            'title' => 'Apara Ekadashi',
            'image' => 'assets/images/blog/apara-ekadashi.jpg',
            'description' => 'Apara Ekadashi, also known as Pausha Putrada Ekadashi, is an important day in the Hindu lunar calendar dedicated to Lord Vishnu. It falls on the 11th day (Ekadashi) of the waxing moon in the month of Pausha (December-January). This Ekadashi is particularly significant for devotees seeking blessings for progeny and overall well-being.',
            'url' => 'apara-ekadashi'
        ],
        [
            'title' => 'Appearance of Lord Varahadeva',
            'image' => 'assets/images/blog/lord-varahadeva.jpg',
            'description' => 'In the vast pantheon of Hindu deities, Lord Varahadeva stands out as a powerful and compassionate incarnation of Lord Vishnu. Depicted as a boar, Varahadeva is revered for his heroic act of rescuing Mother Earth (Bhudevi) from the depths of the cosmic ocean, symbolizing the triumph of good over evil and the restoration of balance in the universe.',
            'url' => 'lord-varahadeva'
        ],
        [
            'title' => 'Appearance of Radha Kunda',
            'image' => 'assets/images/blog/radha-kunda.jpg',
            'description' => 'Radha Kunda, a sacred pond located in the holy town of Vrindavan, India, holds immense significance in the hearts of devotees of Lord Krishna and Srimati Radharani. This revered site is not only a place of pilgrimage but also a symbol of divine love and devotion that transcends the material world.',
            'url' => 'radha-kunda'
        ],
        [
            'title' => 'Bhaimi Ekadashi',
            'image' => 'assets/images/blog/bhaimi_ekadashi_temple.jpg',
            'description' => 'Bhaimi Ekadashi, also known as Bhima Ekadashi, is an important day in the Hindu lunar calendar dedicated to Lord Vishnu. It falls on the 11th day (Ekadashi) of the waxing moon in the month of Jyeshtha (May-June). This Ekadashi is particularly significant for devotees seeking spiritual growth, prosperity, and liberation from the cycle of birth and death.',
            'url' => 'bhaimi-ekadashi'
        ],
        [
            'title' => 'Carry the Lord in Your Heart with Great Zeal',
            'image' => 'assets/images/carry-lord.jpg',
            'description' => 'In the journey of spiritual life, one of the most profound teachings is the concept of carrying the Lord within our hearts. This idea transcends mere physical rituals and emphasizes a deep, personal connection with the divine that influences every aspect of our lives.',
            'url' => 'carry-lord'
        ],
        [
            'title' => 'Celebrating Deepotsav in Braj, the Festival of Lights',
            'image' => 'assets/festivals/deepotsava8.jpg',
            'description' => 'Deepotsav, the festival of light, celebrates the unique culture of Braj associated with the divine pastimes of Lord Krishna. This month-long festival is celebrated annually in the auspicious month of Kartik (October-November). As per the name, Deepotsav is celebrated by lighting diyas (earthen lamps) with devotion and offering them to the Deities of Srimati Radharani and Lord Krishna, by the devotees. Temples of Braj illuminate with the lights of millions of lamps on this occasion.',
            'url' => 'carry-lord-in-heart'
        ]
    ];

    public function index()
    {
        // Show latest blog first
        $blogs = array_reverse($this->blogs);
        return view('blog.blogs', compact('blogs'));
    }

    // Show single blog
    public function show($slug)
    {
        $blog = collect($this->blogs)->firstWhere('url', $slug);

        if (!$blog) {
            abort(404);
        }

        return view("blog.$slug", compact('blog'));
    }

    // Search blogs
    public function search(Request $request)
    {
        $query = strtolower($request->input('q', ''));

        $results = collect($this->blogs)->filter(function ($blog) use ($query) {
            return str_contains(strtolower($blog['title']), $query) ||
                str_contains(strtolower($blog['description']), $query);
        });

        return view('blog.search_results', [
            'results' => $results,
            'query' => $request->input('q')
        ]);
    }
    // Inside BlogController
    public function getAllBlogs()
    {
        return array_reverse($this->blogs);
    }
}
