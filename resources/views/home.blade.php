@extends('layouts.app')

@section('title', 'Accueil - Sofia Sahara')

@push('styles')
<style>
  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: 'Poppins', sans-serif;
    background: #fdf6e3;
    color: #4a3c1f; 
  }

  .hero {
    background: url('/images/desert-wind.jpg') no-repeat center center/cover;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding-left: 60px;
    max-width: 900px;
    box-shadow: inset 0 0 0 1000px rgba(253, 246, 227, 0.5);
  }

  .hero h1 {
    font-size: 5rem;
    font-weight: 800;
    margin: 0 0 20px 0;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: #7b4a7c;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.15);
  }

  .hero p {
    font-size: 1.5rem;
    max-width: 500px;
    line-height: 1.6;
    margin-bottom: 40px;
    font-weight: 500;
    color: #6f5e2d;
  }

  .btn {
    background-color: #ab0ab1;
    color: #fff;
    padding: 14px 48px;
    font-size: 1.1rem;
    font-weight: 700;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    transition: background-color 0.35s ease, box-shadow 0.35s ease;
    box-shadow: 0 6px 15px rgba(182, 126, 35, 0.5);
    text-decoration: none;
  }

  .btn:hover,
  .btn:focus {
    background-color: #8f651a;
    box-shadow: 0 8px 20px rgba(143, 101, 26, 0.7);
    outline: none;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .hero {
      padding-left: 30px;
      align-items: center;
      text-align: center;
      max-width: 100%;
      height: 80vh;
    }

    .hero h1 {
      font-size: 3rem;
      letter-spacing: 0.1em;
    }

    .hero p {
      font-size: 1.2rem;
      max-width: 90%;
      margin-bottom: 30px;
    }

    .btn {
      padding: 12px 36px;
      font-size: 1rem;
    }
  }
</style>
@endpush

@section('content')
  <section class="hero" role="banner" aria-label="Présentation de Sofia Sahara">
    <h1>Sofia Sahara</h1>
    <p>Exploitez la puissance du vent et du soleil au cœur du Sahara marocain</p>
    <a href="{{ url('/service') }}" class="btn" role="button" aria-label="Découvrir les services de Sofia Sahara">Découvrir</a>
  </section>
@endsection
