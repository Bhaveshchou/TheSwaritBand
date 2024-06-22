<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bookings</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Poiret+One&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="backi">

  <?php
    include("header.php");
    ?>

<div class="main_bg">
  <div class="form">
    <div class="form-text">
      <h1>
        <span><img src="" alt=""></span>Book Now<span> <img src="" alt=""></span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, mollitia?</p>
        <div>
          <div class="main-form">
             <form action="index.php" method="get">
              <div>
                <span>Name</span>
                <input type="text" name="name" id="name" placeholder="Write Name" required> 
                </div>
                <div>
                <span>Email Address</span>
                <input type="text" name="name" id="name" placeholder="Write Email Address" required> 
                </div>
                <div>
                <span>Number of People</span>
                <select name="people" id="people" >
                  <option value="">People</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select>
                </div>
                <div>
                <span>Event Time</span>
                <input type="text" name="name" onfocus="this.type='time'" onblur="this.type='text'" id="name" placeholder="Select Time" required> 
                </div>
                <div>
                <span>Event Date</span>
                <input type="date" name="name" onfocus="this.type='date'" onblur="this.type='text'" id="name" placeholder="Select Date" required> 
                </div>
                <div>
                <span>Phone Number</span>
                <input type="text" name="name" id="name" placeholder="Write Number" required> 
                </div>
                <div>
                <input type="submit" value="SUBMIT" name="name" id="submit"> 
</div>
          
</div>
</div>
  </div>
</div>
</div>

    <?php
    include("footer.php");
    ?>

   
    <script>
      let loadmorebtn = document.querySelector('#load-more');
      let currentitem = 3;
      loadmorebtn.onclick = () => {
        let boxes = [...document.querySelectorAll('.qqw .box-container .box')];
        for (var i = currentitem; i < currentitem + 3; i++) {
          boxes[i].style.display = 'inline-block';
        }
        currentitem += 3;

        if (currentitem >= boxes.length) {
          loadmorebtn.style.display = 'none';
        }
      }  
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>

</html>