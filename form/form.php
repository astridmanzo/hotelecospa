<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="generator" content="jqueryform.com">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->




  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  

<style type="text/css">
body{
  background-color: transparent;
}


.jf-option-box{
  display: none;
  margin-left: 8px;
}

.jf-hide{
  display: none;
}

.jf-disabled {
    background-color: #eeeeee;
    opacity: 0.6;
    pointer-events: none;
}

/* 
overwrite bootstrap default margin-left, because the <label> doesn't contain the <input> element.
*/
.checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
  position: absolute;
  margin-top: 4px \9;
  margin-left: 0px;
}

.mainDescription{
  margin-bottom: 10px;
}
.responsive img{
  width: 100%;
}

p.error, p.validation-error{
  padding: 5px;
}

p.error{
  margin-top: 10px;
  color:#a94442;
}

p.server-error{
  font-weight: bold;
}

div.thumbnail{
  position: relative;
  text-align: center;
}

div.thumbnail.selected p{
  color: #ffffff;
}

div.thumbnail .glyphicon-ok-circle{
  position: absolute;
  top: 16px;
  left: 16px;
  color: #ffffff;
  font-size: 32px;
}

.jf-copyright{color: #888888; display: inline-block; margin: 16px;display:none;}

.form-group.required .control-label:after {
    color: #dd0000;
    content: "*";
    margin-left: 6px;
}

.submit .btn.disabled, .submit .btn[disabled]{
  background: transparent;
  opacity: 0.75;
}

/* for image option with span text */
.checkbox label > span, .radio label > span{
  display: block;
}
</style>

</head>

<body>

  <div class="container-fluid jf-form  reservebg">
    <div class="row">
      <div class="col-md-12">
        <h1>Rservaciones</h1>
        <h2>Hotel Eco Spa Luz y Vida</h2>
      </div>
    </div>
    <div class="container reserve">
    <form data-licenseKey="" name="jqueryform-28b171" id="jqueryform-28b171" action='admin.php' method='post' enctype='multipart/form-data' novalidate autocomplete="on">
    <input type="hidden" name="method" value="validateForm">
    <input type="hidden" id="serverValidationFields" name="serverValidationFields" value="">


    <div class="container">

      <div class="row">

        <div class="form-group c1 required col-md-4" data-cid="c1">
              <label class="control-label" for="c1">Nombre Completo</label>

              <div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-user"></i> </span>
              <input type="text" class="form-control" id="c1" name="c1" value=""    
                  data-rule-required="true" data-msg-required="Por favor, rellena las campos requeridos."  />
              </div>

          
        </div>
     


        <div class="form-group c2 required col-md-4" data-cid="c2">
            <label class="control-label" for="c2">Email</label>

            <div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-envelope"></i> </span>
            <input type="email" class="form-control" id="c2" name="c2" value=""   
                data-rule-email="true" 
                data-rule-required="true" data-msg-required="Por favor, rellena los campos requeridos."  />
            </div>
            
        </div>

        <div class="form-group c28 required col-md-4" data-cid="c28">
            <label class="control-label" for="c28">Número de Télefono</label>


            <input type="" class="form-control " id="c28" name="c28" value=""    
              data-rule-number="true" 
              data-rule-required="true" data-msg-required="Por favor, rellena los campos requeridos."   />

          
        </div>

      </div>

      <div class="row">

        <div class="form-group c33 col-md-3" data-cid="c33">
          <label class="control-label" for="c33">Fecha de Llegada</label>

          <div class="input-group date">
          <input type="text" class="form-control datepicker" id="c33" name="c33" value=""    
            data-datepicker-format="dd/mm/yyyy" />
          <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>
          
        </div>




        <div class="form-group c38 required col-md-3" data-cid="c38">
            <label class="control-label" for="c38">Fecha de Salida</label>

            <div class="input-group date">
            <input type="text" class="form-control datepicker" id="c38" name="c38" value=""   
                data-rule-required="true" data-msg-required="Por favor, rellena los campos requeridos."  
              data-datepicker-format="dd/mm/yyyy" />
            <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span>
            </div>
          
        </div>



        <div class="form-group c43 required col-md-2" data-cid="c43">
          <label class="control-label" for="c43"></label>


          <select class="form-control" id="c43" name="c43"   
              data-rule-required="true" data-msg-required="Por favor, rellena los campos requeridos." >
              <option  value="">- Selecciona -</option>
              <option selected value="1 habitación">1 habitación</option>
              <option  value="2 habitaciones">2 habitaciones</option>
              <option  value="3+ habitaciones">3+ habitaciones</option>
          </select>

          
        </div>




        <div class="form-group c49 required col-md-2" data-cid="c49">
          <label class="control-label" for="c49"></label>


          <select class="form-control" id="c49" name="c49"   
              data-rule-required="true" >
            <option  value="">- Selecciona -</option>
            <option selected value="1 adulto">1 adulto</option>
            <option  value="2 adultos">2 adultos</option>
            <option  value="3+ adultos">3+ adultos</option>
          </select>

          
        </div>




        <div class="form-group c56 required col-md-2" data-cid="c56">
          <label class="control-label" for="c56"></label>


          <select class="form-control" id="c56" name="c56"   
              data-rule-required="true" >
            <option  value="">- Selecciona -</option>
            <option selected value="0 niños">0 niños</option>
            <option  value="1 niños">1 niños</option>
            <option  value="2+ niños">2+ niños</option>
            </select>

          
        </div>

      </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group c73 " data-cid="c73">
          <label class="control-label" for="c73">Mensaje</label>


          <textarea class="form-control" id="c73" name="c73" rows="3" aria-describedby="c73-help-block"  ></textarea>


            <p id="c73-help-block" class="description">¿Tienes alguna pregunta?</p>
          
        </div>

      </div>
    </div> 

    <div class="container submit-boton">
      <div class="form-group submit c100 " data-cid="c100" style="position: relative;">
        <label class="control-label sr-only" for="c100" style="display: block;">Submit Button</label>

        <div class="progress" style="display: none; z-index: -1; position: absolute;">
          <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:100%">
          </div>
        </div>

        <button type="submit" class="btn btn-success btn-lg" style="z-index: 1;">
        		Enviar
        </button>

        <p class="error bg-warning" style="display:none;">
          Please check the required fields.  </p>
        
      </div>
    </div>
    </form>

    </div>

    <div class="container jf-thankyou" style="display:none;" data-redirect="" data-seconds="10">
      <h3>Tu solicitud ha sido enviada! Te contactaremos lo más pronto posible.</h3>
    </div>


    </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
<script src="form/vendor.js" ></script>

<script src="form/jqueryform.com.min.js?ver=v1.0-rc13&id=jqueryform-28b171" ></script>





  </body>
</html>