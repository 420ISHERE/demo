@extends('main')

@section('title', 'Carry the Lord in Your Heart | HKM Dehradun')

@push('styles')
<style>
.hero-section {
    background: linear-gradient(135deg, #ffd29c, #ffe7c9);
    padding: 60px 20px;
    border-radius: 20px;
    animation: fadeIn 1s ease-in-out;
}

.blog-content {
    font-size: 1.15rem;
    line-height: 1.9;
    animation: fadeInUp 1s ease-in-out;
    color: #2b2b2b;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.content-img {
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    margin: 30px 0;
    animation: zoomIn 0.9s ease-in-out;
}

@keyframes zoomIn {
    from {
        transform: scale(0.85);
        opacity: 0;
    }

    to {
        transform: scale(1);
        opacity: 1;
    }
}

h2,
h3 {
    color: #b35400;
    margin-top: 40px;
}

blockquote {
    background: #fff7e6;
    padding: 15px 20px;
    border-radius: 10px;
    margin: 25px 0;
    border-left: 5px solid #f0a500;
}

hr {
    margin: 40px 0;
    border-top: 2px solid #ffb56b;
}
</style>
@endpush

@section('content')
<div class="container my-5">

    <!-- Header Section -->
    <div class="hero-section text-center mb-5">
        <h1 class="fw-bold display-5 text-dark">Carry the Lord in Your Heart with Great Zeal</h1>
    </div>

    <!-- Featured Image -->
    <!-- <div class="text-center">
        <img src="/images/carry-lord.jpg" alt="Carry Lord in Heart" class="img-fluid content-img">
    </div> -->

    <!-- Blog Content -->
    <div class="blog-content">

        <p>A talk by Sri Chanchalapathi dasa on Vaikuntha Ekadashi. Read to know how to make every situation pleasant in
            the material world.</p>

        <p>It is said in the Srimad-Bhagavatam that there are three important aspects of our interaction in this
            material world. We interact with our words, thoughts and our senses.</p>

        <p>Sometimes what we say, what we think and what we act may not be very pleasant and may not create a pleasant
            situation for others and for ourselves. In the Srimad-Bhagavatam (2.6.34), there is a conversation between
            Lord Brahma and his son Narada. Lord Brahma says:</p>

        <blockquote>
            <strong>
                na bharati me nga mrishopalakshyate<br>
                na vai kvacin me manaso mrisha gatih<br>
                na me hrshikani patanty asat-pathe<br>
                yan me hrdautkanthyavata dhrto harih
            </strong>
        </blockquote>

        <ul>
            <li>My words (bharati) I ensure are never false, unpleasant and untrue</li>
            <li>My mind never goes into unpleasant and undesirable thoughts</li>
            <li>My senses never degrade me or anyone else in any situation</li>
        </ul>

        <p>How does he do this? He says: It is possible because I carry Lord Hari in my heart with great zeal.</p>

        <p>So we have to carry the Lord in our heart with great zeal (utkanthyavata) and with great enthusiasm; not
            officially or ritualistically without heart and without application of our mind and intelligence.</p>

        <h3>How do we know that we are carrying the Lord in our heart with great zeal?</h3>

        <p>If we carry the Lord in our heart with great zeal then we will be prepared to do any kind of sacrifice for
            the pleasure of the Lord.</p>

        <img src="{{ asset('assets/images/loard-heart.png') }}" class="img-fluid content-img" alt="Lord in Heart">

        <p>That is the indication that we are very serious and earnest about it.</p>

        <p>And when we carry the Lord in our heart by following His instructions, remembering Him, chanting His holy
            name, worshiping Him, we can ensure that:</p>

        <ul>
            <li>our thoughts are always auspicious</li>
            <li>our words never fail</li>
            <li>our actions are always safe and secure</li>
        </ul>

        <p>Great devotees and acharyas like Srila Prabhupada always carry the Lord in their hearts. So their words never
            fail; their thoughts always bring auspiciousness and their actions never fail. Such great devotees and
            acharyas come to this world to teach us about the science of God, about the love of God and to teach us how
            to intensify our love for God. Srila Prabhupada wrote several books; primarily related to three important
            categories:</p>

        <ul>
            <li>Bhagavad-gita, which teaches the science of God</li>
            <li>Srimad-Bhagavatam, which teaches us the love of God</li>
            <li>Chaitanya-charitamrita, which teaches us how to intensify our love for God</li>
        </ul>

        <p>Prabhupada wanted us to study and be absorbed in these kinds of literature all our life.</p>

        <p>There were some occasions that some of Srila Prabhupada’s disciples, in their interactions with him,
            saw something very remarkable in him as he always carried the Lord in his heart.
        </p>

        <hr>

        <p>Once, Srila Prabhupada was in Montreal conducting an initiation (diksha) ceremony.</p>

        <p>When a disciple takes initiation from the spiritual master his name is changed. It is the second birth
            for the disciple.</p>

        <p>Our first birth is from our biological father and mother. In the second birth, the spiritual master is
            considered our father and the Vedic literatures are our mother.</p>

        <p>After one takes initiation, one will be under the protection of his divine father and mother. Hence in our
            Vedic tradition, a new name is given to one who takes initiation in diksha ceremony, because it is supposed
            to mean a new life.</p>

        <img src="{{ asset('assets/images/prabhupada-initiation.png') }}" alt="Srila Prabhupada Initiation Ceremony"
            class="img-fluid content-img">

        <p>After initiation, one’s thinking, perspective of life, etc., is supposed to change on the basis of Vedic
            knowledge and the direction from the spiritual master.</p>

        <p>In the initiation ceremony, Prabhupada would sit on the asana, take the beads and chant 108 times on the
            beads, and give it to the disciple. The ceremony would go on for a few hours.</p>

        <p>There was a devotee whom Srila Prabhupada was going to initiate. As usual, Srila Prabhupada was chanting and
            then this devotee was called to the front. He came and sat humbly before Srila Prabhupada. He had heard a
            name of Krishna, ‘Madan Gopal’, which he was particularly fond of. Somehow he was enchanted by that name and
            was hoping that Prabhupada would give him that name.</p>

        <p>One who is going to be initiated is not supposed to ask his spiritual master for a particular name. One
            should be happy with whatever name one receives from him. But this devotee had a desire. For many days he
            was meditating that he was going to take diksha and that hopefully Prabhupada would give him the name –
            Madan Gopal.</p>

        <p>So he sat and he was praying within himself to Prabhupada for that name. Prabhupada kept chanting the Hare
            Krishna mantra.</p>

        <p>Towards the end Prabhupada grabbed the mala and said, “So your name will be …” He paused, turned to his
            secretary next to him and said, “Have I given a name Madan Gopal to anyone?”</p>

        <p>The secretary had a list of names. He looked through the papers and said, “Yes Srila Prabhupada, you have
            already given the name.” So Prabhupada turned to the disciple who was anxiously waiting, handed him the mala
            and said, “So your name will be Bharadraj Dasa.”</p>

        <p>And the devotee was shocked. He had never told Prabhupada about his desire. He had never expressed it to
            anybody. But somehow mystically Prabhupada had figured it out.</p>

        <hr>

        <p>There was another occasion when Srila Prabhupada was in London. There were a few English devotees with him.
        </p>

        <p>One sannyasi from India came to meet Srila Prabhupada. Prabhupada very respectfully received him and asked
            his disciples to bring a plate of fruits which was then offered to him.</p>

        <p>The sannyasi and Srila Prabhupada were talking in Hindi. The devotees didn’t know what they were talking
            about.</p>

        <p>Suddenly Srila Prabhupada made a statement, “No. My disciples also know Sanskrit. They are also learning
            Sanskrit.”</p>

        <p>Then he turned to the devotee who brought the plate full of fruits and said, “Can you chant some Isopanishad
            verses?”</p>

        <p>That devotee was chanting the Isopanishad for the last few months or so. He was practicing how to chant the
            verses. But he had learnt how to chant only the first six verses. He didn’t know beyond six verses.</p>

        <p>The devotee said, “Yes, Srila Prabhupada,” and he started chanting.</p>

        <p>After chanting the first verse, he looked at Prabhupada and Prabhupada said, “Continue.”</p>

        <p>Then he chanted the second verse, looking at Srila Prabhupada if he was going to make any sign. Prabhupada
            was closing his eyes and nodding and listening to his disciple chant.</p>

        <p>The sannyasi was watching in amazement that a westerner is chanting Sanskrit verses.</p>

        <p>When the devotee came to the fifth verse, he didn’t know what to say.</p>

        <p>He was full of anxiety and looking at Srila Prabhupada quite intently. Then he came to the sixth verse. He
            thought, “What is going to happen? My situation is almost like Draupadi’s situation… I am going to be
            disrobed.”</p>

        <p>Then he came to the third line of the sixth verse. He was staring at Srila Prabhupada. And as he just
            completed the fourth line of the sixth verse, Prabhupada said, “Enough.”</p>

        <hr>

        <p>Thus the words, thoughts and actions of great devotees are fully protected and completely under the direction
            of the Lord because they carry the Lord in their heart with great enthusiasm and zeal.</p>

        <p>There were several incidents like this where Srila Prabhupada’s remarkable qualities were exhibited.</p>

        <p>Srila Prabhupada was always directed by Krishna. He wrote many books; about 70 books. Sometimes when a book
            came from the printer, he would spend hours reading the book.</p>

        <h3>Sometimes disciples would ask, “Prabhupada, you only wrote that book. Why are you reading it?”</h3>

        <p>Prabhupada would say, “No. I did not write the books. Krishna dictated and I was just writing.”</p>

        <p>Once Srila Prabhupada asked a few devotees who were with him, “Why do you think I wrote all these books?”</p>

        <p>Devotees gave different reasons. Someone said, “You wrote these books to tell us about the philosophy of
            Krishna, philosophy of Gita.”</p>

        <p>Prabhupada said, “No.”</p>

        <p>Someone else said, “Prabhupada, you wanted to teach us about bhakti.”</p>

        <p>Prabhupada said, “No.”</p>

        <p>Like this, the devotees were giving different reasons.</p>

        <p>Somehow Prabhupada was not satisfied. He said, “I wrote all these books to convince you to chant Hare
            Krishna.”</p>

        <p>prabhupada giving lecture</p>

        <p>Chanting the Hare Krishna mantra is so important. The Lord’s avatar in this Yuga is in the form of the
            holy name. Srila Prabhupada wanted us to chant the holy name.</p>

        <p>Scriptures and acharyas recommend that we should chant the holy name.</p>

        <p>Let us chant the holy names of the Lord:</p>
        <blockquote>
            <strong class="rounded text-center fw-bold" style="font-size: 32px;">
                Hare Krishna Hare Krishna Krishna Krishna Hare Hare<br>
                Hare Rama Hare Rama Rama Rama Hare Hare
            </strong>
        </blockquote>


    </div>
</div>
@endsection