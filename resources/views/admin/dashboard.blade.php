@extends('layouts.app')

@section('content')
<div style="padding: 40px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa;">
    <h1 style="font-size: 2.8rem; margin-bottom: 30px; color: #1a202c; font-weight: bold; text-align: center;">
        Tableau de Bord
    </h1>

    <div style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 25px;
        max-width: 1000px;
        margin: 0 auto;
    ">
        <a href="{{ route('admin.sliders.index') }}" style="
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            padding: 30px;
            border-radius: 16px;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 6px 18px rgba(0,0,0,0.15)'" onmouseout="this.style.transform=''; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.1)'">
            <h3 style="font-size: 1.5rem;">🎞 Sliders</h3>
            <p style="margin-top: 8px;">Gérer les sliders</p>
        </a>

        <a href="{{ route('admin.facilities.index') }}" style="
            background: linear-gradient(135deg, #2ecc71, #27ae60);
            color: white;
            padding: 30px;
            border-radius: 16px;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 6px 18px rgba(0,0,0,0.15)'" onmouseout="this.style.transform=''; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.1)'">
            <h3 style="font-size: 1.5rem;">🏗 Facilities</h3>
            <p style="margin-top: 8px;">Gérer les facilities</p>
        </a>

        <a href="{{ route('admin.reviews.index') }}" style="
            background: linear-gradient(135deg, #9b59b6, #8e44ad);
            color: white;
            padding: 30px;
            border-radius: 16px;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 6px 18px rgba(0,0,0,0.15)'" onmouseout="this.style.transform=''; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.1)'">
            <h3 style="font-size: 1.5rem;">📝 Reviews</h3>
            <p style="margin-top: 8px;">Gérer les reviews</p>
        </a>

        <a href="{{ route('admin.classes.index') }}" style="
            background: linear-gradient(135deg, #f39c12, #e67e22);
            color: white;
            padding: 30px;
            border-radius: 16px;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        " onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 6px 18px rgba(0,0,0,0.15)'" onmouseout="this.style.transform=''; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.1)'">
            <h3 style="font-size: 1.5rem;">🏫 Classes</h3>
            <p style="margin-top: 8px;">Gérer les classes</p>
        </a>
    </div>
</div>
@endsection
