<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <div class="navbar">
        <ul>
            <li><Link href="{{route('/')}}">Home</Link></li>
            <li><Link href="{{route('events')}}">Events</Link></li>
            <li><a href="#about">About</a></li>
            <li><a href="{{route('our-team')}}">Our Team</a></li>
            <li><a href="#contact">Contact</a></li>
            <li> <i class="fa fa-bars" id="menu-btn" aria-hidden="true"></i></li>
          </ul>

          
    </div>

   <div class="background">
       <video autoplay loop  muted playsinline>
           <source src="images/tech-video.mp4" type="video/mp4">
           Your browser does not support the video tag.
       </video>
   </div>

   <div class="mid">
       <p>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</p>
       <h1>FREE OPEN-SOURCE SOFTWARE CLUB SREC</h1>
       <h5 align="center">Unlocking the power of open-source: Your gateway to a community-driven world of free software excellence.</h5>
       <div class="btn">
           <!-- <a class="simple" href="#">Get Started</a> -->
           <a class="border" href="#">Explore</a>
       </div>
   </div>

    <div class="block-2" data-aos="fade-up">
        <div class="about">
            <h1 align="center"> About Us</h1>

            <div class="about-content">
                <p>
                    FOSS is a passionate community of individuals dedicated to the principles of free and open-source software (FOSS). We believe in the transformative power of collaboration and the freedom to innovate. Our diverse community consists of developers, enthusiasts, and advocates who share a common goal – to foster the growth and adoption of open-source technologies
                </p>
            </div>

            <div class="vision-mission">
                <div class="vision" data-aos="flip-left">
                <div> <h1 align="center">OUR VISION</h1></div>
                    <h3 align="center">Empowering Innovation, Embracing Freedom</h3>
                    <p>
                        At FOSS, we envision a world where the transformative power of open-source software is harnessed to drive innovation, foster collaboration, and empower individuals and organizations globally. We strive to be a catalyst for positive change, where technology is accessible, inclusive, and built upon the principles of freedom and transparency.
                    </p>
                </div>

                <div class="mission" data-aos="flip-right">
                    <div> <h1 align="center">OUR MISSION</h1></div>
                    <h3 align="center">Fostering Collaboration, Enabling Growth</h3>
                    <p>
                        At the heart of FOSS lies a mission to promote and advance the principles of free and open-source software. We are committed to creating a dynamic and inclusive community that  provide a collaborative space for individuals to work together on innovative open-source projects, embracing diversity of thought and skill.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="block-3" data-aos="fade-up">
        <div class="what-we-do">
            <h1 align="center">What Do We Do?</h1>

            <div class="part-1">
                <div class="hackathon">
                    <div>
                        <i class="fa-solid fa-trophy fa-2xl" style="color: #ffffff;"></i>
                    </div>
                    
                    <div>
                        <h2 align="center">Hackathons and Collaborative Coding Events</h2>
                        <p>
                            Unleash your creativity and problem-solving skills in our hackathons and collaborative coding events. Join forces with fellow enthusiasts, tackle real-world challenges, and contribute to open-source projects. Be part of a dynamic and supportive community that thrives on the excitement of coding marathons.
                        </p>
                    </div>
                </div>

                <div class="coding">
                    <div>
                        <i class="fa-solid fa-code-merge fa-2xl" style="color: #ffffff;"></i>
                    </div>
                    
                    <div>
                        <h2 align="center">Contributing to Open Source Projects </h2>
                        <p>
                            Make a meaningful impact by contributing to open-source projects. Join us in the spirit of collaboration, where your skills and ideas can shape the future of technology. Whether you're passionate about coding, documentation, or testing, there's a place for you to leave your mark on the open-source landscape.
                        </p>
                    </div>
                </div>
            </div>


            <div class="part-2">
                <div class="tech-talk">
                    <div>
                        <i class="fa-solid fa-microphone fa-2xl" style="color: #ffffff;"></i>
                    </div>
                    
                    <div>
                        <h2 align="center">Tech Talks and Discussions</h2>
                        <p>
                            Stay informed and inspired with our tech talks and discussions. Engage with industry experts, thought leaders, and fellow members as we explore the latest trends, advancements, and challenges in the world of open-source software. From deep dives into specific technologies to broader discussions about the philosophy of open source.
                        </p>
                    </div>
                </div>

                <div class="workshop">
                    <div>
                        <i class="fa-solid fa-laptop-code fa-2xl" style="color: #ffffff;"></i>
                    </div>
                    
                    <div>
                        <h2 align="center">Workshops and Learning Sessions</h2>
                        <p>
                            Dive into the world of open-source with our hands-on workshops and learning sessions. Whether you're a beginner or an experienced developer, join us to explore the latest technologies, best practices, and innovative approaches in the realm of free and open-source software. Have a jump start by taking part in our learning sessions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-4" style="background-image: url({{asset('images/logo_background.jpg')}})" data-aos="fade-up"> 
        
       
            <h1 align="center">Contact Us</h1>

            <div class="footer-contents">
                <div class="social">
                    <div class="email">
                        <div>
                            <i class="fa-solid fa-envelope fa-2xl" style="color: #ffffff;"></i>
                        </div>
                        <div>
                            <a href="www.srecfoss@gmail.com">srecfoss@gmail.com</a>
                        </div>
                    </div>    
                    
                    <div class="linkedin">
                        <div>
                            <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                        </div>
                        <div>
                            <a href="https://www.linkedin.com/in/free-open-source-software-club-srec-5a4b21299/">LinkedIn | SRECFOSS</a>
                        </div>
                    </div>

                    <div class="instagram">
                        <div>
                            <i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i>
                        </div>
                        <div>
                            <a href="https://instagram.com/srec_foss?igshid=OGQ5ZDc2ODk2ZA==">@srec_foss</h3>
                        </div>
                    </div>

                </div>

                <div class="contact-form">
                    <form action="" method="">
                        <div class="info">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" required />
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" required />
                            </div>
                        </div>

                        <div class="message">
                            <label for="message">Message:</label>
                            <textarea name="message" id="message" cols="30" rows="1"></textarea>
                        </div>

                        <button class="button-54" role="button">Submit</button>

                    </form>
                </div>
            </div>
    </div>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 120, // offset (in px) from the original trigger point
        delay: 100, // values from 0 to 3000, with step 50ms
        duration: 400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
      });

    </script>
      
</body>
</html>