<?php 

$v1 = $_POST['txtv1'];
$v2 = $_POST['txtv2'];
$op = $_POST['op'];
$SemNumero = null;


if (is_numeric($v1) && is_numeric($v2)) {
  
  switch ($op){ 

case 'Somar': //somar
$total = $v1 + $v2;
break;

case 'Subtrair': //subtrair
$total = $v1 - $v2;
break;

case 'Dividir': //dividir 
$total = $v1 / $v2;
break;

case 'Mutiplicar': //mutiplicar
$total = $v1 * $v2;
break;

case 'Imc corporal': //IMC
$total = ($v1 * $v2)**2 ;
break;
}

  } else{
  $SemNumero = 'invalido';
  }



?>


<style type="text/css">
 @import url('https://fonts.googleapis.com/css?family=Bangers&display=swap');
*{
  margin:0;
  padding:5%;
  padding-top: 1%;
}

body{
  background-color:white;
  background-image: url("./background.gif");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.esqueleto{
  padding:3%;
  border: 5px solid black;
  background-color: #253071b3;
  margin-top: 3%;
  width: 60%;
  margin-right: 15%;
  margin-left: 15%;
  padding-bottom: 10%;
}
.topo{
  width:85%;
  height:50px;
  margin:5%;
  margin-bottom:1%;
  border: 5px solid black;
  text-align:right;
  font-size:2em;
  background-color:white;
   font-family: 'Bangers', cursive;
   padding: 3%;
}
.conteudo{
  width:90%;
  padding:0px;
  
}
.n1 [type='text']{
  float:left;
  width:48%;
  margin:1%;
  text-align:center;
    font-size:1.5em;
   font-family: 'Bangers', cursive;
   padding: 3%;
}

.n1 input[type=text]:focus {
    float:left;
  width:48%;
  margin:1%;
  text-align:center;
    font-size:1.5em;
   font-family: 'Bangers', cursive;
    padding: 3%;
}

.n1{
  float:left;
  width:100%;
  margin-left:2%;;
}

.op{
  width:100%;
  margin-left:3.2%;;
}

select{
  float:left;
  width:60%;
  margin-right:2%;
   font-family: 'Bangers', cursive;
  font-size:1.3em;
  text-align: center;
  padding:2%;
}

option{
  font-size:1.5em;
   font-family: 'Bangers', cursive;
   text-align: center;
   padding:2%;
}

button{
  width:35%;
  background-color:#44bd32;
  border:0px;
  color:white;
  font-family: 'Bangers', cursive;
  font-size:1.5em;
  padding:2%;
}
  

  @media only screen and (max-width: 1227px) {
  .n1 [type='text']{
  float:left;
  width:94%;
  margin:1%;
  text-align:center;
    font-size:1.5em;
   font-family: 'Bangers', cursive;
   padding: 3%;
}

.n1 input[type=text]:focus {
    float:left;
  width:94%;
  margin:1%;
  text-align:center;
    font-size:1.5em;
   font-family: 'Bangers', cursive;
    padding: 3%;
}
}

</style>



<div class="esqueleto">
<div class="topo">
 <?php 
  if($SemNumero == 'invalido'){
  echo 'Por favor insira um numero valido';
    }else
    echo $total ;
     ?>
</div>

<div class="conteudo">
  <form method="POST" action="./calc_pag.php">
   
   <div class="n1">
     <input type="text" name="txtv1" placeholder=" Valor 1">
     <input type="text" name="txtv2"  placeholder=" Valor 2">
   </div>


<div class="op">
<select name="op" >
  <option>Somar</option>
  <option>Subtrair</option>
  <option>Dividir</option>
  <option>Mutiplicar</option>
  <option>Imc corporal</option>
</select>
<button type="submit" >C a l c u l a r</button>
</div>
</form>
</div>
</div>
