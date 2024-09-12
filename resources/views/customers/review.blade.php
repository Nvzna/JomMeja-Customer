<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>

    <link rel="stylesheet" href="{{ url('/CSS/stylesheet.css') }}" />

    <link rel="shortcut icon" href="images/fav-icon.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!--Using Font Awesone-->
<script src="https:/kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous" > </script>

</head>
<body>

    <section id="testimonials" >
        <!--Heading-->
        <div class="testimonial-heading">
            <span>Reviews</span>
            <h1>Our Customers Says</h1>
        </div>

        <div class="create-review">
            <a href="{{route('customer.fillReview')}}" class="create-review">
                <button type="button"><h5>Submit a review</h5></button>
            </a>
        </div>

        <!--Testimonial Part-->
        <div class="testimonial-box-container">

            <!--Box 1-->
            <div class="testimonial-box">
                
                <!--Top Part-->
                <div class="box-top">

                    <!--Profile Picture-->
                    <div class="profile">
                        <!--images-->
                        <div class="profile-img">
                            <img src="{{ asset('IMAGE/rev1.png') }}" />
                        </div>
                        <!--Name and username-->
                        <div class="name-user">
                            <strong>Wiliam Smith</strong>
                            <span>@willsmith</span>
                        </div>
                    </div>

                    <!--Review-->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i> <!--Empty Star Part-->
                        
                    </div>

                </div>

                <!--Comments------------>
                <div class="client-comment">
                    <p>"Delicious pasta with rich sauce, though a bit small. Still a great meal!"</p>
                </div>


            </div>

            <!--Testimonial Box 2-->
            <div class="testimonial-box">
                
                <!--Top Part-->
                <div class="box-top">

                    <!--Profile Picture-->
                    <div class="profile">
                        <!--images-->
                        <div class="profile-img">
                            <img src="{{ asset('IMAGE/rev2.png') }}" />
                        </div>
                        <!--Name and username-->
                        <div class="name-user">
                            <strong>Wiliam Smith</strong>
                            <span>@willsmith</span>
                        </div>
                    </div>

                    <!--Review-->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i> <!--Empty Star Part-->
                        
                    </div>

                </div>

                <!--Comments------------>
                <div class="client-comment">
                    <p>"I tried the sushi platter at Sushi World. The presentation was impressive, but the fish had a stronger taste than I prefer, and the rice was a bit dry."</p>
                </div>


            </div>

            <!--Testimonial Box 3-->
            <div class="testimonial-box">
                
                <!--Top Part-->
                <div class="box-top">

                    <!--Profile Picture-->
                    <div class="profile">
                        <!--images-->
                        <div class="profile-img">
                            <img src="{{ asset('IMAGE/rev3.png') }}" />
                        </div>
                        <!--Name and username-->
                        <div class="name-user">
                            <strong>Wiliam Smith</strong>
                            <span>@willsmith</span>
                        </div>
                    </div>

                    <!--Review-->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i> <!--Empty Star Part-->
                        
                    </div>

                </div>

                <!--Comments------------>
                <div class="client-comment">
                    <p>"The burger at Grill House was outstanding! The patty was juicy and well-seasoned, topped with fresh ingredients and nestled in a perfectly toasted bun."</p>
                </div>


            </div>

            <!--Testimonial Box 4-->
            <div class="testimonial-box">
                
                <!--Top Part-->
                <div class="box-top">

                    <!--Profile Picture-->
                    <div class="profile">
                        <!--images-->
                        <div class="profile-img">
                            <img src="{{ asset('IMAGE/rev4.png') }}" />
                        </div>
                        <!--Name and username-->
                        <div class="name-user">
                            <strong>Wiliam Smith</strong>
                            <span>@willsmith</span>
                        </div>
                    </div>

                    <!--Review-->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i> <!--Empty Star Part-->
                        
                    </div>

                </div>

                <!--Comments------------>
                <div class="client-comment">
                    <p>"Fantastic burger—juicy patty, crispy fries, and excellent service. Highly recommend!".</p>
                </div>


            </div>

            <!--Testimonial Box 5-->
            <div class="testimonial-box">
                
                <!--Top Part-->
                <div class="box-top">

                    <!--Profile Picture-->
                    <div class="profile">
                        <!--images-->
                        <div class="profile-img">
                            <img src="images/rev2.png" />
                        </div>
                        <!--Name and username-->
                        <div class="name-user">
                            <strong>Wiliam Smith</strong>
                            <span>@willsmith</span>
                        </div>
                    </div>

                    <!--Review-->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i> <!--Empty Star Part-->
                        
                    </div>

                </div>

                <!--Comments------------>
                <div class="client-comment">
                    <p>"Great pizza with a crispy crust and fresh toppings. Only wish there was more cheese. Overall, very satisfying!"</p>
                </div>


            </div>
            
        </div>

    </section>
    
</body>
</html>