@extends('menu')
@section('title','Etapa 2: Curso de inducción')
@section('content')
<style>
p{
    text-align: justify;
}
</style>
<div class="container mt-5">
<h1 style="text-align: center; padding-bottom: 18px; font-size: 45pt;
    font-style: normal;
    font-weight: 500;
    letter-spacing: -0.5px;
    line-height: 1.26;">Curso de Inducción</h1>
    <p>Esta segunda etapa del proceso de inscripción es <b>EXCLUSIVAMENTE</b> para aquellas personas servidoras públicas que recibieron por correo electrónico la notificación de que cumplían con los requisitos de ingreso.</p>    
<p><b>Propósito</b></p>
<p>La persona estudiante practicará habilidades académicas y tecnológicas que permitirán familiarizarse con la educación en línea 
y la mecánica de la institución Universidad CNCI, para mantener un desarrollo óptimo en el transcurso de su plan de estudios.</p>
<p><b>Competencias generales</b></p>
<ul style= "list-style-type: square">
<li>Construir un aprendizaje autónomo y autodidacta con la finalidad de obtener un óptimo desarrollo académico.</li>
<li align="justify">Analizar el papel que tiene el estudiante al comenzar sus estudios en nivel medio superior con la finalidad de tomar un rol
activo dentro de su proceso de aprendizaje.</li>
<li>Establecer las pautas que serán necesarias para un desarrollo óptimo como estudiante autodidacta.</li>
</ul>
<p><b>Duración </b></p>
<p> 24 horas.</p>
<p><b>¿Cómo ingresar al Curso de Inducción? </b></p>
<p>1. Verifica en el correo electrónico registrado en tu formulario de Pre-Inscripción, que hayas recibido la invitación a participar en el Curso de Inducción.<br>
2. En dicho correo encontrarás el Usuario y Contraseña asignado.<br>
3. Recuerda que para seguir en el proceso, debes obtener por lo menos una calificación de siete (7.0).</p>
<p><b>IMPORTANTE:</b> Los documentos que enviaste previamente están siendo validados a detalle, por lo que es posible que mientras realizas el curso,
 recibas algún correo solicitando información adicional.</p><br>

<p><i><FONT SIZE=2>[Haz clic en la imagen del curso que te corresponde]</font></i></p><br>
<div class="row">
<div class="col-lg-8">
<p><b>Bachillerato </b></p>
<p>Módulo I. Comunidad CNCI</p>

<p>Módulo II. Herramientas para el estudio virtual</p>

<p>Módulo III. Estudiante virtual autodidacta</p>

<p>Módulo IV. Perfil vocacional</p>
</div>
<div class="col-lg-4">
<a href="https://cnci.blackboard.com/bbcswebdav/courses/PCNCIN2012/Contenidos/B_Induccion_AGO18/index.html" target="_blank"><img src="{{url('/assets/img/bachillerato.jpg')}}" style="width: 200%; float:right;"></a>
</div>
</div>
<hr>
<div class="row">
<div class="col-lg-8">
<p><b>Licenciatura o Ingeniería y Maestría </b></p>
<p>Módulo I. Comunidad CNCI</p>
<p>Módulo II. Herramientas para el estudio virtual</p>
<p>Módulo III. Estudiante virtual autodidacta</p>
<p>Módulo IV. Comunicación asertiva</p>
</div>
<div class="col-lg-4">
<a href="https://cnci.blackboard.com/bbcswebdav/courses/BbCont10/Contenido/Lic_Ing/L_Induccion_AGO18/index.html" target="_blank"><img src="{{url('/assets/img/maestria.jpg')}}" style="width: 200%; float:right;"></a>
</div>
</div>




</div>
@endsection