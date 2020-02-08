@extends('layouts.webapp')
@section('guest')

<style>
/* PAGE & INPUT STYLING */



.btn {
  border: 1px solid #808080;
  display: inline-block;
  padding: 5px 10px;
  font-size: 20px;
  position: relative;
  text-align: left;
  border-radius: 3px;
  -webkit-transition: background 600ms ease, color 600ms ease;
  transition: background 600ms ease, color 600ms ease;
}
.btn span {
  border: 1px solid #808080;
  display: inline-block;
  padding: 1px 6px;
  font-size: 12px;
  border-radius: 5px;
  vertical-align: middle;
  text-align: center;
  margin-top: -5px;
}

input[type="radio"].toggle {
  display: none;
}
input[type="radio"].toggle + label {
  cursor: pointer;
  min-width: 80px;
}
input[type="radio"].toggle + label:hover {
  background: none;
  color: #FFF;
}
input[type="radio"].toggle + label:after {
  content: "";
  height: 100%;
  position: absolute;
  top: 0;
  -webkit-transition: left 100ms cubic-bezier(0.77, 0, 0.175, 1);
  transition: left 100ms cubic-bezier(0.77, 0, 0.175, 1);
  width: 100%;
  z-index: -1;
}
input[type="radio"].toggle.toggle-left + label {
}
input[type="radio"].toggle.toggle-left + label:after {
  left: 100%;
}
input[type="radio"].toggle.toggle-right + label {
  margin-left: 10px;
}
input[type="radio"].toggle.toggle-right + label:after {
  left: -100%;
}
input[type="radio"].toggle:checked + label {
  background: #FFF;
  cursor: default;
  color: #000;
}
input[type="radio"].toggle:checked + label:after {
  left: 0;
}

/* ENDS */

/* UPFORM STYLE STARTS*/
.upform input:focus, select:focus, textarea:focus, button:focus {
  outline: none;
  border-color: blue !important;
}
.upform input, select, textarea  {
  background-color: #ccc !important;
  color: #FFF;
}
.upform {
  font-family: 'Open Sans', sans-serif;
  -webkit-touch-callout: none; /* iOS Safari */
  -webkit-user-select: none; /* Safari */
  -khtml-user-select: none; /* Konqueror HTML */
  -moz-user-select: none; /* Firefox */
  -ms-user-select: none; /* Internet Explorer/Edge */
  user-select: none; /* Non-prefixed version, currently
		            supported by Chrome and Opera */
  max-width: 900px;
  margin: 300px auto;
  margin-bottom: 500px;
  padding: 0 20px;
}

.upform .upform-main {
}
.upform .upform-main .input-block {
  padding: 30px 0;
  opacity: 0.25;
  cursor: default;
}
.upform .upform-main .input-block .label {
  display: block;
  font-size: 1.1em;
  line-height: 30px;
}
.upform .upform-main .input-block .input-control {
  margin: 20px 0;
}
.upform .upform-main .input-block .input-control input[type=text] {
  border: none;
  outline-width: 0;
  border-bottom: 2px solid #CCC;
  width: 100%;
  font-size: 35px;
  padding-bottom: 10px;
}

.upform .upform-main .input-block.active {
  opacity: 1;
}

.upform .upform-footer {
  margin-top: 60px;
}
.upform .upform-footer .btn {
  font-size: 24px;
  font-weight: bold;
  padding: 5px 20px;
}
/* UPFORM STYLE ENDS*/

</style>

<div class="upform">
<p>Welcome to Partime platform connecting professional competences seeking for Partime and flexible job to increase the income and accomplish high level of compliance and transparency. </p>
  <form>
    <div class="upform-header"></div>
    <div class="upform-main">
      <div class="input-block">
        <div class="label">Q1. Country? *</div>
        <div class="input-control">
         <input type="text" class="required" placeholder=" Type your answer here..." autocomplete="off">
        </div>
      </div>
      <div class="input-block">
        <div class="label">Q2. City? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..." autocomplete="off">
        </div>
      </div>
      <div class="input-block">
        <div class="label">Q3. Company Name? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..." autocomplete="off">
        </div>
      </div>

      <div class="input-block">
        <div class="label">Q4. Company Profile Linkedin URL *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..." autocomplete="off">
        </div>
      </div>


            <div class="input-block">
        <div class="label">Q5. Company website *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder="https://" autocomplete="off">
        </div>
      </div>


      <div class="input-block">
        <div class="label">Q6. Name *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..." autocomplete="off">
        </div>
      </div>

      <div class="input-block">
        <div class="label">Q7. Mobile No. *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..." autocomplete="off">
        </div>
      </div>

      <div class="input-block">
        <div class="label">Q8. Email Address *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..." autocomplete="off">
        </div>
      </div>


      <div class="input-block">
        <div class="label">Q9. Job title of the candidates? *</div>
        <p>Choose as many as you like</p>
        <div class="input-control">

         <div class="input-control">
          <input id="toggle-on-q3" class="toggle toggle-left" name="q3" value="male" type="checkbox">
          <label for="toggle-on-q3" class="btn"><span>A</span> CEO</label><br>
          <input id="toggle-off-q3" class="toggle toggle-right" name="q3" value="fmale" type="checkbox">
          <label for="toggle-off-q3" class="btn"><span>B</span> CTO</label>
        </div>

        </div>
      </div>

      <div class="input-block">
        <div class="label">Q10. How many vacancies for the same job title? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..." autocomplete="off">
        </div>
      </div>

      <div class="input-block">
        <div class="label">Q11. Candidates Nationality?  *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..." autocomplete="off">
        </div>
      </div>


      <div class="input-block">
        <div class="label">Q12. Candidates Gender *</div>

       <div class="input-control">
          <input id="toggle-on-q3" class="toggle toggle-left" name="q3" value="male" type="radio">
          <label for="toggle-on-q3" class="btn"><span>A</span> Male</label>
          <input id="toggle-off-q3" class="toggle toggle-right" name="q3" value="fmale" type="radio">
          <label for="toggle-off-q3" class="btn"><span>B</span> Fmale</label>
        </div>

      </div>


      <div class="input-block">
        <div class="label">Q13. Candidates Shift type? * </div>
        <div class="input-control">
          <input id="toggle-on-q3" class="toggle toggle-left" name="q3" value="yes" type="radio">
          <label for="toggle-on-q3" class="btn"><span>A</span> Yes</label>
          <input id="toggle-off-q3" class="toggle toggle-right" name="q3" value="no" type="radio">
          <label for="toggle-off-q3" class="btn"><span>B</span> No</label>
        </div>
      </div>

      <div class="input-block">
        <div class="label">Q14. Contract period for the candidates (Monthly) *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>

           <div class="input-block">
        <div class="label">Q15. Candidates Job City? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>


            <div class="input-block">
        <div class="label">Q16. Work Location?  *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>

                <div class="input-block">
        <div class="label">Q17. Country of the candidates? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>

                  <div class="input-block">
        <div class="label">Q18. City of the candidates? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>

                  <div class="input-block">
        <div class="label">Q19. English Language level of the candidates ? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>



                  <div class="input-block">
        <div class="label">Q20. Years of experience for the candidates? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>


                    <div class="input-block">
        <div class="label">Q21. Nationality of the candidates? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>


                        <div class="input-block">
        <div class="label">Q22. Do you prefer the candidate currently working in a specific company? Add company name *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>


                        <div class="input-block">
        <div class="label">Q23. Number of working hours for the Partimers? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>


                        <div class="input-block">
        <div class="label">Q24. Number of working days weekly for the partimers? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>
                              <div class="input-block">
        <div class="label">Q25. Contract period (How many months) *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>
                              <div class="input-block">
        <div class="label">Q26. The proposed total salary for the candidates? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>
                              <div class="input-block">
        <div class="label">Q27. Expected commencement date ? *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>
                              <div class="input-block">
        <div class="label">Q28. do you prefer the candidate , was working in a specific company? add company name *</div>
        <div class="input-control">
          <input type="text" class="required" placeholder=" Type your answer here..."  autocomplete="off">
        </div>
      </div>




    </div>

    <div class="upform-footer">
      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>

  </form>


</div>




@stop

@push('scripts')



  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>

<script>
$.fn.upform = function() {
  var $this = $(this);
  var container = $this.find(".upform-main");

  $(document).ready(function() {
    $(container).find(".input-block").first().click();
  });

  $($this).find("form").submit(function() {
    return false;
  });

  $(container)
    .find(".input-block")
    .not(".input-block input")
    .on("click", function() {
    rescroll(this);
  });

  $(container).find(".input-block input").keypress(function(e) {
    if (e.which == 13) {
      if ($(this).hasClass("required") && $(this).val() == "") {
      } else moveNext(this);
    }
  });

  $(container).find('.input-block input[type="radio"]').change(function(e) {
    moveNext(this);
  });

  $(window).on("scroll", function() {
    $(container).find(".input-block").each(function() {
      var etop = $(this).offset().top;
      var diff = etop - $(window).scrollTop();

      if (diff > 100 && diff < 300) {
        reinitState(this);
      }
    });
  });

  function reinitState(e) {
    $(container).find(".input-block").removeClass("active");

    $(container).find(".input-block input").each(function() {
      $(this).blur();
    });
    $(e).addClass("active");
    /*$(e).find('input').focus();*/
  }

  function rescroll(e) {
    $(window).scrollTo($(e), 200, {
      offset: { left: 100, top: -200 },
      queue: false
    });
  }

  function reinit(e) {
    reinitState(e);
    rescroll(e);
  }

  function moveNext(e) {
    $(e).parent().parent().next().click();
  }

  function movePrev(e) {
    $(e).parent().parent().prev().click();
  }
};

$(".upform").upform();
$.fn.upform = function() {
  var $this = $(this);
  var container = $this.find(".upform-main");

  $(document).ready(function() {
    $(container).find(".input-block").first().click();
  });

  $($this).find("form").submit(function() {
    return false;
  });

  $(container)
    .find(".input-block")
    .not(".input-block input")
    .on("click", function() {
      rescroll(this);
    });

  $(container).find(".input-block input").keypress(function(e) {
    if (e.which == 13) {
      if ($(this).hasClass("required") && $(this).val() == "") {
      } else moveNext(this);
    }
  });

  $(container).find('.input-block input[type="radio"]').change(function(e) {
    moveNext(this);
  });

  $(window).on("scroll", function() {
    $(container).find(".input-block").each(function() {
      var etop = $(this).offset().top;
      var diff = etop - $(window).scrollTop();

      if (diff > 100 && diff < 300) {
        reinitState(this);
      }
    });
  });

  function reinitState(e) {
    $(container).find(".input-block").removeClass("active");

    $(container).find(".input-block input").each(function() {
      $(this).blur();
    });
    $(e).addClass("active");
    /*$(e).find('input').focus();*/
  }

  function rescroll(e) {
    $(window).scrollTo($(e), 200, {
      offset: { left: 100, top: -200 },
      queue: false
    });
  }

  function reinit(e) {
    reinitState(e);
    rescroll(e);
  }

  function moveNext(e) {
    $(e).parent().parent().next().click();
  }

  function movePrev(e) {
    $(e).parent().parent().prev().click();
  }
};

$(".upform").upform();

</script>


@endpush