var typed = new Typed(".multiple-text", {
    strings: ["Vote Calon Ketua!", "Pinjam Barang?", "Telusuri Informasi", "Tentang HIMA RPL"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 100,
    loop: true

})
   // Get the element to trigger the hover event
   var hoverableElement = document.querySelector('.visi-misi-img1');
   var hoverableExit = document.querySelector('.visi-misi-container1');
   var visi = document.querySelector('.visi');

   // Attach a listener for the hover event
   hoverableElement.addEventListener('mouseenter', function() {
     hoverableElement.style.display = "none";
     visi.style.display = "block";
     document.getElementById('title').style.cssText ="margin-top : -5px; margin-bottom : 5px;";
   });

   // Attach a listener for the unhover event
   hoverableExit.addEventListener('mouseleave', function() {
       hoverableElement.style.display = "flex";
       visi.style.display = "none";
       document.getElementById('title').style.cssText ="margin-top : ''; margin-bottom : '';";
   });

   var hoverableElement2 = document.querySelector('.visi-misi-img2');
   var hoverableExit2 = document.querySelector('.visi-misi-container2');
   var misi = document.querySelector('.misi');

   hoverableElement2.addEventListener('mouseenter', function() {
     hoverableElement2.style.display = "none";
     misi.style.display = "block";
     document.getElementById('title2').style.cssText ="margin-top : -5px; margin-bottom : 5px;";
   });

   // Attach a listener for the unhover event
   hoverableExit2.addEventListener('mouseleave', function() {
       hoverableElement2.style.display = "flex";
       misi.style.display = "none";
       document.getElementById('title2').style.cssText ="margin-top : ''; margin-bottom : '';";
   });

function next1() {
    document.getElementById( 'paslon1' ).style.display = 'none' ;
    document.getElementById( 'paslon2' ).style.cssText = "Display : flex; Opacity : 0; animation: slideRight .5s ease forwards;";
}

function next2() {
    document.getElementById( 'paslon2' ).style.display = 'none';
    document.getElementById( 'paslon3' ).style.cssText = "Display : flex; Opacity : 0; animation: slideRight .5s ease forwards;";
}

function next3() {
    document.getElementById( 'paslon3' ).style.display = 'none';
    document.getElementById( 'paslon1' ).style.cssText = "Display : flex; Opacity : 0; animation: slideRight .5s ease forwards;";
}

function previous1() {
    document.getElementById( 'paslon1' ).style.display = 'none';
    document.getElementById( 'paslon3' ).style.cssText = "Display : flex; Opacity : 0; animation: slideRight .5s ease forwards;";
}

function previous2() {
    document.getElementById( 'paslon2' ).style.display = 'none';
    document.getElementById( 'paslon1' ).style.cssText = "Display : flex; Opacity : 0; animation: slideRight .5s ease forwards;";
}

function previous3() {
    document.getElementById( 'paslon3' ).style.display = 'none';
    document.getElementById( 'paslon2' ).style.cssText = "Display : flex; Opacity : 0; animation: slideRight .5s ease forwards;";
}

function ChangeToPaslon1() {
    document.getElementById( 'paslon1' ).style.cssText = "Display : flex; Opacity : 0; animation: slideRight .5s ease forwards;";
    document.getElementById( 'paslon2' ).style.display = 'none';
    document.getElementById( 'paslon3' ).style.display = 'none';
}

function ChangeToPaslon2() {
    document.getElementById( 'paslon1' ).style.display = 'none';
    document.getElementById( 'paslon2' ).style.cssText = "Display : flex; Opacity : 0; animation: slideRight .5s ease forwards;";
    document.getElementById( 'paslon3' ).style.display = 'none';
}

function ChangeToPaslon3() {
    document.getElementById( 'paslon1' ).style.display = 'none';
    document.getElementById( 'paslon2' ).style.display = 'none';
    document.getElementById( 'paslon3' ).style.cssText = "Display : flex; Opacity : 0; animation: slideRight .5s ease forwards;";
}

var myButton = document.getElementById("buttonNext01");

myButton.onclick = function() {
    alert("Tombol telah diklik");
  };


  myButton.addEventListener("click", function() {
    alert("Tombol telah diklik");
  });

  let popupbg = document.getElementById('popupbg');
  let popup = document.getElementById('popupbg');

function openPopup(){
    document.getElementById('popupbg').style.cssText ="visibility: visible; top: 50%; transform: translate(-50%, -50%) scale(1);";
    document.getElementById('popup').style.cssText ="visibility: visible; top: 50%; transform: translate(-50%, -50%) scale(1);";
    document.body.classList.add("disable-scrolling");
}

function closePopup(){
    document.getElementById('popupbg').style.cssText ="visibility: hidder; top: 0; transform: translate(-50%, -50%) scale(0.1);";
    document.getElementById('popup').style.cssText ="visibility: hideen; top: 0; transform: translate(-50%, -50%) scale(0.1);";
    document.body.classList.remove("disable-scrolling");
}

function disableScroll() {
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,

        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}

function enableScroll() {
    window.onscroll = function() {};
}

 