@extends('layouts.app')

@section('page-title', 'Page non trouvée — CIDSON ALGUEWI')
@section('body-classes', 'error-page')

@section('content')
    <section class="section error-section" style="min-height:60vh;display:flex;align-items:center;justify-content:center;text-align:center;padding:6rem 1rem;">
        <div class="container">
            <h1 class="hero-title" style="font-size:clamp(4rem,10vw,8rem);margin-bottom:0.5rem;">404</h1>
            <p class="hero-tagline" style="font-size:1.4rem;margin-bottom:2rem;">Page non trouvée</p>
            <p style="color:var(--text-light);margin-bottom:2.5rem;">La page que vous recherchez n'existe pas ou a été déplacée.</p>
            <a href="/" class="btn btn-primary">Retour à l'accueil</a>
        </div>
    </section>
@endsection
