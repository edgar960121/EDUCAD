@extends('menu')
@section('title','Etapa 1. Pre-inscripcion')
@section('scripts')
<script src="{{URL::asset('js/preinscripcion.js')}}" type="text/javascript"> </script>
@endsection
@section('content')
<style>
  #regForm {
    background-color: #f5f5f0;
    margin: 100px auto;
    font-family: Arial, Helvetica, sans-serif;
    padding: 20px;
    width: 55%;
    min-width: 370px;
  }

  input {
    padding: 10px;
    width: 100%;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    border: 1px solid #00b140;
    outline: none;
    border: none;
  }

  input {
    padding: 7px;
    width: 100%;
    font-size: 15px;
    font-family: Arial, Helvetica, sans-serif;
    border: 3px solid #00b140;
    border-radius: 15px;
  }

  button {
    background-color: #00b140;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 20px;
    font-family: Arial;
  }
</style>
<div class="container mt-5">
  @if (session('status'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    {{ session('status') }}
  </div>
  @endif

  <h1 style="text-align: center; padding-bottom: 18px; font-size: 45pt;
    font-style: normal;
    font-weight: 500;
    letter-spacing: -0.5px;
    line-height: 1.26;">Pre-inscripción</h1>
  @if($errors->any())
  <div style="font-size: 1.5rem;" class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <div class="alert-text">
      @foreach ($errors->all() as $error)
      <span>{{$error}}</span>
      @endforeach
    </div>
  </div>
  @endif
  <p>En esta etapa se validará, a través de diversos documentos, que cumplas con los requisitos laborales y académicos
    según el nivel de estudios
    en el que te gustaría inscribirte.</p>

  <p>Es por ello que te pedimos realices los siguientes pasos.</p>

  <p><b>1. Revisa los documentos que debes tener digitalizados (escaneados)</b>, por favor, toma como base el manual que
    te corresponda:</p>
  <ul style="list-style-type: square">

    <li>Expediente digital para <a
        href="https://drive.google.com/file/d/1nzsFNMfKKGZU6IuQ6Vk3FDDYKGXbA6vd/view?usp=sharing" target="_blank"><u>
          <font color="#000000"> ingreso al Bachillerato
        </u></font></a></li>

    <li>Expediente digital para <a
        href="https://drive.google.com/file/d/10BoWlVVNQ_erJMkQiRWnWeEOdbgl0r1U/view?usp=sharing" target="_blank"><u>
          <font color="#000000"> ingreso a Licenciatura
        </u></font></a></li>

    <li>Expediente digital para <a
        href="https://drive.google.com/file/d/1RNYAHthLNMODw-To833b0i03OJRcUJ0z/view?usp=sharing" target="_blank"><u>
          <font color="#000000"> ingreso a Maestría</font>
        </u> </a></li>
  </ul>

  <p><b>2. Llena el siguiente formulario.</b> Te recomendamos tener a la mano el último recibo de nómina.</p>
  <p>El propósito de este formulario es recabar información para generar su pre-inscripción en la convocatoria 2021 del
    Programa de Educación a Distancia para personas servidoras públicas del Gobierno de la Ciudad de México
    “EDUCAD-DGAP”. La información proporcionada será empleada de manera exclusiva para dicho fin y está protegida por
    Ley de Protección de Datos Personales en Posesión de Sujetos Obligados de la Ciudad de México, los Lineamientos
    Generales de Protección de Datos Personales en Posesión de Sujetos Obligados de la Ciudad de México, Ley de Gobierno
    Electrónico de la Ciudad de México, la Ley de Operación e Innovación Digital para la Ciudad de México, Criterios
    para la Dictaminación de Adquisiciones y Uso de Recursos Públicos Relativos a las Tecnologías de la Información y
    las Comunicaciones de la Ciudad de México y demás relativas y aplicables.
  </p>
  <p>
    Autorizo a la Dirección Ejecutiva de Desarrollo de Personal y Derechos Humanos así como al Prestador de los
    Servicios Educativos el uso de mis datos personales, entre ellos el correo electrónico y número de teléfono para el
    envío de información relativo al Programa “EDUCAD-DGAP” <font color="red"> * </font>
  </p>
  <div class="form-group col-md-2">
    <select id="select" name="select" class="form-control">
      <option value="value1" disabled selected>Elige</option>
      <option value='0'>Acepto</option>
      <option value='1'>No Acepto</option>
    </select>
  </div>

  <form id="regForm" action="{{route('guardar_pre-registro')}}" method="POST" enctype="multipart/form-data"
    style="display:none;">
    {{-- <form id="regForm" method="POST" enctype="multipart/form-data" style="display:none;"> --}}
    <label style="color:#777777; font-size: 40px; text-align: left; ">Pre-inscripción</label>
    @csrf
    <label style="color:#054a41; font-size: 16px; text-align: justify;">Para iniciar el proceso, proporciona el
      siguiente dato. Te recomendamos
      tener a la mano tu recibo de nómina.
    </label>
    <label style="color:#777777; font-size: 25px; text-align: left;">RFC</label>
    <p><input type="text" id="rfc" placeholder="RFC de la persona trabajadora" oninput="this.className = ''"
        maxlength="13" minlength="13"
        pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$"
        name="RFC" required></p>

    <button type="submit">Validar RFC</button>
  </form>



  <!--<button class="btn btn-primary" style="border-color:#31b700; background-color: #31b700;" >Siguiente </button>-->

  <p><b>3. Recibirás un correo electrónico en el que se te informará el dictamen.</b></p>

  <font color="red"> * Obligatorio</font>

  {{--  <div class="pane-header">
        <a href="{{ url('/prueba') }}">Entrar a la entrega de documentos</a>
</div> --}}



</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--Desglozar div para el RFC -->
<script>
  $(document).ready(function(){
    $('#select').on('change',function(){
    var selectValor = ''+$(this).val();
    //alert (selectValor);

   if(selectValor == 0){
       // alert ('entrando al if');
        //$('#pruebass').show();
        $("#regForm").css('display', 'block');
    }else{
        alert('Debe aceptar el aviso de privacidad para continuar con el proceso');
        $('#regForm').css('display', 'none');
    }
    
    }); 
    
});
</script>
<!--END-->

<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
      
  } else {
    document.getElementById("prevBtn").style.display = "inline";
      
  }
  if (n == (x.length - 1)) {

    document.getElementById("nextBtn").innerHTML = "Enviar";
   swal("Bienvenidos", "Esta datos son privados solo el padre o tutor son responsable de dichos datos establecidos", "success");

  } 
  else {
    document.getElementById("nextBtn").innerHTML = "Continuar";

  }

  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();

      swal("Exito", "Tus datos han sido enviados con exito", "success");

    return false;

  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
   
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


{{--  <script>
  $(document).ready(function() {
    $( "#rfc" ).on('change',function() {
      $("#enlace_ws").get(0).click();
    });
  });
</script>  --}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{URL::asset('assets/js/jquery.validate.min.js')}}"></script>
@endsection