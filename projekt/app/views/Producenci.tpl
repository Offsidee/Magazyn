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

      <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide w3-round-large">LISTA PRODUCENTÓW</span></h5>








      <form class="w3-container w3-center " action="{$conf->action_url}producenci"><br />

        <input class="w3-input w3-black w3-round-large w3-animate-input w3-center " type="text" " placeholder=" nazwa"
          name="nazwa" value="{$searchForm->nazwa}" /><br />
        <button type="submit" class="w3-button w3-black  w3-tiny w3-round-large"
          style="position: relative; left: 25px; top: -3px">Szukaj!</button>




        <a href="{$conf->action_root}producentNew" class="w3-button w3-circle w3-black w3-display-right"
          style="position: relative; left: 280px; top: 5px">+</a>
        <br />


      </form>





      <table id="tab_producenci" class="w3-table  w3-bordered  w3-text-white w3-centered">
        <thead>
          <tr>
            <th>Nazwa</th>
            <th>Miasto</th>
            <th>Ulica</th>
            <th>Telefon</th>
            <th>Mail</th>
          </tr>
        </thead>
        <tbody>
          {foreach $producenci as $p}
          {strip}
          <tr>
            <td>{$p["nazwa"]}</td>
            <td>{$p["miasto"]}</td>
            <td>{$p["ulica"]}</td>
            <td>{$p["telefon"]}</td>
            <td>{$p["mail"]}</td>

            <td>
              <a class="  w3-button w3-black w3-tiny w3-round-large"
                href="{$conf->action_url}producentEdit/{$p['id']}">Edytuj</a>
              &nbsp;
              <a class="w3-button w3-black w3-tiny w3-round-large"
                href="{$conf->action_url}producentDelete/{$p['id']}">Usuń</a>
            </td>
          </tr>
          {/strip}
          {/foreach}
        </tbody>
      </table>
      <br />

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


    <div class="bottom-margin">












    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
      <span class="w3-text-white">Uniwersytet Śląski,2022</span>
    </div>
  </header>

  <!-- Add a background color and large text to the whole page -->
  <div class="w3-sand w3-grayscale w3-large">












    <!-- Contact/Area Container -->













  </div>
  </div>

  <!-- End page content -->
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