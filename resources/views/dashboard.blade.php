@extends('layouts.app')

@section('content')

<div class="top-bar">
    <div class="menu">â˜°</div>

    <div class="logo-wrap">
        <a href="{{ route('dashboard.main') }}" class="logo-link">
            <span class="logo-text">IDEAL MOTORS</span>
        </a>
    </div>

    <div class="user">CHATURANGA</div>
</div>

<div class="status-bar">
    <div class="status-item">HOT</div>
    <div class="status-item">WARM</div>
    <div class="status-item">COLD</div>
    <div class="status-item">ACTIVE BOOKINGS</div>
    <div class="status-item">DELIVERED</div>
    <div class="status-item">CLOSED</div>
</div>

<div class="dot"></div>

<div class="red-panel">

    <div class="tile">
        <img src="{{ asset('icons/reminder.png') }}" alt="Reminder">
        <p>REMINDER</p>

    </div>

    <div class="tile">
        <img src="{{ asset('icons/Call.png') }}" alt="Call">
        <p>CALL</p>

    </div>

    <div class="tile">
        <img src="{{ asset('icons/Happycall.png') }}" alt="Happy Call">
        <p>HAPPY CALL</p>

    </div>

    <div class="tile">
        <img src="{{ asset('icons/showroom.png') }}" alt="Showroom">
        <p>SHOWROOM VISIT</p>

    </div>

    <div class="tile">
        <img src="{{ asset('icons/home123.png') }}" alt="Home Visit">
        <p>HOME VISIT</p>

    </div>

    <a href="{{ url('/epr') }}" class="tile-link">
        <div class="tile">
            <img src="{{ asset('icons/epr.png') }}" alt="EPR">
            <p>EPR</p>
        </div>
    </a>


</div>

<div class="bottom-bar">



    <a href="{{ route('emi.calculator') }}" class="bottom-item">
        Cal
    </a>


    <a href="{{ url('/new-enquiry') }}" class="bottom-item">
        Enq
    </a>



</div>



@endsection