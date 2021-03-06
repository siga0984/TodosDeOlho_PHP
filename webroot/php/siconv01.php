﻿<html lang="pt-BR">
<head>
<?php require_once('headmetas.php'); ?>
<style>
input, textarea {
  max-width:100%;
}
h1, h3 {
  text-align:center;
}
p {
  text-align:center;
  font-size: 100%;
}
a, select, input {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
    font-size: 130%;
}
</style>
<script type = 'text/javascript'>
function Voltar()
{
	window.open("/php/siconvmun.php?UF=<%=cUf%>","_self");
}
function Propostas()
{
	window.open("/php/siconv02.php?MUN=<%=cIDMun%>","_self");
}
function Conveniados()
{   
  alert('*** Em Construção ***');
	//window.open("/php/siconv06.php?MUN=<%=cIDMun%>","_self");
}
function Home()
{
	window.open("/","_self");
}
function ShowHelp()
{
   var helpdiv = window.document.getElementById('_HELP');
   var showhelpbtn = window.document.getElementById('_SHOWHELP');
   var hidehelpbtn = window.document.getElementById('_HIDEHELP');
   helpdiv.style.display = 'inline';
   showhelpbtn.style.display = 'none'
   hidehelpbtn.style.display = 'inline';
   window.scrollTo(0,document.body.scrollHeight);
}
function HideHelp()
{
   var helpdiv = window.document.getElementById('_HELP');
   var showhelpbtn = window.document.getElementById('_SHOWHELP');
   var hidehelpbtn = window.document.getElementById('_HIDEHELP');
   helpdiv.style.display = 'none'
   showhelpbtn.style.display = 'inline';
   hidehelpbtn.style.display = 'none'
}
</script>
</head>
<body onload="javascript:HideHelp();">
<?php require_once('ptitle.php'); ?>
<h3><%=Capital(cMunic)%> / <%=cUf%></h3>
<p>A partir deste ponto, estão disponíveis as consultas relacionadas ao 
município de <b><%=Capital(cMunic)%></b>, no Estado <b><%=UFNome(cUf)%></b>.</p> 
<p>&nbsp;</p>
<p><input type="button" value="Propostas e Convênios" onclick="javascript:Propostas()"></p>
<p>
<input type="button" value="Voltar" onclick="javascript:Voltar()">
&nbsp;&nbsp;&nbsp;
<input type="button" value="Retornar ao Início" onclick="javascript:Home()">
</p>
<p><span id="_SHOWHELP">
<input type="button" value="Ajuda" onclick="javascript:ShowHelp();">
&nbsp;&nbsp;&nbsp;
</span>
</p>
<div id="_HELP" style="display: none">
<hr>
<h3>Ajuda</h3>
<p>Na consulta de <b>Propostas e Convênios</b>, você têm acesso a uma lista de órgãos 
do Governo para os quais foram feitas propostas de uso de verba da União dos Estados
para este município, e a partir de um órgao escolhido, acessar as propostas e convênios
firmados para o órgão em questão com mais detalhes.</p>
<p>Na consulta de <b>Conveniados</b>, partimos de uma lista de endidades particulares 
de prestação de serviços do município, que participaram de convênios para o município, 
e ao escolher uma endidade, podemos visualizar o resumo de todos os convênios que
ela participou, acessando os detalhes de cada convêmio.</p>
<hr>
</div>
<p>
<span id="_HIDEHELP" style="display: none">
<input type="button" value="Ocultar Ajuda" onclick="javascript:HideHelp();">
&nbsp;&nbsp;&nbsp;
</span>
</p>
<br>
<?php require_once('footer.php'); ?>
</body>
<script>
</script>
</html>
