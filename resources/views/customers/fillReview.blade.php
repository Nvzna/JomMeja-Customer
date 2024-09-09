<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/CSS/fillReview.css') }}">
    <style>
       
    </style>
</head>
<body>

<div class="review-container">
    <div class="d-flex justify-content-between">
        <h5>Share Review</h5>
        <span class="bx bx-x clickable" onclick="myFunction()"></span>
    </div>
    <h3>How was your experience?</h3>
    <p>Your review will help us improve our product and make it user friendly for more users.</p>

    <div class="rating">
        <input type="number" name="" hidden>
        <i class="bx bx-star star" style="--i: 0;"></i>
        <i class="bx bx-star star" style="--i: 1;"></i>
        <i class="bx bx-star star" style="--i: 2;"></i>
        <i class="bx bx-star star" style="--i: 3;"></i>
        <i class="bx bx-star star" style="--i: 4;"></i>
    </div>

    <textarea class="feedback-box" placeholder="Share feedback..."></textarea>

    <button class="btn-submit">Submit Review</button>
</div>

<script>
    const allStar = document.querySelectorAll('.rating .star')
    const ratingValue = document.querySelector('.rating input')

    allStar.forEach((item, idx) => {
        item.addEventListener('click', function(){
            let click = 0
            ratingValue.value = idx + 1
            console.log(ratingValue.value)


            allStar.forEach(i=> {
                i.classList.replace('bxs-star', 'bx-star')
                i.classList.remove('active')
            })
            for(let i=0; i<allStar.length; i++){
                if(i <= idx){
                    allStar[i].classList.replace('bx-star', 'bxs-star')
                    allStar[i].classList.add('active')
                }else{
                    allStar[i].style.setProperty('--i', click)
                    click++;
                }
            }
        })
    })

    function myFunction() {
    const userConfirmed = confirm('Are you sure you want to leave this page?');
    
    if (userConfirmed) {
      // User clicked "Yes"
      //alert('You clicked Yes!');
      window.location.href = 'https://getbootstrap.com/docs/5.0/getting-started/introduction/'
      // Add any additional code for "Yes" response here
    } else {
      // User clicked "No"
      //alert('You clicked No!');
      // Add any additional code for "No" response here
    }
  }
</script>

</body>
</html>
