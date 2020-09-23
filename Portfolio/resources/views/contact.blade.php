<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">

  <!-- =====BOX ICONS===== -->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

  <title>Portfolio website</title>
</head>
<body>
<section class="contact section" id="contact">
    <h2 class="section-title">Contact</h2>

   

    <div class="contact__container bd-grid">
        <form method="post" action="{{url('/contact')}}" class="contact__form">
          @csrf 
          <div class="form-group">
            <input type="text" name="name" placeholder="Name" class="contact__input {{ $errors->has('name') ? 'error' : '' }}">
           
          </div>
          <div class="form-group">
            <input type="mail" name="mail" placeholder="Email" class="contact__input {{ $errors->has('mail') ? 'error' : '' }}">
            
          </div>
          <div class="form-group">
            <textarea name="message" id="" cols="0" rows="10" class="contact__input {{ $errors->has('message') ? 'error' : '' }}"></textarea>
           
          </div>
            <input type="submit" value="Send" class="btn">
        </form>
    </div>
   
  </section>
    
  </body>
