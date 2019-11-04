

  var images = [
                          "images/image1.jpg",
                          "images/image2.jpg",
                          "images/image3.jpg",
                          "images/image4.jpg"
                      ];
            var i = 0;
            
            function mySlider()
            {
               document.getElementById('slide').src = images[i];
               
               if(i < images.length - 1)
               {
                   i++;
               }

               else
               {
                   i = 0;
               }
               
               setTimeout("mySlider()",2500);
            }
  
          
