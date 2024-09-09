<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href=" {{ url('CSS/fillReview.css ') }}">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" >


    <title>Form Review</title>
</head>
<body>

    <div class="wrapper">
        <h3>Your review provides valuable insights.</h3>
        <form action="#">
            <div class="rating">
                <input type="number" name="" hidden>
                <i class="bx bx-star star" style="--i: 0;"></i>
                <i class="bx bx-star star" style="--i: 1;"></i>
                <i class="bx bx-star star" style="--i: 2;"></i>
                <i class="bx bx-star star" style="--i: 3;"></i>
                <i class="bx bx-star star" style="--i: 4;"></i>
            </div>
            <textarea name="opinion" cols="30" rows="5" placeholder="Your Opinion...." ></textarea>
            <div class="btn-group">
                <button type="submit" class="btn submit">Submit</button>
                <button class="btn cancel">Cancel</button>
            </div>
        </form>
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
    </script>
</body>
</html>