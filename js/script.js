$(document).ready(function(){
  $(document).scroll(function () {
      $(".nav").css("background", "#379683")    
      $(".nav").css('box-shadow', '0.25px 0.5px 5px #1b1b1b')
      $(".logo svg").css("stroke", "beige")
  
    })
    $(document).scroll(function () {
      if ($(window).scrollTop() === 0) {
        $(".nav").css("background", "")
        $(".nav").css("box-shadow", "")    
         
      }
    })

   //Pre-loader

   function preLoader(){
    $(window).on("load",function(){
      $(".loader-wrapper").fadeOut(500,"swing");
      $('body').removeClass('loading');
      document.getElementById('page-back').style.animation='page-back 2s ease-in-out';
      document.getElementById('page-front').style.animation='page-front 2s ease-in-out';
    });
   }
    preLoader();


 


          //JavaScript
          const navSlide = () =>{
            const burger=document.querySelector('.burger');
            const nav=document.querySelector('.nav-links');
            const navLinks=document.querySelectorAll('.pseudo');
            
            burger.addEventListener('click',()=>{
                //Toggle Nav
                nav.classList.toggle('nav-active');
        
        
                //Burger animation
                burger.classList.toggle('toggle');
            });
        
          
        }
        navSlide();
        
    
      
   


    });
    

    //Adding Rich text editor

   ClassicEditor.create(document.querySelector("#body"), {
  toolbar: [
    "heading",
    "|",
    "bold",
    "italic",
    "link",
    "bulletedList",
    "numberedList",
    "blockQuote"
  ],
  heading: {
    options: [
      { model: "paragraph", title: "Paragraph", class: "ck-heading_paragraph" },
      {
        model: "heading1",
        view: "h1",
        title: "Heading 1",
        class: "ck-heading_heading1"
      },
      {
        model: "heading2",
        view: "h2",
        title: "Heading 2",
        class: "ck-heading_heading2"
      }
    ]
  }
}).catch(error => {
  console.log(error);
});




