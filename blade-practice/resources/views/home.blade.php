<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <span class="badge">100% Natural & Organic</span>

        <h1>
            Fresh Juice For
            <span>Healthy Life</span>
        </h1>

        <p>
            Enjoy freshly squeezed fruit juices made from premium fruits.
            Rich in vitamins, natural flavors, and crafted to boost your day.
        </p>

        <div class="hero-btns">
            <a href="#" class="btn-primary">Order Now</a>
            <a href="#" class="btn-secondary">View Menu</a>
        </div>
    </div>

    <div class="hero-image">
        <img src="https://images.unsplash.com/photo-1622597467836-f3285f2131b8?w=700"
            alt="Juice">
    </div>
</section>

<!-- Popular Juices -->
<section class="popular-juices">

    <div class="section-header">
        <h2>Popular Juices</h2>
        <p>Customer's favorite healthy drinks</p>
    </div>

    <div class="juice-grid">

        <div class="juice-card">
            <img src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?w=500">
            <h3>Mango Blast</h3>
            <p>Fresh mangoes with natural sweetness.</p>
            <span>₹149</span>
        </div>

        <div class="juice-card">
            <img src="https://images.unsplash.com/photo-1553530666-ba11a7da3888?w=500">
            <h3>Orange Energy</h3>
            <p>Vitamin-C rich refreshing orange juice.</p>
            <span>₹129</span>
        </div>

        <div class="juice-card">
            <img src="https://images.unsplash.com/photo-1577805947697-89e18249d767?w=500" alt="Mixed Berry Drink">
            <h3>Berry Mix</h3>
            <p>Healthy berry blend full of antioxidants.</p>
            <span>₹179</span>
        </div>

    </div>

</section>

@endsection
</body>
</html>