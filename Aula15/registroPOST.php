<!DOCTYPE html>
<?php
  $titulo = 'Formulario PHP';
 ?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Digital House - Full Stack</title>
</head>
<body>
    <?php
      echo $titulo;
    ?>
    <div id='fg_membersite'>
        <form id='register' action='confirmaçãoPOST.php' method='post'>
            <fieldset >
                <legend>Inscreva-se</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos obrigatórios</div>
                <input type='text' class='spmhidip' name='' />

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nome completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >E-mail:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nome de usuário*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Senha*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <div class='container' style='height:80px;'>
                  <label for='midia'>Qual destes meio de comunicação você gosta?</label>
                    <input type="checkbox" name="internet" value="internet">internet
                    <input type="checkbox" name="outdoor" value="outdoor">outdoor
                    <input type="checkbox" name="jornal" value="jornal">jornal
                    <input type="checkbox" name="televisão" value="televisão">televisão
                    <br>
                </div>
                <div class="container" style='height:80px;'>
                  <label for="nacionalidade">Nacionalidade</label>
                  <select name="nacionalidade">
                    <option value="Brasileira">BRA</option>
                    <option value="Alemã">ALE</option>
                    <option value="Italiana">ITA</option>
                    <option value="Russa">RUS</option>
                    <option value="Holandesa">HOL</option>
                    <option value="Chinesa">CHI</option>
                  </select>
                </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
