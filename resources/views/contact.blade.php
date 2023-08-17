@extends('layout')

@section('content')

<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Contact Info</h3>
        </div>
        <div class="card-body">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2926.6928906435996!2d81.47538982769184!3d29.457011082112267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a3a1c092181571%3A0xa5ba4506e4d444f8!2sBaniya%20Hotel%20And%20Lounge!5e1!3m2!1sen!2snp!4v1690263537439!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <ul class="p-4 bg-light">
                <li class="h3 p-4"><strong>Address:</strong> Bajura, Martadi, Badimalika Municipality, 08</li>
                <li class="h3 p-4"><strong>Email:</strong> Baniyahotel99@gmail.com</li>
                <li class="h3 p-4"><strong>Mobile Number:</strong> 9848437358,9848609026</li>
                <li class="h3 p-4"><strong>Telephone:</strong> 097-541089</li>


            </ul>
        </div>
    </div>

    
</div>

<script>
    function initMap() {
        var contactLocation = { lat: 29.457070, lng: 81.477821 }; // Replace with your location's latitude and longitude

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: contactLocation,
        });

        var marker = new google.maps.Marker({
            position: contactLocation,
            map: map,
            title: "Baniya Hotel & Lounge", // Replace with your desired marker title
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
@endsection
