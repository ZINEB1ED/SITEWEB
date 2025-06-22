@extends('layouts.app')

@section('title', 'Nos Services – Sofia Sahara')

@push('styles')
<style>
    body {
        background-color: #fef9f3;
        color: #333;
    }
    h1 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 50px;
        color: #814883;
    }
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        max-width: 1200px;
        margin: auto;
        padding: 20px;
    }
    .service-card {
        background-color: white;
        border-radius: 12px;
        padding: 30px 20px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        text-align: center;
        transition: transform 0.3s ease;
    }
    .service-card:hover {
        transform: translateY(-5px);
    }
    .service-card img {
        max-width: 80px;
        margin-bottom: 20px;
    }
    .service-card h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: #444;
    }
    .service-card p {
        font-size: 1rem;
        color: #666;
    }
</style>
@endpush

@section('content')

    <h1>Nos Services</h1>

    <div class="services-grid">
        <div class="service-card">
            <img src="/images/eolienne.png" alt="Éolien">
            <h3>Énergie Éolienne</h3>
            <p>Développement et maintenance de parcs éoliens adaptés aux zones désertiques.</p>
        </div>
        <div class="service-card">
            <img src="/images/solaire.png" alt="Solaire">
            <h3>Énergie Solaire</h3>
            <p>Solutions solaires photovoltaïques pour particuliers et entreprises du Sud.</p>
        </div>
        <div class="service-card">
            <img src="/images/ingenierie.png" alt="Ingénierie">
            <h3>Ingénierie & Études</h3>
            <p>Études techniques, audits énergétiques, dimensionnement sur mesure.</p>
        </div>
        <div class="service-card">
            <img src="/images/installation.png" alt="Installation">
            <h3>Installation Clé en Main</h3>
            <p>Prise en charge complète de vos projets énergétiques de A à Z.</p>
        </div>
    </div>

@endsection
