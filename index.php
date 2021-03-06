<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeelmSoGood</title>

    <!-- reset css link -->
    <link rel="stylesheet" href="./css/reset.css">

    <!-- style css link -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- media css link -->
    <link rel="stylesheet" href="./css/media.css">

    <!-- animation css link -->
    <link rel="stylesheet" href="./css/animation.css">



    <!-- font awesome link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>



</head>
<body>
    <div class="wrap">     
        <div class="center">     

            <!-- header -->
            <?php include $_SERVER["DOCUMENT_ROOT"]. "/movie_api/include/header.php";?>         
           
        
            
            <!-- serach section -->
            <div class="searchSec">
                <div class="quoteTxt">
                    <h2><i class="fas fa-quote-left"></i>Do The Next Right Thing<i class="fas fa-quote-right"></i></h2>
                </div>
                <div class="searchBox">
                    
                    <input type="text" class="searchInput focusEvent" placeholder="search">
                    <button type="button" class="sendBtn" onkeyup="keydown();"><i class="fas fa-search"></i></button>

                    
                </div>                    
                <!-- end of search box -->  
                

                
            </div>
            <!-- end of search section -->
          

                       
            
            
        </div>

    </div>


    

    <!-- jquery CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    

    <!-- latest page jQuery link -->
    <!-- <script src="./js/recent.js"></script> -->

   


    <script>
        $(function(){
            function searchMovie(){
                let searchResult=$(".searchInput").val();
                if(!searchResult){
                    alert("검색어를 입력해주세요");
                    return false;
                }
                location.href="./search.php?key=" + searchResult;
            }


            $(".sendBtn").click(function(){
                searchMovie();
            });

            // press enter
            document.addEventListener('keydown', function(e){
                const keyCode = e.keyCode;
                if(keyCode == 13){
                    searchMovie();
                }
            });
           
        });

    
    </script>
</body>
</html>