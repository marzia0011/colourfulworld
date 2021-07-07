
  let mypiclogo = document.querySelector('img');
  setInterval(function(){
     let mySrc = mypiclogo.getAttribute('src');
     if(mySrc === 'images/logo-1.jpg')
     {
         mypiclogo.setAttribute('src','images/logo-2.jpg');
     }
     else if(mySrc === 'images/logo-2.jpg')
     {
         mypiclogo.setAttribute('src','images/logo-3.jpg');
     }
  
     else if (mySrc === 'images/logo-3.jpg')
     {
         mypiclogo.setAttribute('src','images/logo-4.jpg');
     }
  
     else if (mySrc === 'images/logo-4.jpg')
     {
         mypiclogo.setAttribute('src','images/logo-5.jpg');
     }
  
     else if (mySrc === 'images/logo-5.jpg')
     {
         mypiclogo.setAttribute('src','images/logo-6.jpg');
     }
  
     else if (mySrc === 'images/logo-6.jpg')
     {
         mypiclogo.setAttribute('src','images/logo-7.jpg');
     }
     else if (mySrc === 'images/logo-7.jpg')
     {
         mypiclogo.setAttribute('src','images/logo-8.jpg');
     }
     else if (mySrc === 'images/logo-8.jpg')
     {
         mypiclogo.setAttribute('src','images/logo-9.jpg');
     }

     else if (mySrc === 'images/logo-9.jpg')
     {
         mypiclogo.setAttribute('src','images/logo-10.jpg');
     }
    else{
        mypiclogo.setAttribute('src','images/logo-1.jpg');
    }
  
  }, 2000);
