<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/our_team.css') }}" rel="stylesheet" />
    <title>Our Team</title>
</head>
<body>

    <div class="navbar">
        <ul>
            <li><a href="{{route('/')}}">Home</a></li>
            <li><Link href="{{route('events')}}">Events</Link></li>
            <li><a href="#about">About</a></li>
            <li><Link href="{{route('our-team')}}">Our Team</Link></li>
            <li><a href="#contact">Contact</a></li>
           
          </ul>
    </div>

  
    <div class="tech-container">
        <h1 align="center">The Tech Team</h1>
        <div class="scrollable-container tech-scroll-container">
            <!-- Tech Team members -->
            @foreach ($techMembers as $member)
                <div class="member-card">
                    <div class="member-img">
                        <img src="{{ asset('/storage/'. $member->image_path)}}" alt="Member Image" />
                    </div>
                    <div class="member-info">
                        <div class="member-name">
                            <h2 align="center">{{$member->name}}</h2>
                        </div>
                        <div class="member-role">
                            <h3 align="center">{{$member->role}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Tech Team scroll buttons -->

            {{-- @if($techMembers->count() > 3) --}}
                <button class="scroll-btn tech-left"> <i class="fa fa-angle-left fa-xl" aria-hidden="true"></i></button>
                <button class="scroll-btn tech-right">  <i class="fa fa-angle-right fa-xl" aria-hidden="true"></i> </button>   
            {{-- @endif     --}}
        </div>
    </div>

    <!-- Event Management Team Container -->
    <div class="em-container">
        <h1 align="center">The Event Management Team</h1>
        <div class="scrollable-container em-scroll-container">
            <!-- Event Management Team members -->
            @foreach ($emMembers as $member)
                <div class="member-card">
                    <div class="member-img">
                        <img src="{{ asset('/storage/'. $member->image_path)}}" alt="Member Image" />
                    </div>
                    <div class="member-info">
                        <div class="member-name">
                            <h2 align="center">{{$member->name}}</h2>
                        </div>
                        <div class="member-role">
                            <h3 align="center">{{$member->role}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Event Management Team scroll buttons -->
            {{-- @if($emMembers->count() > 3) --}}
                <button class="scroll-btn em-left"> <i class="fa fa-angle-left fa-xl" aria-hidden="true"></i></button>
                <button class="scroll-btn em-right">  <i class="fa fa-angle-right fa-xl" aria-hidden="true"></i> </button>   
            {{-- @endif     --}}
        </div>
    </div>



        <!-- PR  Team Container -->
        <div class="pr-container">
            <h1 align="center">The PR Team</h1>
            <div class="scrollable-container pr-scroll-container">
                <!-- PR Team members -->
                @foreach ($prMembers as $member)
                    <div class="member-card">
                        <div class="member-img">
                            <img src="{{ asset('/storage/'. $member->image_path)}}" alt="Member Image" />
                        </div>
                        <div class="member-info">
                            <div class="member-name">
                                <h2 align="center">{{$member->name}}</h2>
                            </div>
                            <div class="member-role">
                                <h3 align="center">{{$member->role}}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- PR  scroll buttons -->
                <button class="scroll-btn pr-left"> <i class="fa fa-angle-left fa-xl" aria-hidden="true"></i></button>
                <button class="scroll-btn pr-right">  <i class="fa fa-angle-right fa-xl" aria-hidden="true"></i> </button>   
            </div>
        </div>

    
    <!-- Design  Team Container -->
    <div class="design-container">
        <h1 align="center">The Design Team</h1>
        <div class="scrollable-container design-scroll-container">
            <!-- Design \Team members -->
            @foreach ($designMembers as $member)
                <div class="member-card">
                    <div class="member-img">
                        <img src="{{ asset('/storage/'. $member->image_path)}}" alt="Member Image" />
                    </div>
                    <div class="member-info">
                        <div class="member-name">
                            <h2 align="center">{{$member->name}}</h2>
                        </div>
                        <div class="member-role">
                            <h3 align="center">{{$member->role}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Design Team scroll buttons -->
            <button class="scroll-btn design-left"> <i class="fa fa-angle-left fa-xl" aria-hidden="true"></i></button>
            <button class="scroll-btn design-right">  <i class="fa fa-angle-right fa-xl" aria-hidden="true"></i> </button>   
        </div>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const techScrollContainer = document.querySelector(".tech-scroll-container");
    const emScrollContainer = document.querySelector(".em-scroll-container");
    const prScrollContainer = document.querySelector(".pr-scroll-container");
    const designScrollContainer = document.querySelector(".design-scroll-container");


    document.querySelector(".tech-left").addEventListener("click", function () {
        techScrollContainer.scrollBy({
            left: -techScrollContainer.clientWidth,
            behavior: "smooth",
        });
    });

    document.querySelector(".tech-right").addEventListener("click", function () {
        techScrollContainer.scrollBy({
            left: techScrollContainer.clientWidth,
            behavior: "smooth",
        });
    });

    document.querySelector(".em-left").addEventListener("click", function () {
        emScrollContainer.scrollBy({
            left: -emScrollContainer.clientWidth,
            behavior: "smooth",
        });
    });

    document.querySelector(".em-right").addEventListener("click", function () {
        emScrollContainer.scrollBy({
            left: emScrollContainer.clientWidth,
            behavior: "smooth",
        });
    });

    document.querySelector(".pr-left").addEventListener("click", function () {
        prScrollContainer.scrollBy({
            left: -prScrollContainer.clientWidth,
            behavior: "smooth",
        });
    });

    document.querySelector(".pr-right").addEventListener("click", function () {
        prScrollContainer.scrollBy({
            left: prScrollContainer.clientWidth,
            behavior: "smooth",
        });
    });

    document.querySelector(".design-left").addEventListener("click", function () {
        designScrollContainer.scrollBy({
            left: -designScrollContainer.clientWidth,
            behavior: "smooth",
        });
    });

    document.querySelector(".design-right").addEventListener("click", function () {
        designScrollContainer.scrollBy({
            left: designScrollContainer.clientWidth,
            behavior: "smooth",
        });
    });
});


    </script>
</body>
</html>
