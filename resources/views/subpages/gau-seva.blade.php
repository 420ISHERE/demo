@extends('main')

@section('title', 'Gau Seva | HKM Dehradun')

@section('meta_description', 'Support Gau Seva — contribute to nurture cows and support ISKCON Dehradun gaushala.')

@section('content')
<style>
    /* Basic page styles — move to a CSS file in production */
    .gau-hero {
        background: linear-gradient(180deg, rgba(28, 146, 221, 0.18) 0%, rgba(255, 248, 238, 0.95) 100%),
        url('{{ asset("images/gau-seva-hero.png") }}') center/cover no-repeat;
        border-radius: 6px;
        padding: 48px 24px;
        color: #111;
        position: relative;
        overflow: hidden;
    }

    .gau-hero .title {
        font-size: 56px;
        font-weight: 700;
        color: #0b2140;
        letter-spacing: 1px;
    }

    .gau-hero .subtitle {
        font-size: 20px;
        margin-top: 10px;
        color: #333;
    }

    .donate-cta {
        background: linear-gradient(90deg, #1c92dd, #1478b8);
        color: #fff;
        padding: 12px 26px;
        border-radius: 22px;
        display: inline-block;
        margin-top: 18px;
        box-shadow: 0 6px 18px rgba(28, 146, 221, 0.18);
        text-decoration: none;
    }

    .gau-main {
        padding-top: 48px;
    }

    .gau-left {
        padding-right: 20px;
    }

    .gau-right {
        padding-left: 20px;
    }

    .card-food-list ul {
        list-style: none;
        padding-left: 0;
    }

    .card-food-list li {
        padding: 6px 0;
    }

    /* Donation form box */
    .donation-box {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 6px 24px rgba(10, 40, 80, 0.06);
        padding: 18px;
    }

    .amount-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 8px;
    }

    .amount-grid .btn-amount {
        border-radius: 8px;
        padding: 10px;
        border: 1px solid #e6f0fb;
        background: linear-gradient(180deg, #f7fbff, #eef9ff);
        cursor: pointer;
    }

    .contributors .card {
        border-radius: 10px;
        background: #f5fbff;
        padding: 12px;
    }

    /* Responsive tweaks */
    @media (max-width: 991px) {
        .gau-hero .title {
            font-size: 36px;
        }

        .gau-left,
        .gau-right {
            padding: 0;
        }
    }
</style>

<section class="container">
    <div class="gau-hero mb-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="title">GAU SEVA</h1>
                <p class="subtitle">Support Gau Seva — Spread Divine Blessings. Serve Mother Cows through ISKCON Dehradun.</p>
                <a href="#donate" class="donate-cta">Donate Now</a>
            </div>
            <div class="col-md-4 text-md-end d-none d-md-block">
                <!-- Decorative — hero image is already in background -->
            </div>
        </div>
    </div>

    <div class="row gau-main">
        <div class="col-lg-8 gau-left">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-3">
                        <img src="{{ asset('images/gau-seva-block.jpg') }}" alt="Gau Seva" class="img-fluid rounded" />
                    </div>

                    <h3 class="text-primary">Support ISKCON's Gaushala and be a Part of this Noble Mission</h3>
                    <p><strong>Care:</strong> Daily cow care, medical care, once a month routine check-up, emergency care</p>

                    <div class="card-food-list mb-3">
                        <h5>Help ISKCON Gauseva to provide food items</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Green fodder: ₹5/kg</li>
                                    <li>Mung daal churi: ₹25/kg</li>
                                    <li>Wheat: ₹20/kg</li>
                                    <li>Barely: ₹23/kg</li>
                                    <li>Taramira seeds: ₹50/kg</li>
                                    <li>Groundnut cake (Desi): ₹60/kg</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Jaggery: ₹40/kg</li>
                                    <li>Dry fodder: ₹10/kg</li>
                                    <li>Toor daal churi: ₹25/kg</li>
                                    <li>Rice: ₹20/kg</li>
                                    <li>Desi Cottonseeds: ₹45/kg</li>
                                    <li>Sesame cake: ₹40/kg</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <h5>Offer Gauseva to provide medical care</h5>
                    <ul>
                        <li>First Aid Kit: ₹300/cow</li>
                        <li>OPD Kit: ₹1,500/cow</li>
                        <li>Yearly Treatment Cost: ₹1,80,000</li>
                        <li>Surgical Cost: ₹3,000/cow</li>
                    </ul>

                    <hr />

                    <h4 class="text-primary">Respected Contributors</h4>
                    <div class="row contributors g-3">
                        @foreach($contributors ?? [] as $c)
                        <div class="col-12 col-md-6">
                            <div class="card p-2">
                                <strong>{{ $c->name ?? 'Donor' }}</strong>
                                <div>donated ₹ {{ number_format($c->amount,2) }}</div>
                                <small class="text-muted">{{ \Carbon\Carbon::parse($c->created_at)->diffForHumans() }}</small>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4 gau-right">
            <div id="donate" class="donation-box mb-4">
                <h5 class="mb-3">Contribute To Nurture Cows</h5>

                <form action="" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label">Select Amount</label>
                        <div class="amount-grid mb-2">
                            <button type="button" class="btn-amount" onclick="setAmount(500)">₹500</button>
                            <button type="button" class="btn-amount" onclick="setAmount(1101)">₹1101</button>
                            <button type="button" class="btn-amount" onclick="setAmount(2101)">₹2101</button>
                            <button type="button" class="btn-amount" onclick="setAmount(5101)">₹5101</button>
                        </div>
                        <input id="amount" name="amount" type="number" class="form-control" placeholder="Enter custom amount" required />
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Seva</label>
                        <select name="seva" class="form-control">
                            <option value="feed_2_cows">Feed 2 Cows For A Day</option>
                            <option value="medical_aid">Medical Aid</option>
                            <option value="general">General Donation</option>
                        </select>
                    </div>

                    <hr />

                    <div class="mb-2">
                        <label class="form-label">Full Name *</label>
                        <input name="name" type="text" class="form-control" required />
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Phone Number *</label>
                        <input name="phone" type="text" class="form-control" required />
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Email Address</label>
                        <input name="email" type="email" class="form-control" />
                    </div>

                    <div class="mb-2">
                        <label class="form-label">PAN Number (Optional for 80G)</label>
                        <input name="pan" type="text" class="form-control" />
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" name="receive_prasadam" class="form-check-input" id="prasadam" />
                        <label class="form-check-label" for="prasadam">Receive Prasadam (only in India)</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Donate</button>

                    <p class="small mt-2 text-muted">All Donations to Hare Krishna Mandir are Tax Exempt u/s 80G of IT Act, 1961.</p>
                </form>
            </div>

            <div class="card p-3">
                <h6>Donation Details</h6>
                <p class="small text-muted">Hare Krishna Mandir Dehradun | PAN: AAATH7161B</p>
                <p class="small">For NEFT/RTGS/UPI receipts, mail donorcare.online@harekrishnamandir.org with transaction details.</p>
            </div>
        </div>
    </div>

</section>

<script>
    function setAmount(val) {
        document.getElementById('amount').value = val;
    }
</script>

@endsection