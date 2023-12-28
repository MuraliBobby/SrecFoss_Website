<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/events.css')}}" rel="stylesheet" />
    <title>Events</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="{{route('/')}}">Home</a></li>
            <li><Link href="{{route('events')}}">Events</Link></li>
            <li><a href="#about">About</a></li>
            <li><a href="{{route('our-team')}}">Our Team</a></li>
            <li><a href="#contact">Contact</a></li>
           
          </ul>
    </div>

    <div class="event_container">

        @foreach ($events as $event )
            <x-splade-toggle>
                <div class="event_details">

                    <div class="event_title">
                        <div class="name">
                            <h1> {{$event->event_name}} <span style="font-size:1rem"> ({{$event->event_status}}) </span> </h1>
                        </div>

                        <div class="btn">
                            <button class="show_details" @click.prevent="toggle" v-show="!toggled">Show More!</button>
                            <button class="show_details" @click.prevent="toggle" v-show="toggled">Show Less!</button>
                        </div>
                    </div>    
                   
                    <div class="more_details" v-show="toggled">

                        <div class="event_des">
                            <p>{{$event->event_description}}</p>
                        </div>

                        <div class="date_venue">
                            <p><b>Event Date :</b> {{$event->event_date}}</p>
                            <p><b>Event Venue : </b>{{$event->event_venue}}</p>
                            <p><b>Event Duration : </b>{{$event->event_duration}}</p>
                            <p><b>Event Status :</b> {{$event->event_status}}</p>
                        </div>


                        <div class="certificates">

                            @if ($event->participation_certificate == 1)
                                <p><b>Participation Certificate : <i class="fa fa-check" aria-hidden="true"></i></b></p>
                            @else
                                <p><b>Participation Certificate : <i class="fa fa-times" aria-hidden="true"></i></i></b></p>
                            @endif

                            @if ($event->winner_runner_certificate == 1)
                                <p><b>Winner / Runner Certificate : <i class="fa fa-check" aria-hidden="true"></i></b></p>
                            @else
                                <p><b>Winner / Runner Certificate : <i class="fa fa-times" aria-hidden="true"></i></i></b></p>
                            @endif

                            @if ($event->cash_prize == 1)
                                <p><b>Cash Prize: <i class="fa fa-check" aria-hidden="true"></i></b></p>
                            @else
                                <p><b>Cash Prize : <i class="fa fa-times" aria-hidden="true"></i></i></b></p>
                            @endif

                        </div>

                        <div class="links">
                            <a href="{{$event->registration_link}}"><b>Registration Link</b></a> &nbsp;&nbsp;&nbsp;
                            <a href="{{$event->poster_path}}"><b>Poster Link</b></a>
                        </div>

                   </div>
                </div>

            </x-splade-toggle>        
        @endforeach

    </div>


    {{-- <div class="carousel">
        @foreach ($eventImages as $image)
            <img src="{{ asset('event_pics/' . $image) }}" alt="Carousel Image">        
        @endforeach
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const carousel = document.querySelector('.carousel');
            const images = carousel.querySelectorAll('img');
            let currentImageIndex = 0;
    
            function showNextImage() {
                images[currentImageIndex].classList.remove('active');
                currentImageIndex = (currentImageIndex + 1) % images.length;
                images[currentImageIndex].classList.add('active');
            }
    
            setInterval(showNextImage, 5000); // Change image every 5 seconds
        });
    </script> --}}




</body>
</html>