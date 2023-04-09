<?php
   include("index.php");
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="Content-Language" content="$ACCEPT_LANGUAGE">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <title> </title>
      <style type="text/css">
         .bg01 {
         background-color: #E3E9F2;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
               <a class="navbar-brand" href="#">Navbar</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="./order.html">訂單查詢</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      <div class="container">
         <h1>HOME</h1>
         <?= var_dump($posts); ?>
         <div class="row">
            <div class="col-md-10">
               <table>
                  <tr>
                     <th>Title</th>
                     <th>createdAt</th>
                  </tr>
                  <?php 
                     if(is_array($posts)){ 
                     foreach($posts as $row){ ?>
		              <tr>
                     <td><?php echo $row['title']??''; ?></td>
                     <td><?php echo $row['createdAt']??''; ?></td>
                  </tr>
                  <?php }} ?>
               </table>
            </div>
         </div>
         <div class="row">
            <form action="<?php $_PHP_SELF ?>" method="post">
               <input type="text" name="Email" />
               <button name="btn_email" value="send">送出</button>
            </form>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
         crossorigin="anonymous"></script>
   </body>
</html>
