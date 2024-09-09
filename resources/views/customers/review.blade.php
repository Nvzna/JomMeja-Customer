<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdeliver.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('CSS/stylesheet.css') }}" />
    <title>Review Your Experience</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="container_left">
                <h1>Read what our customers love about us</h1>
                <p>Over 200 companies from diverse sectors consult us to enhance the user experience 
                    of their products and services.
                </p>
                <p> 
                    We have helped companies increase their customer base and generate
                    multifold revenue with our service
                </p>
                <button><a href="{{ route('customer.fillReview') }}" class="">Leave a Review</a></button>
            </div>
            <div class="container_right">
                <div class="card">
                    <img src="{{ asset('IMAGE/rev2.png') }}" alt="user" />
                    <div class="card_content">
                        <span><i class="ri-double-quotes-1"></i></span>
                        <div class="card_details">
                            <p>
                                we had a great time collaborating with the Filament team.
                                They have my high recommendation!
                            </p>
                            <h4>- Marccus Stephen</h4>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('IMAGE/rev3.png') }}" alt="user" />
                    <div class="card_content">
                        <span><i class="ri-double-quotes-1"></i></span>
                        <div class="card_details">
                            <p>
                                we had a great time collaborating with the Filament team.
                                They have my high recommendation!
                            </p>
                            <h4>- Marccus Stephen</h4>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <img src="{{ asset('IMAGE/rev4.png') }}" alt="user" />
                    <div class="card_content">
                        <span><i class="ri-double-quotes-1"></i></span>
                        <div class="card_details">
                            <p>
                                we had a great time collaborating with the Filament team.
                                They have my high recommendation!
                            </p>
                            <h4>- Marccus Stephen</h4>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </header>
    
</body>
</html>