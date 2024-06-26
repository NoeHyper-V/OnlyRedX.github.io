<!DOCTYPE html>
<html lang="es">
<head>
  <script src="/JS-BD/Login_Register.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<title>Registrar | ORX</title>
<link rel="stylesheet" href="CSS/styleR-i.css">


<link rel="shortcut icon" href="/Imagenes/IMG-HOME/IMG-INICIO/LogoORX.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="/Frameworks/font-awesomev2.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
      .hangarInputBase-root:focus-within .hangarSvgIcon-root i {
      color: rgb(49, 162, 214); 
    }
    #orx:hover{
    color: rgb(49, 162, 214);
  }

  .contenedor {
    display: flex;
    align-items: center;

  }
  .contenedor p {
    margin-left: 10px;
    text-align: left;
    margin-top: -32px;
  }
  #check{
    margin-top: -80px;
    color: red;
  }
  .contenedor input[type="checkbox"] {
    transform: scale(1.5);
 

  }

</style>

</head>

<body>
  <script>
    /*
    function devtoolIsOpening() {
        console.clear();
        let before = new Date().getTime();
        debugger;
        let after = new Date().getTime();
        if (after - before > 200) {
            document.write(" Dont open Developer Tools. ");
            window.location.replace("https://www.google.com");
        }
        setTimeout(devtoolIsOpening, 100);
    }
    devtoolIsOpening();*/
    </script>
  <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1361" height="521"></canvas></div>
  <div id="page">
<div class="hangar-auth">
<div class="hangar-form">
<img id="animimg" draggable="false" src="/Imagenes/IMG-HOME/IMG-INICIO/LogoORX.png" alt="Login" class="hangar-logo">
<h1 class="hangar-auth_title">
  <i class="bi bi-person-fill-add"></i>
<span>Registrar | ORX</span>
</h1>
<form class="hangar-fieldset2">

<div class="hangarFormControl-root hangarTextField-root jss1" data-validate="Username is required">
  <label class="hangarFormLabel-root hangarInputLabel-root hangarInputLabel-formControl hangarInputLabel-animated hangarInputLabel-shrink hangarInputLabel-outlined" data-shrink="true">Nombre de usuario</label>
  <div class="hangarInputBase-root hangarOutlinedInput-root hangarInputBase-formControl hangarInputBase-adornedStart hangarOutlinedInput-adornedStart">
  <div class="hangarInputAdornment-root hangarInputAdornment-positionStart">
  <div class="hangarSvgIcon-root" focusable="false" aria-hidden="true">
  <i class="bi bi-person-circle"></i>
  </div>
  </div>
  <input id="username" autocomplete="off" aria-invalid="false" type="text" name="keyauthusername" class="hangarInputBase-input hangarOutlinedInput-input hangarInputBase-inputAdornedStart hangarOutlinedInput-inputAdornedStart" placeholder="Nombre de usuario">
  <fieldset aria-hidden="true" class="jss2 hangarOutlinedInput-notchedOutline">
  <legend class="jss4 jss5"><span>Nombre de usuario</span></legend>
  </fieldset>
  </div>
</div>

<div class="hangarFormControl-root hangarTextField-root jss1" data-validate="Username is required">
    <label class="hangarFormLabel-root hangarInputLabel-root hangarInputLabel-formControl hangarInputLabel-animated hangarInputLabel-shrink hangarInputLabel-outlined" data-shrink="true">Correo electronico</label>
    <div class="hangarInputBase-root hangarOutlinedInput-root hangarInputBase-formControl hangarInputBase-adornedStart hangarOutlinedInput-adornedStart">
    <div class="hangarInputAdornment-root hangarInputAdornment-positionStart">
    <div class="hangarSvgIcon-root" focusable="false" aria-hidden="true">
 
    <i  class="bi bi-envelope-at-fill"></i>
    </div>
    </div>
    <input id="email" autocomplete="off" aria-invalid="false" type="text" name="keyauthusername" class="hangarInputBase-input hangarOutlinedInput-input hangarInputBase-inputAdornedStart hangarOutlinedInput-inputAdornedStart" placeholder="Correo electronico">
    <fieldset aria-hidden="true" class="jss2 hangarOutlinedInput-notchedOutline">
    <legend class="jss4 jss5"><span>Correo electronico</span></legend>
    </fieldset>
    </div>
</div>

<div class="hangarFormControl-root hangarTextField-root jss1" data-validate="Password is required">
  <label class="hangarFormLabel-root hangarInputLabel-root hangarInputLabel-formControl hangarInputLabel-animated hangarInputLabel-shrink hangarInputLabel-outlined" data-shrink="true">Contraseña</label>
  <div class="hangarInputBase-root hangarOutlinedInput-root hangarInputBase-formControl hangarInputBase-adornedStart hangarOutlinedInput-adornedStart">
  <div class="hangarInputAdornment-root hangarInputAdornment-positionStart">
  <div class="hangarSvgIcon-root" focusable="false" aria-hidden="true">
  <i class="bi bi-lock-fill"></i>
  </div>
  </div>
  <input id="pass" autocomplete="off" aria-invalid="false" type="password" name="keyauthpassword" class="hangarInputBase-input hangarOutlinedInput-input hangarInputBase-inputAdornedStart hangarOutlinedInput-inputAdornedStart" placeholder="Contraseña">
  <i id="togglePassword" style="color: rgb(55, 149, 226); margin-right: 15px; cursor: pointer; font-size: 20px;" class="bi bi-eye-fill"></i>
  <fieldset aria-hidden="true" class="jss2 hangarOutlinedInput-notchedOutline">
  <legend class="jss4 jss5"><span>Contraseña</span></legend>
  </fieldset>
  </div>
</div>
<!-- 
<div class="hangarFormControl-root hangarTextField-root jss1" data-validate="Password is required">
  <label class="hangarFormLabel-root hangarInputLabel-root hangarInputLabel-formControl hangarInputLabel-animated hangarInputLabel-shrink hangarInputLabel-outlined" data-shrink="true">Contraseña</label>
  <div class="hangarInputBase-root hangarOutlinedInput-root hangarInputBase-formControl hangarInputBase-adornedStart hangarOutlinedInput-adornedStart">
  <div class="hangarInputAdornment-root hangarInputAdornment-positionStart">
  <div class="hangarSvgIcon-root" focusable="false" aria-hidden="true">
  <i class="bi bi-lock-fill"></i>
  </div>
  </div>
  <input id="pass" autocomplete="off" aria-invalid="false" type="text" name="keyauthpassword" class="hangarInputBase-input hangarOutlinedInput-input hangarInputBase-inputAdornedStart hangarOutlinedInput-inputAdornedStart" placeholder="Licencia">
  <fieldset aria-hidden="true" class="jss2 hangarOutlinedInput-notchedOutline">
  <legend class="jss4 jss5"><span>Licencia</span></legend>
  </fieldset>
  </div>
</div>
-->
<div class="contenedor">
  <input id="check" type="checkbox">
  <p>Al aceptar los términos, usted se compromete a usar el software de manera legal y a respetar los derechos de autor del programa.</p>
</div>

<button  onclick="register()"id="registe" name="" class="hangarButtonBase-root hangarButton-root jss6 hangarButton-text hangarButton-textPrimary">
  <a href="#" style="text-decoration:none;">
  Registrar
  </a>
  </button>
  &nbsp;
<button id="panel" name="login" class="hangarButtonBase-root hangarButton-root jss6 hangarButton-text hangarButton-textPrimary" onclick="goToHome()">
  <a href="#" style="text-decoration:none;">
  Acceso
</a>
</button>


<div class="flex-sb-m w-full p-t-3 p-b-24">
<div>
</div>
</div>
</form>

<p class="hangarFormHelperText-root hangarFormHelperText-contained hangar-error hangarFormHelperText-filled" style="text-align:center;">Todos los derechos reservados a  <a id="orx" style="text-decoration:none;" href="index.html">ORX</a> 2023</p>
</div>

</div>

</div>


<script>
const togglePassword = document.getElementById('togglePassword');
const passwordInput = document.getElementById('pass');
togglePassword.addEventListener('click', function() {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    if (type === 'password') {
        togglePassword.classList.remove('bi-eye-slash-fill');
        togglePassword.classList.add('bi-eye-fill');
    } else {
        togglePassword.classList.remove('bi-eye-fill');
        togglePassword.classList.add('bi-eye-slash-fill');
    }
});

  $(document).ready(function() {
    $('#panel').click(function() {
      window.location.href = 'login.html';
    });
  });
  $(document).ready(function() {
    $('#animimg').click(function() {
      window.location.href = 'index.html';
    });
  });

</script>

  
<script src="JS/particles.min.js"></script>
<!--Fondo particulas-->
<script>
  particlesJS("particles-js", {
    "particles": {
      "number": {
        "value": 80,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#fff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 3,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#fff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 6,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false,
          "mode": "repulse"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 57,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": false
  });
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if(window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);;
</script>

<script>
  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 40,
      nav: true,
      navText: ["<i class='bx bx-left-arrow' />", "<i class='bx bx-right-arrow' />"],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        },
        1400: {
          items: 4
        }
      }
    })
  });
</script>


<script src="JS-BD/Login_Register.js"></script>
<script>
    const toast = document.querySelector('#toaster');

     const opentoaster = (typeMsg, message, redirectFunction) => {
    toast.style.display = 'flex';
    toast.innerHTML = message;
    toast.classList.add(typeMsg);
    closetoaster(typeMsg, redirectFunction);
    }

const closetoaster = (typeMsg, redirectFunction) => {
    setTimeout(() => {
        toast.style.display = 'none';
        toast.classList.remove(typeMsg);
        if (typeMsg === 'success' && typeof redirectFunction === 'function') {
            redirectFunction();
        }
    }, 2500);
}
 
function register() {
  event.preventDefault();
    const username = document.querySelector('#username').value;
    const email = document.querySelector('#email').value;
    const pass = document.querySelector('#pass').value;
    const checkBox = document.querySelector('#check');
    if (!username || !email || !pass) {

      Swal.fire({
            icon: "error",
            title: "❌<span style='color: red;'>Completa los campos vacios...</span>❌",
           text:"     ",
           background: "#141a25",
           showClass: {
           popup: `
           animate__animated
           animate__fadeInUp
           animate__faster
           `
        },
        hideClass: {
        popup: `
      animate__animated
      animate__fadeOutDown
      animate__faster
       `
     },
     timer: 5500,
});

}
else if(!checkBox.checked){
  Swal.fire({
            icon: "error",
            title: "❌<span style='color: red;'>Acepta los terminos de condiciones</span>❌",
           text:"     ",
           background: "#141a25",
           showClass: {
           popup: `
           animate__animated
           animate__fadeInUp
           animate__faster
           `
        },
        hideClass: {
        popup: `
      animate__animated
      animate__fadeOutDown
      animate__faster
       `
     },
     timer: 5500,
});
}
 else {
        
      Swal.fire({
            icon: "success",
           title: "✔️<span style='color: lime;'>Cuenta creada exitosamente...</span>✔️",
           background: "#141a25",
           showConfirmButton: false,
           showClass: {
           popup: `
           animate__animated
           animate__bounceIn
           animate__faster
           `
           },
          hideClass: {
          popup: `
          animate__animated
          animate__bounceIn
          animate__faster
       `
     },
     timer: 5500,
});

               
        setTimeout(() => {
        redirectToAnotherForm(username);
    }, 2000);
    }
}
function redirectToAnotherForm(username) {
  sessionStorage.setItem('username', username);

    
window.location.href = 'panel.html';
}
</script>

</body>
</html>