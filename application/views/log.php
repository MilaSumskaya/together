<div class="overlay">
<form action="/main/log" method="POST" class="form">
   <div class="con">
   <header class="head-form">
      <h2>Авторизация</h2>
      <p>Пожалуйста, введите логин и пароль</p>
   </header>
   <br>
   <div class="field-set">
         <input class="form-input" id="txt-input" type="text" placeholder="Ваш логин" id="login" name="login" required>
     
      <br>
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <input class="form-input" type="password" placeholder="Ваш пароль" id="password"  name="password" required>
     
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
     
     
      <br>
      <button class="log-in but" type="submit">Войти</button>
   </div>

   <div class="other">
      <button class="btn submits sign-up" id="button">Зарегистрироваться
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      </button>
   </div>
     
  </div>
  
</form>
</div>