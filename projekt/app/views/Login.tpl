<!DOCTYPE html>
<html>

<head>
  <title>Projekt</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <style>
    body,
    html {
      height: 100%;
      font-family: "Inconsolata", sans-serif;
    }

    .bgimg {
      background-position: center;
      background-size: cover;
      background-image: url("https://www.provafacilnaweb.com.br/wp-content/uploads/2020/08/migra%C3%A7%C3%A3o-digital.png");
      min-height: 100%;
    }

    .menu {
      display: none;
    }
  </style>
</head>

<body>

  <!-- Links (sit on top) -->
  <div class="w3-top">
    <div class="w3-row w3-padding w3-black">
      <div class="w3-col s3">
        <a href="{$conf->action_url}mainpage" class="w3-button w3-block w3-black">START</a>
      </div>
      <div class="w3-col s3">
        <a href="{$conf->action_url}materialy" class="w3-button w3-block w3-black">MATERIAŁY</a>
      </div>
      <div class="w3-col s3">
        <a href="{$conf->action_url}producenci" class="w3-button w3-block w3-black">PRODUCENCI</a>
      </div>
      <div class="w3-col s3">
        {if count($conf->roles)>0}
        <a href="{$conf->action_url}logout" class="w3-button w3-block w3-black">WYLOGUJ</a>
        {else}
        <a href="{$conf->action_url}login" class="w3-button w3-block w3-black">ZALOGUJ</a>
         {/if}
      </div>
      <div class="w3-col  w3-rest">
      {if count($conf->roles)>0}
      <div class="w3-col  ">
      <a href="{$conf->action_url}pracownicy" class="w3-button w3-block w3-black">PRACOWNICY</a>    
      </div> 
      </div>
      {/if}
      </div>
    </div>
  </div>

  <!-- Header with image -->
  <header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
      <span class="w3-tag">By Wałach Maciej</span>
    </div>
    <div class="w3-display-middle w3-center">
      <div class="w3-container" id="where" style="padding-bottom:90px;">
        <div class="w3-content" style="max-width:700px">
          <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">ZALOGUJ</span></h5>
          




          <form action="{$conf->action_root}login" method="post">


            <div class="w3-input w3-padding-16 ">
              <label class="w3-text-white" for="id_login">Login: </label>
              <input class="w3-input w3-border w3-round" id="id_login" type="text" name="login"
                value="{$form->login}" />
            </div>
            <div class="w3-input w3-padding-16 ">
              <label class="w3-text-white" for="id_pass">Hasło: </label>
              <input class="w3-input w3-border w3-round" id="id_pass" type="password" name="haslo"
                value="{$form->haslo}" />
            </div>
            <br />
            <div>
              <input type="submit" value="zaloguj" class="w3-button w3-black  " />
            </div>

          </form>

          






          {if $msgs->isMessage()}
          <div class="messages bottom-margin">
            <ul>
              {foreach $msgs->getMessages() as $msg}
              {strip}
              <li class={if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if
                $msg->isInfo()}info{/if}">{$msg->text}</li>
              {/strip}
              {/foreach}
            </ul>
          </div>
          {/if}





        </div>
      </div>








      <!-- End page content -->
    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Uniwersytet Śląski,2022</span>
  </div>



    <script>
      // Tabbed Menu
      function openMenu(evt, menuName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("menu");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
        }
        document.getElementById(menuName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-dark-grey";
      }
      document.getElementById("myLink").click();
    </script>

</body>

</html>